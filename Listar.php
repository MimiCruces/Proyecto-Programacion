<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver registros</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="bodyRegistros">
    <form action="respuesta_Listar.php" method="post">
        <div class="ventanaLogin">
            <div class="Contimg">
                <img src="Media/Imagenes/Beagle_Registros.png" alt="PerritoDurmiedo">
            </div>
            <h1>Ver registros👀</h1>
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
    <a  href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>
    <br>
   </div>
    
</body>
</html>