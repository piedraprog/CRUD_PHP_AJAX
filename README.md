PROYECTO BASE DE DATOS 3 

PROYECTO V 1.0

PROYECTO BAJO PHP7, AJAX Y POSTGRADESQL  

---------- PASOS PARA LA INSTALACION Y QUE EL PROYECTO FUNCIONE ---------

1- en el caso de no tener el XAMPP O cualquier otro servidor local lo puedes descargar aqui 

link : https://www.apachefriends.org/es/download.html

    1.2- una vez descargado instalar el xampp:

        aqui un tutorial de como instarlo 
        link: https://www.mclibre.org/consultar/php/otros/xampp-instalacion-windows.html

2- en el caso de no tener postgradeSQL no importa la version para el proyecto se utilizo la version 10 y 9.6, igual lo puede descargar aqui

    link: https://www.enterprisedb.com/downloads/postgres-postgresql-downloads

    2.2- tutorial para intalarlo:    
        link: https://www.solvetic.com/tutoriales/article/7676-como-instalar-postgresql-en-windows-10/


2- al instalar el xampp buscamos la carpeta que contiene el xampp en nuestro disco C o la ruta donde lo instalamos y buscamos la carpeta (htdocs) dentro de ella  descomprimimos con el proyecto.



------------------- CREAR LA BASE DE DATOS -------------------------

3- para la creacion de la base de datos hay dos maneras las cuales se explicaran a continuación:

    3.1- la primera manera es hacerlo directo con postgrade, para esto abriremos nuestro postgrade una vez inicie nos vamos a la seccion de database y creamos una llamada "gloria_deportiva" una vez creada le damos click derecho sobre el nombre de nuestra base de datos y le damos a la opcion que dice CREATE script  ALLI SE VA A DESPLEGAR UNA VENTANA PARA AJECUCION DE COMANDOS SQL aqui hay dos opciones.

        3.1.1- nos vamos a donde hemos descomprimido el proyecto y buscamos en la carpeta con nombre db, veremos un documento llamado "scritp_gloria_deportiva.sql" o podemos seguir esta ruta "C:\xampp\htdocs\proyecto-bd3\db\scritp_gloria_deportiva.sql" al abrir nos va a copiar todo el documento en la ventana de query, y le damos a f5 o en el boton de play EXECUTE QUERY. Una vez hecho esto nso deberia crear todas las tablas, y ya podria entrar en la pagina llamada "admin_interfaz.php"

        3.2- la segunda manera es seguir el punto 3.1.1 hasta la parte donde copiamos el archivo, para esto tenemos que ya haber confirgurado el archivo ubicado en "C:\xampp\htdocs\proyecto-bd3\php\conexion.php"
        con las credenciales y la informacion que nosotros tengamos en nuestro servidor, luego de esto podemos entrar a la pagina llamada "admin_interfaz.php", y seguir los pasos que aparecen en la seccion de pasos.

        3.3- esto es solo si da algun error al intentar reconocer algun comando de pg_query o algun comando, de postgrade, entrar a este link: https://jhmarcanov.wordpress.com/2019/05/16/primera-entrada-del-blog/
         

    nota: la base de datos ya viene con datos de prueba preinsertador.

4- una vez ya tengamos nuestra base de datos creada, escribimos esta direccion en el buscador (C:\xampp\htdocs\proyecto-bd3\admin_interfaz.php), y ya estaremos en la pagina del proyecto.





------------------------------------------------------------
VERSION 1.0 PROYECTO ATLETAS BASE DE DATOS 3

NOTAS ACTUALIZACION: 16/8/2020

1- falta la funcion para borrar la seccion de deportes o solo el deporte no tengo muy claro a que debe afectar 
2- falta toda la SECCION DE EDICION DE DE REGISTROS COMPELTO DESD ATLETAS HASTA PAISES
3- mejorar la distribucion de los datos en la seccion de paises y la de deportes 
4- talvez agregar un sistemas de credenciales con un login 

