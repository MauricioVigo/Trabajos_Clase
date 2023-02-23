<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta</title>
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
    input.boton_borrar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
        margin-top: 1%;
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
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "final";
$nombre=$_REQUEST["name"];
$email=$_REQUEST["mail"];
$clave=$_REQUEST["password"];
$tipo_user=$_REQUEST["type"];

if (empty($nombre) || empty($email) || empty($clave)) {
    echo "Campo requerido no ingresado";
}
else {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Comprueba la conexion
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    
    // Comando SQL de insertar
    $sql = "INSERT INTO users VALUES ('$nombre','$email','$clave','$tipo_user',null)";
    //Ejecuta el insert y controla el error.
    
    if (mysqli_query($conn, $sql)) {
        echo "Usuario añadido correctamente";
        echo "<br>";
        echo '<a href="alta_user.php">Volver</a>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<br>";
        echo '<p><a href="alta_user.php"><button>Volver</button></a><p>';
    }
    mysqli_close($conn);
}


?>
