<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiza AmiBeagles</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="ventanaLogin">
   <form action="respuestaActualizar.php" method="post">
    <div class="izquierda">
        <div class="fondoBlanco">
            <img src="Media/Imagenes/Panda_Actualizar.png" alt="panda escribiendo">
        </div>
        <h1>¡Actualizar datos!</h1>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/usuario.png" alt="usuario simbolo "  > </label> 
        <br>
        <input type="text" name="usuario" placeholder="Ingrese Usuario" required>
        <br> <br>
        <label for=""><img class="imagenIcono" src="Media/Imagenes/contraseña.png" alt="contraseña simbolo"  > </label>
        <br>
        <input type="password" name="contraseña"  placeholder="Ingrese Contraseña" required >
        <br><br>
        <button type="submit"><b>Confirmar datos</b></button>
       <br><br><br>
    </div>
   </form>
    <div class="colorBlanco">
    <a  href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>
    </div>
</body>
</html>
