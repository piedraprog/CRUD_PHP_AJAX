<?php

include '../conexion.php';

if(!empty($_POST['cedula']) && !empty($_POST['fec_camp']) && !empty($_POST['des_camp']) && !empty($_POST['codcamp'])){

    $codcamp=$_POST['codcamp'];
    $cedula= $_POST['cedula'];
    $fec_camp= $_POST['fec_camp'];
    $des_camp= $_POST['des_camp'];

    $query ="INSERT INTO campeonato_atletas(
        cod_campeonato, cedula_atleta, anio_campeonato, desc_campeonato)
        VALUES ('$codcamp', '$cedula', '$fec_camp', '$des_camp');";

    if(pg_query($conexion,$query)){
        echo "1";
    }else{
        echo "2";
    }

    //echo 4;
}else{

    echo("valores vacios");

}


?>