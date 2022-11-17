<?php
if (isset($_REQUEST["save"])) {
   $name=$_REQUEST["name"];
   $work=$_REQUEST["work"];
   $phone=$_REQUEST["phone"];
   $add=$_REQUEST["add"];
   $other=$_REQUEST["other"];
   $filename="agenda.txt";
   $file=fopen($filename,"a");
   fwrite($file, "$name;$work;$phone;$add;$other\n"); # para que se guarden en lineas diferentes \n

   echo "<a href='./ejercicio4.php'>Regresar</a>";

}
elseif (isset($_REQUEST["show"])) {
    $name=$_REQUEST["name"];
    $work=$_REQUEST["work"];
    $phone=$_REQUEST["phone"];
    $add=$_REQUEST["add"];
    $other=$_REQUEST["other"];
    $filename="agenda.txt";

    $file=fopen($filename,"r");
    while (($line=fgets($file))!==false) {
        echo $line."<br>";
    }
    echo "<a href='./ejercicio4.php'>Regresar</a>";
 
 }

 elseif (isset($_REQUEST["find"])) {
    $name=$_REQUEST["name"];
    $work=$_REQUEST["work"];
    $phone=$_REQUEST["phone"];
    $add=$_REQUEST["add"];
    $other=$_REQUEST["other"];
    $filename="agenda.txt";
    $file=fopen($filename,"r");

    while (($line =fgets($file)) !==false) {
        $array=explode(";",$line);
        
        if (in_array($name,$array)) { #in_array busca si existe una cadena en el array
            echo "Contacto ubicado<br>";
            echo "Su Informacion es Nombre: $array[0], Trabaja en $array[1], Su telefono es $array[2], su direccion es: $array[3]<br>";
        }
        
    }
    echo "<a href='./ejercicio4.php'>Regresar</a>";
 }
else{
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>

<body>
    <form action="ejercicio4.php" method="post">
  <h2>Agenda Virtual PHP</h2>
  <h1>Contactos</h1>

  <p>Nombre:<input type="text" name="name"><br></p>
  <p>Trabajo:<input type="text" name="work"><br></p>
  <p>Telefono:<input type="text" name="phone"><br></p>
  <p>Direccion:<input type="text" name="add"><br></p>
  <p>Otras:<input type="text" name="other"><br></p>
<input type="submit" name="save" value="Guardar">
<input type="reset"><br>
<input type="submit" name="show" value="Mostrar contactos">
<input type="submit" name="find" value="buscar">
    </form>
</body>

</html>

<?php
}
?>