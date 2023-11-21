# Proyecto MVC con Phroute y Eloquent

Este proyecto, aunque muy básico, el objetivo es resaltar las buenas practicas de programación como el **patrón mvc**. Además de una libria de routing como phroute y un orm 
llamado eloquent


## Iniciando...

Para hacer uso del proyecto, primero debes clonar el repositorio. Una vez clonado, sigue estos pasos:

1. Crear el archivo **.env** en la raíz del proyecto donde debes poner las variables de conexión
   ```
    DB_HOST=localhost
    DB_USER=root
    DB_PASS=
    DB_DBNAME=contacts
   ```
   Estás son mis credenciales. Usa las tuyas para poderte conectar correctamente a la base de datos.

2. Ahora, debes instalar los paquetes con composer:

   ```
    composer require
   ```

  Esto descargará: ``` Eloquent ```, ``` Dotenv ``` y ``` Phroute ```
   
