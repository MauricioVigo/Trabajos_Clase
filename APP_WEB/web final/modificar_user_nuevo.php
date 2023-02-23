<?php
session_start();
$user= $_SESSION["user"];

include "datos.php";
$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
$query="select * from users";

$consulta=mysqli_query($conexion,$query) or die ('Error en la consulta'.mysqli_error($conexion));

$nfilas=mysqli_num_rows($consulta);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    
  <meta charset="UTF-8">
  <title>Modificar user</title>
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
<h3><?php echo "Bienvenido ". $user?></h3>

<table>
    <caption>Lista de todos los usuarios</caption>
<tr>
<th>Usuario</th>
<TH>Correo</TH>
<TH>Tipo</TH>
<TH>ID</TH>
<tr>
<form action="modificar_user2.php" method="get">
  <p>ID usuario: <input type="text" name="id_user" size="40"></p>

    <input type="submit" value="Enviar" class="boton_enviar"><input type="reset" value="Borrar" class="boton_borrar">
    

</form>
</body>
</body>
</html>

<?php
if($nfilas>0){

  for ($i=0; $i <$nfilas; $i++) { 
    $resultado = mysqli_fetch_array($consulta);
    print ("<TR>");
    print ("<TD>" . $resultado['name'] . "</TD>");
    print ("<TD>" . $resultado['mail'] . "</TD>");
    print ("<TD>" . $resultado['type'] . "</TD>");
    print ("<TD>" . $resultado['id'] . "</TD>");
    print ("</TR>");
  }  
     
    echo '</table>';
    echo '<p><a href="indexadmin.php"><button>Volver</button></a></p>';
    
}
?>