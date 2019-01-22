<?php 
session_start();
$_SESSION['update'] = 1;
$_SESSION['verif'] = 1;
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
  						url:"php/search.php",
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

		<div class="col-12 p-1 d-flex flex-row justify-content-center" id = "AD1"> 
			<img src="images/AD4.jpg">
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

		<!-- Contenido Ventana -->
		<div class="row" id="row1">
			<div class="container col-lg-12 p-0">
				<div class="alert alert-success text-center" > 
					<strong><?= $_SESSION['Usuario'] ?></strong>, En este menu podras modificar productos. 
				</div>
			</div>
			<div class="container col-lg-8 p-4 mb-3 mt-3 bg-white" id="contenedorModificar1" style="display: block;">
			  <h2>Modificacion de Productos</h2>

			  <div class="alert alert-danger" id="Alerta1" style="display: none;"> El campo de nombre se encuentra vacio, por favor rellenelo. </div>
			  <div class="alert alert-danger" id="Alerta2" style="display: none;"> El codigo del producto que desea eliminar no se encuentra en la base de datos. </div>	


				<form name="formC" id="formConsultar" onsubmit="return consultarProducto()" style="display: block;">
					<div class="alert alert-warning" style="display: block;" id="alertaAtencion">
			  			<strong>Atencion!</strong> Debe de proveer un nombre para iniciar una busqueda.
					</div>						
					<div class="form-group">
						<label for="codigo">Nombre:</label>
						<div class="input-group">
			                <input type="text" class="form-control typeahead border-primary" name="producto" id="producto" placeholder="Ingresa el nombre de un producto..." data-provide="typeahead" autocomplete="off">
						</div>
					</div>
					<button type="submit" class="btn-danger btn-block"> Consultar</button>			
				</form>	
			</div>
		</div>
		<!-- Contenido Ventana -->
		<div class="row" id="row1">
			<div class="container col-lg-8 p-4 mb-4 mt-3 bg-white" id="contenedorModificar2" style="display: none;">
				<div class="alert alert-success" id="Alerta3" style="display: none;"> Exito, producto encontrado. </div>
				<div class="alert alert-danger" id="Alerta4" style="display: none;"> No se ha efectuado la modificacion, debido a que hay campos vacios, por favor reintente. </div>
				<div class="alert alert-success" id="Alerta5" style="display: none;"> Exito, producto modificado. </div>
				<h2><strong>Datos del Producto</strong></h2>
				<div id="entradaProcesador" style="display: none;">
			      <h2>Procesador</h2>			  
				  <form name="formProcesador" id="formProducto"  onsubmit="return modificarProducto()">
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" id="inputformNombreProcesador" placeholder="Ingreso nombre procesador" name="nombre">
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="codigo">Codigo:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" id="inputformCodigoProcesador" placeholder="Ingreso codigo procesador" name="codigo">
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <br>
			     	      <label class="form-check-label" for="marca1" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="inputformMarcaProcesador1" name="marca" value="Intel" style="margin-left: -20px">Intel
					      </label>
					      <label class="form-check-label" for="marca2" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="inputformMarcaProcesador2" name="marca" value="AMD" style="margin-left: -20px">AMD
					      </label>
				    </div>		    
				    <div class="form-group">
				      <label for="cores">Cores:</label>
				      <select class="form-control" name="cores" >
				      	<option selected id="inputformCoresProcesador" hidden></option>
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
				      <select class="form-control" name="socket" id="socketsProcesador" >
				      	<option selected id="inputformSocketProcesador" hidden></option>
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
				      <input type="number" class="form-control" name="cantidad" id="inputformCantidadProcesador" placeholder="-" min= "0" max="99">
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5" name ="comment" id="inputformDescripcionProcesador"></textarea>
					</div>		   
					<div class="form-group">
						<label for="imagenProcesador">Imagen: </label>
						<input type="file" name="myfile" id="myfile" class="form-control-file border">
					</div>
					<input type="hidden" name="tipo" value="1">   
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>			
				<div id="entradaPlaca" style="display: none;">
			      <h2>Placa Madre</h2>			  
				  <form name="formProcesador" id="formProducto" onsubmit="return agregarProducto()">
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" id="inputformNombrePlaca" placeholder="Ingreso nombre placa" name="nombre">
				      	</div>
				    </div>
				    <div class="form-group">
				      <label for="codigo">Codigo:</label>
				      <div class="input-group">
				      <input type="text" class="form-control"  id="inputformCodigoPlaca" placeholder="Ingreso codigo placa" name="codigo">
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <br>
				      <select class="form-control" name="marca" id="marcaPlaca" >
				      	<option selected id="inputformMarcaPlaca" hidden></option>
				        <option>ASUS</option>
				        <option>Gigabyte</option>
				        <option>MSI</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="plataforma">Plataforma:</label>
				      <br>
					      <label class="form-check-label" for="marcaPlataforma1" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="inputformPlataformaPlaca1" name="plataforma" value="Intel" style="margin-left: -20px">Intel
					      </label>
					      <label class="form-check-label" for="marcaPlataforma2" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="inputformPlataformaPlaca2" name="plataforma" value="AMD" style="margin-left: -20px">AMD
					      </label>
				    </div>	
				    <div class="form-group">
				      <label for="formato">Formato:</label>
				      <br>
				      <label class="form-check-label" for="formatoPlaca1" style="margin-left: 30px">
				        <input type="radio" class="form-check-input" id="inputformFormatoPlaca1" name="formato" value="ATX" style="margin-left: -20px">ATX
				      </label>
				      <label class="form-check-label" for="formatoPlaca2" style="margin-left: 30px">
				        <input type="radio" class="form-check-input" id="inputformFormatoPlaca2"  name="formato" value="Micro ATX" style="margin-left: -20px">Micro ATX
				      </label>
				      <label class="form-check-label" for="formatoPlaca3" style="margin-left: 30px">
				        <input type="radio" class="form-check-input" id="inputformFormatoPlaca3"  name="formato" value="Mini ITX" style="margin-left: -20px">Mini ITX
				      </label>
				    </div>	    		    	
				    <div class="form-group">
				      <label for="socket">Socket:</label>
				      <select class="form-control" name="socket" id="socketsPlaca" >
				      	<option selected id="inputformSocketPlaca" hidden></option>
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
				      <input type="number" class="form-control" name="cantidad"  id="inputformCantidadPlaca" placeholder="-" min= "0" max="99">
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5" name ="comment"  id="inputformDescripcionPlaca"></textarea>
					</div>		   
					<div class="form-group">
						<label for="imagen">Imagen: </label>
						<input type="file" name="myfile" id="myfile" class="form-control-file border">
					</div>  
					<input type="hidden" name="tipo" value="2"> 
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>
				<div id="entradaMemoria" style="display: none;">
			      <h2>Memoria</h2>			  
				  <form name="formProcesador" id="formProducto"  onsubmit="return agregarProducto()">
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" name="nombre"id="nombreMemoria" placeholder="Ingreso nombre memoria" >
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="codigoMemoria">Codigo:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" name="codigo" id="codigoMemoria" placeholder="Ingreso codigo memoria" >
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <br>
				      <select class="form-control" name="marca" id="marcaMemoria" >
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
				      <select class="form-control"  name="capacidad" id="capacidadMemoria">
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
				      <select class="form-control" name="tipoMemoria" id="tipoMemoria" >
				        <option>DDR</option>
				        <option>DDR2</option>
				        <option>DDR3</option>
				        <option>DDR4</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="cantidad">Cantidad:</label>
				      <input type="number" class="form-control" name="cantidad" id="cantidadMemorias" placeholder="-" min= "0" max="99">
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
					</div>		   
					<div class="form-group">
						<label for="imagen">Imagen: </label>
						<input type="file" name="myfile" id="myfile" class="form-control-file border">
					</div>  
					<input type="hidden" name="tipo" value="3"> 
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>
				<div id="entradaPendrive" style="display: none;">
			      <h2>Pendrive</h2>
				  <form name="formProcesador" id="formProducto"   onsubmit="return agregarProducto()">
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" name="nombre" id="nombrePendrive" placeholder="Ingreso nombre pendrive" >
				  </div>
				    </div>
				    <div class="form-group">
				      <label for="codigo">Codigo:</label>
				      <div class="input-group">
				      <input type="number" class="form-control" name="codigo" id="codigoPendrive" placeholder="Ingreso codigo pendrive" >
				  </div>
				    </div>

				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <select class="form-control" name="marca" id="marcaPendrive" >
				        <option>Kington</option>
				        <option>SanDisk</option>
				        <option>HP</option>
				        <option>Sony</option>
				        <option>ADATA</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="color">Color:</label>
				      <select class="form-control" name="color" id="colorPendrive" >
				        <option>Rojo</option>
				        <option>Azul</option>
				        <option>Negro</option>
				        <option>Plateado</option>
				        <option>Blanco</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="capacidad">Capacidad:</label>
				      <select class="form-control" name="capacidad" id="capacidadPendrive" >
				        <option>1GB</option>
				        <option>2GB</option>
				        <option>4GB</option>
				        <option>8GB</option>
				        <option>16GB</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="cantidad">Cantidad:</label>
				      <input type="number" class="form-control" name="cantidad" id="cantidadPendrive" placeholder="-" min= "0" max="99" >
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
					</div>
					<div class="form-group">
						<label for="imagen">Imagen: </label>
						<input type="file" name="myfile" id="myfile" class="form-control-file border">
					</div> 
					<input type="hidden" name="tipo" value="4"> 							     
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>
				<div id="entradaTarjetasG" style="display: none;">
			      <h2>Tarjeta grafica</h2>			  
				  <form name="formProcesador" id="formProducto"  onsubmit="return agregarProducto()">
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" name="nombre" id="nombreTarjeta" placeholder="Ingreso nombre" >
				  	  </div>
				    </div>
				    <div class="form-group">
				      <label for="codigo">Codigo:</label>
				      <div class="input-group">
				      <input type="text" class="form-control" name="codigo" id="codigoTarjeta" placeholder="Ingreso codigo" >
				  		</div>
				    </div>
				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <select class="form-control" name="marca" id="marcasTarjeta" >
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
					      <label class="form-check-label" for="plataformaTarjeta1" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="plataformaTarjeta1" name="plataforma" value="Intel" style="margin-left: -20px">Intel
					      </label>
					      <label class="form-check-label" for="plataformaTarjeta" style="margin-left: 30px">
					        <input type="radio" class="form-check-input" id="plataformaTarjeta2" name="plataforma" value="AMD" style="margin-left: -20px">AMD
					      </label>
				    </div>	
				    <div class="form-group">
				      <label for="modelo">Modelo:</label>
				      <input type="text" class="form-control" name="modelo" id="modeloTarjeta" placeholder="Ingreso modelo" >
				    </div>	    
				    <div class="form-group">
				      <label for="cantidad">Cantidad:</label>
				      <input type="number" class="form-control" name="cantidad" id="cantidadTarjeta" placeholder="-" min= "0" max="99" >
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5" name ="comment" id="comment"></textarea>
					</div>		   
					<div class="form-group">
						<label for="imagenTarjeta">Imagen: </label>
						<input type="file" name="myfile" id="myfile" class="form-control-file border">
					</div> 
					<input type="hidden" name="tipo" value="5">  
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>
				<div id="entradaDiscos" style="display: none;">
			      <h2>Disco Duro</h2>			  
				  <form name="formDisco" id="formProducto"   onsubmit="return agregarProducto()">
				    <div class="alert alert-danger display-error" style="display: none">
				    </div>
				    <div class="form-group">
				      <label for="nombre">Nombre:</label>
				     	<div class="input-group">
				      		<input type="text" class="form-control"  name="nombre"  placeholder="Ingreso nombre" >
				  		</div>
				    </div>
				    <div class="form-group">
				      <label for="codigo">Codigo:</label>
				      <div class="input-group">
				      	<input type="text" class="form-control" name="codigo" id="codigoDisco" placeholder="Ingreso codigo" >
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="marca">Marca:</label>
				      <select class="form-control" name="marca" id="marcasDisco" >
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
				      <select class="form-control" name="capacidad" id="capacidadDisco" >
				        <option>500GB</option>
				        <option>1TB</option>
				        <option>2TB</option>
				        <option>4TB</option>
				        <option>8TB</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="tamano">Tamaño:</label>
				      <select class="form-control" name="tamano" id="tamanoDisco" >
				        <option>2.5"</option>
				        <option>3.5"</option>
				      </select>
				    </div>
				    <div class="form-group">
				      <label for="rpm">RPM:</label>
				      <select class="form-control" name="rpm" id="revolucionesDisco" >
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
				      <input type="number" class="form-control" name="cantidad" id="cantidadDisco" placeholder="-" min= "0" max="99">
				    </div>		    
				    <div class="form-group">
							<label for="comment">Descripcion:</label>
							<textarea class="form-control" rows="5"  name ="comment" id="comment"></textarea>
					</div>		   
					<div class="form-group">
						<label for="imagenDisco">Imagen: </label>
							<input type="file" name="myfile" id ="myfile" class="form-control-file border">
					</div>  
					<input type="hidden" name="tipo" value="6"> 
				    <br>
				    <button type="submit" class="btn btn-danger btn-block">Registrar</button>
				  </form>
				</div>
				<br>
		  		<a href="indexModificar.php" class="btn btn-info" role="button"> Modificar otros productos</a>
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

	<script type="text/javascript">
		var mensaje= function(){
			$("#alertaAtencion").css("display","none");
		}
		var alert0 = document.getElementById("alertaAtencion");
		alert0.addEventListener("click", mensaje);


		function consultarProducto(){
			alert('Buscando Producto');
			var url = 'php/consultar.php';
			console.log(url);
			var data;
			data =$('#formConsultar').serialize();
			console.log(data);
			$.ajax({
				type: 'POST',
				url:url,
				data: data,
				dataType: "json",
				success: function(data){
					console.log(data);
					if(data.code == 1){
						$("#Alerta1").css("display","none");
						$("#Alerta2").css("display","none");
						$("#Alerta3").css("display","none");				
						alert(data.msg);
						$("#Alerta1").css("display","block");
					}else if(data.code == 2){
						$("#Alerta1").css("display","none");
						$("#Alerta2").css("display","none");
						$("#Alerta3").css("display","none");							
						alert(data.msg);
						$("#Alerta2").css("display","block");					
					}else if(data.code == 3){ 
						$("#Alerta1").css("display","none");
						$("#Alerta2").css("display","none");
						$("#Alerta3").css("display","none");						
						alert(data.msg);
						$("#Alerta3").css("display","block");
						if(data.tipo == 1){
							$("#entradaProcesador").css("display", "block");
							$('#inputformNombreProcesador').val(data.nombre);
							$('#inputformCodigoProcesador').val(data.codigo);
							$('#inputformCodigoProcesador').prop("disabled", false);
							$('#inputformCantidadProcesador').val(data.cantidad);	
							$('#inputformDescripcionProcesador').val(data.descripcion);	
							document.getElementById('inputformCoresProcesador').innerHTML=data.cores;
							document.getElementById('inputformSocketProcesador').innerHTML=data.socket;
							if(data.marca == "Intel"){
								$("#inputformMarcaProcesador1").prop("checked", true);
							}else if(data.marca == "AMD"){
								$("#inputformMarcaProcesador2").prop("checked", true);
							}
							//$('#inputformImagenProcesador').val(data.imagen);						
						}else if(data.tipo == 2){
							$("#entradaPlaca").css("display", "block");
							$('#inputformNombrePlaca').val(data.nombre);
							$('#inputformCodigoPlaca').val(data.codigo);
							$('#inputformCodigoPlaca').prop("disabled", true);
							$('#inputformCantidadPlaca').val(data.cantidad);	
							$('#inputformDescripcionPlaca').val(data.descripcion);	
							document.getElementById('inputformMarcaPlaca').innerHTML=data.marca;
							document.getElementById('inputformSocketPlaca').innerHTML=data.socket;
							if(data.plataforma == "Intel"){
								$('#inputformPlataformaPlaca1').prop("checked",true);
							}else if(data.plataforma == "AMD"){
								$('#inputformPlataformaPlaca2').prop("checked",true);
							}
							if(data.formato == "ATX"){
								$('#inputformFormatoPlaca1').prop("checked",true);
							}else if(data.formato == "Micro ATX"){
								$('#inputformFormatoPlaca2').prop("checked",true);
							}else if(data.formato == "Mini ITX"){
								$('#inputformFormatoPlaca3').prop("checked",true);
							}
						}else if(data.tipo == 3){
							$("#entradaMemoria").css("display", "block");
						}else if (data.tipo ==4){
							$("#entradaPendrive").css("display", "block");
						}else if(data.tipo == 5){
							$("#entradaTarjetasG").css("display", "block");
						}else if(data.tipo == 6){
							$("#entradaDiscos").css("display", "block");
						}else{

						}

						

						$('#contenedorModificar1').css("display","none");
						$('#contenedorModificar2').css("display","block");								
					}else{
						alert('UHHHHHH');
					}			
				}		

			}); 
			return false;
		};

		function modificarProducto(){
			alert('Modificando Producto');
			var x = document.getElementById('myfile').files[0].name;
			//var x = document.getElementById('myfile').value;
			console.log(x);
			var url= 'php/update.php';

			var $form = $('#formProducto');
			var data = {
			  'myfile' : x
			};

			data = $form.serialize() + '&' + $.param(data);
			console.log(data);
			$.ajax({
				type:'POST',
				url:url,
				data: data,
				dataType: "json",
				success: function(data){
					console.log(data);
					if(data.code == 1){
						$("#Alerta3").css("display","none");
						$("#Alerta4").css("display","none");
						$("#Alerta5").css("display","none");				
						alert(data.msg);
						$("#Alerta4").css("display","block");
					}else if(data.code == 3){
						$("#Alerta3").css("display","none");
						$("#Alerta4").css("display","none");
						$("#Alerta5").css("display","none");
						alert(data.msg);
						$("#Alerta5").css("display","block");			
					}else{
						alert('UHHHH');
					}
				}
			});


			return false;
		};
	</script>

</body>
</html>