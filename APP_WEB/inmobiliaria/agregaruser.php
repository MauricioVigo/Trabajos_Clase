<?php
if (isset($_REQUEST['agregar'])){
$name=$_REQUEST['name'];
$mail=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die ('No se puede conectar con la Base de datos');

$query="insert into usuario values(null,'$name','$mail','$pass')";

$consulta=mysqli_query($conexion,$query) or die("Fallo en consulta");

if ($conexion) {
    echo "Usuario creado con exito";
    echo '<p><a href="index.html">Volver al inicio</a></p>';
    echo '<p><a href="agregaruser.php">Agregar otro usuario</a></p>';
}

else{
echo "Usuario no dado de alta";
}

mysqli_close($conexion);
}

else{
echo '<form action="agregaruser.php" method="post">';
echo '<h1>Agregar un nuevo usuario</h1>';
echo '<p>Nombre:<input type="text" name="name"></p>';
echo '<p>Correo: <input type="email" name="email"></p>';
echo '<p>Password:<input type="password" name="pass"></p>';
echo '<p><input type="submit" value="Agregar nuevo usuario" name="agregar"></p>';
echo '<p><a href="index.html">Volver al inicio</a></p>';
}
?>