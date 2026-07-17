FROM php:8.0-apache

# Install system dependencies & compile PHP extensions
RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install -j$(nproc) \
    curl \
    pdo \
    pdo_mysql \
    pdo_sqlite \
    zip \
    mbstring \
    fileinfo \
    && a2enmod rewrite proxy proxy_http headers ssl mime env expires \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Apache configuration overrides
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html/

# Fix permissions for Apache
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \; \
    && chmod 600 /var/www/html/.htaccess

# Expose HTTP (Render handles TLS termination at the edge)
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]