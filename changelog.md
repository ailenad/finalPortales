# Release Notes 📝

## 08/12/2023
Inicio del proyecto
* Planificación inicial.
* Instalación de Composer.
* Base de datos: 
 - Diseño inicial de la base de datos con sus relaciones 
 - Migración para cada tabla con sus columnas
 - Tabla users (id, email, avatar, nombre, password , role)
 - Tabla profiles (user_id, first_name, last_name, avatar)
 - Tabla articles (profile_id, content, image)
 - Tabla categories (name)
 - Tabla post_category(article_id, category_id)
* Creación de modelos .
* Implementación de seeders y factories.
* Desarrollo de controladores.

## 09/12/2023
* Autenticación para el acceso segun roles.
* Registro y login de rol editor y guest.
* Usuarios de rol guest pueden visualizar y modificar sus datos.
* Mejoras en el diseño del sitio.

## 11/12/2023
- Mejoras en la estructura
    * Creación de nuevos controladores.
    * Mejoras en la definición y gestión rutas.

## 12/12/2023

* Implementación de validación de formularios.
* Creacion de migracion para gestionar avatar.
* Modificaciones en los seeders para que carguen imágenes.

## 14/12/2023
* Incorporación de página para visualizar servicios contratados por usuarios con rol guest.
* ABM de articulos y servicios por parte de role editor.

## 15/12/2023 
* Listado de usuarios y sus servicios contratados para roles de editor.
* Creación de página de estadísticas que muestra la cantidad de usuarios nuevos por día.


## 18/12/2023

* Mejoras en las funcionalidades de servicios.
* Corrección de errores.
* Mejoras en la estética del sitio
* Orden a la base de datos.
