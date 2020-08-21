<?php

include '../conexion.php';

if(!empty($_POST['codcalsidep']) && !empty($_POST['codtipdep']) && !empty($_POST['nomcladep']) && !empty($_POST['codtipdep']) && !empty($_POST['nomtipdep']) && !empty($_POST['coddep']) && !empty($_POST['nomdep'])) {

    
    $codigo_clasidep = $_POST['codcalsidep'];
    $codigo_tipdep = $_POST['codtipdep'];
    $nombre_cladep = $_POST['nomcladep'];   
    $nomtipdep = $_POST['nomtipdep'];
    $coddep = $_POST['coddep'];
    $nomdep = $_POST['nomdep'];

    $query ="INSERT INTO clasificacion_deportes(
        cod_clasifi_deporte, cod_tipo_deporte, nom_clasi_deporte)
        VALUES ('$codigo_clasidep', '$codigo_tipdep','$nombre_cladep');

        INSERT INTO tipos_deportes(
	    cod_deporte, cod_tipo_deporte, cod_clasi_deporte, nom_tipo_deporte)
	    VALUES ('$coddep','$codigo_tipdep','$codigo_clasidep', '$nomtipdep');

        INSERT INTO deportes(
	    cod_deporte, nom_deporte)
	    VALUES ('$coddep','$nomdep');    
        
        ";

    if (pg_query($conexion,$query)) {
        echo "1";
    }else{
        echo "2";
    }

}else{

    ECHO "VALOR VACIO";

}


/*

INSERT INTO clasificacion_deportes(cod_clasifi_deporte, cod_tipo_deporte, nom_clasi_deporte)
        VALUES ('1','1','basket');
		
INSERT INTO deportes(cod_deporte, nom_deporte)
	    VALUES ('1','basketball'); 

INSERT INTO tipos_deportes(cod_deporte, cod_tipo_deporte, cod_clasi_deporte, nom_tipo_deporte)
	    VALUES ('1','1','1','basketball');





*/






?>