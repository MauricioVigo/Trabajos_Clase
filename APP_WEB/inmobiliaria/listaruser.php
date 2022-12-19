<?php
$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die ('Error al conectar con la BBDD');

$query='select * from usuario';

$consulta=mysqli_query($conexion,$query) or die ('Error en la consulta');
$nfilas = mysqli_num_rows($consulta);

if($nfilas > 0){
echo '<table>';
echo '<tr>';
echo '<th>Usuario</th>';
echo '<TH>Nombre</TH>';
echo '<TH>Correo</TH>';
echo '<TH>Clave</TH>';
echo '<tr>';

for ($i=0; $i < $nfilas ; $i++) { 
    $resultado=mysqli_fetch_array($consulta);
    print ("<TR>");
    print ("<TD>" . $resultado['usuario_id'] . "</TD>");
    print ("<TD>" . $resultado['nombres'] . "</TD>");
    print ("<TD>" . $resultado['correo'] . "</TD>");
    print ("<TD>" . $resultado['clave'] . "</TD>");
    print ("</TR>");
}

echo '</table>';
echo '<a href="index.html">Volver al inicio</a>';
}

?>