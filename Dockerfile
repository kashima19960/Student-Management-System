FROM php:5.5.38-apache

# 安装 MySQL 扩展
RUN docker-php-ext-install mysql mysqli pdo_mysql

# 设置字符集
RUN echo "date.timezone = Asia/Shanghai" > /usr/local/etc/php/conf.d/timezone.ini
RUN echo "default_charset = GBK" > /usr/local/etc/php/conf.d/charset.ini

# 修改 PHP 配置
RUN { \
    echo 'display_errors = On'; \
    echo 'error_reporting = E_ALL'; \
    echo 'memory_limit = 128M'; \
    echo 'upload_max_filesize = 20M'; \
    echo 'post_max_size = 20M'; \
} > /usr/local/etc/php/conf.d/php-custom.ini

# 配置 Apache
RUN a2enmod rewrite

# 清理
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE 80