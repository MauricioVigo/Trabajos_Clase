<?php
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

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die ('Error al conectar con la base de datos');
$query = "update pisos set calle = '$calle', numero = $numero, piso = $piso, puerta = '$puerta', cp = $cp, metros = $metros, zona = '$zona', precio = $precio, imagen = '$imagen', usuario_id = $usuario where Codigo_piso = $codigo";

$consulta=mysqli_query($conexion,$query);

if($consulta){
    echo 'Piso actualizado<br>';
    echo '<a href="index.html">Volver al inicio</a>';
}
else{
    echo 'Piso no actualizado';
    echo '<a href="index.html">Volver al inicio</a><br>';
    echo mysqli_error($conexion);
    echo $codigo;
}
?>