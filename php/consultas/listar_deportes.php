<?php


include '../conexion.php';

$query = "SELECT * FROM deportes";
    
$result = pg_query($conexion, $query);

if(!$result) {

    die('Query Failed'. mysqli_error($conexion));   
}



$json = array();

while($row = pg_fetch_array($result)) {

    $json[] = array(

        'codigo_deporte' => $row['cod_deporte'],
        'nombre_deporte' => $row['nom_deporte']
        

            
    );
}

$jsonstring = json_encode($json);

echo ($jsonstring);


?>