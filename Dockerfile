FROM php:8.4-apache

# CRÍTICO: desactivar TODOS los MPMs PRIMERO (before any other apache commands)
RUN rm -f /etc/apache2/mods-enabled/mpm_*

# Instalar PostgreSQL driver
RUN apt-get update && apt-get install -y libpq-dev \
 && docker-php-ext-install pdo pdo_pgsql pgsql

# Activar rewrite
RUN a2enmod rewrite

# Activar SOLO prefork
RUN a2enmod mpm_prefork

# Configurar Apache para usar /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html

EXPOSE 80
