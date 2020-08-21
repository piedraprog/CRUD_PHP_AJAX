<?php

include '../conexion.php';



if(!empty($_POST['cedatldep']) && !empty($_POST['coddep'])){

    $cedatleta = $_POST['cedatldep'];

    //verifica que exista el numero de cedula
    $query = "SELECT * FROM atletas where cedula_atleta = '$cedatleta'";
    $result = pg_query($conexion,$query);
    $num_row = pg_num_rows($result);

    if($num_row == "1"){

        $cod_dep = $_POST['coddep'];
        

        //esto se hace para poder sacar el codigo del tipo de deporte
        $query2 = "SELECT cod_tipo_deporte
        FROM tipos_deportes WHERE cod_tipo_deporte = '$cod_dep';";

        $resultado2 = pg_query($conexion,$query2);
        if($resultado2){
            
            //esto es para sacar el valor de cod_tipo deporte
            while($row = pg_fetch_array($resultado2)){

                $cod_tipdep = $row['cod_tipo_deporte'];

            }

            
           //query para registrar un deporte
            $query3 = "INSERT INTO deporte_atleta(cedula_atleta, cod_deporte, cod_tipo_deporte)
                VALUES ('$cedatleta','$cod_dep','$cod_tipdep');";

            if(pg_query($conexion,$query3)){

                echo '1';

            }else{

                echo '2';

            }



        }
       
    }else{

        echo("3");

    }


}else{

    echo "valores vacios";
    
}



?>