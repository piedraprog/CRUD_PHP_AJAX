<?php

include '../conexion.php';

if(!empty($_POST['id'])){


    $id= $_POST['id'];
    //echo $id;

    $query ="SELECT *
    FROM fe_de_vida
    WHERE cedula_atleta = '$id';";

    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
               
        while($row2 = pg_fetch_array($result)) {
        
            $json[] = array(
                 
                'cod_fe' => $row2['cod_fe_de_vida'],
                'nombre_reg' =>  $row2['nom_regist_civil'],
                'ced_regci' =>  $row2['cedula_regis_civil'],
                'parroquia' =>  $row2['parroquia'],
                'resonro' =>  $row2['resolucion_nro'],
                'gacenro' =>  $row2['gaceta_nro'],
                'fecga' =>  $row2['fecha_gaceta'],
                'fecfe' =>  $row2['fecha_fe_de_vida'],
                'diratl' =>  $row2['dereccion_atleta'],
                'observacion' =>  $row2['observacion']
                
                    
            );
        }

        
        $jsonstring = json_encode($json);

        echo ($jsonstring);   
    
    }
        


}


?>