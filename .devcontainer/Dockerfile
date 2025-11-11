FROM php:8.2-apache

# Installe les dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libzip-dev zip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install intl pdo_mysql opcache zip gd

# Active mod_rewrite pour Symfony
RUN a2enmod rewrite

# Installe Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configure le répertoire de travail
WORKDIR /var/www/html

# Copie le code (le montage se fera dans docker-compose mais utile pour build initial)
COPY . .

# Configurer Apache pour Symfony
COPY ./apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Expose le port Apache
EXPOSE 8080
