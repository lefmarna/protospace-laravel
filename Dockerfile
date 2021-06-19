FROM php:7.4-fpm

RUN apt-get update \
  && apt-get install -y \
  git \
  nodejs \
  npm \
  libzip-dev \
  unzip \
  vim \
  # PHP の拡張機能をインストール
  && docker-php-ext-install \
  pdo_mysql \
  zip \
  # composer をインストール
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer \
  # composer を使って laravel をインストール
  && composer global require "laravel/installer=~1.1"
ENV PATH ~/.composer/vendor/bin:$PATH
WORKDIR /var/www/html/
