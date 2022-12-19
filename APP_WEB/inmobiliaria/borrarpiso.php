<?php
if(isset($_REQUEST['borrar'])){
$codigo=$_REQUEST['id'];
$calle=$_REQUEST['calle'];
$numero=$_REQUEST['num'];
$piso=$_REQUEST['piso'];
$puerta=$_REQUEST['puerta'];
$cp=$_REQUEST['CP'];
$metros=$_REQUEST['metros'];
$zona=$_REQUEST['zona'];
$precio=$_REQUEST['precio'];
$imagen=$_REQUEST['img'];
$usuario=$_REQUEST['id_user'];

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die('Error en la conexion de la BBDD');

$query="delete from pisos where Codigo_piso = $codigo or Calle = '$calle' or numero = $numero or piso = $piso or puerta = '$puerta' or cp = $cp or metros = $metros or zona = '$zona' or precio = $precio or imagen = '$imagen' or usuario_id = $usuario";

$consulta=mysqli_query($conexion,$query) or die('Error en la consulta'. mysqli_error($conexion));

if(mysqli_affected_rows($conexion)==1){
    echo 'Piso eliminado';
}
else{
    echo 'Error al eliminar el piso';
}

}

else{

    echo '<form action="borrarpiso.php" method="post">';
    echo '<h1>Borrar Piso</h1>';
    echo '<p>Codigo:<input type="number" name="id" value="0" ></p>';
    echo '<p>Calle:<input type="text" name="calle"></p>';
    echo '<p>Numero:<input type="number" name="num" value="0"></p>';
    echo '<p>Piso:<input type="number" name="piso" value="0"></p>';
    echo '<p>Puerta:<input type="text" name="puerta"></p>';
    echo '<p>CP:<input type="number" name="CP" value="0"></p>';
    echo '<p>Metros:<input type="number" name="metros" value="0"></p>';
    echo '<p>Zona:<input type="text" name="zona"></p>';
    echo '<p>Precio:<input type="number" name="precio" value="0"></p>';
    echo '<p>Imagen:<input type="text" name="img"></p>';
    echo '<p>Usuario:<input type="number" name="id_user" value="0"></p>';
    echo '<p><input type="submit" value="Borrar Piso" name="borrar"></p>';
    echo '</form>';
    
    echo '<a href="index.html">Volver al inicio</a>';
}
?>