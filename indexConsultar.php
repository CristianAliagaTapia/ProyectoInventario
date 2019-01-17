<?php 
session_start();
$_SESSION['verif'] = 1;
$_SESSION['update'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<meta name="description" content="Inventario Componentes de PC's">
	<meta name="keywords" content="HTML, CSS, Inventario, Componentes, PC's">
	<meta name="author" content="Cristian Aliaga">
	<!-- <meta http-equiv="refresh" content="25"> -->
	<title>Inventario Componentes de PC's</title>
	<link rel="shortcut icon" href="images/pc_icon.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

    <!-- Scrip de autocompletado -->
  	<script >
  		$(document).ready(function(){
  			$('#producto').typeahead({
  				source: function(query,result)
  				{
  					$.ajax({
  						url:"search.php",
  						method:"POST",
  						data:{query:query},
  						dataType:"json",
  						success:function(data)
  						{
  							result($.map(data, function(item){
  								return item;
  							}));
  						}
  					})
  				}
  			});
  		});
  	</script>

</head>
<body id="body">
	<?php
	include('conexion.php');
	?>
	<header >

		<!-- Barra de navegacion principal -->
		<nav class="navbar navbar-expand-sm navbar-dark" style="text-decoration: none; color: white; background-image: -webkit-linear-gradient(0deg, #3e69fe 0%, #4cd4e3 100%);">
			<!-- Logo -->
			<a class="navbar-brand mr-0 mr-md-2" href="indexAvanzado.php" style="border-right: 2px solid white; padding-right: 10px;">
				<strong> Inventario Componentes de PC's</strong>
			</a>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Links de la barra de navegacion -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
				  	<li class="nav-item">
				    	<a class="nav-link" href="indexAvanzado.php" style="text-decoration: none; color: white; text-align: center; margin-left: 10px; ">Inicio</a>
				  	</li>
			      	<li class="nav-item">
			        	<a href="salida.php" class="btn btn-info" role="button" style="text-decoration: none; color: white; text-align: center;  margin-left: 10px;">Salir del sistema</a>  
			      	</li>	
				</ul>
			</div> 
		</nav>

		<!-- Elemento dinamico de bootstrap, carousel -->
		<div id="demo" class="carousel slide w-100" data-ride="carousel">
		  <!-- Indicators -->
		  <ul class="carousel-indicators" >
		    <li data-target="#demo" data-slide-to="0" class="active" style="background-color: grey;"></li>
		    <li data-target="#demo" data-slide-to="1" style="background-color: grey;"></li>
		    <li data-target="#demo" data-slide-to="2" style="background-color: grey;"></li>
		  </ul>
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active" style="text-align: center; padding: 20px; background-color: white;" >
		      <img src="images/Hardware_Menu1.png" alt="Harware1"  >
		    </div>
		    <div class="carousel-item" style="text-align: center; padding: 20px; background-color: white;">
		      <img src="images/Hardware_Menu2.png"  alt="Harware2" >
		    </div>
		    <div class="carousel-item" style="text-align: center; padding: 20px; background-color: white;">
		      <img src="images/Hardware_Menu3.png" alt="Harware3">
		    </div>
		  </div> 
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev" >
		    <span class="carousel-control-prev-icon" style="background-color: grey;"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon" style="background-color: grey;"></span>
		  </a>
		</div>
		
		<nav class="navbar navbar-expand-sm bg-danger navbar-light justify-content-center" id="item1">
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="indexIngreso.php" id="item11">Ingreso de productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link " href="indexEliminar.php" id="item11">Eliminar productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link " href="indexModificar.php" id="item11">Modificar productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="indexConsultar.php" id="item11">Consultar productos</a>
		    </li>
		  </ul>
		</nav>	
	</header>

	<main>
		<div class="col-12 p-1 d-flex flex-row justify-content-center" id = "AD1"> 
			<img src="images/AD4.jpg">
		</div>


		<!-- Contenido Ventana -->
		<div class="row" id="row1">
			<div class="container col-lg-12 p-0">
				<div class="alert alert-success text-center" > 
					<strong><?= $_SESSION['Usuario'] ?></strong>, En este menu podras consultar productos. 
				</div>
			</div>

			<div class="container col-lg-8 p-4 mb-3 mt-3 bg-white">
				<h2>Consultar Productos</h2>
				<?= $_SESSION['mensaje_error3'] ?>		
				<div class="alert alert-warning">
					<strong>Atencion!</strong> Debe de proveer un nombre para iniciar una busqueda.
				</div>		
				<form name="formC" method="POST" action="consultar.php">
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<div class="input-group">
			                <input type="text" class="form-control typeahead border-primary" name="producto" id="producto" placeholder="Ingresa el nombre de un producto..." data-provide="typeahead" autocomplete="off">
						</div>
					</div>	
					<button type="submit" class="btn-danger btn-block"> Consultar</button>			
				</form>
			</div>
		</div>
		<div id="notif">
			<div class="row align-items-center" >
				<div class="col-lg-6">
					<h3>Sigue informado de nuestros productos </h3>
					<span >
						Recibe notificaciones de los ultimos productos ingresados
					</span>
				</div>
				<div class="col-lg-6">
					<form>
						<input type="text" name="emailContacto" placeholder="Direccion de correo Electronico">
						<button>Contactanos</button>
					</form>
				</div>
			</div>
	    </div>	
	</main>

	<footer>
		<div class="row pb-4" id="footer">
			<div class="container col-12 col-md-4">
				<h3 class="page-header">Acerca del sitio</h3>
				<p>"Nuestra mision es poder crear un inventario de partes de computadores de manera ordenada"</p>
				<p> <a class="font-weight-bold" href="#">Terminos y condiciones</a></p>
			</div>
			<div class="container col-12 col-md-5">
				<h3 class="page-header">Patrocinadores </h3>
				<div class="row">
					<div class="col-4 logo-container">
						<img src="images/CSS1_Logo.png" width="80" height="100">
					</div>
					<div class="col-4 logo-container">
						<img src="images/HTML_Logo.png" width="100" height="100">
					</div>
					<div class="col-4 logo-container">
						<img src="images/Bootstrap_Logo.png" width="100" height="100">
					</div>
				</div>
				<div class="row">
					<div class="col-6 logo-container">
						<img src="images/PHP_Logo.png" width="150" height="100">
					</div>
					<div class="col-6 logo-container">
						<img src="images/JS_Logo.png" width="100" height="100">
					</div>
				</div>
			</div>
			<div class="container col-12 col-md-3">
				<h3 class="page-header">Contacto</h3>
				<p>cristian.aliaga.t@gmail.com</p>
				<p>94415100</p>
			</div>
		</div>
		<div class="container col-12 pb-4" id="copyright">
			Copyright © 2019  |  All rights reserved to Cristian 
		</div>
	</footer>
<?
unset($_SESSION['mensaje_error3']);
?>
</body>
</html>