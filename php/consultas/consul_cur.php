<?php 



include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT *
            FROM cursos_realizados
            WHERE cedula_atleta = '$id';";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'cocur'=>$row['cod_cursos'], 
                'descur'=>$row['desc_curso']
                
                    
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>