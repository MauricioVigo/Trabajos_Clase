<?php
if (isset($_REQUEST["send"])){
    $name=$_REQUEST["name"];
    $phone=$_REQUEST["phone"];
    $edu=$_REQUEST["edu"];
    $mostrar=$_REQUEST["mostrar"];
    $nombrearchivo="datos.txt";
    /*isset($_post["matri"] revisa si el check box esta checked*/ 
 if ($mostrar==0 && isset($_POST["matri"])) {
    echo "El Alumno $name, con telefono $phone, y esta matriculado en $edu ";
 }
 elseif ($mostrar==0 && !isset($_POST["matri"])) {
    echo "El Alumno $name, con telefono $phone, y no esta matriculado en $edu ";
 }
elseif ($mostrar==1 && isset($_POST["matri"])){
 $archivo=fopen($nombrearchivo,"w");
 fwrite($archivo,"El Alumno $name, con telefono $phone, y esta matriculado en $edu ");
 fclose($archivo); 
 print "<a href='./datos.txt'>Mostrar datos</a>";
 }
 elseif ($mostrar=1 && !isset($_POST["matri"])) {
$archivo=fopen($nombrearchivo,"w");
 fwrite($archivo,"El Alumno $name, con telefono $phone, y no esta matriculado en $edu ");
 fclose($archivo); 
 print "<a href='./datos.txt'>Mostrar datos</a>";
 }
}
?>