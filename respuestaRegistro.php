<?php
//conexion a la base datos
include "conexionBD.php";
mysqli_set_charset($conexion,'utf8');

//declaracion de varibales para formulario

$buscarUsuario = "SELECT * FROM usuario where nombre_usuario = '$_POST[usuario]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya a sido ocupado';
    header('Location: ./Registro.php');
    
}else{
    mysqli_query($conexion, "INSERT INTO usuario (
    nombre,
    edad,
    direccion,
    telefono,
    correo,
    nombre_usuario,
    password)
        VALUES(
    '$_POST[nombre]',
    '$_POST[edad]',
    '$_POST[direccion]',
    '$_POST[telefono]',
    '$_POST[correo]',
    '$_POST[usuario]',
    '$_POST[contraseña]'        
    )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./Registro.php'>Registro</a>" . "</h5>";

//termina el else
}



?>