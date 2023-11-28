<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <!-- Metadatos -->
    <meta name="author" content="Ing. Aaron Velasco" >
    <meta name="description" content="Pagina web de test">
    <!-- CSS -->
    <link rel="stylesheet" href="media/estilos.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="media/img/favicon.png" type="image/x-icon">
  
</head>

<body class="bodyEliminar">
    <div>
        <table >
            <tr>
                <td colspan="2" class="texto1">Eliminar usuario</td>
            </tr>
            <tr>
                <td class="izquierda">
                    <!-- Aquí puedes agregar tu imagen -->
                    <img class="imgAncho" src="Media/Imagenes/Beagle_Delete.png" alt="Descripción de la imagen">
                </td>
                <td class="derecha">
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
    
    
</body>
</html>