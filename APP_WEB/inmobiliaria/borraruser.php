<?php

if(isset($_REQUEST['buscar'])){
$nombre=$_REQUEST['nombre'];
$mail=$_REQUEST['mail'];

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die('Error en la conexion a la BBDD');

$query= "delete from usuario where nombres like '$nombre' or correo like '$mail'";

$consulta=mysqli_query($conexion,$query) or die('Error en la consulta'.mysqli_error($conexion));

if(mysqli_affected_rows($conexion)==1){
    echo 'Usuario eliminado';
}
else{
    echo 'Usuario no eliminado';
}

}

else{
echo '<form action="borraruser.php" method="post">';
echo '<h1>Borrar usuarios</h1>';
echo '<p>Borrar por Nombre:<input type="text" name="nombre"></p>';
echo '<p>Borrar por Correo:<input type="email" name="mail"></p>';
echo '<p><input type="submit" value="Buscar" name="buscar"></p>';
echo "</form>";
}
?>