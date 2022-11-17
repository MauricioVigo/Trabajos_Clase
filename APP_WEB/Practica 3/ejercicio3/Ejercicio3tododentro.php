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
    <form action="ejercicio3.php" method="post">
        <h1>Datos del Alumno</h1>
        <div id="div">
            <div>Introduzca su nombre: <input type="text" name="name"></div>
            <div id="div2">Enseñanza:
                <p><input type="radio" name="edu" value="Secundaria">Secundaria
                    <input type="radio" name="edu" value="Bachillerato">Bachillerato<br>
                    <input type="radio" name="edu" value="Grado Medio">Ciclo Medio
                    <input type="radio" name="edu" value="Grado Superior">Ciclo Superior
                </p>
            </div>
        </div>
        <p>Introduzca su telefono: <input type="text" name="phone"> Matriculado <input type="checkbox" name="matri"></p>
        <p>Mostrar datos:
            <select name="mostrar">
                <option value=0>Por pantalla</option>
                <option value=1>En Archivo .txt</option>
            </select>
        </p>
        <input type="submit" name="send" value="Enviar datos">



    </form>
</body>

</html>
<?php
}
?>