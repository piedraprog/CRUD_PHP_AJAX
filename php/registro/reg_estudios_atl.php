<?php

include '../conexion.php';

if(!empty($_POST['cedula']) && !empty($_POST['cod_es']) && !empty($_POST['des_es'])){

    $cedula =$_POST['cedula'];
    $cod_es =$_POST['cod_es'];
    $des_es =$_POST['des_es'];

    $query = "INSERT INTO estudios_realizados(
        cod_estudio, cedula_atleta, desc_estudio)
        VALUES ('$cod_es ', '$cedula', '$des_es');";


   if(pg_query($conexion,$query)){
        echo "1";
    }else{
        echo "2";
    }
}else{

    echo("valores vacios");

}


?>