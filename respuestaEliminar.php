<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar AmiBeagles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body body class="bodyrespuesta">
    
</body>
</html>
<?php
require "conexionBD.php";
mysqli_set_charset($conexion,'utf8');
$id = $_POST['id'];
$password = $_POST['contraseña'];
$q = "SELECT COUNT(*) AS contar FROM usuario WHERE id= '$id' AND password = '$password'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $registroEliminado =$_POST['id'];
    $consulta1="DELETE FROM usuario WHERE id= ";
    mysqli_query($conexion, $consulta1 . $registroEliminado);
    mysqli_close($conexion);
    echo '<br><br><br><br><br>';
    echo '<div class="respuesta">';
    echo '<br><br>';
    echo '<img src="Media/Imagenes/Panda_Eliminar.png" alt="panda eliminar">';
    echo '<br>';
    echo '<h2>🙃¡Usuario eliminado!😿</h2>';
    echo '<br>';
    echo '<div class="colorBlanco">';
    echo '<a href="Eliminar.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso">Regresar</a>';
    echo '</div>';
    echo '<div class="colorBlanco">';
    echo '<a href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>';
    echo '</div>';
    echo '</div>';
    echo '<br><br>';
}else{
    echo '<br><br><br><br><br>';
    echo '<div class="respuesta">';
    echo '<br><br>';
    echo '<img src="Media/Imagenes/Panda_Mal.png" alt="panda ingresar">';
    echo '<br>';
    echo '<h2>🙃¡Credenciales incorrectas!😾</h2>';
    echo "<h3>" . "ID: " . $_POST['id'] . "</h3>" ;
    echo "<h3>" . "password: " . $_POST['contraseña'] . "</h3>";
    echo '<br>';
    echo '<div class="colorBlanco">';
    echo '<a href="Eliminar.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso">Regresar</a>';
    echo '</div>';
    echo '<br>';
    echo '</div>';
}
?>