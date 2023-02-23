<?php 
session_start();
$user= $_SESSION["user"];
$piso=$_REQUEST['piso'];

include "datos.php";
$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
$query="select * from pisos where Codigo_piso = $piso";
$query2="update pisos set comprado = 'si' where codigo_piso = $piso";
$consulta=mysqli_query($conexion,$query) or die ('Error en la consulta'.mysqli_error($conexion));
$consulta2=mysqli_query($conexion,$query2) or die ('Error en la consulta'.mysqli_error($conexion));
$nfilas=mysqli_num_rows($consulta);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    
  <meta charset="UTF-8">
  <title>Listar</title>
  <style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    body{
        background: #272727;
        color: #fddb3a;
        font-family: "Montserrat", sans-serif;
    }
    h3{
      text-align: center;
    }
    h2{
      text-align: center;
    }
    
    table{
        padding-top: 10%;
        margin: auto;
    }
    th{
        padding: 1em;
    }
    td{
        padding: 1em;
        text-align: center;
        color: white;
    }
    p{
        margin: auto;
        text-align: center;
    }
    input[type=button]{
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
    
    }
    input[type=button]:hover {
  color: #fddb3a;
}

  </style>
  </head>
<body>
  <h4><?php echo "Bienvenido ". $user?></h4>
  <h2>Piso Comprado</h2>
  <h3>Felicidades!!!</h3>
  <form action='comprarpiso2.php' method='post'>
    <table>
    <tr>
    <th>Codigo</th>
    <th>Calle</th>
    <th>Numero</th>
    <th>Piso</th>
    <th>Puerta</th>
    <th>CP</th>
    <th>Metros</th>
    <th>Zona</th>
    <th>Precio</th>
    <th>Imagen</th>
    <th>Usuario</th>
    </tr>
  
</body>
</html>
<?php

if($nfilas=1){

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
    
}
?>
<p><a href='indexcomprador.php'><input type="button" name="volver" value="Volver"></a></p>