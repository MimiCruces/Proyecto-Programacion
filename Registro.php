<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Ami Beagles</title>
    <link rel="shortcut icon" href="Media/Imagenes/faviconBeagle.png" type="image/x-icon">
    <link rel="stylesheet" href="Media/estilos.css">
    <!-- Metadatos -->
    <meta name="author" content="Noemi Cruces Hernández" >
    <meta name="description" content="Pagina web proyecto">
</head>
<body class="Registro">
    <form action="respuestaRegistro.php"method="post">
        <div class="ventanaRegistro">
            <img src="Media/Imagenes/Beagle.gif" alt="perrito moviendose">
            <div class="fondoBlanco">
                <h3>Crea una nueva cuenta de AmiBeagles</h3>
            </div>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/Nombre.png" alt="icono de nombre"></label>
            <input type="text" name="nombre"placeholder="Nombre" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/edad.png" alt="icono de edad"></label>
            <input type="number" name="edad"placeholder="Edad" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/direccion.png" alt="icono de direccion"></label>
            <input type="text" name="direccion"placeholder="Direccion" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/telefono.png" alt="icono de telefono"></label>
            <input type="text" name="telefono" placeholder="Telefono" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/correo.png" alt="icono de correo"></label>
            <input type="email" name="correo"placeholder="Correo" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/usuario.png" alt="icono de usuario"></label>
            <input type="text" name="usuario"placeholder="Usuario" required>
            <br><br>
            <label for=""><img class="imagenIcono" src="Media/Imagenes/contraseña.png" alt="icono de contraseña"></label>
            <input type="password" name="contraseña"placeholder="Contraseña" required>
            <br><br>
            <button type="submit"><b>Registrar</b></button>
            <br><br>
        </div>
    </form>
    <br>
    <div class="colorBlanco">
    <a  href="index.php"><img class="imagenIcono" src="Media/Imagenes/icono_inicio.png" alt="icono de inicio">Ir a página principal</a>
    </div>
</body>
</html>