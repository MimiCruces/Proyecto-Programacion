<?php
session_start();
include "conexionBD.php";
$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];

$q = "SELECT COUNT(*) AS contar FROM usuario WHERE nombre_usuario= '$usuario' AND password = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    // header("location: ./dashboard.php");
}else{

        header("location: ./index.php");

echo "error";
   
}

?>