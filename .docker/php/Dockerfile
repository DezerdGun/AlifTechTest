FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    curl

RUN mkdir -p /root/.ssh
WORKDIR /root/.ssh

WORKDIR /tmp
COPY composer-setup.php .
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm composer-setup.php
RUN docker-php-ext-configure gd --with-freetype
RUN docker-php-ext-install zip pdo_mysql gd
COPY cmd.sh .
RUN chmod u+x cmd.sh

WORKDIR /var/www/html
CMD ["bash","/tmp/cmd.sh"]
