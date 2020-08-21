<?php

include 'conexion.php';

session_start();

$user = 'JOSE@j.com';
$pass = '12345';


/*if(isset($_POST['user']) && isset($_POST['pass'])){
    
    $user =  $_POST['user'];
    $pass = $_POST['pass'];
    
    */
    //BUSCA EN LA TABLA USUARIO ALGUNA COINCIDENCIA PARA ASI INICIAR SESION COMO USUARIO
    $query = "SELECT * FROM usuario WHERE  contraseña= '$pass' AND correo='$user';";
    $result = pg_query($conexion,$query);
    $num_row = pg_num_rows($result);


    if($num_row == "1"){

        //esto funciona para pasar todo el resultado de la consulta a un array y poder operarlo
        $data = pg_fetch_array($result);

        //se declaran las variables $_SESSION para asi dar a entender que la sesion se creo
        $_SESSION['user'] = $data['correo'];
        
            
        echo("1");
    
    
    }else{
        echo("error no encontrado");
    }
/*
}else{
    echo("error no encontrado");
}*/





?>