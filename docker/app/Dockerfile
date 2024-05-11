FROM php:8.2-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY composer.json ./

RUN apt-get update -y

RUN docker-php-ext-install mysqli pdo_mysql

RUN apt-get install -y zip unzip

RUN composer install

COPY . .

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
