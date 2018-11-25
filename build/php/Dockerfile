FROM nerelohw/alpine-wkhtmltopdf:3.8-0.12.5-small as builder

FROM php:7.1-fpm-alpine3.8

RUN apk add --no-cache \
    bash \
    procps \
    xvfb \
    php7-mbstring \
    php7-pdo_mysql \
    libxml2-dev \
    php7-soap \
    libmcrypt \
    libxslt-dev \
    php7-xsl \
    php7-intl \
    libpng-dev libjpeg-turbo-dev \
    gd \
    zlib-dev \
    zip \
    freetype-dev \
    php7-bcmath \
    icu-dev \
    libstdc++ \
    libx11 \
    libxrender \
    libxext \
    libssl1.0 \
    ca-certificates \
    fontconfig \
    freetype \
    ttf-dejavu \
    ttf-droid \
    ttf-freefont \
    ttf-liberation \
    ttf-ubuntu-font-family

RUN docker-php-ext-install mbstring \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install soap \
    && docker-php-ext-install xsl \
    && docker-php-ext-install intl \
    && docker-php-ext-configure gd --with-jpeg-dir=/usr/lib \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
	&& docker-php-ext-install bcmath

#Install Composer
COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

#Install wkhtmltopdf
RUN mkdir /usr/local/bin/wkhtmltopdf
RUN chmod a+x /usr/local/bin/wkhtmltopdf

RUN touch /usr/local/bin/wkhtmltopdf.sh
RUN echo 'wkhtmltopdf "$@"' >> /usr/local/bin/wkhtmltopdf.sh
RUN chmod a+x /usr/local/bin/wkhtmltopdf.sh

COPY --from=builder /bin/wkhtmltopdf /bin/wkhtmltopdf

#Install XDebug
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.default_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo 'xdebug.idekey="PHPSTORM"' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo 'xdebug.remote_log="/var/log/xdebug/xdebug.log"' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.max_nesting_level=250" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini