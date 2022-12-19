<?php
    $nombre=$_REQUEST['nombre'];
    $mail=$_REQUEST['mail'];
    $clave=$_REQUEST['clave'];
    $id=$_REQUEST['id']; 

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die("Ha fallado la conexion: " . mysqli_connect_error());
$query= "update usuario set nombres='$nombre', correo = '$mail', clave = '$clave' where usuario_id = $id";
echo $query.'<br>';
$consulta=mysqli_query($conexion,$query) or die ("Error en la consulta: ".mysqli_error($conn));
if ($consulta){
    echo 'Cambio exitoso';
    echo '<a href="index.html">Volver al inicio</a>';
}
else{
    echo 'cambio no realizado';
    echo '<a href="index.html">Volver al inicio</a>';
}




?>