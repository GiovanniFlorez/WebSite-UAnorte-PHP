FROM php:8.2-apache

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar todos los archivos del proyecto
COPY . /var/www/html/

# Permisos
RUN chown -R www-data:www-data /var/www/html

# Puerto
EXPOSE 80