<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso AmiBeagles</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="bodyRegistros">
    
</body>
</html>
<?php
session_start();
include "conexionBD.php";
$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];

$q = "SELECT COUNT(*) AS contar FROM usuario WHERE nombre_usuario= '$usuario' AND password = '$password'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    // Obtener datos del usuario
        $q_datos_usuario = "SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND password = '$password'";
        $consulta_datos_usuario = mysqli_query($conexion, $q_datos_usuario);
        $datos_usuario = mysqli_fetch_array($consulta_datos_usuario);
        echo '<div class="Ingreso">';
        echo "<h2>" . "🫣¡Ingresaste!✨" . "</h2>";
        echo '<img src="Media/Imagenes/Panda_Registrar.png" alt="panda registrar">';
        echo "<h4>" . "Bienvenido: " . $_POST['usuario'] . "</h4>" ;
        echo '<div class="alinearIz">';
        echo "<ul>";
        echo"<li> Nombre: ". $datos_usuario['nombre'] ."</li>" ;
        echo "<li>" . "ID: " . $datos_usuario['id'] . "</li>";
        echo "<li>" . "Edad: " . $datos_usuario['edad'] . "</li>";
        echo "<li>" . "Dirección: " . $datos_usuario['direccion'] . "</li>";
        echo "<li>" . "Teléfono: " . $datos_usuario['telefono'] . "</li>";
        echo "<li>" . "Correo electrónico: " . $datos_usuario['correo'] . "</li>";
        echo "</ul>";
        echo '</div>';
        echo '</div>';
        echo '<br><br>';
        echo '<div class="colorBlanco">
        <a href="Registro.php"><img class="imagenIcono" src="Media/Imagenes/icono_registrar.png" alt="icono de registro">Registrar</a>
        <a href="Eliminar.php"><img class="imagenIcono" src="Media/Imagenes/icono_eliminar.png" alt="icono eliminar">Eliminar usuario</a>
        <a href="Listar.php"><img class="imagenIcono" src="Media/Imagenes/icono_listar.png" alt="icono de listar">Listar usuarios</a>
        <a href="Editar.php"><img class="imagenIcono" src="Media/Imagenes/icono_actualizar.png" alt="icno de actualizar">Actualizar datos</a>
        <a href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>
        </div>';
        mysqli_close($conexion);
}else{
        echo '<div class="Ingreso">';
        echo '<br><br>';
        echo '<img src="Media/Imagenes/Panda_Mal.png" alt="panda ingresar">';
        echo '<br>';
        echo '<h2>¡Credenciales incorrectas!😾🙃</h2>';
        echo '<h2>😾🙃</h2>';
        echo "<h3>" . "Usuario: " . $_POST['usuario'] . "</h3>" ;
        echo "<h3>" . "password: " . $_POST['contraseña'] . "</h3>";
        echo '<br>';
        echo '<div class="colorBlanco">';
        echo '<a href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso">Regresar</a>';
        echo '</div>';
        echo '<br>';
        echo '</div>';
}

?>