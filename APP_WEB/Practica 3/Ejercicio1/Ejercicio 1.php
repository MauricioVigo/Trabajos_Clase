<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        fieldset{
            border: 1px solid rgb(0, 0, 248);
            background-color: rgb(161, 183, 253);
            padding: 1em;
        }
        legend{
            border: 1px solid blue;
            background-color: white;
        }
        p{
            font-size: 14pt;
        }
    </style>
</head>

<body>
    <form>
        <fieldset><legend>Formulario</legend>
        <p>Escribe El alto y ancho (0 < numeros <=) y mostrara un rectangulo de estrellas de ese tamaño</p>

        <p>Ancho:<input type="text" name="ancho"></p>
        <p>Alto : <input type="text" name="alto"></p>

        <input type="submit" value="Dibujar">
        <input type="reset" value="Borrar">
    </fieldset>

    </form>
   
</body>

</html>
 
<?php
$size = 7;
for($i = 0; $i < $size; $i++){
      for($j = 0; $j < $size; $j++){
    if($i = 0 || $i = $size-1){
      echo('@');
    }elseif($j = 0 || $j = $size-1)
      echo('@');
    else
      echo('*');
  }
  echo("</br>");

}
?>
