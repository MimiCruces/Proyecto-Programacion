<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar AmiBeagles</title>
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
    <!-- CSS -->
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
</head>

<body class="bodyEliminar">
    <div>
        <table class="tableEliminar" >
            <tr>
                <td colspan="2" class="texto1">Eliminar usuario</td>
            </tr>
            <tr>
                <td class="tdEliminar izquierda">
                    <!-- Aquí puedes agregar tu imagen -->
                    <img class="imgAncho" src="Media/Imagenes/Beagle_Delete.png" alt="Descripción de la imagen">
                </td>
                <td class="tdEliminar derecha">
                    <!-- Aquí puedes agregar tu formulario -->
                    <form action="respuestaEliminar.php" method="post">
                        <label for=""><img class="imagenIcono" src="Media/Imagenes/usuario.png" alt="usuario simbolo "  > </label> 
                        <br>
                        <input type="text" name="id" placeholder="Ingrese ID" required>
                        <br> <br> <br>
                        <label for=""><img class="imagenIcono" src="Media/Imagenes/contraseña.png" alt="contraseña simbolo"  > </label>
                        <br>
                        <input type="password" name="contraseña"  placeholder="Ingrese Contraseña" required >
                        <br><br> <br>
                        <button type="submit"><b>ELIMINAR</b></button>
                        <br> <br>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <div class="colorBlanco">
    <a  href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>
    </div>
</body>
</html>