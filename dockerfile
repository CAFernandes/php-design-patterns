FROM php

COPY . /usr/src/myapp

WORKDIR /usr/src/myapp

EXPOSE 8080

CMD [ "php", "-S", "0.0.0.0:8080" ]
