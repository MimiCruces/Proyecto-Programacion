<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios AmiBeagles</title>
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
</head>
<body class="bodyrespuesta">
</body>
</html>l
<?php
require "conexionBD.php";
mysqli_set_charset($conexion,'utf8');
//genear el query
$consulta_sql="SELECT * FROM usuario";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];
echo '<div class="colorBlanco">';
echo '<a href="Listar.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso">Regresar</a>';
echo '<a href="Registro.php"><img class="imagenIcono" src="Media/Imagenes/icono_registrar.png" alt="icono de registro">Registrar</a>';
echo '<a href="Eliminar.php"><img class="imagenIcono" src="Media/Imagenes/icono_eliminar.png" alt="icono eliminar">Eliminar usuario</a>';
echo '<a href="Editar.php"><img class="imagenIcono" src="Media/Imagenes/icono_actualizar.png" alt="icno de actualizar">Actualizar datos</a>';
echo '<a href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>';
echo '</div>';
echo '<br>';
echo '<br>';
if ($usuario=="MimiC" && $password=="1902"){
    echo '<div class="colorBlanco">';
    echo "<h2>LISTA DE USUARIOS REGISTRADOS</h2>";
    echo '</div>';
    echo '<br>';
echo '<br>';
    echo "<table border='2' >
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Usuario</th>
        <th>Fecha Registro</th>
    
    </tr>";

    if ( $count>0 ){
        //aqui se pintarian los registro de la DB
      
        while( $row = mysqli_fetch_assoc($resultado)  ){
        echo "<tr>";
        echo"<td>". $row['id'] ."</td>";
        echo"<td>". $row['nombre'] ."</td>";
        echo"<td>". $row['edad'] ."</td>";
        echo"<td>". $row['direccion'] ."</td>";
        echo"<td>". $row['telefono'] ."</td>";
        echo"<td>". $row['correo'] ."</td>";
        echo"<td>". $row['nombre_usuario'] ."</td>";
        echo"<td>". $row['Fecha_Registro'] ."</td>";
        echo "</tr>";
        }
        echo "</table>";
    }else{ 
        echo"<h1 style='color:red' >Sin Ningun registro</h1>";
        }
} else {
    echo '<br><br><br><br><br>';
    echo '<div class="respuesta">';
    echo '<br><br>';
    echo '<img src="Media/Imagenes/Panda_Ingresar.png" alt="panda ingresa">';
    echo '<br>';
    echo '<h2>🙃¡Acceso denegado!😿</h2>';
    echo '<br>';
    echo '<br><br>';
}
?>

