<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<meta name="description" content="Inventario PC's">
	<meta name="keywords" content="HTML, CSS, Inventario, PC's">
	<meta name="author" content="Cristian Aliaga">
	<!-- <meta http-equiv="refresh" content="25"> -->
	<title>InventariosPC's</title>
	<link rel="shortcut icon" href="images/pc_icon.png">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<!-- Estilo para poder visualizar iframe de manera correcta -->
  	<style type="text/css">
  		iframe{
  			height: 1000px;
  			width: 100%;
  			border-style: none;
  		}
  	</style>
</head>
<body>
	<?php
	include('conexion.php');
	?>
	<?= $_SESSION['On'] 
	?>
	<header >
		<!-- Barra de navegacion principal -->
		<nav class="navbar navbar-expand-sm bg-danger navbar-dark sticky-top " >
		  <!-- Logo -->
		  <a class="navbar-brand mr-0 mr-md-2" href="index.html">
		  	<img src="images/home_icon.png" width="36" height="36">
		  </a>

		  <!-- Toggler/collapsibe Button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Links de la barra de navegacion -->
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      	<li class="nav-item">
		        	<a class="nav-link" href="index.php">Inicio</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Intructivo</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="indexLogin.php">Ingreso</a>
		     	</li> 
		      	<li class="nav-item">
		        	<a class="nav-link" href="indexSignup.php">Registro</a>
		     	</li>	     
		    </ul>
		  </div> 
		</nav>
	</header>



	<main>


		<!-- Contenido Ventana -->
		<div class="row">
			<div class="container col-sm-4 shadow p-4 mb-4 bg-white">
				<h3>Registro de Usuario</h3>
				<form name="formRegistro" method="POST" action="registroUsuario.php">
					<?= $_SESSION['message'] ?>
				    <div class="form-group">
				      <label for="nombreUsuario">Nombre de usuario:</label>
				      <input type="text" class="form-control"  name="nombreUsuario" id="nombreUsuario" placeholder="Ingrese nombre de usuario">
				    </div>
				    <div class="form-group">
				      <label for="contrasenaUsuario">Contraseña:</label>
				      <input type="password" class="form-control" name="contrasenaUsuario" id="contrasenaUsuario" placeholder="Ingrese contraseña" >
				    </div>	
				    <div class="form-group">
				      <label for="recontrasenaUsuario">Confirmar tu contraseña:</label>
				      <input type="password" class="form-control" name="recontrasenaUsuario" id="recontrasenaUsuario" placeholder="Ingrese contraseña" >
				    </div>				    
				    <button type="submit" class="btn btn-danger btn-block">¡Registrarse!</button>	
				    <br>
				    <label for="ayuda">¿Ya tienes una cuenta? Ingresa porfavor.</label>			
				</form>
			</div>
			<div class="container col-sm-4 shadow p-4 mb-4 bg-white" >
				<h3>¿De que te sirve registrarte?</h3>
				<ul>
					<li>Te permite trabajar como super usuario desde cualquier lugar.</li>
				</ul>
			</div>
		</div>
	</main>

	<footer class="container-fluid mt-3" style="border-top: 1px solid black; padding: 5px;">
		<div class="row pb-4" style="margin-bottom: 0;">
			<div class="col-12 col-md-4">
				<h3 class="page-header" style="border-bottom: 1px solid black; padding: 5px;">Acerca del sitio</h3>
				<p>"Nuestra mision es poder crear un inventario de partes de computadores de manera ordenada"</p>
				<p> <a class="font-weight-bold" href="#">Terminos y condiciones</a></p>
			</div>
			<div class="col-12 col-md-5">
				<h3 class="page-header" style="border-bottom: 1px solid black; padding: 5px;">Patrocinadores </h3>
				<div class="row">
					<div class="col-4 logo-container">
						<img src="images/CSS_Logo.png" width="100" height="100">
					</div>
					<div class="col-4 logo-container">
						<img src="images/HTML_Logo.png" width="100" height="100">
					</div>
					<div class="col-4 logo-container">
						<img src="images/Bootstrap_Logo.png" width="100" height="100">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<h3 class="page-header" style="border-bottom: 1px solid black; padding: 5px;">Contacto</h3>
				<p>Mi Mail</p>
				<p>Mi Celular</p>
			</div>
			
		</div>
	</footer>
	<?php 
	session_unset();
	session_destroy();
	?>
</body>
</html>