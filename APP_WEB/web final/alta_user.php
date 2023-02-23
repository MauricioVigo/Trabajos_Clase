<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    body{
        background: #272727;
        color: #fddb3a;
        font-family: "Montserrat", sans-serif;
    }
    table{
        padding-top: 10%;
        margin: auto;
    }
    th{
        padding: 1em;
    }
    td{
        padding: 1em;
        text-align: center;
        color: #f6f4e6;
    }
    p{
        margin: auto;
        text-align: center;
    }
    button{
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
    
    }
    button:hover {
    color: #fddb3a;
}
input{
  width:180px;
	padding:3px 10px;
	border:1px solid #fddb3a;
	border-radius: 10px;
	background-color:#f6f6f6;
	margin: 10px 4;
	display:inline-block
}
    input.boton_enviar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
        margin-top: 0%;
    }
    input.boton_enviar:hover{
        color: #fddb3a;
    }
    input.boton_borrar {
        border-radius: 10%;
        color: #bebcb0;
        background: #272727;
        font-size: 20px;
        margin: auto;
        text-align: center;
        margin-top: 1%;
    }
    input.boton_borrar:hover{
        color: #fddb3a;
    }

    caption {
    display: table-caption;
    text-align: -webkit-center;
    margin-top: 35%;
    margin-bottom: -25%;
}
select {
  width:180px;
	padding:3px 10px;
	border:1px solid #fddb3a;
	border-radius: 10px;
	background-color:#f6f6f6;
	margin: 10px 4;
	display:inline-block
}
    </style>
</head>
<script>
    function check(){
    let nombre= document.getElementById("nombre").value
    let email= document.getElementById("email").value
    let clave= document.getElementById("clave").value
    let user= document.getElementById("user").value
    

   if (calle =="" || numero =="" || piso =="" || puerta =="") {
    alert("Es necesario completar todos los campos para enviar el formulario")
    document.getElementById("name").focus()
   } 
   
}
</script>
<center><h1> Datos añadir usuario: </h1></center>
<form action="alta_user2.php" method="get">
    <p> Nombre: <input type="text" name="name" size="40" id="nombre"></p><br>
    <p> Email: <input type="text" name="mail" size="40" id="email"></p><br>
    <p> Clave: <input type="text" name="password" size="40" id="clave"></p><br>
    <p>Tipo de usuario: <select name='type' size='1' id="user">
    <option value='vendedor'>Vendedor</option>
    <option value='comprador'>Comprador</option>
    <option value='admin'>Administrador</option></select></p>
    <center><input type="submit" value="Enviar" class="boton_enviar"><input type="reset" value="Borrar" class="boton_borrar" onclick="check()"></center>
 
</form>

<center><br><p><a href="indexadmin.php"><button>Volver</button></a></p></center>

