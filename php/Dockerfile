FROM php:7.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
COPY  ./php/breizhsecu /var/www/html/
WORKDIR /var/www/html
RUN chmod -R 755 /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
