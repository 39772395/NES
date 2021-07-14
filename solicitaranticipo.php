<!DOCTYPE html>
<html lang="es">
<head>
	<link  rel = "icono de acceso directo"  href = "/imagenes/favicon.png"  type = "image / x-icon" > 
	<link rel="icon" type="image/png" href="imagenes/favicon.png" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<title>SOLICITAR ANTICIPO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos- anticipos.css">
</head>
<style type="text/css">
	* {
	margin: 0px;
	padding: 0px;
	box-sizing:border-box;
}

body {
	
	background-repeat: no-repeat;
	background-position: center;
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
}

.contenedor {
	width: 100%;

	margin: auto;
	overflow: hidden;
}

header {
	height: 10%;
	overflow: hidden;
}
.web{
	width: 80%;
	display: inline-block;

}
.logo {
	width: 300px;
	margin-left: 10px;
}
.menu {
	margin-top: 10px;
	width: 50%;
	float: right;
	display: inline;
}
.po {
	text-align:center;
	width: 130%;
	float:inline-start;
	margin-right: 10px;
}
.op {
	text-align:right;
	font-size: 18px;
	margin: 10px;
 	display: inline-block;
 	text-decoration: none;
 	color: #1d4f90;
 	padding: 5px;
 	
 }
 .op:hover{
 	color:#f78c26;
 	border-bottom: 5px solid #f78c26;
 }
.opciones {
	text-align:center;
}
.sub{
	text-align:center;
	color: #f78c26;
	font-family: Impact,'Arial Narrow Bold', sans-serif;
	font-size: 40px;
}
.Q{
	color: #1d4f90;	
}

.W{
	text-align: center;
}
</style>
<body>
	<div class="contenedor">
			<header class="row">
				<div class="web col-md-3">
					<img src="imagenes/logo.png"  alt="Logo-Nesitelco-web" class="logo">
				</div>
				<div class="menu col-md-9">
					<ul class="po">
						<a class="op" href="preregistro.php"><b>PREREGISTRO</b></a>
						<a class="op" href="activarcuenta.php"><b>ACTIVAR CUENTA</b></a>
						<a class="op" href="cambiar.php"><b>CAMBIAR CONTRASEÑA</b></a>
						<a class="op"  href="solicitaranticipo.php"><b>ANTICIPOS</b></a>
					</ul>
				</div>
			</header>
			<div class="main">
				<div class="instalacion row">
					<div class="col-md-1"></div>
					<div class="video col-md-4">
						<video src="videos/anticipo.mp4" width="350" height="550" autoplay muted></video>
					</div>
					<div class="descripcion col-md-7">
						<h2 class="sub">4. SOLICITAR ANTICIPO</h2>
						<p class="opciones">
							<br>
							<b class="Q">1.</b>	Iniciar sesion con usuario y contraseña
							<br>
							<br>
						   	<b class="Q">2.</b>	Seleccionar el modulo contabilidad
							<br>
						   	<br>
						   	<b class="Q">3.</b>	Desplegar la barra y seleccionar el boton solicitar
							<br>
						   	<br>
						   	<b class="Q">4.</b>	Escribir numero de documento y seleccionar solicitar 
							<br>
							<br>
						   	<b class="Q">5.</b>	Llenar campos incompletos 
							 <br>
							 <br>
						   	<b class="Q">6.</b>	Darle clik en el boton solicitar y mostrara un mensaje en pantalla validando la solicitud
						</p>
					</div>
				</div>
				
			<footer class="row">
				<div class="footer col-md-12">
					<p class="W">© 2021 Nesitelco S.A.S. All Rights Reserved / Design:  Santiago Tachack</p>
				</div>
			</footer>
	</div>
</body>
</html>