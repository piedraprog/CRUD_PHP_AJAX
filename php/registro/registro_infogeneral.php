<?php


include '../conexion.php';


//este if es para evaluar si lo que estoy trayendo del formulario esta vacio o no, si esta vacio no procede si esta con valores si procede 
if(!empty($_POST['nombre']) && !empty($_POST['cedula'])&& !empty($_POST['apematerno']) && !empty($_POST['apepater']) && !empty($_POST['fenac']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['lugnac']) && !empty($_POST['pais']) && !empty($_POST['estciv']) &&  !empty($_POST['actinac']) &&  !empty($_POST['observacion']) && !empty($_POST['apodo']) && !empty($_POST['nacionalidad']) && !empty($_POST['codpais'])){

    //con el metodo $_POST se recojen los valores pasados por ajax y se utilizan variables para luego ejecutar las acciones a la base de datos
    
    $cedula=        $_POST['cedula'];
    $nacionalidad = $_POST['nacionalidad'];
    $nombre=        $_POST['nombre']; 
    $apematerno =   $_POST['apematerno']; 
    $apepater=      $_POST['apepater']; 
    $fenac=         $_POST['fenac']; 
    $telefono=      $_POST['telefono']; 
    $direccion=     $_POST['direccion']; 
    $lugnac=        $_POST['lugnac']; 
    $pais=          $_POST['pais']; 
    $estciv=        $_POST['estciv']; 
    $observacion=   $_POST['observacion'];
    $actinac =      $_POST['actinac'];
    $apodo =        $_POST['apodo'];
    $codpais =      $_POST['codpais'];    

    //aqui es la sentencia que me inserta los datos a la base de datos hay dos campos con valores ya establecidos hay que resolver como hacemos que llegue un solo valor a este archivo porque uno es una clave referente de otra tabla y el otro es un valor unico char que si tiene una logitud mayor de uno da error

    $query ="INSERT INTO atletas(
        cedula_atleta, nacionalidad, fecha_nacimiento, nombres, ape_materno, ape_paterno, apodo, cod_pais, lugar_nacimiento, telefono, dir_habitacion, estado_civil, activo_inactivo, observacion)
        VALUES ('$cedula', '$nacionalidad' , '$fenac', '$nombre', '$apematerno', '$apepater','$apodo','$codpais','$lugnac','$telefono','$direccion', '$estciv', '$actinac', '$observacion');";

    

    // el pg_query es uan funcion nativa de php para ejecutar qeurys en psotgradesql este devuelve un valor bool el cual si se utiliza en un if se puede verificar si la ejecucion es correcta o no


    if(pg_query($conexion,$query)){

        echo ("1");

    }else{

        echo("error en el query");

    }



    /*echo ("-").$cedula;
    echo ("-").$nacionalidad;
    echo ("-").$nombre; 
    echo ("-").$apematerno; 
    echo ("-").$apepater; 
    echo ("-").$fenac; 
    echo ("-").$telefono; 
    echo ("-").$direccion; 
    echo ("-").$lugnac; 
    echo ("-").$pais; 
    echo ("-").$estciv; 
    echo ("-").$observacion;
    echo ("-").$actinac;
    echo ("-").$apodo;
    echo ("-").$codpais;   */

}else{
    echo"2";
}

//esta es uan prueba de la consulta con valores prestablecidos para ver si la sintaxis estaba correcta

/*$query2 ="INSERT INTO atletas(
    cedula_atleta, nacionalidad, fecha_nacimiento, nombres, ape_materno, ape_paterno, apodo, cod_pais, lugar_nacimiento, telefono, dir_habitacion, estado_civil, activo_inactivo, observacion)
    VALUES ('9984408', 'v','10-07-2200','jose','piedra','calles','goldo','11','miksa','1223342','22222222222sada','s','a','a la orden pal desorden');";




if(pg_query($conexion,$query2)){

    echo ("1");

}else{

    echo("2");

}*/

?>