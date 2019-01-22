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
				<div class="alert alert-success text-center" > <strong><?= $_SESSION['Usuario'] ?></strong>, En este menu podras eliminar productos. </div>
			</div>
			<div class="container col-lg-8 p-4 mb-3 mt-3 bg-white" id = "contElim1" >
			  <h2>Eliminacion de producto</h2>
			 <div class="alert alert-danger" id="Alerta1" style="display: none;"> El campo de codigo se encuentra vacio, por favor rellenelo. </div>
			 <div class="alert alert-danger" id="Alerta2" style="display: none;"> El codigo del producto que desea eliminar no se encuentra en la base de datos. </div>
			 <div class="alert alert-success" id="Alerta3" style="display: none;"> Exito, producto encontrado. </div>
			 <div class="alert alert-success" id="Alerta4" style="display: none;"> Exito, producto eliminado. </div>
			  
			  <form name="formEL" id="formEliminar1" onsubmit="return eliminarProducto1()" style="display: block;">
		        <div class="alert alert-warning" style="display: block;" id="alertaAtencion">
			  	<strong>Atencion!</strong> Debe de proveer un codigo para iniciar una busqueda.
				</div>				  	
			    <div class="form-group">
			      <label for="codigo">Codigo:</label>
			      <div class="input-group">
			     	 <input type="text" class="form-control" id="codigoProcesador" placeholder="Ingresa el codigo del producto " name="codigo">
			 	  </div>
			    </div>
			    <br>
			    <button type="submit" class="btn btn-danger btn-block">Buscar</button>     			
			  </form>	

			</div>
			<div class="container col-lg-8 p-4 mb-3 mt-3 bg-white" id = "contElim2" style="display: none" >
				<h2>Producto a eliminar</h2>
				<form name="formEL2" id="formEliminar2" onsubmit="return eliminarProducto2()">
					<div class="form-group">
						<label for="tipo">Tipo: </label>
						<div class="input-group">
							<input type="text" name="inputTipoE2" id="inputTipoE2" disabled>
						</div>
						<label for="nombre">Nombre: </label>
						<div class="input-group">
							<input type="text" name="inputNombreE2" id="inputNombreE2" disabled>
						</div>
						<label for="codigo">Codigo: </label>
						<div class="input-group">
							<input type="text" name="inputCodigoE2" id="inputCodigoE2" disabled>
						</div>
						<label for="cantidad">Cantidad: </label>
						<div class="input-group">
							<input type="number" name="inputCantidadE2" id="inputCantidadE2" disabled>
						</div>
						<label for="descripcion">Descripcion: </label>
						<div class="input-group">
							<input type="text" name="inputDescripcionE2" id="inputDescripcionE2" disabled>
						</div>
						<label for="marca">Marca: </label>
						<div class="input-group">
							<input type="text" name="inputMarcaE2" id="inputMarcaE2" disabled>
						</div>																	
					</div>
			    <br>
			    <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
				</form>
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

	function eliminarProducto1(){
		alert('Buscando Producto');
		var url= 'php/busqueda_elim.php';
		var data;
		data = $('#formEliminar1').serialize();
		console.log(data);
		$.ajax({
			type: 'POST',
			url:url,
			data: data,
			dataType: "json",
			success:function(data){
				console.log(data);
				if(data.code == 1){
					$("#Alerta1").css("display","none");
					$("#Alerta2").css("display","none");
					$("#Alerta3").css("display","none");
					$("#Alerta4").css("display","none");						
					alert(data.msg);
					$("#Alerta1").css("display","block");
				}else if(data.code == 2){
					$("#Alerta1").css("display","none");
					$("#Alerta2").css("display","none");
					$("#Alerta3").css("display","none");
					$("#Alerta4").css("display","none");							
					alert(data.msg);
					$("#Alerta2").css("display","block");					
				}else if(data.code == 3){
					$("#Alerta1").css("display","none");
					$("#Alerta2").css("display","none");
					$("#Alerta3").css("display","none");
					$("#Alerta4").css("display","none");							
					alert(data.msg);
					$("#Alerta3").css("display","block");
					$("#contElim2").css("display","block");
					if(data.tipo == 1){
						$('#inputTipoE2').val('Procesador');
					}else if(data.tipo == 2){
						$('#inputTipoE2').val('Placa Madre');
					}else if(data.tipo == 3){
						$('#inputTipoE2').val('Memoria');
					}else if(data.tipo == 4){
						$('#inputTipoE2').val('Pendrive');
					}else if(data.tipo == 5){
						$('#inputTipoE2').val('Tarjeta Grafica');
					}else if(data.tipo == 6){
						$('#inputTipoE2').val('Disco Duro');
					}
					$('#inputNombreE2').val(data.nombre);
					$('#inputCodigoE2').val(data.codigo);
					$('#inputCantidadE2').val(data.cantidad);
					$('#inputDescripcionE2').val(data.descripcion);
					$('#inputMarcaE2').val(data.marca);

				}else{
					alert("UHHHH");
				}
			}
		});
		return false;
	};

	function eliminarProducto2(){
		alert('Eliminando Producto');
		var url = 'php/eliminacion.php';	
		console.log(url);
		var data;
		data = $('#inputCodigoE2').val();
		data = 'codigo=' + data;
		console.log(data);
		$.ajax({
			type: 'POST',
			url:url,
			data: data,
			dataType: "json",
			success:function(data){
				console.log(data);
				if(data.code == 4){
					$("#Alerta1").css("display","none");
					$("#Alerta2").css("display","none");
					$("#Alerta3").css("display","none");
					$("#Alerta4").css("display","none");
					alert(data.msg);
					$("#row1").load(" #row1 > *");
					$("#Alerta4").css("display","block");
				}else{
					alert("UHHHH");
				}
			}
		});
	return false;
	};

</script>
</body>
</html>