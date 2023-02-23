<?php
if (isset($_REQUEST["accept"])){
	$user=$_REQUEST["user"];
    $mail=$_REQUEST["mail"];
	$pass=$_REQUEST["pass"];
	$type=$_REQUEST["type"];
	$hash= hash("sha256",$pass);
	if (empty($user) || empty($mail) || empty($pass)) {
		echo "Campo requerido no ingresado";
	}
	else {
	include "datos.php";
	$conexion= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("Error al conectar a la BBDD");
	$query="insert into users values('$user','$mail','$hash','$type',null)";
	$consulta=mysqli_query($conexion,$query) or die ("Error en la consulta".mysqli_error($conexion));
	header("location:login.php");

	}
	

}

else{
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crea tu cuenta</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./css/sign.css">

</head>
<body>
<script>
        function check(){
        let user= document.getElementById("user").value
        let mail= document.getElementById("mail").value
        let pass= document.getElementById("pass").value
        

       if (user =="" || pass =="" || mail=="") {
        alert("Es necesario completar todos los campos para enviar el formulario")
        document.getElementById("name").focus()
       } 
       else if (mail.includes("@")==false) {
            alert("El Correo debe estar correctamente escrito")
            document.getElementById("email").focus()
       }
    }
    </script>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="sign.php" method="post">
                <div class="login__field">
					<h3>Crea una cuenta</h3>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="user" class="login__input" placeholder="Usuario" id="user">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-at"></i>
					<input type="text" name="mail" class="login__input" placeholder="Correo" id="mail">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pass" class="login__input" placeholder="Contraseña" id="pass">
				</div>
				<div class="login__field">
					<select name="type" class="login__input" size="1">
						<option>---------</option>
						<option value="vendedor">Vendedor</option>
						<option value="comprador">Comprador</option>
						
					</select>	
				</div>
				<button class="button login__submit" name="accept" onclick="check()">
					<span class="button__text">Aceptar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
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