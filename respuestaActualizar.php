<?php
    include "conexionBD.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiza datos</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
</head>
<body class="Registro">
    <?php
    //entra si se ha presionado el boton
    if(isset($_POST['actualizar'])){ 
        mysqli_set_charset($conexion,'utf8');
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $usuario=$_POST['usuario'];
        $password=$_POST['contraseña'];
        $id=$_POST['id'];
        $sql="UPDATE usuario set nombre='".$nombre."', edad='".$edad."',direccion='".$direccion."',telefono='".$telefono."',correo='".$correo."',nombre_usuario='".$usuario."', password='".$password."' where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);
        if ($resultado) {
            echo " los datos se actualizaron";
        } else {
          echo  "no se pudo actualizar";
        }
        mysqli_close($conexion);    
    }else{
        //entra sino se ha presionado el boton
        $usuario = $_POST['usuario'];
        $password = $_POST['contraseña'];
        $q = "SELECT * FROM usuario WHERE nombre_usuario= '$usuario' AND password = '$password'";
        $cont = "SELECT COUNT(*) AS contar FROM usuario WHERE nombre_usuario= '$usuario' AND password = '$password'";
        $consulta1 = mysqli_query($conexion,$cont);
        $array1 = mysqli_fetch_array($consulta1);
        $consulta = mysqli_query($conexion,$q);
        $array = mysqli_fetch_assoc($consulta);
        if($array1['contar']>0){
        $nombre=$array['nombre'];
        $edad=$array['edad'];
        $direccion=$array['direccion'];
        $telefono=$array['telefono'];
        $correo=$array['correo'];
        $usuario=$array['nombre_usuario'];
        $password=$array['password'];
        $id=$array['id'];
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
        <div class="ventanaRegistro">
            <img src="Media/Imagenes/qoobee_Actualizar.png" alt="Qoobee">
            <div class="fondoBlanco">
                <h3>Actualiza tus datos</h3>
            </div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre" required value="' . $nombre . '">
            <br><br>
            <label for="">Edad:</label>
            <input type="number" name="edad" required value="' . $edad . '">
            <br><br>
            <label for="">Dirección:</label>
            <input type="text" name="direccion" required value="' . $direccion . '">
            <br><br>
            <label for="">Telefono:</label>
            <input type="text" name="telefono" required value="' . $telefono . '">
            <br><br>
            <label for="">Correo:</label>
            <input type="email" name="correo" required value="' . $correo . '">
            <br><br>
            <label for="">Usuario:</label>
            <input type="text" name="usuario" required value="' . $usuario . '">
            <br><br>
            <label for="">Contraseña:</label>
            <input type="password" name="contraseña" required value="' . $password . '">
            <br><br>
            <input type="hidden" name="id" value="' . $id . '">
            <button type="submit" name="actualizar"><b>Actualizar</b></button>
            <br><br>
            <a href="index.php">Regresar al inicio</a>
            <br><br>
        </div>
    </form>';
        } else{
            echo '<div class="Ingreso">';
            echo '<br><br>';
            echo '<img src="Media/Imagenes/Panda_Mal.png" alt="panda ingresar">';
            echo '<br>';
            echo '<h2>🙃¡Credenciales incorrectas!😾</h2>';
            echo "<h3>" . "Usuario: " . $_POST['usuario'] . "</h3>" ;
            echo "<h3>" . "password: " . $_POST['contraseña'] . "</h3>";
            echo '<br>';
            echo '<div class="colorBlanco">';
            echo '<a href="Editar.php"><img class="imagenIcono" src="Media/Imagenes/icono_regresar.png" alt="icono de regreso">Regresar</a>';
            echo '</div>';
            echo '<br>';
            echo '</div>';
        }  
    }
    ?>
    <!--En el action se le pone: $_SERVER['PHP_SELF']?> para que se trabaje en el mismo archivo
     sin tener que mandar la peticion a otra pagina-->
</body>
</html>
