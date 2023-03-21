<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;

use Youtubedl\Youtubedl;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function download(Request $request)
    {
        $url = $request->get('url');
        $youtubedl = new Youtubedl();

        $youtubedl->download($url)->execute();
    }
}
