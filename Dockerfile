FROM debian:buster

ENV AUTOINDEX on

RUN apt-get update && apt-get install -y \
	wget \
	nginx \
	mariadb-server \
	mariadb-client \
	php7.3 \
	php7.3-fpm \
	php7.3-mysql \
	php-common \
	php7.3-cli \
	php7.3-common \
	php7.3-json \
	php7.3-opcache \
	php7.3-readline \
	php-json \
	php-mbstring \
	php-curl \
	php-gd \
	php-intl \
	php-mbstring \
	php-soap \
	php-xml \
	php-xmlrpc \
	php-zip


COPY ./srcs/config.inc.php ./
COPY ./srcs/localhost.pem ./
COPY ./srcs/localhost.key ./
COPY ./srcs/default ./
COPY ./srcs/wp-config.php ./
COPY ./srcs/index.php ./
COPY ./srcs/exec.sh ./

EXPOSE 80
EXPOSE 443

CMD bash ./exec.sh && bash
