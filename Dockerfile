FROM php:8.1-fpm

RUN apt-get update
RUN apt-get install -y git zip libonig-dev libxml2-dev wget vim
RUN docker-php-ext-install mysqli mbstring pdo pdo_mysql xml pcntl

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY build/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini.new
RUN cat /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini >> /usr/local/etc/php/conf.d/xdebug.ini.new \
    && mv /usr/local/etc/php/conf.d/xdebug.ini.new /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

ARG user
ARG uid

RUN useradd -m -u $uid $user

# Install Composer
##################
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN echo "alias ll='ls -lrat'" >> /root/.bashrc
RUN echo "alias ll='ls -lrat'" >> /home/$user/.bashrc
RUN echo "export LS_OPTIONS='--color=auto'" >> /root/.bashrc
RUN echo "export LS_OPTIONS='--color=auto'" >> /home/$user/.bashrc
RUN echo "alias ls='ls \$LS_OPTIONS'" >> /root/.bashrc
RUN echo "alias ls='ls \$LS_OPTIONS'" >> /home/$user/.bashrc

WORKDIR /code


