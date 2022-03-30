FROM composer:latest

COPY . /app

WORKDIR /app

RUN composer dump-autoload

EXPOSE 8080

CMD [ "php", "-S", "0.0.0.0:8080" ]
