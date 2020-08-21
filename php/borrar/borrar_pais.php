<?php

include('../conexion.php');

if(!empty($_POST['id'])) {

  $id = $_POST['id'];

  $query = "DELETE FROM paises WHERE cod_pais = '$id';"; 

  $result = pg_query($conexion, $query);

  if (!$result) {

    
    die('Query Failed.');
  }

  echo "Task Deleted Successfully";

}

?>