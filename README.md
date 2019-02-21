# Dinning Room in Laravel

Implementación de API.

## Requerimientos

- Base de datos relacional
- PHP 7.2
- Apache
- Composer

## Instalación

Para la instalación se requiere ejecutar los siguientes comandos:

- Si es la primera vez que ejecuta

```console
php artisan migrate
php artisan db:seed
```
- Cuando es necesario reestructura las migraciones y datos de prueba

```console
php artisan migrate:refresh --seed
```
