<?php 



include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT *
            FROM nivel_deportivo
            WHERE cedula_atleta = '$id';";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'codniv'=> $row['cod_nivel_deportivo'], 
                'desniv'=>$row['desc_nivel_deportivo']
        
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>