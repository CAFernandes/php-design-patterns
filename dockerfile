FROM composer:latest

COPY . /app
WORKDIR /app

EXPOSE 8080

CMD bash -c "composer dump-autoload && php -S 0.0.0.0:8080"
