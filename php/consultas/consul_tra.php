<?php 



include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT *
            FROM trabajos_realizados
            WHERE cedula_atleta = '$id';";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'codtra'=>$row['cod_trabajo'], 
                'destra'=>$row['desc_trabajo']    
                
                    
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>