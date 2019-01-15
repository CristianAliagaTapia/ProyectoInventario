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
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		iframe{
  			height: 1000px;
  			width: 100%;
  			border-style: none;
  		}
  	</style>
</head>
<body>
	<header >
		<!-- Barra de navegacion principal -->
		<nav class="navbar navbar-expand-sm bg-danger navbar-dark sticky-top " >
		  <!-- Logo -->
		  <a class="navbar-brand mr-0 mr-md-2" href="indexAvanzado.php">
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
		        	<a class="nav-link" href="indexAvanzado.php">Inicio</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Intructivo</a>
		      	</li>    
		      	<li class="nav-item">
		        	<a href="salida.php" class="btn btn-info" role="button">Salir del sistema</a>  
		      	</li>	
		    </ul>
		  </div> 
		</nav>

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
		  	 <a class="nav-link" href="indexAvanzado.php"> Inicio </a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="indexIngreso.php">Ingreso de productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link " href="indexEliminar.php">Eliminar productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link " href="indexModificar.php">Modificar productos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="indexConsultar.php">Consultar productos</a>
		    </li>
		  </ul>
		</nav>	
	</nav>

	<main>
		<div class="alert alert-success text-center" > <strong><?= $_SESSION['Usuario'] ?></strong>, En este menu podras consultar productos, no editar sus caracteristicas. </div>

		<!-- Contenido Ventana -->
		<div class="row">
			<br>
			<div class="container col-sm-6 p-4 mb-4 bg-white" style="background-color: grey; margin-bottom: 50px; ">
			  <br>
			  <?= $_SESSION['mensaje_error3'] ?>
			  <? if($_SESSION['prod_tipo']==1){ ?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Procesador </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"> <strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Cores </strong> <?=$_SESSION['prod_cores']?></p>
				  			<p class="card-text"><strong> Socket </strong> <?=$_SESSION['prod_socket']?></p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>
			  	<br>		  		
			  	<?}elseif ($_SESSION['prod_tipo']==2) {?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Placa Madre </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"><strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Plataforma </strong> <?=$_SESSION['prod_plataforma']?></p>
				  			<p class="card-text"><strong> Formato </strong> <?=$_SESSION['prod_formato']?></p>
				  			<p class="card-text"><strong> Socket </strong> <?=$_SESSION['prod_socket']?> </p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>			  		
			  	<?}elseif ($_SESSION['prod_tipo']==3) { ?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Memorias </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"> <strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Capacidad Memoria </strong> <?=$_SESSION['prod_capacidad']?></p>
				  			<p class="card-text"><strong> Tipo Memoria </strong> <?=$_SESSION['prod_tipoMemoria']?></p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>
			  	<?}elseif ($_SESSION['prod_tipo']==4) { ?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Pendrive </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"> <strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Color </strong> <?=$_SESSION['prod_color']?></p>
				  			<p class="card-text"><strong> Capacidad </strong> <?=$_SESSION['prod_capacidad']?></p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>
			  	<?}elseif ($_SESSION['prod_tipo'] == 5) { ?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Tarjeta Grafica </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"> <strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Plataforma </strong> <?=$_SESSION['prod_plataforma']?></p>
				  			<p class="card-text"><strong> Modelo </strong> <?=$_SESSION['prod_modelo']?></p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>
			  	<?}elseif ($_SESSION['prod_tipo'] == 6) { ?>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top"src="imagenes/<?=$_SESSION['prod_imagen']?>" alt="Card Image">
				  		<div class="card-header">
				  			<h1> Tarjeta Grafica </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text"> <strong> Nombre </strong> <?=$_SESSION['prod_nombre']?></p>
				  			<p class="card-text"><strong> Codigo </strong> <?=$_SESSION['prod_codigo']?></p>
				  			<p class="card-text"><strong> Marca </strong> <?=$_SESSION['prod_marca']?></p>
				  			<p class="card-text"><strong> Capacidad </strong> <?=$_SESSION['prod_capacidad']?></p>
				  			<p class="card-text"><strong> Tamaño </strong> <?=$_SESSION['prod_tamano']?></p>
				  			<p class="card-text"><strong> RPM </strong> <?=$_SESSION['prod_rpm']?></p>
				  			<p class="card-text"><strong> Cantidad </strong> <?=$_SESSION['prod_cantidad']?> </p>
				  			<p class="card-text"><strong> Descripcion </strong><?=$_SESSION['prod_descripcion']?></p>
				  		</div>
				  	</div>
			  	</div>			 					
			  	<?} ?>
			  	<a href="indexConsultar.php" class="btn btn-info" role="button"> < Seguir consultando</a>
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
<?
	$_SESSION['mensaje_error3'] = '';
	unset($_SESSION['prod_tipo']);
	unset($_SESSION['prod_nombre'] );
	unset($_SESSION['prod_codigo']);
	unset($_SESSION['prod_cantidad']);
	unset($_SESSION['prod_descripcion']);
	unset($_SESSION['prod_imagen']);
	unset($_SESSION['prod_marca']);
	unset($_SESSION['prod_socket']);
	unset($_SESSION['prod_capacidad']);
	unset($_SESSION['prod_rpm']);
	unset($_SESSION['prod_tamano']);	 
	unset($_SESSION['prod_plataforma']);	 
	unset($_SESSION['prod_formato']);	 
	unset($_SESSION['prod_modelo']);
	unset($_SESSION['prod_cores']);	 
	unset($_SESSION['prod_tipoMemoria']);	 
	unset($_SESSION['prod_color']);	 
?>
</body>
</html>