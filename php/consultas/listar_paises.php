<?php

include '../conexion.php';


$query = "SELECT * FROM paises";
    
$result = pg_query($conexion, $query);

if($result) {

    $json = array();

    while($row = pg_fetch_array($result)) {

        $json[] = array(

        'codigo_pais' => $row['cod_pais'],
        'nombre_pais' => $row['nom_pais']
                    
        );
    }

    $jsonstring = json_encode($json);

    echo ($jsonstring);   
}







?>