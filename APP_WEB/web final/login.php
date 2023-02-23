<?php
session_start();
if (isset($_REQUEST["login"])){
	$user=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];

	$hash = hash("sha256",$pass);

	include "datos.php";
	$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
	$query="select * from users where name = '$user' and password = '$hash'";
	$consulta=mysqli_query($conexion,$query) or die ("Error en la consulta".mysqli_error($conexion));
	$nfila=mysqli_num_rows($consulta);


	if($nfila==1){
	$_SESSION["user"] = $user;
	$resultado=mysqli_fetch_array($consulta);
	$type=$resultado["type"];
	echo "admin-$type";
	if($type=="comprador"){
		header("location:indexcomprador.php");
	}
	elseif($type=="vendedor"){
		echo "vendedor -$type";
		header("location:indexvendedor.php");
	
	}
	elseif($type=="admin"){
		echo "admin-$type";
		header("location:indexadmin.php");
	}
	
}

	else{
		echo "<p>ERROR Nombre de usuario o contraseña incorrectos</p>";
	}

}

else{
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ingresar</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./css/login.css">

</head>
<body>
	<script>
		function check(){
        let user= document.getElementById("user").value
        let pass= document.getElementById("pass").value
    

       if (user =="" || pass =="") {
        alert("Es necesario completar todos los campos para enviar el formulario")
        document.getElementById("user").focus()
       } 
       
    } 
	</script>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="login.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Usuario" name="user" id="user">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Contraseña" name="pass" id="pass">
				</div>
				<button class="button login__submit" name="login" onclick="check()">
					<span class="button__text">Aceptar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
			<div class="sign">
				<h3>No eres usuario?</h3>
				<div class="social-icons">
					<a href="./sign.php"><p>Crea tu cuenta aqui</p></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>



<?php
}
?>