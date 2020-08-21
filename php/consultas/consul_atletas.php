<?php

include '../conexion.php';

if(!empty($_POST['id'])){

    //echo ("ajaaaaaaaaaaaaaaaaaaa");

    $id = $_POST['id'];

    $query2 = "SELECT cedula_atleta, nacionalidad, fecha_nacimiento, nombres, ape_materno, ape_paterno, apodo, nom_pais, lugar_nacimiento, telefono, dir_habitacion, estado_civil, activo_inactivo, observacion
            FROM paises P, atletas A
            WHERE p.cod_pais = a.cod_pais AND cedula_atleta = '$id';";



    $result2 = pg_query($conexion, $query2);

    if($result2) {

        $json2 = array();
        
        
        while($row2 = pg_fetch_array($result2)) {
        
            
        
        
            $json2[] = array(
            
                'cedula' => $row2['cedula_atleta'],
                'nacionalidad' =>  $row2['nacionalidad'],
                'nombre' =>  $row2['nombres'],
                'apematerno' =>  $row2['ape_materno'],
                'apepater' =>  $row2['ape_paterno'],
                'fenac' =>  $row2['fecha_nacimiento'],
                'telefono' =>  $row2['telefono'],
                'direccion' =>  $row2['dir_habitacion'],
                'pais' =>  $row2['nom_pais'],
                'lugnac' =>  $row2['lugar_nacimiento'],
                'estciv' =>  $row2['estado_civil'],
                'observacion' =>  $row2['observacion'],
                'actinac' =>  $row2['activo_inactivo'],
                'apodo' =>  $row2['apodo']
                
                        
            );
        }
    
        
        $jsonstring2 = json_encode($json2);
        //$jsonstring2 = json_encode();
    
        echo ($jsonstring2);   
      
    }

}else{



    $query = "SELECT cedula_atleta, nacionalidad, fecha_nacimiento, nombres, ape_materno, ape_paterno, apodo, nom_pais, lugar_nacimiento, telefono, dir_habitacion, estado_civil, activo_inactivo, observacion
            FROM paises P, atletas A
            WHERE p.cod_pais = a.cod_pais";



    $result = pg_query($conexion, $query);

    if($result) {

        $json = array();
        

        while($row = pg_fetch_array($result)) {


        

            $json[] = array(

                'cedula' => $row['cedula_atleta'],
                'nacionalidad' =>  $row['nacionalidad'],
                'nombre' =>  $row['nombres'],
                'apematerno' =>  $row['ape_materno'],
                'apepater' =>  $row['ape_paterno'],
                'fenac' =>  $row['fecha_nacimiento'],
                'telefono' =>  $row['telefono'],
                'direccion' =>  $row['dir_habitacion'],
                'pais' =>  $row['nom_pais'],
                'lugnac' =>  $row['lugar_nacimiento'],
                'estciv' =>  $row['estado_civil'],
                'observacion' =>  $row['observacion'],
                'actinac' =>  $row['activo_inactivo'],
                'apodo' =>  $row['apodo']


            );
        }


        $jsonstring = json_encode($json);
        //$jsonstring2 = json_encode();

        echo ($jsonstring);   
      
    }
}





?>