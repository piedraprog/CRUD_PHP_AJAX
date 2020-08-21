<?php

include '../conexion.php';


if(!empty($_POST['codpa']) && !empty($_POST['nompa'])){

    $codpa = $_POST['codpa']; 
    $nompa = $_POST['nompa']; 

    $query = "INSERT INTO paises(
            cod_pais, nom_pais)
            VALUES ('$codpa', '$nompa');
         
    ";



    if(pg_query($conexion,$query)){

        echo "1";

    }else{

        echo("2");

    }

}else if(!empty($_POST['codpa']) && !empty($_POST['codciu']) && !empty($_POST['nomciu'])){


    $codpa = $_POST['codpa'];
    $codciu = $_POST['codciu'];
    $nomciu = $_POST['nomciu'];

    $query2= "INSERT INTO ciudad(
        cod_ciudad, cod_pais, nombre_ciudad)
        VALUES ('$codciu', '$codpa', '$nomciu');";

    if(pg_query($conexion,$query2)){

        echo "1";

    }else{

        echo("2");

    }

    
}else{

    echo("valores vacios");

}

?>
