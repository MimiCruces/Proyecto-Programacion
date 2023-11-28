<?php
require "conexionBD.php";
mysqli_set_charset($conexion,'utf8');
$usuario = $_POST['id'];
$password = $_POST['contraseña'];
$q = "SELECT COUNT(*) AS contar FROM usuario WHERE id= '$id' AND password = '$password'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $registroEliminado =$_POST['usuario'];
    $consulta1="DELETE FROM usuario WHERE id= ";
    mysqli_query($conexion, $consulta1 . $registroEliminado);
    mysqli_close($conexion);
    echo "Eliminado";
}else{
    echo "Revise sus credenciales" 
}
?>