<?php
if(isset($_REQUEST['actualizar'])){
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

$conexion = mysqli_connect("localhost","root","rootroot","inmobiliaria") or die ("Error al conectar con la BBDD");
$query= "select * from pisos where Codigo_piso = $codigo or Calle = '$calle' or numero = $numero or piso = $piso or puerta = '$puerta' or cp = $cp or metros = $metros or zona = '$zona' or precio = $precio or imagen = '$imagen' or usuario_id = $usuario";
$consulta=mysqli_query($conexion,$query) or die ("Error en la consulta".mysqli_error($conexion));


if ($consulta){
    $resultado=mysqli_fetch_array($consulta);

    echo "<form action='actualizarpiso2.php' method='post'>";
    echo "<h1>Actualizar Piso</h1>";
    echo "<p>Codigo:<input type='number' hidden name='id' value='".$resultado['Codigo_piso']."'></p>";
    echo "<p>Calle:<input type='text' name='calle' value='".$resultado['calle']."'></p>";
    echo "<p>Numero:<input type='number' name='num'  value='".$resultado['numero']."'></p>";
    echo "<p>Piso:<input type='number' name='piso' ' value='".$resultado['piso']."'></p>";
    echo "<p>Puerta:<input type='text' name='puerta' value ='".$resultado['puerta']."'></p>";
    echo "<p>CP:<input type='number' name='CP'  value='".$resultado['cp']."'></p>";
    echo "<p>Metros:<input type='number' name='metros' value='".$resultado['metros']."'></p>";
    echo "<p>Zona:<input type='text' name='zona' value='".$resultado['zona']."'></p>";
    echo "<p>Precio:<input type='number' name='precio' value='".$resultado['precio']."'></p>";
    echo "<p>Imagen:<input type='text' name='img' value='".$resultado['imagen']."'></p>";
    echo "<p>Usuario:<input type='number' name='id_user' value='".$resultado['usuario_id']."'></p>";
    echo "<p><input type='submit' value='Actualizar piso' name='actualizar2'></p>";
    echo "</form>";
    echo '<a href="index.html">Volver al inicio</a>';
}

else{
    echo "Error en la consulta";
}

}
else{
echo '<form action="actualizarpiso.php" method="post">';
echo '<h1>Encontrar Piso</h1>';
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
echo '<p><input type="submit" value="Actualizar Piso" name="actualizar"></p>';
echo '</form>';

echo '<a href="index.html">Volver al inicio</a>';
}
?>