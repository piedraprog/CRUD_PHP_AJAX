<?php

include '../conexion.php';


if(!empty($_POST['codfe']) && !empty($_POST['cedula']) && !empty( $_POST['nombreregci']) &&  !empty($_POST['creci']) && !empty($_POST['nrores']) && !empty($_POST['nroga']) && !empty($_POST['fecfdv']) && !empty($_POST['fefecga']) && !empty($_POST['direccatl']) && !empty($_POST['parroquia']) && !empty($_POST['obser'])){

    $cedula= $_POST['cedula'];
    $query = "SELECT * FROM atletas where cedula_atleta = '$cedula'";
    $result = pg_query($conexion,$query);
    $num_row = pg_num_rows($result);

    if($num_row == "1"){

        $cod_fe=        $_POST['codfe'];
        $nombre_regci=  $_POST['nombreregci'];
        $c_reci=        $_POST['creci'];
        $nro_res=       $_POST['nrores'];
        $nro_ga=        $_POST['nroga'];
        $fec_fdv=       $_POST['fecfdv'];
        $fec_ga =       $_POST['fefecga'];
        $direcc_atl=    $_POST['direccatl'];
        $parroquia=     $_POST['parroquia'];
        $obser=         $_POST['obser'];

        $query2 = "INSERT INTO fe_de_vida(
            cod_fe_de_vida, cedula_atleta, nom_regist_civil, cedula_regis_civil, parroquia, resolucion_nro, gaceta_nro, fecha_gaceta, fecha_fe_de_vida, dereccion_atleta, observacion)
            VALUES ('$cod_fe',' $cedula', '$nombre_regci', '$c_reci','$parroquia', '$nro_res', '$nro_ga', '$fec_ga','$fec_fdv', '$direcc_atl', '$obser');";

        if(pg_query($conexion,$query2)){

            echo "1";
        }else{
            echo("2");
        }

    }else{
            
        echo("3");
    }



}else{

    echo "error campos en blanco";
}


?>