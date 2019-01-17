<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<meta name="description" content="Inventario Componentes de PC's">
	<meta name="keywords" content="HTML, CSS, Inventario, Componentes, PC's">
	<meta name="author" content="Cristian Aliaga">
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

</head>
<body id="body">
	<?php
	include('conexion.php');
	?>

	<header>
		<!-- Barra de navegacion principal -->
		<nav class="navbar navbar-expand-sm navbar-dark " style="text-decoration: none; color: white; background-image: -webkit-linear-gradient(0deg, #3e69fe 0%, #4cd4e3 100%);">
			<!-- Logo -->
			<a class="navbar-brand mr-0 mr-md-2" href="index.php" style="border-right: 2px solid white; padding-right: 10px;">
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
				    	<a class="nav-link" href="index.php" style="text-decoration: none; color: white; text-align: center; margin-left: 10px; ">Inicio</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" href="indexLogin.php" style="text-decoration: none; color: white; text-align: center;  margin-left: 10px; ">Ingreso</a>
				 	</li> 
				  	<li class="nav-item">
				    	<a class="nav-link" href="indexSignup.php" style="text-decoration: none; color: white; text-align: center;  margin-left: 10px; ">Registro</a>
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
		      <a class="nav-link" href="index.php" id="item11">Inicio</a>
		    </li>		  	
		    <li class="nav-item">
		      <a class="nav-link" href="indexConsultarP.php" id="item11">Consultar productos</a>
		    </li>
		  </ul>
		</nav>	
	</header>

	<main>
		<div class="col-12 p-1 d-flex flex-row justify-content-center" style="height: 100px; background-color: white; "> 
			<img src="images/AD4.jpg" style="width: 40%">
		</div>
		<!-- Contenido Ventana -->
		<div class="row" id="row1">
			<div class="container col-lg-7 p-4 mb-3 mt-3 bg-white" style="border-radius: 5px; "> 
				<a href="indexConsultarP.php" style="text-decoration: none;">
				<div class="container d-flex shadow justify-content-center p-4 mb-4" style="background-color: white; border: 1px solid #999; border-radius: 5px;">
					<h3 style="color:  -webkit-linear-gradient(0deg, #3e69fe 0%, #4cd4e3 100%); ">Consultar productos</h3>
				</div>
				</a>									
			</div>
			<div class="container col-lg-3 p-4 mb-4 mt-4 bg-white" style="border-radius: 5px;"> 
				<div class="container p-4 mb-4 bg-white">
						<div class="container d-flex justify-content-center">
							<h6>Siguenos en:</h6>
						</div>
					
						<div class="row">
							<div class="container col-4">
								<a href="https://www.facebook.com/" style="text-decoration: none;"><i class="fab fa-facebook" style="font-size:30px; color:blue;"></i></a>
							</div>
							<div class="container col-4" >
								<a href="https://twitter.com" style="text-decoration: none;"><i class="fab fa-twitter" style="font-size:30px; color:cyan;"></i></a>		
							</div>
							<div class="container col-4" >
								<a href="https://www.youtube.com" style="text-decoration: none;"><i class="fab fa-youtube" style="font-size:30px; color:red;"></i></a>	
							</div>							
						</div>				
				</div>				
				<div class="container p-0 bg-white ">
					<div class="container p-0" style="background-color: red;">
						<img src="images/AD1.jpg" style="height: 100%; width: 100%;">
					</div>
				</div>
			</div>
		</div>
		<div style="background-color: #f9f9ff; padding-top: 100px; padding-bottom: 100px;">
			<div class="row align-items-center"style="padding-right: 15px; padding-left: 15px;">
					<div class="col-lg-6" style="margin-bottom: 10px;" >
					<h3 style="font-size: 24px; ">Sigue informado de nuestros productos </h3>
					<span style="font-size: 15px; color: #777777; ">
						Recibe notificaciones de los ultimos productos ingresados
					</span>
					</div>
					<div class="col-lg-6">
						<form style="position: relative;">
							<input type="text" name="emailContacto" placeholder="Direccion de correo Electronico" style="line-height: 50px; width: 100%; padding: 0 180px 0 25px; border: none; border-radius: 25px; box-shadow: 0px 15px 50px 0px rgba(0,0,0,0.1);">
							<button style="position: absolute; top: 50%; transform: translateY(-50%); right: 10px; line-height: 40px; padding: 0 30px; border-radius: 20px; border: none; color: white;background-image: -webkit-linear-gradient(0deg, #3e69fe 0%, #4cd4e3 100%);">Contactanos</button>
						</form>
						</div>
			</div>
	    </div>
	</main>

	<footer>
		<div class="row pb-4">
			<div class="container col-12 col-md-4">
				<h3 class="page-header" style="text-align: center; padding: 5px;">Acerca del sitio</h3>
				<p style="text-align: center;">"Nuestra mision es poder crear un inventario de partes de computadores de manera ordenada"</p>
				<p style="text-align: center;"> <a class="font-weight-bold" href="#" style="text-align: center;">Terminos y condiciones</a></p>
			</div>
			<div class="container col-12 col-md-5">
				<h3 class="page-header" style="text-align: center; padding: 5px;">Patrocinadores </h3>
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
			<div class="container col-12 col-md-3">
				<h3 class="page-header" style="text-align: center;; padding: 5px;">Contacto</h3>
				<p style="text-align: center;">cristian.aliaga.t@gmail.com</p>
				<p style="text-align: center;">94415100</p>
			</div>
		</div>
		<div class="container col-12 pb-4" id="copyright">
			Copyright © 2019  |  All rights reserved to Cristian 
		</div>
	</footer>

</body>
</html>


<!-- Imagen CSS;  -->