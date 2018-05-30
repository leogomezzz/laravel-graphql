FROM php:7.2-fpm-stretch
MAINTAINER Leonardo Gomes <leonardo.delfica@gmail.com>

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libpq-dev libldap2-dev mysql-client zip git wget\
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pcntl

#Install composer
#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php composer-setup.php
#RUN php -r "unlink('composer-setup.php');"
#RUN mv composer.phar /usr/local/bin/composer

RUN mkdir -p /var/www/html/

WORKDIR /var/www/html/

#Copy the content to the working directory, commentend because it's using volumes in docker-compose.yml
#COPY . /var/www/html/

#RUN composer install --no-dev

#Expose 900 to NGINX
EXPOSE 9000
