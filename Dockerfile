FROM php:7.2-apache-stretch

ARG APP_KEY
ENV APP_KEY $APP_KEY
ARG DB_HOST
ENV DB_HOST $DB_HOST
ARG DB_DATABASE
ENV DB_DATABASE $DB_DATABASE
ARG DB_USERNAME
ENV DB_USERNAME $DB_USERNAME
ARG DB_PASSWORD
ENV DB_PASSWORD $DB_PASSWORD

RUN apt-get update -y && apt-get install -y openssl zip unzip git 
RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html
COPY ./public/.htaccess /var/www/html/.htaccess
WORKDIR /var/www/html
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

RUN apt-get upgrade -y \
    && curl -sL https://deb.nodesource.com/setup_8.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g react-tools 

RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan key:generate
RUN php artisan migrate
RUN chmod -R 777 storage
RUN a2enmod rewrite
RUN service apache2 restart
RUN npm install
RUN npm run dev
