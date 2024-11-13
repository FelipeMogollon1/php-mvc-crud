![Escudo de la UTP](https://www.utp.edu.co/assets/img/escudos/identificadorNew.png)

# Base de Datos 
### UTP - Universidad Tecnológica de Pereira

Ivan Alexander Laverde



## Proyecto

Este proyecto es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) desarrollada en PHP utilizando el patrón de diseño MVC (Modelo-Vista-Controlador). Permite la gestión de usuarios, ciudades y títulos de trabajo con una interfaz simple y eficiente. Este repositorio proporciona una base sólida para aplicaciones web basadas en PHP y MVC.

## Características

- **Gestión de Usuarios**: Crea, edita, elimina y visualiza detalles de los usuarios.
- **Gestión de Ciudades**: Crea, edita, elimina y visualiza detalles de las ciudades.
- **Gestión de Títulos de Trabajo**: Crea, edita, elimina y visualiza detalles de los títulos de trabajo.
- **Interfaz de Usuario Intuitiva**: La interfaz está construida con [Bootstrap 5.3.3](https://getbootstrap.com/) para proporcionar un diseño limpio y funcional.
- **Arquitectura MVC**: El proyecto sigue el patrón de diseño Modelo-Vista-Controlador para facilitar el mantenimiento y la escalabilidad.

## Estructura del Proyecto

La estructura del proyecto está organizada para facilitar su comprensión y mantenimiento:

- **`config/`**: Contiene configuraciones globales, como la configuración de la base de datos.
- **`controllers/`**: Incluye los controladores que manejan la lógica de la aplicación y las interacciones entre el modelo y la vista.
- **`models/`**: Contiene los modelos que interactúan con la base de datos y gestionan la lógica de negocios.
- **`views/`**: Contiene las vistas (archivos HTML y PHP) que presentan la interfaz al usuario.
- **`public/`**: Directorio accesible públicamente que contiene el archivo `index.php` y recursos estáticos como imágenes, hojas de estilo y scripts.
- **`routes.php`**: Archivo que define las rutas y las asignaciones de controladores.
- **`ScriptSQL/`**: Contiene los scripts SQL necesarios para crear la base de datos y las tablas en el servidor de base de datos.

## Instalación

### Requisitos Previos

- PHP 7.4 o superior
- Un servidor web (por ejemplo, Apache con XAMPP)
- MySQL o cualquier otro servidor compatible con SQL

### Pasos de Instalación

1. **Clonar el Repositorio**:
   Clona el repositorio en tu servidor local:
    ```bash
    git clone https://github.com/FelipeMogollon1/php-mvc-crud.git
    ```

2. **Navegar al Directorio del Proyecto**:
    ```bash
    cd php-mvc-crud
    ```

3. **Configurar la Base de Datos**:
   Abre el archivo `config/database.php` y configura tus credenciales de base de datos (usuario, contraseña, nombre de la base de datos).

4. **Crear la Base de Datos**:
   Ejecuta el script SQL ubicado en `ScriptSQL/companydb.sql` para crear la base de datos y sus tablas:
    ```bash
    mysql -u root -p < ScriptSQL/companydb.sql
    ```

5. **Configurar el Servidor Web**:
   Asegúrate de que tu servidor web (como XAMPP) esté apuntando al directorio `public/` como la raíz del documento.

6. **Acceder a la Aplicación**:
   Abre tu navegador y visita la URL principal del proyecto:
    ```bash
    http://localhost/php-mvc-crud/public/
    ```

## Uso

Una vez que hayas instalado y configurado el proyecto, podrás acceder a la aplicación a través del navegador. Las funcionalidades incluyen:

- **Gestión de usuarios**: Crear, editar, eliminar y ver detalles de los usuarios.
- **Gestión de ciudades**: Crear, editar, eliminar y ver detalles de las ciudades.
- **Gestión de títulos de trabajo**: Crear, editar, eliminar y ver detalles de los títulos de trabajo.

## Dependencias

El proyecto tiene las siguientes dependencias:

- **PHP** 7.4 o superior
- **Bootstrap** 5.3.3: Framework CSS utilizado para el diseño responsivo y los componentes de la interfaz de usuario.
- **MySQL** (o cualquier servidor SQL compatible): Se utiliza para gestionar los datos de usuarios, ciudades y títulos de trabajo.

## Contribuciones

Las contribuciones son bienvenidas. Para contribuir al proyecto, sigue estos pasos:

1. Haz un **fork** del repositorio.
2. Crea una nueva rama para tus cambios:
    ```bash
    git checkout -b feature/nueva-funcionalidad
    ```
3. Realiza tus cambios y haz commit:
    ```bash
    git commit -m 'Agregar nueva funcionalidad'
    ```
4. Sube tus cambios a tu repositorio remoto:
    ```bash
    git push origin feature/nueva-funcionalidad
    ```
5. Abre un **Pull Request** para revisar tus cambios.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](LICENSE). Para más detalles, consulta el archivo [LICENSE](LICENSE).

## Contacto

Si tienes alguna pregunta o sugerencia sobre el proyecto, no dudes en contactarme a través de [mi perfil de GitHub](https://github.com/FelipeMogollon1).
