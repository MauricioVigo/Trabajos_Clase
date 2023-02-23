<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Buscar Piso</title>
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
        margin-top: 1%;
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
        margin-top: 1%;
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
<body>
    <center>
<h1> Buscar Piso: </h1>

<form action="buscar_piso2.php" method="get">
  <p>Id: <input type="text" name="id_piso" size="40"></p>

    <input type="submit" value="Enviar" class="boton_enviar"><input type="reset" value="Borrar" class="boton_borrar">
    
</form>

<p><a href="indexadmin.php"><button>Volver</button></a></p>
</center>
</body>
</html>