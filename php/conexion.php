<?php

$user = "postgres";
$pass = "1234";
$host ="localhost";
$db = "gloria_deportiva";

//$con = null;

$conexion = pg_connect("host='$host' dbname='$db' user='$user' password='$pass' ") or die("error");



?>
