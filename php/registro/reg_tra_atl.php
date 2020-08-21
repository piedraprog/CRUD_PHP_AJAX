<?php

include '../conexion.php';

if(!empty($_POST['cedula']) && !empty($_POST['cod_tra']) && !empty($_POST['des_tra'])){

    $cedula =$_POST['cedula'];
    $cod_tra =$_POST['cod_tra'];
    $des_tra =$_POST['des_tra'];

    $query = "INSERT INTO trabajos_realizados(cod_trabajo, cedula_atleta, desc_trabajo)
        VALUES ('$cod_tra', '$cedula', '$des_tra');";


   if(pg_query($conexion,$query)){
        echo "1";
    }else{
        echo "2";
    }
}else{

    echo("valores vacios");

}


?>