FROM php:8.0-apache

ENV DEBIAN_FRONTEND=noninteractive

# 1. System packages (Added libsqlite3-dev for pdo_sqlite)
RUN apt-get update -y && \
    apt-get install -y --no-install-recommends --fix-missing \
    ca-certificates \
    libcurl4-openssl-dev \
    libzip-dev \
    default-libmysqlclient-dev \
    libsqlite3-dev \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# 2. PHP Extensions (Removed redundant 'pdo' & 'curl', kept only what needs compiling)
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo_sqlite \
    zip \
    mbstring \
    fileinfo

# 3. Apache Modules
RUN a2enmod rewrite proxy proxy_http headers ssl mime env expires

# 4. Apache Configuration
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

WORKDIR /var/www/html
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 80
CMD ["apache2-foreground"]
