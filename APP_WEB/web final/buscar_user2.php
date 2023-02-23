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

$user_name=$_REQUEST["name_user"];
$sql = "SELECT name, mail, password, type, id FROM users where name='$user_name';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
 // Muestra los datos de la fila buscada
 $row = mysqli_fetch_assoc($result);   
  
  echo "<center><h1> Datos usuario: </h1></center>";
  echo "<form>";

  echo " <p> El Id es :  <input type='text' name='id' value=".$row['id']." readonly>";    
  echo " <p> Nombre: <input type='text' name='name' value=".$row['name']." readonly></p>";
  echo " <p> Correo: <input type='text' name='correo' value=".$row['mail']." readonly></p>";
  echo " <p> Password: <input type='text' name='pass' value=".$row['password']." readonly></p>";
  echo " <p> Tipo de usuario: <input type='text' name='type' value=".$row['type']." readonly></p>";


  
  echo "<br>";
     
  echo "</form>";
  echo '<p><a href="buscar_user.php"><button>Volver</button></a></p>';
} else {
    echo "No existe ese usuario";
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