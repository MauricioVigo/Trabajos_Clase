<?php

$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "final";
// Crea conexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprueba:
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$id_piso=$_REQUEST["id_piso"];
$sql = "SELECT * FROM pisos where Codigo_piso='$id_piso';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
 // Muestra los datos de la fila buscada
 $row = mysqli_fetch_assoc($result);   
  
  echo "<center><h1> Datos piso: </h1></center>";
  echo "<form method='get'>";

  echo " <p> El Id es :  <input type='text' name='id' value=".$row['Codigo_piso']." readonly>";    
  echo " <p> Calle : <input type='text' name='calle' value=".$row['calle']." readonly ></p>";
  echo " <p> Numero : <input type='text' name='numero' value=".$row['numero']." readonly></p>";
  echo " <p> Piso : <input type='text' name='piso' value=".$row['piso']." readonly></p>";
  echo " <p> Puerta : <input type='text' name='puerta' value=".$row['puerta']." readonly></p>";
  echo " <p> CP : <input type='text' name='cp' value =".$row['cp']."  readonly></p>";
  echo " <p> metros : <input type='text' name='metros' value =".$row['metros']." readonly></p>";
  echo " <p> zona : <input type='text' name='zona' value =".$row['zona']." readonly></p>";
  echo " <p> precio : <input type='text' name='precio' value =".$row['precio']." readonly></p>";
  echo " <p> usuario_id : <input type='text' name='usuario_id' value =".$row['usuario_id']." readonly></p>";
  echo " <p> comprado : <input type='text' name='comprado' value =".$row['comprado']." readonly></p>";


  
  
  echo "<br>";
     
  echo "</form>";
  echo '<p><a href="buscar_piso.php"><button>Volver</button></a></p>';
} else {
    echo "No existe ese piso";
}
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en" >
<head>
    
  <meta charset="UTF-8">
  <title>Modificar</title>
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
        color: #f6f4e6;
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
input{
  width:180px;
	padding:3px 10px;
	border:1px solid #fddb3a;
	border-radius: 10px;
	background-color:#f6f6f6;
	margin: 10px 4;
	display:inline-block
}
    input.boton_enviar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
        margin-top: 0%;
    }
    input.boton_enviar:hover{
        color: #fddb3a;
    }

    caption {
    display: table-caption;
    text-align: -webkit-center;
    margin-top: 35%;
    margin-bottom: -25%;
}
select {
  width:180px;
	padding:3px 10px;
	border:1px solid #fddb3a;
	border-radius: 10px;
	background-color:#f6f6f6;
	margin: 10px 4;
	display:inline-block
}

  </style>
  </head>
  <body>
  
  </body>