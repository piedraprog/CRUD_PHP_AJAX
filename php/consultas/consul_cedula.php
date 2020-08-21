<?php

include '../conexion.php';

if(!empty($_POST['cedula'])){


    $cedula = $_POST['cedula'];

    $query = "SELECT * FROM atletas where cedula_atleta = '$cedula'";
    $result = pg_query($conexion,$query);
    $num_row = pg_num_rows($result);

    if($num_row == "1"){

        echo "1";

    }else{
        
        echo "2";

    }

    


}else{

    echo "valor vacio";
}

?>