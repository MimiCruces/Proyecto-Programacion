<?php
require "conexionBD.php";
mysqli_set_charset($conexion,'utf8');
//genear el query
$consulta_sql="SELECT * FROM usuario";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
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

    echo "<h1><a href='EliminarUsuario.php'>ElimnarUsuario</a></h1>";

?>