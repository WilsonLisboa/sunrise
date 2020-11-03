# sunrise

# hace un tema ligth y otro dark -- ligth letras negras fondo blanco y Dark letras blancas y fondo #1f1f1f o Gris claro /
# en Dark dejar barra superior en blanco para hacer contraste ver muestra en https://magdeleine.co/browse/
# ventanas emergentes sweetalert 2 y ventanas para hacer modificaciones o inserciones de datos en formularios
# desarrollar un sistema web empresarial por pais, donde selecciones tu pais y cargue tus leyes e impuestos - sistema de pago obviamente

<!-- -------------------------------------------------------------------------------- -->
++ SISTEMA DE GESTION EMPRESARIAL SUNRISE

# Datos del Software

- Sistema que utiliza arquitectura de software MVC modelo vista controlador
- Web totalmente Resposive

# Seguridad

-   Manejo de URL por el metodo $_GET donde se define una lista blanca, ver .htaccess, vistasController y vistasModels.php.
-   Encriptado BlowFish coste 10 con Salt automatica PASSWORD_DEFAULT.
-   Funciones que limpian cadenas de string con lista negras de caracteres y palabras no permitidas - Evita inyeccion de JS, MySQL y cualquier otro tipo de ataque.
-   Funciones para generar codigos aleatorios alfanumericos - se utilizan en cuentas de usuarios etc. 

# Tecnologias Utilizadas

-   Backend PHP, MySQL Server
-   Fontend HTML5, CSS, JavaScript
-   Librerias: Bootstrap, Jquery, libreria propia de AdminLTE CSS y JS, Sweet Alert 2
-   Todo el CRUD de la API se comunica usando AJAX
-   Chat con WebSocket
-   Iconos: ionIcons, FontAwsome
-   Fuentes: Googlefonts, FontAwsome
-   Entorno de desarrollo ID: Visual Studio Code
-   Servidor Web Virtual - XAMPP Apache
-   Todo el proyecto esta siendo guardado y manejado en todos sus cambios y versiones en GitHub
-   NPM para manejo de paquetes y versiones de las mismas
