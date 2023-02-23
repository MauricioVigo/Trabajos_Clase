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
$id_piso=$_REQUEST["id"];
$calle=$_REQUEST["calle"];
$numero=$_REQUEST["numero"];
$piso=$_REQUEST["piso"];
$puerta=$_REQUEST["puerta"];
$cp=$_REQUEST["cp"];
$metros=$_REQUEST["metros"];
$zona=$_REQUEST["zona"];
$precio=$_REQUEST["precio"];
$usuario_id=$_REQUEST["usuario_id"];
$comprado=$_REQUEST["comprado"];

// Comando SQL de actualizar

$sql = "UPDATE pisos SET calle='$calle', numero='$numero', piso='$piso', puerta='$puerta', cp='$cp', metros='$metros', zona='$zona', precio='$precio', usuario_id='$usuario_id', comprado='$comprado' WHERE Codigo_piso='$id_piso'";
if (mysqli_query($conn, $sql)) {
echo "Piso actualizado correctamente";
echo "<br>";
echo '<a href="modificar_piso.php">Volver</a>';

} else {
 echo "Error actualizando: " . mysqli_error($conn);
}
mysqli_close($conn);
?>