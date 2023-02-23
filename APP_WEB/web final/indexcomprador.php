<?php
session_start();
$user= $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <link rel="stylesheet" href="./css/index.css">

<body>
  <h1>Inmobiliaria Don Bosco</h1>
  <h3><?php echo "Bienvenido ". $user?></h3>
    <nav class="navMenu">
      <a href="comprarpiso.php">Buscar Piso</a>
      <a href="./logout.php">Logout</a>
      <div class="dot"></div>
    </nav>
  </body>
  </html>