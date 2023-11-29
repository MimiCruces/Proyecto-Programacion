<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro AmiBeagles</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="bodyrespuesta">
</body>
</html>
<?php
//conexion a la base datos
include "conexionBD.php";
mysqli_set_charset($conexion,'utf8');
//declaracion de varibales para formulario
$buscarUsuario = "SELECT * FROM usuario where nombre_usuario = '$_POST[usuario]'";
$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);
if($count ==1 ){
echo '<div class="respuesta">';
echo '<br><br>';
echo '<img src="Media/Imagenes/usuario_existente.png" alt="">';
echo '<br>';
echo "<h2>" . "El nombre de usuario: " . $_POST['usuario'] ." ya esta ocupado". "</h2>" . "\n\n";
echo '<br>';
echo '<a href="Registro.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso"> Regresar</a>';
echo '<br><br>';
echo '</div>';
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
    echo '<br><br><br><br><br>';
    echo '<div class="respuesta">';
    echo '<br><br>';
    echo '<img src="Media/Imagenes/Panda_Registrar.png" alt="panda_registro">';
    echo '<br>';
    echo "<br />" . "<h2>" . "¡Usuario Creado Exitosamente!🤩✨" . "</h2>";
    echo "<h2>" . "Bienvenido: " . $_POST['usuario'] . "</h2>" . "\n\n";
    echo '<br>';
    echo '<div class="colorBlanco">';
    echo '<a href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_ingresar.png" alt="icono de ingreso"> Ingresar</a>';
    echo '</div>';
    echo '<br><br>';
    echo '</div>';
//termina el else
}



?>