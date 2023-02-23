<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "final";
// Crear la Conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprueba la conexion
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$id=$_REQUEST["id"];
$nombre=$_REQUEST["name"];
$email=$_REQUEST["correo"];
$password=$_REQUEST["pass"];
$tipo_user=$_REQUEST["type"];

// Comando SQL de actualizar

$sql = "UPDATE users SET name='$nombre', mail='$email', password='$password', type='$tipo_user' WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
echo "Usuario actualizado correctamente";
echo "<br>";
echo '<a href="modificar_user.php">Volver</a>';

} else {
 echo "Error actualizando: " . mysqli_error($conn);
}
mysqli_close($conn);
?>