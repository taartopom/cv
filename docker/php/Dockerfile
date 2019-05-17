FROM php:7.1-fpm
RUN apt-get update && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
		libpng-dev \
		pkg-config \
		libcurl4-openssl-dev \
		pkg-config \
		libssl-dev \
		libmcrypt-dev \
	&& docker-php-ext-install -j$(nproc) iconv mysqli pdo_mysql mcrypt \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd
