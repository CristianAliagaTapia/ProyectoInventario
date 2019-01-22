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
				<div class="alert alert-success text-center" > 
					<strong><?= $_SESSION['Usuario'] ?></strong>, En este menu podras consultar productos. 
				</div>
			</div>

			<div class="container col-lg-8 p-4 mb-3 mt-3 bg-white" id="contenedorConsulta1" style="display: block;">
				<h2>Consultar Productos</h2>
				
				<div class="alert alert-danger" id="Alerta1" style="display: none;"> El campo de nombre se encuentra vacio, por favor rellenelo. </div>
				<div class="alert alert-danger" id="Alerta2" style="display: none;"> El codigo del producto que desea eliminar no se encuentra en la base de datos. </div>				

				<form name="formC" id="formConsultar" onsubmit="return consultarProducto()" style="display: block;">
					<div class="alert alert-warning" style="display: block;" id="alertaAtencion">
						<strong>Atencion!</strong> Debe de proveer un nombre para iniciar una busqueda.
					</div>		
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

		<!-- Contenido Ventana -->
		<div class="row" id="row1">
			<div class="container col-lg-8 p-4 mb-4 mt-3 bg-white" id="contenedorConsulta2" style="display: none;">
				<div class="alert alert-success" id="Alerta3" style="display: none;"> Exito, producto encontrado. </div>
				<h2 >Datos del Producto</h2>
			  	<div class="container col-sm-6 shadow p-4 mb-4 bg-white">
				  	<div class="card">
				  		<img class="card-img-top" src="imagenes/" id="contenedorImagen"alt="Card Image" style="margin-top: 10px;">
				  		<div class="card-header">
				  			<h1 id="contenidoTipo">  </h1>
				  		</div>
				  		<div class="card-body"> 
				  			<p class="card-text" id="contenedorNombre" style="display: none;"><strong> Nombre </strong> <i id="contenidoNombre"></i></p>
				  			<p class="card-text" id="contenedorCodigo" style="display: none;"><strong> Codigo </strong><i id="contenidoCodigo"></i> </p>
				  			<p class="card-text" id="contenedorMarca" style="display: none;"><strong> Marca </strong><i id="contenidoMarca"></i> </p>
				  			<p class="card-text" id="contenedorCores" style="display: none;"><strong> Cores </strong><i id="contenidoCores"></i> </p>
				  			<p class="card-text" id="contenedorSocket" style="display: none;"><strong> Socket </strong><i id="contenidoSocket"></i> </p>
				  			<p class="card-text" id="contenedorCapacidad" style="display: none;"><strong> Capacidad </strong><i id="contenidoCapacidad"></i> </p>
				  			<p class="card-text" id="contenedorRPM" style="display: none;"><strong> RPM </strong> <i id="contenidoRPM"></i></p>				  			
				  			<p class="card-text" id="contenedorTamano" style="display: none;"><strong> Tamaño </strong><i id="contenidoTamano"></i> </p>
				  			<p class="card-text" id="contenedorPlataforma" style="display: none;"><strong> Plataforma </strong><i id="contenidoPlataforma"></i> </p>	
				  			<p class="card-text" id="contenedorFormato" style="display: none;"><strong> Formato </strong> <i id="contenidoFormato"></i></p>
				  			<p class="card-text" id="contenedorModelo" style="display: none;"><strong> Modelo </strong> <i id="contenidoModelo"></i></p>						  					  			
				  			<p class="card-text" id="contenedorTipoMemoria" style="display: none;"><strong> Tipo de Memoria </strong> <i id="contenidoTipoMemoria"></i></p>
				  			<p class="card-text" id="contenedorColor" style="display: none;"><strong> Color </strong> <i id="contenidoColor"></i></p>	
				  			<p class="card-text" id="contenedorCantidad" style="display: none;"><strong> Cantidad </strong> <i id="contenidoCantidad"></i> </p>
				  			<p class="card-text" id="contenedorDescripcion" style="display: none;"><strong> Descripcion </strong><i id="contenidoDescripcion"></i> </p>
				  		</div>
				  	</div>
			  	</div>
			  	<br>		  		

			  	<a href="indexConsultar.php" class="btn btn-info" role="button"> Consultar Nuevamente</a>
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
			data = $('#formConsultar').serialize();
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
						if(data.nombre != ''){
							$("#contenedorNombre").css("display", "block");
							document.getElementById('contenidoNombre').innerHTML=data.nombre;
						}
						if(data.codigo != ''){
							$("#contenedorCodigo").css("display","block");
							document.getElementById('contenidoCodigo').innerHTML=data.codigo;
						} 
						if(data.marca != ''){
							$("#contenedorMarca").css("display", "block");
							document.getElementById('contenidoMarca').innerHTML=data.marca;
						}
						if(data.cores != ''){
							$("#contenedorCores").css("display","block");
							document.getElementById('contenidoCores').innerHTML=data.cores;
						}
						if(data.socket != ''){
							$("#contenedorSocket").css("display","block");
							document.getElementById('contenidoSocket').innerHTML=data.socket;
						}
						if(data.capacidad != ''){
							$("#contenedorCapacidad").css("display","block");
							document.getElementById('contenidoCapacidad').innerHTML=data.capacidad;
						}
						if(data.rpm != ''){
							$("#contenedorRPM").css("display","block");
							document.getElementById('contenidoRPM').innerHTML=data.rpm;
						}
						if(data.tamano != ''){
							$("#contenedorTamano").css("display","block");
							document.getElementById('contenidoTamano').innerHTML=data.tamano;
						}
						if(data.plataforma != ''){
							$("#contenedorPlataforma").css("display","block");
							document.getElementById('contenidoPlataforma').innerHTML=data.plataforma;
						}
						if(data.formato != ''){
							$("#contenedorFormato").css("display","block");
							document.getElementById('contenidoFormato').innerHTML=data.formato;
						}
						if(data.modelo != ''){
							$("#contenedorModelo").css("display","block");
							document.getElementById('contenidoModelo').innerHTML=data.modelo;
						}
						if(data.tipoMemoria != ''){
							$("#contenedorTipoMemoria").css("display","block");
							document.getElementById('contenidoTipoMemoria').innerHTML=data.tipoMemoria;
						}
						if(data.color != ''){
							$("#contenedorColor").css("display","block");
							document.getElementById('contenidoColor').innerHTML=data.color;
						}
						if(data.cantidad != ''){
							$("#contenedorCantidad").css("display","block");
							document.getElementById('contenidoCantidad').innerHTML=data.cantidad;
						}
						if(data.descripcion != ''){
							$("#contenedorDescripcion").css("display","block");
							document.getElementById('contenidoDescripcion').innerHTML=data.descripcion;
						}
						if(data.tipo == 1){
							document.getElementById('contenidoTipo').innerHTML="Procesador";
						}else if(data.tipo == 2){
							document.getElementById('contenidoTipo').innerHTML="Placa Madre";
						}else if(data.tipo == 3){
							document.getElementById('contenidoTipo').innerHTML="Memoria";
						}else if(data.tipo == 4){
							document.getElementById('contenidoTipo').innerHTML="Pendrive";
						}else if(data.tipo == 5){
							document.getElementById('contenidoTipo').innerHTML="Tarjeta GRafica";
						}else if(data.tipo == 6){
							document.getElementById('contenidoTipo').innerHTML="Disco Duro";
						}	

						if(data.imagen != ''){
							data.imagen = "imagenes/" + data.imagen;
							$("#contenedorImagen").attr("src",data.imagen);
						}			
						$('#contenedorConsulta1').css("display","none");
						$('#contenedorConsulta2').css("display","block");									
					}else{
						alert('UHHHHHH');
					}			
				}		

			});
			return false;
		};
	</script>

</body>
</html>