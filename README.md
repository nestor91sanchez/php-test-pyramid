# Generador de Pirámides de Números en PHP

Este script genera una pirámide de números en PHP según un valor ingresado por el usuario. 
Utiliza Docker y Docker Compose para configurar y ejecutar el entorno, si cuentas con PHP instalado en tu máquina local no es necesario instalar Docker.

## Instalaciones recomendadas

- Docker
- Docker Compose

## Archivos del Proyecto

- `Dockerfile`: Define la imagen de Docker para ejecutar PHP.
- `docker-compose.yml`: Configura y ejecuta el contenedor de Docker.
- `index.php`: Script PHP que genera la pirámide de números.

## Paso a Paso

### 1. Clonar el Repositorio

Clona este repositorio en tu máquina local.

```sh
git clone git@github.com:nestor91sanchez/php-test-pyramid.git
cd php-test-pyramid
```
En caso de que tengas instalado PHP y no quieras usar Docker en tu maquina puedes obviar los puntos #2 #3 y dirigirte a la sección final (**ejecutar sin docker).

### 2. Ejecutar Docker

Abre una terminal en el directorio donde se encuentran el proyecto y ejecuta el siguiente comando para construir y correr el contenedor con Docker Compose:


```sh
docker-compose up --build
```

### 3. Ejecutar Script PHP con Docker

Una vez terminado de construir e instalar el container de Docker, ejecutamos el script PHP directamente en el container previamente creado.

```sh
docker-compose run php php index.php 1
```
Esto ejecutará el script PHP con el valor **1** como entrada e imprimira en pantalla la piramide generada.

###

### ** Ejecutar script sin docker:

Abre una terminal en el directorio donde se encuentran el proyecto y ejecuta el comando directamente desde la terminal

```sh
php index.php 1
```
###

### Notas
Asegúrate de tener Docker y Docker Compose instalados en tu máquina.
Si tienes algún problema, revisa la configuración y los permisos de los archivos y directorios.

#### ¡Es todo! Ahora deberías poder generar la pirámide de números.

