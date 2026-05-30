FROM php:8.2-apache

# Instalar PostgreSQL driver
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Activar mod_rewrite (opcional pero recomendado)
RUN a2enmod rewrite

# Cambiar DocumentRoot a /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copiar todo el proyecto
COPY . /var/www/html

EXPOSE 80
