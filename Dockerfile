# Usar una imagen base de PHP
FROM php:8.1-cli

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /usr/src/app

# Copiar el script PHP al contenedor
COPY index.php .