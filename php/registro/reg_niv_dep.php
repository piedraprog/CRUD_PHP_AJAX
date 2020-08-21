<?php


include '../conexion.php';

if(!empty($_POST['cedatldep']) && !empty($_POST['codnivdep']) && !empty($_POST['nivdepdesc']) ){

    $cedula = $_POST['cedatldep'];
    $cod_nivdep =$_POST['codnivdep'];
    $nivdepdes =$_POST['nivdepdesc'];


    $query="INSERT INTO nivel_deportivo(
        cod_nivel_deportivo, cedula_atleta, desc_nivel_deportivo)
        VALUES ('$cod_nivdep', '$cedula', '$nivdepdes');";

    if(pg_query($conexion,$query)){
        echo "1";
    }else{
        echo "2";
    }


}else{

    echo 'valores vacios';
}





?>