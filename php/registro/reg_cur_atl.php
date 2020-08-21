<?php

include '../conexion.php';

if(!empty($_POST['cedula']) && !empty($_POST['cod_cur']) && !empty($_POST['des_cur'])){

    $cedula =$_POST['cedula'];
    $cod_cur =$_POST['cod_cur'];
    $des_cur =$_POST['des_cur'];

    $query = "INSERT INTO cursos_realizados(
        cod_cursos, cedula_atleta, desc_curso)
        VALUES ('$cod_cur ', '$cedula', '$des_cur');";


   if(pg_query($conexion,$query)){
        echo "1";
    }else{
        echo "2";
    }
}else{

    echo("valores vacios");

}


?>