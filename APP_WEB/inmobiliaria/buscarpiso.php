<?php
if (isset($_REQUEST['buscar'])){
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

$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die ('Error al conectar a la BBDD');
$query="select * from pisos where Codigo_piso = $codigo or Calle = '$calle' or numero = $numero or piso = $piso or puerta = '$puerta' or cp = $cp or metros = $metros or zona = '$zona' or precio = $precio or imagen = '$imagen' or usuario_id = $usuario";

$consulta=mysqli_query($conexion,$query) or die ('Error en la consulta'.mysqli_error($conexion));

$nfilas=mysqli_num_rows($consulta);
if($nfilas>0){
    print ('<table>');
    print ('<tr>');
    print ('<th>Codigo</th>');
    echo '<th>Calle</th>';
    echo '<th>Numero</th>';
    echo '<th>Piso</th>';
    echo '<th>Puerta</th>';
    echo '<th>CP</th>';
    echo '<th>Metros</th>';
    echo '<th>Zona</th>';
    echo '<th>Precio</th>';
    echo '<th>Imagen</th>';
    echo '<th>Usuario</th>';
    echo ' </tr>';

  for ($i=0; $i <$nfilas; $i++) { 
    $resultado = mysqli_fetch_array($consulta);
    print ('<tr>');
    echo '<td>'.$resultado['Codigo_piso'].'</td>';
    echo '<td>'.$resultado['calle'].'</td>';
    echo '<td>'.$resultado['numero'].'</td>';
    echo '<td>'.$resultado['piso'].'</td>';
    echo '<td>'.$resultado['puerta'].'</td>';
    echo '<td>'.$resultado['cp'].'</td>';
    echo '<td>'.$resultado['metros'].'</td>';
    echo '<td>'.$resultado['zona'].'</td>';
    echo '<td>'.$resultado['precio'].'</td>';
    echo "<td><img src='./img/".$resultado['imagen']."' width='100px'>'</td>";
    echo '<td>'.$resultado['usuario_id'].'</td>';
    echo ' </tr>';
  }  
    echo '</table>';
    echo '<a href="index.html">Volver al inicio</a>';
}
else{
    echo 'No hay datos';
}
}
else{
echo '<form action="buscarpiso.php" method="post">';
echo '<h1>Buscar Piso</h1>';
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
echo '<p><input type="submit" value="Buscar Piso" name="buscar"></p>';
echo '</form>';
}
?>