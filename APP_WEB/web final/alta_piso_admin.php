<?php
session_start();
$user= $_SESSION["user"];
if (isset($_REQUEST["alta"])){

$calle=$_REQUEST["calle"];
$numero=$_REQUEST["numero"];
$piso=$_REQUEST["piso"];
$puerta=$_REQUEST["puerta"];
$cp=$_REQUEST["cp"];
$metros=$_REQUEST["metros"];
$zona=$_REQUEST["zona"];
$precio=$_REQUEST["precio"];
$img=$_REQUEST["img"];
$user=$_REQUEST["user"];
$comprado="no";

include "datos.php";
$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
$copiarFichero = false;
if (is_uploaded_file ($_FILES['img']['tmp_name']))
      {
         $nombreDirectorio = "C:/AppServ/www/practicafinal/img/";
         $nombreFichero = $_FILES['img']['name'];
         $copiarFichero = true;


         // Si ya existe un fichero con el mismo nombre, renombrarlo con idunico
         $nombreCompleto = $nombreDirectorio . $nombreFichero;

         if (is_file($nombreCompleto))
         {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
         }
      }
       // Detectar si el archivo supera el tamaño maximo del .ini y que accion tomar
       else if ($_FILES['img']['error'] == UPLOAD_ERR_FORM_SIZE){
        echo "El Archivo supera el tamaño maximo";
   }
   // No se ha introducido ningún fichero
   else if ($_FILES['img']['name'] == ""){
    $nombreFichero = '';
   }
   // El fichero introducido no se ha podido subir
   else
   {
      echo "No se ha podido subir el fichero";
      $nombreFichero = '';
   }

$query ="Insert into pisos values(null,'$calle',$numero,$piso,'$puerta',$cp,$metros,'$zona',$precio,'$nombreFichero',$user,'$comprado')" or die ("Error en la consulta".mysqli_error($conexion));

if ($copiarFichero)
         move_uploaded_file($_FILES['img']['tmp_name'],
         $nombreDirectorio . $nombreFichero);

$consulta=mysqli_query($conexion,$query) or die ("Error en la consulta".mysqli_error($conexion));

if ($consulta){
    echo "Piso añadido correctamente<br>";
    echo "<a href='./indexvendedor.php'>Volver al inicio</a>";
}
else{
    echo "El piso no se ha agregado correctamente";
    
}
}
else{
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lista un Piso</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    body {
  background: #272727;
  font-family: "Montserrat", sans-serif;
  color: #f6f4e6;
}
form{
  margin: auto;
  text-align: center;
}
input{
  margin-left: 2em;
}
h3{
  color:#fddb3a;
}
input[type=submit]{
  background: #272727;
  color: #f6f4e6;
  font-size: 18pt;
}
input[type=submit]:hover {
  color: #fddb3a;
}
p{
  margin: 2em;
}
button{
        border-radius: 10%;
        color: #f6f4e6;
        background: #272727;
        font-size: 18pt;
    }
button:hover {
  color: #fddb3a;
}
#volver{
  text-align: center;
}
  </style>
</head>
<body>
<script>
    function check(){
    let calle= document.getElementById("calle").value
    let numero= document.getElementById("numero").value
    let piso= document.getElementById("piso").value
    let puerta= document.getElementById("puerta").value
    let cp= document.getElementById("cp").value
    let metros= document.getElementById("metros").value
    let zona= document.getElementById("zona").value
    let precio= document.getElementById("precio").value
    let imagen= document.getElementById("imagen").value
    let usuario= document.getElementById("usuario").value
    let comprado= document.getElementById("comprado").value

   if (calle =="" || numero =="" || piso =="" || puerta =="" || cp =="" || metros =="" || zona =="" || precio=="" || imagen =="" || usuario =="" || comprado =="") {
    alert("Es necesario completar todos los campos para enviar el formulario")
    document.getElementById("name").focus()
   } 
   
}
</script>
<h3><?php echo "Bienvenido ". $user?></h3>
    <form action="alta_piso_admin.php" method="post" enctype="multipart/form-data">
      <h3>Ingresa la informacion de tu piso</h3>
      <p>Calle<input type="text" name="calle" id="calle"></p>
        <p>Numero<input type="text" name="numero" id="numero"></p>
        <p>Piso<input type="text" name="piso" id="piso"></p>
        <p>Puerta<input type="text" name="puerta" id="puerta"></p>
        <p>Cp<input type="text" name="cp" id="cp"></p>
        <p>Metros<input type="text" name="metros" id="metros"></p>
        <p>Zona<input type="text" name="zona" id="zona"></p>
        <p>Precio<input type="text" name="precio" id="precio"></p>
        <p>Imagen<input type="file" name="img" id="imagen"></p>
        <p>Usuario<input type="text" name="user" id="usuario"></p>
        <p>Comprado<input type="text" name="comprado" id="comprado"></p>
        <p><input type="submit" value="Dar de alta" name="alta" onclick="check()"></p>
    </form>
    <p id="volver"><a href="indexadmin.php"><button>Volver</button></a></p>

  </body>
  </html>
<?php 
}
?>