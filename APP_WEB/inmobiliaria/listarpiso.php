<?php
$conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die ('Error al conectar a la BBDD');
$query="select * from pisos";

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
    echo "<td><img src='./img/".$resultado['imagen']."' width='100px'></td>";
    echo '<td>'.$resultado['usuario_id'].'</td>';
    echo ' </tr>';
  }  
    echo '</table>';
    echo '<a href="index.html">Volver al inicio</a>';
}
?>