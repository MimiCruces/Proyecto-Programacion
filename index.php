<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Programación</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
</head>
<body>
   <form action="respuestaLogin.php" method="post">
    <div class="ventanaLogin">
        <div class="Contimg">
            <img src="Media/Imagenes/Beagle_Login.png" alt="PerritoDurmiedo">
        </div>
        <h1>🐾¡Bienvenido!🐾</h1>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/usuario.png" alt="usuario simbolo "  > </label> 
        <br>
        <input type="text" name="usuario" placeholder="Ingresa Usuario" required>
        <br> <br>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/contraseña.png" alt="contraseña simbolo"  > </label>
        <br>
        <input type="password" name="contraseña"  placeholder="Ingresa Contraseña" required >
        <br><br>
        <button><b>INGRESAR</b></button>
        <br> <br> <br>
    
    </div>
   </form>
</body>
</html>