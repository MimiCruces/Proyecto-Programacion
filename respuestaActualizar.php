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
</head>
<body class="Registro">
    <?php
    if(isset($_POST['actualizar'])){
        //entra si se ha presionado el boton
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
        } else{
            echo "Valida tus credenciales";
        }
    }
    ?>
    <!--En el action se le pone: $_SERVER['PHP_SELF']?> para que se trabaje en el mismo archivo
     sin tener que mandar la peticion a otra pagina-->
    <form action="<?=$_SERVER['PHP_SELF']?>"method="post">
        <div class="ventanaRegistro">
            <img src="Media/Imagenes/qoobee_Actualizar.png" alt="Qoobee">
            <div class="fondoBlanco">
                <h3>Actualiza tus datos</h3>
            </div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre"required value="<?php echo $nombre;?>">
            <br><br>
            <label for="">Edad:</label>
            <input type="number" name="edad" required value="<?php echo $edad;?>">
            <br><br>
            <label for="">Dirección:</label>
            <input type="text" name="direccion"required value="<?php echo $direccion;?>">
            <br><br>
            <label for="">telefono:</label>
            <input type="text" name="telefono"  required value="<?php echo $telefono;?>">
            <br><br>
            <label for="">Correo:</label>
            <input type="email" name="correo" required value="<?php echo $correo;?>">
            <br><br>
            <label for="">Usuario:</label>
            <input type="text" name="usuario" required value="<?php echo $usuario;?>">
            <br><br>
            <label for="">Contraseña:</label>
            <input type="password" name="contraseña"required value="<?php echo $password;?>">
            <br><br>
            <input type="hidden"name="id" value="<?php echo $id;?>">
            <button type="submit" name="actualizar"> <b>Actualizar</b></button>
            <br><br>
            <a href="index.php">Regresar al inicio</a>
            <br><br>
        </div>
    </form>
</body>
</html>
