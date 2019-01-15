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
	<meta http-equiv="refresh" content="25"> 
	<title>InventariosPC's</title>
	<link rel="shortcut icon" href="images/pc_icon.png">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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

		<!-- Elemento dinamico de bootstrap, carousel -->
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/Hardware_Menu.png" class="img-fluid mx-auto d-block img-thumbnail" alt="Harware1" width="600" height="300">
		    </div>
		    <div class="carousel-item">
		      <img src="images/Hardware_Menu_2.jpg" class="img-fluid mx-auto d-block img-thumbnail" alt="Harware2" width="600" height="300">
		    </div>
		    <div class="carousel-item">
		      <img src="images/Hardware_Menu3.jpg" class="img-fluid mx-auto d-block img-thumbnail" alt="Harware3" width="600" height="300">
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>

	</header>

	<nav>
		<nav class="navbar navbar-expand-sm bg-danger navbar-light justify-content-center">
		  <ul class="navbar-nav">
		  	<li class="nav-item">
		      <a class="nav-link" href="index.php">Inicio</a>
		    </li>		  	
		    <li class="nav-item">
		      <a class="nav-link" href="indexConsultarP.php">Consultar productos</a>
		    </li>
		  </ul>
		</nav>	
	</nav>

	<main>
		<div class="col-12 mt-2 mb-2 d-flex flex-row justify-content-center" style="height: 90px; background-color: green;"> AD </div>
		<!-- Contenido Ventana -->
		<div class="row">
			<div class="container col-sm-7 shadow p-4 mb-4 bg-white  "> 
				<a href="indexConsultarP.php" style="text-decoration: none;">
				<div class="container d-flex justify-content-center p-4 mb-4" style="background-color: orange;">
					<h3>Consultar productos</h3>
				</div>
				</a>									
			</div>



			<div class="container col-sm-2  p-4 mb-4 bg-white"> 
				<div class="container shadow p-4 mb-4 bg-white">
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
				<div class="container shadow p-4 mb-4 bg-white ">
					<div class="container p-4 mb-4 justify-content-center" style="background-color: blue; height: 300px; ">
					AD
					</div>
				</div>
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

</body>
</html>