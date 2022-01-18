FROM ubuntu:16.04

# Maintainer
MAINTAINER Caio Fernandes "fcaioalberto@gmail.com"

ENV NGINX_VERSION 1.9.3-1~jessie

RUN apt-get update && apt-get install -y nginx php7.0-fpm curl git && apt-get clean

# NGINX
RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log
VOLUME ["/var/cache/nginx"]
RUN rm /etc/nginx/sites-available/default
ADD ./default /etc/nginx/sites-available/default

# COMPOSER
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && rm composer-setup.php && mv composer.phar /usr/local/bin/composer && chmod a+x /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# BUILD
WORKDIR /var/www/html
RUN git clone https://github.com/CAFernandes/php-desing-patterns.git

RUN apt update
RUN apt install software-properties-common apt-transport-https wget
RUN wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | sudo apt-key add -
RUN add-apt-repository "deb [arch=amd64] https://packages.microsoft.com/repos/vscode stable main"
RUN apt install code
RUN apt update && apt upgrade

EXPOSE 80 443
CMD service php7.0-fpm start && nginx -g "daemon off;"
