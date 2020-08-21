<?php

include('../conexion.php');

if(!empty($_POST['id'])) {

  $id = $_POST['id'];

  $query = "DELETE FROM atletas WHERE cedula_atleta = '$id';
            
            DELETE FROM trabajos_realizados WHERE cedula_atleta = '$id';
            
            DELETE FROM nivel_deportivo WHERE cedula_atleta = '$id';

            DELETE FROM fe_de_vida WHERE cedula_atleta = '$id';
            
            DELETE FROM deporte_atleta WHERE cedula_atleta = '$id';

            DELETE FROM campeonato_atletas WHERE cedula_atleta = '$id';

            DELETE FROM estudios_realizados WHERE cedula_atleta = '$id';

            DELETE FROM cursos_realizados WHERE cedula_atleta = '$id';

            "; 

  $result = pg_query($conexion, $query);

  if (!$result) {

    
    die('Query Failed.');
  }

  echo "Task Deleted Successfully";

}

?>