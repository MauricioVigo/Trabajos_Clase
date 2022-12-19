<?php
if (isset($_REQUEST['agregar'])) {
   $codigo=$_REQUEST['id'];
   $calle=$_REQUEST['calle'];
   $numero=$_REQUEST['num'];
   $piso=$_REQUEST['piso'];
   $puerta=$_REQUEST['puerta'];
   $cp=$_REQUEST['CP'];
   $metros=$_REQUEST['metros'];
   $zona=$_REQUEST['zona'];
   $precio=$_REQUEST['precio'];
   $imagen=$_REQUEST['img'];
   $usuario=$_REQUEST['id_user'];

   $conexion=mysqli_connect('localhost','root','rootroot','inmobiliaria') or die('Error en la conexion a la BBDD');
   $copiarFichero = false;
if (is_uploaded_file ($_FILES['img']['tmp_name']))
      {
         $nombreDirectorio = "C:/AppServ/www/inmobiliaria/img/";
         $nombreFichero = $_FILES['img']['name'];
         $copiarFichero = true;


         // Si ya existe un fichero con el mismo nombre, renombrarlo con idunico
         $nombreCompleto = $nombreDirectorio . $nombreFichero;

         if (is_file($nombreCompleto))
         {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
			echo  "---".$nombreFichero."---";
         }
      }

      // Detectar si el archivo supera el tamaño maximo del .ini y que accion tomar
      else if ($_FILES['img']['error'] == UPLOAD_ERR_FORM_SIZE){
      	 echo "El Archivo supera el tamaño maximo";
      }

      // No se ha introducido ningún fichero
      else if ($_FILES['img']['name'] == ""){
         $nombreFichero = '';
         echo "No se ha subido ningun fichero";
        }


   // El fichero introducido no se ha podido subir
      else
      {
         echo "No se ha podido subir el fichero";
         $nombreFichero = '';
      }

   $query="insert into pisos values($codigo,'$calle',$numero,$piso,'$puerta',$cp,$metros,'$zona',$precio,'".$nombreFichero."',$usuario)";
   
   if ($copiarFichero)
         move_uploaded_file($_FILES['img']['tmp_name'],
         $nombreDirectorio . $nombreFichero);

   $consulta=mysqli_query($conexion,$query) or die('Error en la consulta');

if ($consulta) {
    print "Piso creado con exito";
    echo '<p><a href="index.html">Volver al inicio</a></p>';
    echo '<p><a href="agregarpiso.php">Agregar otro usuario</a></p>';
}

else{
    echo "Error al agregar el piso<br>";
    echo mysqli_error($conexion);
    echo mysqli_connected_error();
    echo '<p><a href="index.html">Volver al inicio</a></p>';
    echo '<p><a href="agregarpiso.php">Agregar otro usuario</a></p>';
}
}
else{
echo '<form action="agregarpiso.php" method="post" ENCTYPE="multipart/form-data">';
echo '<h1>Agregar un nuevo piso</h1>';
echo '<p>Codigo:<input type="number" name="id"></p>';
echo '<p>Calle:<input type="text" name="calle"></p>';
echo '<p>Numero:<input type="number" name="num"></p>';
echo '<p>Piso:<input type="number" name="piso"></p>';
echo '<p>Puerta:<input type="text" name="puerta"></p>';
echo '<p>CP:<input type="number" name="CP"></p>';
echo '<p>Metros:<input type="number" name="metros"></p>';
echo '<p>Zona:<input type="text" name="zona"></p>';
echo '<p>Precio:<input type="number" name="precio"></p>';
echo "<INPUT TYPE='HIDDEN' NAME='MAX_FILE_SIZE' VALUE='102400'>";
echo '<p>Imagen:<input type="file" name="img"></p>';
echo '<p>Usuario:<input type="number" name="id_user"></p>';
echo '<p><input type="submit" value="Agregar nuevo piso" name="agregar"></p>';
echo '<p><a href="index.html">Volver al inicio</a></p>';
echo '</form>';
}
?>