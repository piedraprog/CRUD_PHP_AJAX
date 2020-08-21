<?php 



include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT *
	        FROM campeonato_atletas
            WHERE cedula_atleta = '$id';";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'cod_camp'=>$row['cod_campeonato'], 
                'acamp'=>$row['anio_campeonato'], 
                'descamp'=>$row['desc_campeonato']
                
                    
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>