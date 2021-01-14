FROM php:7.4-apache

# croftd: uncomment this line and create a custome apache2.conf if you have one you want to use
#COPY apache2.conf /etc/apache2

# install these extras
RUN docker-php-ext-install mysqli pdo pdo_mysql
