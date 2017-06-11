FROM php:5-apache

RUN apt-get update \
    && apt-get install -y \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng12-dev \
        libxslt1-dev \
        php5-gd \
        ssmtp \
        zlib1g-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install \
        gd \
        mbstring \
        mysqli \
        xsl \
        zip

RUN a2enmod rewrite

COPY www/ /var/www/html/

