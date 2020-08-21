<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Glorias Deportivas</title>

    <link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap4/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/estilo_admin_page.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">APP ATLETAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="home()" href="#">informacion general</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" onclick="atleta()">registrar atletas</a>
                            <a class="dropdown-item" onclick="extradata()">regitrar data extra</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" onclick="infoatl()">Consultar atletas</a>
                            <a class="dropdown-item" onclick="infotododep()">Consultar deporte</a>
                            <a class="dropdown-item" onclick="infotodopais()">Consultar pais</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- INFORMACION GENERAL-->
    <div id="home" class="home">
        <br>
        <br>
        <div class="info-empresa" id="info-empresa">
            <section class="infogeneral">
                <h2>¿Para que sirve la Web?</h2>
                <p>Este es un proyecto de la materia Bases de datos 3, la web sirve para el manejo de una base de datos dada.</p>
                <br>
                <img src="img/Modelo_concept_al_BD_Atletas.png" alt="imagen_base_datos">
                <br>
                <h2>¿Como Funciona?</h2>
                <p>Esta hecha con base en un modelo vista controlador, esta desarrollada bajo HTML 5-CSS3 para la vista JS con el framework AJAX para el manejo de los datos y PHP que es el lenguaje para el manejo de SQL en el servidor y el manejador de la base de datos es POSTGRADESQL</p>
            </section>

        </div>

        <div class="servicios" id="servicios">
            <h1>Pasos para Hacer funcionar la Web</h1>
            <div class="contenido-noticias">

                <section class="noticias1">
                    <h3>Paso 1</h3>
                    <p>Comprobar que la base de datos este creada,y que hay conexion a ella para comprobarlo darle click al boton, si da error por favor compruebe los datos en el documento llamado conexion.php ubicado en "php/conexion.php"(para cambiar los valores tiene que abrirlo en un editor de codigo), si al darle click al botonn y no aparece mensaje es por que la conexion esta establecida</p>
                    <a href="php/conexion.php">Click Aqui</a>
                </section>

                <section class="noticias2">
                    <h3>Paso 2</h3>
                    <p>Crear las tablas, se puede hacer creado un script desde pgadmin en la base de datos deseada y abrir el documento .SQL que se encuenta en "db/scritp_gloria_deportiva.sql" o abrir el documento con un editor de texto copiar y pegar dentro de la ventana de script en pgadmin, o la segunda opcion que es dar click a este boton, si le aparece un error es porque todas las tablas ya estan creadas y todo esta listo para el siguiente paso</p>
                    <a href="db/script_bases.php">Click Aqui</a>
                </section>

                <section class="noticias3">
                    <h3>Paso 3</h3>
                    <p>Entendiendo el proceso de carga de los datos lo primero que debe hacer es registrar los datos extra en la base de datos que en este caso son los paises y la informacion de los deportes, para esto se va a la parte superior donde dice registrar y le da click donde dice registrar data extra o </p>
                    <a onclick="extradata()">Click Aqui</a>
                </section>

                <section class="noticias4">
                    <h3>Paso 4</h3>
                    <p>Una vez registrada la data extra se puede proceder a registrar el atleta, para rellenar los datos extra del atleta TIENE QUE ESTAR CREADO EL ATLETA o  no se podra registrar otro dato debido a que los demas datos dependen de la cedula del atleta</p>
                </section>

                <section class="noticias5">
                    <h3>Paso 5</h3>
                    <p>una vez creado el atleta puede consultar su informacion en la seccion de consultas donde aparecera una lista de todos los atletas registrados hasta ahora en el sistema, y si quiere ver informacion detallada de el solo tiene que darle click en la parte de detalles, tambien puede eliminar la informacion completa del atleta si desea</p>
                </section>

                <section class="noticias6">
                    <h3>Paso 6</h3>
                    <p>en la seccion de consultas tambien puede ver los datos de los paises y los deportes registrados en el sistema, en los paises puede eliminarlos de igual manera que con los atletas, la seccion de deportes no tiene esta opcion disponible</p>
                </section>

            </div>


        </div>

        <div class="pruebagratis" id="pruebagratis">
            <div class="gratis">
                <div class="gratis1">
                    <h3>Observaciones y Recomendaciones</h3>
                    <p>al desarrollar este sistema nos dimos cuenta que hay ciertos cambios que se le pueden hacer a la base de datos que(bajo criterio propio) prodrian hacer mas optimo el desempeño de las funciones</p>
                    <ul>
                        <li>1. para poder hacer que el atleta registre la ciudad en la que vive se podria relacionar igual que las demas mediante el numero de cedula para asi que hacer la consulta mucho mas facil</li>
                        <li>2. en la tabla deportes se le puede agregar un campo mas para cuando se vaya a eliminar un depote sea solo el deporte y no la informacion extra de este, esto se podria hacer relacionando este deporte por la columna cod_tipo_deporte y no por cod_deporte o generando una tabla intermedia donde no se vea afectada esta parte</li>
                        <li>3. hay mucha redundancia de datos y columnas innecesarias tales como: en al tabla paises el codigo de ciudad, el codigo del tipo de deporte en la tabla de deporte atleta, el codigo del deporte en tipos de deporte.</li>
                        <li>4. adicionalmente se le puede agregar fechas a la seccion de estudios y cursos para hacer un poco mas preciso la informacion</li>
                    </ul>                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- FUNCIONES DE TODA LA WEB-->
    <div class="funciones-web">
        <!-- SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS // SECCION DE REGISTROS //  -->

        <div id="registrogenatle">
            <!-- REGISTRO DE ATLETA -->
            <div class="main-container" id="registroatleta">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Atleta <button type="button" class="btn btn-info" onclick="consulpai()" data-toggle="collapse" data-target="#regatl">
                                        <i class="fas fa-minus">

                                        </i>
                                    </button>
                                </h3>
            
                            </div>
                            <form id="regatl" class="collapse">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="nombre" id="atl_nombre" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Cedula</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="atl_cedula" onkeyup="comprocedula()">                                           
                                        </div>
                                        

                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Apellido Paterno</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="atl_apepater" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Apellido Materno</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="atl_apemater" >
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">

                                            <label>Apodo</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="atl_apodo" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" placeholder="Enter ..." id="atl_fenac" >
                                        </div>
                                    </div>
                                    <!-- aqui falta hacer el metodo de reuqest alservidor y listar los paises-->
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Pais</label>
                                            <select id="atl_pais" class="form-control" >
                                        
                                        
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nacionalidad</label>
                                            <select id="atl_nacionalidad" class="form-control" >
                                                <option></option>                                             
                                                <option value="V">Venezolano</option>
                                                <option value="E">Extrajero</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Estado Civil</label>
                                            <select id="atl_estciv" class="form-control">                 
                                                    <option value="casado">casado</option>
                                                    <option value="soltero">soltero</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>telefono</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="atl_telefono">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select id="atl_actinac" class="form-control">                                           
                                                    <option value="A">activo</option>
                                                    <option value="I">inactivo</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>direccion de habitacion</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." id="atl_direcch" onkeyup="countChars(this);" ></textarea>
                                            <p id="charNum">0/250</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>lugar de nacimiento</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." id="atl_lugnac" onkeyup="countChars2(this);" ></textarea></textarea>
                                            <p id="charNum2">0/250</p>
                                        </div>
                                    </div>



                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>observacion</label>
                                            <textarea class="form-control" rows="3" placeholder="descripcion de la observacion" onkeyup="countChars3(this);" id="atl_observacion"></textarea>
                                            <p id="charNum3">0/250</p>
                                        </div>
                                    </div>


                                </div>
                                <div class="d-flex justify-content-around" id="info1">
                                        
                                </div>

                                <div class="d-flex justify-content-around">
                                    
                                    <div class="p-2">
                                        <input type="submit" id="btn1" value="Registrar atleta">
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO DE FE DE VIDA -->
            <div class="main-container" id="registrofe">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Fe de Vida<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#fe"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="fe" class="collapse">
                                <!-- INFORMACION FE DE VIDA -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Codigo fe de vida</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="fe_cod">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input  -->
                                        <div class="form-group">
                                            <label>Cedula del atleta</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." id="fe_cedula" onkeyup="comprocedula2()">
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre de registro civil</label>
                                            <input type="text" class="form-control" id="fe_nombre" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula registro civil</label>
                                            <input type="text" class="form-control" id="fe_cregci" placeholder="Enter ...">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Numero de Resolucion </label>
                                            <input type="text" class="form-control" id="fe_numres" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Numero de Gaceta </label>
                                            <input type="text" class="form-control" id="fe_numgac" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Fecha  de gaceta</label>
                                            <input type="date" id="fe_fecga" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Fecha de Fe de vida</label>
                                            <input type="date" id="fe_fecfe" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Direccion Atleta</label>
                                        <textarea class="form-control" rows="3" id="fe_diratl" placeholder="direccion atleta" onkeyup="countChars4(this);"></textarea>
                                        <p id="charNum4">0/250</p>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Parroquia</label>
                                            <textarea class="form-control" id="fe_parroquia" rows="3" placeholder="direccion atleta" onkeyup="countChars5(this);"></textarea>
                                            <p id="charNum5">0/250</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label >Observacion</label>
                                        <textarea class="form-control" rows="3" id="fe_obser" placeholder="descripcion de la observacion" onkeyup="countChars6(this);"></textarea>
                                        <p id="charNum6">0/250</p>
                                    </div>


                                </div>
                                <br>
                                <div class="d-flex justify-content-around" id="info2">

                                </div>
                                <br>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn2" value="Registrar">
                                    </div>
                                </div>
                                <br>



                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO DEPORTES -->
            <div class="main-container" id="registrodepatl">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group ">
                                <br>
                                <h3 class="text-center text-info">Registrar Deporte<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#dep"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="dep" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="card-title">Informacion Deporte</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula del atleta</label>
                                            <input type="text" id="cedatldep" class="form-control" placeholder="Enter ..." onkeyup="comprocedula3()">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>deporte</label>
                                            <select class="form-control" id="lista_deportes">                                                                                      
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around" id="info3">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn10"value="Registrar">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO  NIVEL DEPORTIVO-->
            <div class="main-container" id="registroniveldep">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group ">
                                <br>
                                <h3 class="text-center text-info">Registrar nivel deportivo<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#niv"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="niv" class="collapse">
                                <div class="row">                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula del atleta</label>
                                            <input type="text" onkeyup="comprocedula4();" id="cedniv" class="form-control" placeholder="Enter ...">
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo nivel Deportivo</label>
                                            <input type="text" id="cod_niveldep" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripción de nivel deportivo</label>
                                            <textarea class="form-control" rows="3" placeholder="descripcion de la observacion" onkeyup="countChars7(this);" id="nivdep_desc"></textarea>
                                            <p id="charNum7">0/250</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around" id="info4">

                                </div>

                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn3"value="Registrar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO CAMPEONATO -->
            <div class="main-container" id="registrocamp">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group ">
                                <br>
                                <h3 class="text-center text-info">Registrar Campeonatos<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#champ"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="champ" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h3 class="card-title">Campeonatos</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula del atleta</label>
                                            <input type="number" id="cecamp" class="form-control" placeholder="Enter ..." onkeyup="comprocedula5()">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo Campeonato</label>
                                            <input type="number" id="codcamp" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Fecha de Campeonato</label>
                                            <input type="date" id="fecamp"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">                                       
                                        <div class="form-group">
                                            <label>Descripción de campeonato</label>
                                            <textarea class="form-control" rows="3" placeholder="Descripción de campeonato" id="descamp" onkeyup="countChars8(this);"></textarea>
                                            <p id="charNum8">0/250</p>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around" id="info5">

                                </div>                               
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn4" value="Registrar">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO ESTUDIOS -->
            <div class="main-container" id="registroestudios">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Estudios<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#est"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="est" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h2 class="card-title">Estudios</h2>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula Atleta</label>
                                            <input type="number" id="cees" onkeyup="comprocedula6()"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo Estudio</label>
                                            <input type="number" id="escod"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripción de Estudio</label>
                                            <textarea class="form-control" rows="3" placeholder="Descripción de campeonato" id="esdesc" onkeyup="countChars9(this);"></textarea>
                                            <p id="charNum9">0/250</p>
                                        </div>
                                    </div>
                                </div>                               
                                <br>
                                <div class="d-flex justify-content-around" id="info6">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn5" value="Registrar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO CURSOS REALIZADOS -->
            <div class="main-container" id="registrocursos">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group ">
                                <br>
                                <h3 class="text-center text-info">Registrar Cursos<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#cur"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="cur" class="collapse">
                                <!-- INFORMACION Cursos realizados-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h2 class="card-title">Cursos realizados</h2>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula Atleta</label>
                                            <input type="number" id="cedcur" onkeyup="comprocedula7()"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo de curso</label>
                                            <input type="number" id="codcur"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripción del Curso</label>
                                            <textarea class="form-control" rows="3" placeholder="Descripción de     campeonato" id="descur"onkeyup="countChars10(this);"></textarea>
                                            <p id="charNum10">0/250</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around" id="info7">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn6" value="Registrar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO TRABAJOS REALIZADOS -->
            <div class="main-container" id="registrotrabajos">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group ">
                                <br>
                                <h3 class="text-center text-info">Registrar Trabajos Realizados<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#tra"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="tra" class="collapse">
                                <!-- INFORMACION Cursos realizados-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h2 class="card-title">Trabajos realizados</h2>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cedula Atleta</label>
                                            <input type="number" id="cetra" onkeyup="comprocedula8()"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo de trabajo</label>
                                            <input type="number" id="codtra"class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripción del Trabajo</label>
                                            <textarea class="form-control" id="destra"rows="3" placeholder="Descripción de campeonato" onkeyup="countChars11(this);"></textarea>
                                            <p id="charNum11">0/250</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around" id="info8">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn7" value="Registrar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION DE REGISTRO DE DATOS EXTRA PARA LOS FORMULARIOS // SECCION DE REGISTRO DE DATOS EXTRA PARA LOS FORMULARIOS // SECCION DE REGISTRO DE DATOS EXTRA PARA LOS FORMULARIOS //  -->

        <div class="" id="info-extra">
            <!-- REGISTRO DE DATA DEPORTES -->
            <div class="main-container" id="registrodeportes">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Deportes<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#exdep"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="exdep" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="card-title">Clasificacion de deportes</h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo de clasificacion del deporte</label>
                                            <input type="number" class="form-control" id="codclasidep" placeholder="introduzca el codigo">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>codigo del tipo de deporte</label> <input type="number" class="form-control" id="codtipdep" placeholder="introduzca el codigo del tipo de deporte">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>nombre clasificacion del deporte</label> <textarea id="nomcladep" class="form-control" rows="3" placeholder="Descripción de campeonato" onkeyup="countChars12(this);"></textarea>
                                            <p id="charNum12">0/250</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- INFORMACION tipo dedeporte-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h2 class="card-title">tipo de deportes</h2>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>codigo del deporte</label>
                                            <input type="number" class="form-control" id="coddep" placeholder="codigo tipo deporte">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>codigo tipo de deporte</label>
                                            <input type="number" class="form-control" id="codtipdep" placeholder="codigo tipo deporte">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>nombre tipo de deporte</label>
                                            <textarea class="form-control" rows="3" id="nomtipdep" onkeyup="countChars13(this);" placeholder="nombre del tipo de deporte"></textarea></textarea>
                                            <p id="charNum13">0/250</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- INFORMACION de deporte-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h2 class="card-title">deportes</h2>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>nombre del deporte</label>
                                            <textarea class="form-control" rows="3" id="nomtipdep" onkeyup="countChars14(this);" placeholder="nombre del tipo de deporte"></textarea></textarea>
                                            <p id="charNum14">0/250</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-around" id="info9">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn8" value="Registrar deportes">
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTRO DE DATA PAISES -->
            <div class="main-container" id="registropaises">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Paises<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pai"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="pai" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="card-title">Informacion del Pais</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo de Pais</label>
                                            <input type="number" class="form-control" id="codpa" placeholder="introduzca el codigo">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre de pais</label>
                                            <input id="nompa" class="form-control" rows="1" placeholder="nombre del pais" onkeyup="countChars15(this);">
                                            <p id="charNum15">0/40</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- INFORMACION DE LA CIUDAD-->
                               
                                <div class="d-flex justify-content-around" id="info10">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn9" value="Registrar">
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- REGISTRO DE DATA CIUDADES -->
            <div class="main-container" id="registrociudad">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Registrar Ciudades<button type="button" class="btn btn-info" onclick="consulpai()"data-toggle="collapse" data-target="#ciu"><i class="fas fa-minus"></i></button></h3>
                            </div>
                            <form id="ciu" class="collapse">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr>
                                        <h3 class="card-title">Informacion Ciudades</h3>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pais</label>                                           
                                            <select class="form-control" id="codcipa">                                                                                      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Codigo de la ciudad</label>
                                            <input type="number" class="form-control" id="codci" placeholder="introduzca el codigo">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>nombre la ciudad</label>
                                            <input class="form-control" rows="1" id="nomci" onkeyup="countChars16(this);" placeholder="nombre del tipo de deporte">
                                            <p id="charNum16">0/40</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                               
                                <div class="d-flex justify-content-around" id="info11">

                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="p-2">
                                        <input type="submit" id="btn9" value="Registrar">
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // CONSULTAS // -->

        <!-- CONSULTA DE LA INFORMACION GENERAL DE LOS ATLETAS REGISTRADOS EN LA BASE DE DATOS-->
        <div id="consultaatl">
            <!-- INFORMACION DE TODOS LOS ATLETAS REGISTADOS EN LA BASE DE DATOS-->
            <div class="main-container" id="infotodosatl">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Informacion de todos los atletas Registrados</h3>
                            </div>
                            <form>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Cedula</td>
                                            <td>nombre</td>
                                            <td>Apellidos</td>
                                            <td>Estado</td>
                                            <td>pais</td>
                                        </tr>
                                    </thead>
                                    <tbody id="infoatletas">
                                        
                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- CONSULTA DE LA INFORMACION EXTRA DE LOS ATLETAS REGISTRADOS EN LA BASE DE DATOS-->
        <div id="consultainfoex">

            <!-- INFORMACION DE TODOS LOS ATLETAS REGISTADOS EN LA BASE DE DATOS-->
            <div class="main-container" id="infotodopais">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Informacion de todos los Paises Registrados</h3>
                            </div>
                            <form>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Codigo del Pais</td>
                                            <td>Nombre de Pais</td>
                                        </tr>
                                    </thead>
                                    <tbody id="infopaises">
                                        
                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INFORMACION DE TODOS LOS DEPORTES REGISTADOS EN LA BASE DE DATOS-->
            <div class="main-container" id="infotododep">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto card">
                            <div class="form-group">
                                <br>
                                <h3 class="text-center text-info">Informacion de todos los Deportes Registrados</h3>
                            </div>
                            <form>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Codigo del deporte</td>
                                            <td>Nombre del deporte</td>
                                            <td>Tipo de deporte</td>
                                            <td>Clasificacion de Deporte</td>

                                        </tr>
                                    </thead>
                                    <tbody id="infodeportes">
                                        
                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DETALLES DE PERFIL DE LOS ATLETAS // DETALLES DE PERFIL DE LOS ATLETAS // DETALLES DE PERFIL DE LOS ATLETAS // DETALLES DE PERFIL DE LOS ATLETAS // DETALLES DE PERFIL DE LOS ATLETAS // DETALLES DE PERFIL DE LOS ATLETAS // -->

        <div class="main-container" id="detalle">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-12 m-auto card">
                        <div class="form-group">
                                <br>
                                <h3 id="natl" style="text-transform: uppercase;"  class="text-center text-info"></h3>
                        </div>
                        <form>
                            <div class="row invoice-info">
                                <div class="col-12 ">
                                    <hr>
                                    <p class="lead ">Informacion Personal</p>
                                    <div class="table-responsive ">
                                        <table id="infoperso"class="table">
                                            

                                        </table>
                                    </div>
                                    <hr>
                                    <p class="lead ">Informacion Fe de Vida</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infofe">
                                            

                                        </table>
                                    </div>
                                    <p class="lead ">Nivel Deportivo</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infoniv">
                                            


                                        </table>
                                    </div>
                                    <p class="lead ">Deportes</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infodepo">
                                            

                                        </table>
                                    </div>
                                    <p class="lead ">Campeonatos</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infocampe">
                                           
                                        </table>
                                    </div>
                                    <p class="lead ">Cursos Realizados</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infocurso">
                                            
                                        </table>
                                    </div>
                                    <p class="lead ">Estudios Realizados</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infoest">
                                            <tr>
                                                 
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="lead ">Trabajos Realizados</p>
                                    <div class="table-responsive ">
                                        <table class="table" id="infotra">
                                            


                                        </table>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER DE LA PAGINA-->
    <footer class="site-footer" id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                        <a href="#">Jose Piedra & Jose Villa.</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/all.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="css/bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>

</html>