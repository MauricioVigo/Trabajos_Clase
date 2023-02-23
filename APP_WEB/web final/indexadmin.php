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
      <a href="alta_piso_admin.php">Alta</a>
      <a href="baja_piso_admin.php">Baja</a>
      <a href="buscar_piso.php">Buscar</a>
      <a href="modificar_piso.php">Modificar</a>
      <a href="listarpisosadmin.php">Listar</a>
      <a href="logout.php">Logout</a>
      <span>Pisos</span>
      <div class="dot"></div>
    </nav><br>
    <nav class="navMenu2">
      <a href="alta_user.php">Alta</a>
      <a href="baja_user.php">Baja</a>
      <a href="buscar_user.php">Buscar</a>
      <a href="modificar_user_nuevo.php">Modificar</a>
      <a href="listaruser.php">Listar</a>
      <span>Usuarios</span>
      <div class="dot"></div>
    </nav><br>
  
  </body>
  </html>