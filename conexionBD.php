<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "1234";
$db_name = "registro";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
 die("La conexion falló " . $conexion->connect_error);
} else {
    echo"<h2 style='color: blue; text-align: center;'>tu conexión está funcionando.</h2>";
}
?>