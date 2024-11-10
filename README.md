# Proyect_PHP_CRUD

Este proyecto es una aplicación básica de CRUD (Crear, Leer, Actualizar, Eliminar) desarrollada en PHP utilizando un patrón de diseño MVC (Modelo-Vista-Controlador). La aplicación permite la gestión de usuarios, ciudades y títulos de trabajo.

## Características

- **Gestión de usuarios**: Crear, editar, eliminar y ver detalles de los usuarios.
- **Gestión de ciudades**: Crear, editar, eliminar y ver detalles de las ciudades.
- **Gestión de títulos de trabajo**: Crear, editar, eliminar y ver detalles de los títulos de trabajo.
- **Interfaz de usuario simple**: Utiliza Bootstrap para darle estilo a la interfaz.

## Estructura del Proyecto

- `config/`: Contiene configuraciones globales.
- `controllers/`: Incluye controladores para manejar la lógica de la aplicación.
- `models/`: Contiene los modelos que interactúan con la base de datos.
- `views/`: Contiene las vistas (HTML) que muestran la interfaz al usuario.
- `public/`: Carpeta accesible públicamente, que incluye los archivos index y otros recursos.
- `routes.php`: Define las rutas de la aplicación.
- `ScriptSQL/`: Contiene los archivos SQL necesarios para la base de datos del proyecto.

## Instalación

1. Clona el repositorio en tu servidor local:
    ```bash
    git clone https://github.com/FelipeMogollon1/php-mvc-crud.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd Proyect_PHP_CRUD
    ```

3. Configura tu base de datos en `config/database.php`.

4. Ejecuta el script SQL ubicado en `ScriptSQL/companydb.sql` para crear la base de datos y sus tablas.

5. Asegúrate de tener configurado el servidor web (como XAMPP) apuntando al directorio `public/` como raíz.

## Uso

- Abre el navegador y ve a la URL principal del proyecto, por ejemplo:
    ```bash
    http://localhost/Proyect_PHP_CRUD/public/
    ```

## Dependencias

- PHP 7.4 o superior
- Bootstrap 5.3.3
- Servidor de base de datos compatible con SQL (MySQL recomendado)

## Contribuciones

Las contribuciones son bienvenidas. Para contribuir, sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -m 'Agregar nueva funcionalidad'`).
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.
