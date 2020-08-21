<?php 



include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT nom_deporte, nom_tipo_deporte
    FROM deportes D, tipos_deportes T, deporte_atleta A
    WHERE A.cedula_atleta = '$id' AND A.cod_deporte = D.cod_deporte AND A.cod_tipo_deporte = T.cod_tipo_deporte";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'deporte' => $row['nom_deporte'],
                'tipo_deporte' => $row['nom_tipo_deporte']
                
                    
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>