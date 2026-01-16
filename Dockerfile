FROM php:8.1-apache

# Instalar extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo pdo_mysql zip

# Habilitar mod_rewrite y mod_headers de Apache
RUN a2enmod rewrite headers

# Copiar configuración personalizada de Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Configurar php.ini
RUN echo "upload_max_filesize = 20M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size = 20M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/uploads.ini

# Copiar archivos de la aplicación
COPY . /var/www/html/

# Crear directorios necesarios si no existen y establecer permisos
RUN mkdir -p /var/www/html/application/cache \
    /var/www/html/application/logs \
    /var/www/html/uploads \
    /var/www/html/excel \
    /var/www/html/descarga \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 777 /var/www/html/application/cache \
    && chmod -R 777 /var/www/html/application/logs \
    && chmod -R 777 /var/www/html/uploads \
    && chmod -R 777 /var/www/html/excel \
    && chmod -R 777 /var/www/html/descarga

# Exponer puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
