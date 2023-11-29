<?php
$host_db = "sql305.infinityfree.com";
$user_db = "if0_35205592";
$pass_db = "4hgYktTGMpm";
$db_name = "if0_35205592_usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
 die("La conexion falló " . $conexion->connect_error);
} else {
    //echo"<h2 style='color: blue; text-align: center;'>tu conexión está funcionando.</h2>";
}
?>