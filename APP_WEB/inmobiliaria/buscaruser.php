<?php
if (isset($_REQUEST['buscar'])) {
$nombre=$_REQUEST['nombre'];
$mail=$_REQUEST['mail'];

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die('Error en la conexion a la BBDD');
$query="select * from usuario where nombres like '$nombre' or correo like '$mail'";
$consulta=mysqli_query($conexion,$query) or die ('Fallo en la consulta');


$nfilas=mysqli_num_rows($consulta);
if ($nfilas>0){
    print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>Usuario</TH>");
         print ("<TH>Nombre</TH>");
         print ("<TH>Correo</TH>");
         print ("<TH>Clave</TH>");
         print ("</TR>");


         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysqli_fetch_array ($consulta);
            print ("<TR>");
            print ("<TD>" . $resultado['usuario_id'] . "</TD>");
            print ("<TD>" . $resultado['nombres'] . "</TD>");
            print ("<TD>" . $resultado['correo'] . "</TD>");
            print ("<TD>" . $resultado['clave'] . "</TD>");
            print ("</TR>");
         }

         print ("</TABLE>");
         echo '<a href="index.html">Volver al inicio</a>';
}
else{
    echo 'No hay datos disponibles';
    echo '<a href="index.html">Volver al inicio</a>';
}

}

else{
echo '<form action="buscaruser.php" method="post">';
echo '<h1>Buscar usuarios</h1>';
echo '<p>Buscar por Nombre:<input type="text" name="nombre"></p>';
echo '<p>Buscar por Correo:<input type="email" name="mail"></p>';
echo '<p><input type="submit" value="Buscar" name="buscar"></p>';
echo "</form>";
}
?>