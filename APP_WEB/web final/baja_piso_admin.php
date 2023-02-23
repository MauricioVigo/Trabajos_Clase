<?php
session_start();
$user= $_SESSION["user"];

include "datos.php";
$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
$query="select * from pisos";

$consulta=mysqli_query($conexion,$query) or die ('Error en la consulta'.mysqli_error($conexion));

$nfilas=mysqli_num_rows($consulta);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    
  <meta charset="UTF-8">
  <title>Baja pisos</title>
  <style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    body{
        background: #272727;
        color: #fddb3a;
        font-family: "Montserrat", sans-serif;
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
    button{
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
    
    }
    button:hover {
  color: #fddb3a;
}
input.boton_enviar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
        margin-left: 47%;
        margin-top: 1%;
    }
    input.boton_enviar:hover{
        color: #fddb3a;
    }

    input.boton_borrar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
    }
    input.boton_borrar:hover{
        color: #fddb3a;
    }
  </style>
  </head>
<body>
<h3><?php echo "Bienvenido ". $user?></h3>
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
    <th>Comprado</th>
    </tr>
   
    

</form>

<form action="baja_piso_admin2.php" method="get">
  <p>ID piso: <input type="text" name="id_piso" size="40"></p>
    
    <input type="submit" value="Enviar" class="boton_enviar"><input type="reset" value="Borrar" class="boton_borrar">
    

</form>
</body>
</html>

<?php
if($nfilas>0){

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
    echo '<td>'.$resultado['comprado'].'</td>';
    echo ' </tr>';
  }  
     
    echo '</table>';
    echo '<p><a href="indexadmin.php"><button>Volver</button></a></p>';
    
}
?>