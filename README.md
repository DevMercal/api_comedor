## Sobre la API REST del Comedor

Esta API REST esta desarrollada en **Laravel 12**

- **MYSQL**.
- **ORM**.

## Instruccion para levantar el proyecto.

- **Clonar el Repositorio de GitLab**
    - git clone http://10.22.8.58/developers/api_rest_comedor.git
- **Acceder a la carpeta con el siguiente comando:**
    - cd api_rest_comedor
- **Generamos una copia del archivo .env**
    - cp .env.example  .env
- **Ingresamos al archivo .env creado**
    - nano .env
- **Agregamos las credenciales de la base de datos a las siguientes variables**
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD
- **Creamos las siguientes migraciones de la base de datos, con los siguiente comandos:**
    - php artisan migrate --path=database/migrations/2025_06_23_224511_create_gerencias_table.php
    - php artisan migrate --path=database/migrations/2025_06_23_225446_create_metodo_pagos_table.php
    - php artisan migrate --path=database/migrations/2025_06_24_193930_create_empleados_table.php
- **Una vez creada las migraciones lanzamos el siguiente comando:**
    - php artisan migrate
    

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

