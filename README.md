# CRUD Productos

Aplicación web desarrollada con Laravel para gestionar un catálogo de productos. Permite listar, crear, editar, ver y eliminar productos con validación en el backend.

## Tecnologías

- PHP 8+
- Laravel 11
- Bootstrap 5
- MySQL / SQLite

## Estructura del proyecto

```
app/
├── Http/
│   ├── Controllers/
│   │   └── ProductoController.php   # Controlador resource CRUD
│   └── Requests/
│       └── ProductoRequest.php      # Validaciones del formulario
└── Models/
    └── Producto.php                 # Modelo Eloquent

database/
├── migrations/
│   └── ..._create_productos_table.php
└── seeders/
    └── ProductoSeeder.php           # 8 productos de prueba

resources/views/
├── layouts/
│   └── app.blade.php               # Layout principal con navbar
└── productos/
    ├── _form.blade.php             # Formulario reutilizable
    ├── index.blade.php             # Lista de productos
    ├── create.blade.php            # Formulario de creación
    ├── edit.blade.php              # Formulario de edición
    └── show.blade.php              # Detalle de producto
```

## Campos del modelo Producto

| Campo       | Tipo            | Descripción                          |
|-------------|-----------------|--------------------------------------|
| id          | bigint          | Clave primaria autoincremental       |
| nombre      | string          | Solo letras y espacios, mín. 3 chars |
| cantidad    | integer         | Entre 0 y 100,000                    |
| precio      | decimal(10,2)   | Entre 0 y 999,999.99                 |
| calidad     | string          | Baja, Media, Alta o Premium          |
| descripcion | text            | Entre 10 y 1,000 caracteres          |

## Instalación

```bash
# 1. Clonar el repositorio
git clone <url-del-repositorio>
cd crud-productos

# 2. Instalar dependencias
composer install

# 3. Copiar variables de entorno
cp .env.example .env

# 4. Generar clave de aplicación
php artisan key:generate

# 5. Configurar base de datos en .env
DB_CONNECTION=mysql
DB_DATABASE=crud_productos
DB_USERNAME=root
DB_PASSWORD=

# 6. Ejecutar migraciones y seeder
php artisan migrate --seed

# 7. Iniciar el servidor
php artisan serve
```

Accede en: `http://localhost:8000/productos`

## Rutas disponibles

| Método    | URI                    | Acción              |
|-----------|------------------------|---------------------|
| GET       | /productos             | Listar productos    |
| GET       | /productos/create      | Formulario crear    |
| POST      | /productos             | Guardar producto    |
| GET       | /productos/{id}        | Ver producto        |
| GET       | /productos/{id}/edit   | Formulario editar   |
| PUT/PATCH | /productos/{id}        | Actualizar producto |
| DELETE    | /productos/{id}        | Eliminar producto   |

## Seeder

El seeder incluye 8 productos de prueba con distintas calidades y precios. Para repoblar la base de datos:

```bash
php artisan migrate:fresh --seed
```
