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
    caption {
    display: table-caption;
    text-align: -webkit-center;
    margin-top: 35%;
    margin-bottom: -25%;
}
  </style>
  </head>
  <body>

  </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "final";
// Crear la Conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprueba la conexion
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$id_piso=$_REQUEST["id_piso"];
// Comando SQL de insertar
$sql = "DELETE FROM pisos where Codigo_piso='$id_piso'";

if (mysqli_query($conn, $sql)) {
    echo "Piso borrado correctamente";
    echo "<br>";
    echo '<a href="baja_piso_admin.php">Volver</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<br>";
    echo '<p><a href="baja_piso_admin.php"><button>Volver</button></a><p>';
}
mysqli_close($conn);
?>
