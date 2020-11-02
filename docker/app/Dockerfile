# BaseImage
FROM php:7.3-fpm
COPY php.ini /usr/local/etc/php/

# package update & install
# Dockerは文を実行するたびにイメージのレイヤーを作成されてしまうので ; でワンライナーにする \ で次行に続く
RUN apt-get update && apt-get install -y zlib1g-dev libzip-dev mysql-common wget locales npm \
  && docker-php-ext-install zip pdo_mysql \
  && locale-gen ja_JP.UTF-8 \
  && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc \
  && wget https://dev.mysql.com/get/Downloads/MySQL-8.0/mysql-community-client-core_8.0.17-1debian10_amd64.deb \
  && dpkg -i mysql-community-client-core_8.0.17-1debian10_amd64.deb

ENV LANG ja_JP.UTF-8
ENV LC_CTYPE ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8
ENV LC_ALL ja_JP.UTF-8

# Composer install
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# composer speed up
RUN composer config -g repos.packagist composer https://packagist.jp
RUN composer global require hirak/prestissimo

WORKDIR /var/www

RUN composer global require "laravel/installer"

# ターミナル画面を見やすく変更
RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[app] \$ "' >> /root/.bashrc