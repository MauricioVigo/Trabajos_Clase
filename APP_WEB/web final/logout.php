<?php 
session_start();
session_destroy();
header("Location:index.php"); /*Redirige a otro documento*/

?>