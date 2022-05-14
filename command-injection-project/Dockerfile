FROM php:7-apache
COPY ./www/html /var/www/html/
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev \
  && docker-php-ext-install pdo_mysql mysqli gd iconv\
  && apt-get install -y ldnsutils\
  && apt-get install -y iputils-ping\
  && apt-get install -y dnsutils\
  && apt-get install -y netcat\
  && apt-get install wget