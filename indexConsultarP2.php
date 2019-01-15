<?php 
session_start();
$_SESSION['verif'] = 0;
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

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
		<!-- Contenido Ventana -->
		<div class="row">
			<br>
			<div class="container col-sm-6 shadow p-4 mb-4 bg-white" style="background-color: grey; margin-bottom: 50px; ">
			  <h2>Consultar Productos</h2>
			  <br>
			  <?= $_SESSION['mensaje_error3'] ?>
			  <? if($_SESSION['prod_tipo']==1){ ?>
			  	<h3>Procesadors</h3>
					<div id="salidaProcesador">
					  <form name="formProcesador">
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" id="nombreProcesador" value="<?=$_SESSION['prod_nombre']?>" name="nombre" disabled>
					    </div>
					    <div class="form-group">
					      <label for="codigo">Codigo:</label>
					      <input type="text" class="form-control" id="codigoProcesador" value ="<?=$_SESSION['prod_codigo']?>" name="codigo" disabled>
					    </div>
					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <br>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="marca1">
						        <input type="radio" class="form-check-input" id="marcaProcesador1" name="marca" value="Intel" disabled <? if($_SESSION['prod_marca']=="Intel"){ ?> checked <? }else{ ?>  <? } ?> >Intel
						      </label>
						    </div>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="marca2">
						        <input type="radio" class="form-check-input" id="marcaProcesador2" name="marca" value="AMD" disabled <? if($_SESSION['prod_marca']=="AMD"){ ?> checked <? }else{ ?>  <? } ?> >AMD
						      </label>
						    </div>
					    </div>		    
					    <div class="form-group">
					      <label for="cores">Cores:</label>
					      <select class="form-control" name="cores" id="coresProcesador" disabled>
					      	<option selected hidden><?=$_SESSION['prod_cores']?></option>
					        <option>2</option>
					        <option>4</option>
					        <option>6</option>
					        <option>8</option>
					        <option>10</option>
					        <option>12</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="socket">Socket:</label>
					      <select class="form-control" name="socket" id="socketsProcesador" disabled>
					      	<option selected hidden><?=$_SESSION['prod_socket']?></option>
					        <option>AM3+</option>
					        <option>AM4</option>
					        <option>FM2</option>
					        <option>FM2+</option>
					        <option>LGA 1150</option>
					        <option>LGA 1151</option>
					        <option>LGA 1151-V2</option>
					        <option>LGA 2011-V3</option>
					        <option>LGA 2066</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadProcesador" value="<?=$_SESSION['prod_cantidad']?>" min= "0" max="99" disabled>
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5" name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>		   
						<input type="hidden" name="tipo" value="1">   
					    <br>
					    <div><img src="imagenes/<?=$_SESSION['prod_imagen']?>" height="400" width="600"></div>

					  </form>
					</div>			  		
			  	<?}elseif ($_SESSION['prod_tipo']==2) {?>
			  		<h3>Placa Madre</h3>
					<div id="entradaPlaca">		  
					  <form name="formPlaca">
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" id="nombrePlaca" value="<?=$_SESSION['prod_nombre']?>" name="nombre" disabled>
					    </div>
					    <div class="form-group">
					      <label for="codigo">Codigo:</label>
					      <input type="text" class="form-control" id="codigoPlaca" value ="<?=$_SESSION['prod_codigo']?>" name="codigo" disabled>
					    </div>
					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <br>
					      <select class="form-control" name="marca" id="marcaPlaca" disabled>
					      	<option selected hidden><?=$_SESSION['prod_marca']?></option>
					        <option>ASUS</option>
					        <option>Gigabyte</option>
					        <option>MSI</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="plataforma">Plataforma:</label>
					      <br>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="marcaPlataforma1">
						        <input type="radio" class="form-check-input" id="marcaPlataforma1" name="plataforma" value="Intel" disabled <? if($_SESSION['prod_plataforma']=="Intel"){ ?> checked <? }else{ ?>  <? } ?> >Intel
						      </label>
						    </div>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="marcaPlataforma2">
						        <input type="radio" class="form-check-input" id="marcaPlataforma2" name="plataforma" value="AMD" disabled <? if($_SESSION['prod_plataforma']=="AMD"){ ?> checked <? }else{ ?>  <? } ?>>AMD
						      </label>
						    </div>
					    </div>	
					    <div class="form-group">
					      <label for="formato">Formato:</label>
					      <br>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="formatoPlaca1">
						        <input type="radio" class="form-check-input" id="formatoPlaca1" name="formato" value="ATX" disabled <? if($_SESSION['prod_formato']=="ATX"){ ?> checked <? }else{ ?>  <? } ?> >ATX
						      </label>
						    </div>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="formatoPlaca2">
						        <input type="radio" class="form-check-input" id="formatoPlaca2" name="formato" value="Micro ATX" disabled <? if($_SESSION['prod_formato']=="Micro ATX"){ ?> checked <? }else{ ?>  <? } ?> >Micro ATX
						      </label>
						    </div>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="formatoPlaca3">
						        <input type="radio" class="form-check-input" id="formatoPlaca3" name="formato" value="Mini ITX" disabled <? if($_SESSION['prod_formato']=="Mini ATX"){ ?> checked <? }else{ ?>  <? } ?> >Mini ITX
						      </label>
						    </div>
					    </div>	    		    	
					    <div class="form-group">
					      <label for="socket">Socket:</label>
					      <select class="form-control" name="socket" id="socketsPlaca" disabled>
					      	<option selected hidden><?=$_SESSION['prod_socket']?></option>
					        <option>AM3+</option>
					        <option>AM4</option>
					        <option>FM2</option>
					        <option>FM2+</option>
					        <option>LGA 1150</option>
					        <option>LGA 1151</option>
					        <option>LGA 1151-V2</option>
					        <option>LGA 2011-V3</option>
					        <option>LGA 2066</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadPlaca" value="<?=$_SESSION['prod_cantidad']?>" min= "0" max="99" disabled>
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5" name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>		   
 
						<input type="hidden" name="tipo" value="2"> 
						<div><img src="imagenes/<?=$_SESSION['prod_imagen']?>"></div>
					    <br>
					  </form>
					</div>
			  	<?}elseif ($_SESSION['prod_tipo']==3) { ?>
			  		<h3>Memoria</h3>
					<div id="entradaMemoria">		  
					  <form name="formMemoria" >
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" name="nombre"id="nombreMemoria"  value="<?=$_SESSION['prod_nombre']?>" disabled>
					    </div>
					    <div class="form-group">
					      <label for="codigoMemoria">Codigo:</label>
					      <input type="text" class="form-control" name="codigo" id="codigoMemoria" value ="<?=$_SESSION['prod_codigo']?>" disabled >
					    </div>
					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <br>
					      <select class="form-control" name="marca" id="marcaMemoria" disabled >
					      	<option selected hidden><?=$_SESSION['prod_marca']?></option>
					        <option>Lenovo</option>
					        <option>Kingston</option>
					        <option>IBM</option>
					        <option>HP</option>
					        <option>G.Skill</option>
					        <option>Corsair</option>
					      </select>	      
					    </div>		    
					    <div class="form-group">
					      <label for="capacidad">Capacidad Memoria:</label>
					      <select class="form-control"  name="capacidad" id="capacidadMemoria" disabled>
					      	<option selected hidden><?=$_SESSION['prod_capacidad']?></option>
					        <option>512 MB</option>
					        <option>1 GB</option>
					        <option>2 GB</option>
					        <option>4 GB</option>
					        <option>8 GB</option>
					        <option>16 GB</option>
					      </select>	
					    </div>	
					    <div class="form-group">
					      <label for="tipoMemoria">Tipo Memoria:</label>
					      <select class="form-control" name="tipoMemoria" id="tipoMemoria" disabled>
					      	<option selected hidden><?=$_SESSION['prod_tipoMemoria']?></option>
					        <option>DDR</option>
					        <option>DDR2</option>
					        <option>DDR3</option>
					        <option>DDR4</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadMemorias" value="<?=$_SESSION['prod_cantidad']?>" disabled min= "0" max="99">
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5" name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>		   
						<input type="hidden" name="tipo" value="3"> 
						<div><img src="imagenes/<?=$_SESSION['prod_imagen']?>" height="400" width="600"></div>
					    <br>
					  </form>
					</div>
			  	<?}elseif ($_SESSION['prod_tipo']==4) { ?>
			  		<h3>Pendriva</h3>
					<div id="entradaPendrive">						
					  <form name ="formPendrive" >
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" name="nombre" id="nombrePendrive" value="<?=$_SESSION['prod_nombre']?>" disabled >
					    </div>
					    <div class="form-group">
					      <label for="codigo">Codigo:</label>
					      <input type="number" class="form-control" name="codigo" id="codigoPendrive"value ="<?=$_SESSION['prod_codigo']?>" disabled >
					    </div>

					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <select class="form-control" name="marca" id="marcaPendrive" disabled >
					      	<option selected hidden><?=$_SESSION['prod_marca']?></option>
					        <option>Kington</option>
					        <option>SanDisk</option>
					        <option>HP</option>
					        <option>Sony</option>
					        <option>ADATA</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="color">Color:</label>
					      <select class="form-control" name="color" id="colorPendrive" disabled>
					      	<option selected hidden><?=$_SESSION['prod_color']?></option>
					        <option>Rojo</option>
					        <option>Azul</option>
					        <option>Negro</option>
					        <option>Plateado</option>
					        <option>Blanco</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="capacidad">Capacidad:</label>
					      <select class="form-control" name="capacidad" id="capacidadPendrive" disabled >
					      	<option selected hidden><?=$_SESSION['prod_capacidad']?></option>
					        <option>1GB</option>
					        <option>2GB</option>
					        <option>4GB</option>
					        <option>8GB</option>
					        <option>16GB</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadPendrive" value="<?=$_SESSION['prod_cantidad']?>" disabled min= "0" max="99" >
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5" name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>
						<input type="hidden" name="tipo" value="4"> 							     
					    <br>
					    <div><img src="imagenes/<?=$_SESSION['prod_imagen']?>" height="400" width="600"></div>
					  </form>
					</div>
			  	<?}elseif ($_SESSION['prod_tipo'] == 5) { ?>
			  		<h3>Tarjeta Grafica</h3>
					<div id="entradaTarjetasG">			  
					  <form name="formMemoria" >
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" name="nombre" id="nombreTarjeta" value="<?=$_SESSION['prod_nombre']?>" disabled >
					    </div>
					    <div class="form-group">
					      <label for="codigo">Codigo:</label>
					      <input type="text" class="form-control" name="codigo" id="codigoTarjeta" value ="<?=$_SESSION['prod_codigo']?>" disabled  >
					    </div>
					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <select class="form-control" name="marca" id="marcasTarjeta" disabled >
					      	<option selected hidden><?=$_SESSION['prod_marca']?></option>
					        <option>ASUS</option>
					        <option>Gigabyte</option>
					        <option>MSI</option>
					        <option>EVGA</option>
					        <option>Zotac</option>
					      </select>
					    </div>

					    <div class="form-group">
					      <label for="plataforma">Plataforma:</label>
					      <br>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="plataformaTarjeta1">
						        <input type="radio" class="form-check-input" id="plataformaTarjeta1" name="plataforma" value="Intel">Intel
						      </label>
						    </div>
						    <div class="form-check-inline">
						      <label class="form-check-label" for="plataformaTarjeta">
						        <input type="radio" class="form-check-input" id="plataformaTarjeta2" name="plataforma" value="AMD">AMD
						      </label>
						    </div>
					    </div>	
					    <div class="form-group">
					      <label for="modelo">Modelo:</label>
					      <input type="text" class="form-control" name="modelo" id="modeloTarjeta" value="<?=$_SESSION['prod_nombre']?>" disabled  >
					    </div>	    
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadTarjeta" value="<?=$_SESSION['prod_cantidad']?>" disabled min= "0" max="99" >
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5" name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>		   
						<input type="hidden" name="tipo" value="5">  
						<div><img src="imagenes/<?=$_SESSION['prod_imagen']?>" height="400" width="600"></div>
					    <br>
					  </form>
					</div>
			  	<?}elseif ($_SESSION['prod_tipo'] == 6) { ?>
			  		<h3>Disco Duro</h3>
					<div id="entradaDiscos">			  
					  <form name="formDisco" >
					    <div class="form-group">
					      <label for="nombre">Nombre:</label>
					      <input type="text" class="form-control" name="nombre" id="nombreDisco" value="<?=$_SESSION['prod_nombre']?>" disabled>
					    </div>
					    <div class="form-group">
					      <label for="codigo">Codigo:</label>
					      <input type="text" class="form-control" name="codigo" id="codigoDisco" value ="<?=$_SESSION['prod_codigo']?>" disabled  >
					    </div>
					    <div class="form-group">
					      <label for="marca">Marca:</label>
					      <select class="form-control" name="marca" id="marcasDisco" disabled>
					      	<option selected hidden><?=$_SESSION['prod_marca']?></option>
					        <option>Dell</option>
					        <option>Hitachi</option>
					        <option>HP</option>
					        <option>Lenovo</option>
					        <option>Seagate</option>
					        <option>Toshiba</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="capacidad">Capacidad:</label>
					      <select class="form-control" name="capacidad" id="capacidadDisco" disabled >
					      	<option selected hidden><?=$_SESSION['prod_capacidad']?></option>
					        <option>500GB</option>
					        <option>1TB</option>
					        <option>2TB</option>
					        <option>4TB</option>
					        <option>8TB</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="tamano">Tamaño:</label>
					      <select class="form-control" name="tamano" id="tamanoDisco" disabled>
					      	<option selected hidden><?=$_SESSION['prod_tamano']?></option>
					        <option>2.5"</option>
					        <option>3.5"</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="rpm">RPM:</label>
					      <select class="form-control" name="rpm" id="revolucionesDisco" disabled>
					      	<option selected hidden><?=$_SESSION['prod_rpm']?></option>
					        <option>5200 RPM</option>
					        <option>5400 RPM</option>
					        <option>5700 RPM</option>
					        <option>5900 RPM</option>
					        <option>7200 RPM</option>
					        <option>10000 RPM</option>
					        <option>15000 RPM</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="cantidad">Cantidad:</label>
					      <input type="number" class="form-control" name="cantidad" id="cantidadDisco" value="<?=$_SESSION['prod_cantidad']?>" disabled min= "0" max="99">
					    </div>		    
					    <div class="form-group">
								<label for="comment">Descripcion:</label>
								<textarea class="form-control" rows="5"  name ="comment" id="comment" disabled><?=$_SESSION['prod_descripcion']?></textarea>
						</div>		   
 
						<input type="hidden" name="tipo" value="6"> 
					    <br>
					    <div><img src="imagenes/<?=$_SESSION['prod_imagen']?>" height="400" width="600"></div>
					  </form>
					</div>
					
			  	<?} ?>
			  	<a href="indexConsultarP.php" class="btn btn-info" role="button"> < Seguir consultando</a>
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
	session_unset();
	session_destroy();
?>
</body>
</html>