<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmiBeagles</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="Login">
   <form action="respuestaLogin.php" method="post">
    <div class="ventanaLogin">
        <div class="Contimg">
            <img src="Media/Imagenes/Beagle_Login.png" alt="PerritoDurmiedo">
        </div>
        <h1>🐾¡Bienvenido!🐾</h1>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/usuario.png" alt="usuario simbolo "  > </label> 
        <br>
        <input type="text" name="usuario" placeholder="Ingrese Usuario" required>
        <br> <br>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/contraseña.png" alt="contraseña simbolo"  > </label>
        <br>
        <input type="password" name="contraseña"  placeholder="Ingrese Contraseña" required >
        <br><br>
        <button type="submit"><b>INGRESAR</b></button>
        <br> <br> <br>
    </div>
   </form>
   <br><br>
   <div class="colorBlanco">
    <a href="Registro.php"><img class="imagenIcono" src="Media/Imagenes/icono_registrar.png" alt="icono de registro">Registrar</a>
    <a href="Eliminar.php"><img class="imagenIcono" src="Media/Imagenes/icono_eliminar.png" alt="icono eliminar">Eliminar usuario</a>
    <a href="Listar.php"><img class="imagenIcono" src="Media/Imagenes/icono_listar.png" alt="icono de listar">Listar usuarios</a>
    <a href="Editar.php"><img class="imagenIcono" src="Media/Imagenes/icono_actualizar.png" alt="icno de actualizar">Actualizar datos</a>
    <br>
   </div>
</body>