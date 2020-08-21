<?php

include '../conexion.php';


$query = "SELECT D.cod_deporte, nom_tipo_deporte, nom_clasi_deporte,  nom_deporte
            FROM tipos_deportes T, clasificacion_deportes C, deportes D
            WHERE T.cod_tipo_deporte = C.cod_tipo_deporte AND D.cod_deporte = T.cod_deporte 
            AND C.cod_clasifi_deporte= T.cod_clasi_deporte
            ";
    
$result = pg_query($conexion, $query);

if($result) {

    $json = array();

    while($row = pg_fetch_array($result)) {

        $json[] = array(

            'cod_deporte' => $row['cod_deporte'],
            'nom_tipo_deporte' => $row['nom_tipo_deporte'],
            'nom_clasi_deporte' => $row['nom_clasi_deporte'],
            'nom_deporte' => $row['nom_deporte']
        
            
                    
        );
    }

    $jsonstring = json_encode($json);

    echo ($jsonstring);   
}







?>