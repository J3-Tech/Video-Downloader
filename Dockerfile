FROM ghcr.io/j3-tech/docker-php-dev:main-8.2-fpm

RUN apt update && \
    apt install python3 -y
