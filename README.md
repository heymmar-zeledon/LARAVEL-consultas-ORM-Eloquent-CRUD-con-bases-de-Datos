Nota Importante: El archivo vendor de este proyecto no se logro subir por lo tanto debe de iniciar un nuevo proyecto laravel y agregar los siguientes componentes:
-Laravel UI
-Laravel Collective.
-Livewire
-Bootstrap
Puede consultar en internet como agregar tales componentes a su proyecto.

Una vez realizado eso Copie las siguientes carpetas de este proyecto:
-App
-Bootstrap
-config
-database
-public
-resources
-routes
y luego pegarlos y reemplazar las carpetas existente de su nuevo proyecto nuevo.

Se debe de crear la Base de datos en PhpMyAdmin mediante el servidor Xampp.
Ejecute Xampp y habilite el Apache + MySQL
abra en su navegador PhpMyAdmin.
Y cree la Base de Datos
Por defecto mi base de Datos se llama universidaddb_v2 si gusta creela con este mismo nombre.
Por ultimo edite el archivo .env q se encuentra en su proyecto nuevo.
Y agregue el mismo nombre de la base de datos que creo en PhpMyAdmin en el campo Database del archivo .env

Quedaria de esta manera:
Database= universidaddb_v2.

guarde el cambio del archivo .env y ejecute en su terminal de VsCode si es que esta utilizando este editor "php artisan serve"
sino igualmente desde una terminal de git o de la terminal de windows situandose en la carpeta de los archivos del proyecto puede tambien ejecutar el mismo comando.
abra su navegador y en la url escriba: localhost:8000/ y listo el proyecto abrira exitosamente.
