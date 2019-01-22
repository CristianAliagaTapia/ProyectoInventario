<?php 
session_start();
include('conexion.php');

$nombre = NULL;

$nombre = $_POST['producto'];

function error1(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-danger"> El campo del nombre se encuentra vacio, por favor rellenelo. </div>';
	if ($_SESSION['verif']== 0) {
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexConsultarP.php">
		</head>
	</html>
	<body>
	</body>
	';		# code...
	}else{		
		if($_SESSION['update'] == 1){

			echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexModificar.php">
				</head>
			</html>
			<body>
			</body>
			';
		}else{
			echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexConsultar.php">
				</head>
			</html>
			<body>
			</body>
			';
		}


		
	}
}
function error2(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-danger"> El nombre del producto que desea consultar no se encuentra en la base de datos. </div>';
	if ($_SESSION['verif']== 0) {
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexConsultarP.php">
		</head>
	</html>
	<body>
	</body>
	';		# code...
	}else{
		if($_SESSION['update'] == 1){

			echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexModificar.php">
				</head>
			</html>
			<body>
			</body>
			';
		}else{
			echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexConsultar.php">
				</head>
			</html>
			<body>
			</body>
			';
		}


	}
}
function exito(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-success"> Exito, producto encontrado. </div>';
	if ($_SESSION['verif']== 0) {
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexConsultarP2.php">
		</head>
	</html>
	<body>
	</body>
	';		# code...
	}else{

	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexConsultar.php">
		</head>
	</html>
	<body>
	</body>
	';
	}
}
function exito2(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-success"> Exito, producto encontrado. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexModificar.php">
		</head>
	</html>
	<body>
	</body>
	';
}
function comprobar($nombree){
	$productos = "SELECT * FROM productos";
	$prod = mysql_query($productos);
	$conteo = 0;
	while ($dato = mysql_fetch_array($prod)) {
		$dato_nombre = $dato['nombre'];
		if($dato_nombre == $nombree){
			$conteo ++;
		}
	}
	if($conteo == 0){
		return 0;
	}else{
		return 1;
	}
}
function agarrar($nombree){
	$productos = "SELECT * FROM productos WHERE nombre = '$nombree'";
	$prod = mysql_query($productos);
	while ($dato = mysql_fetch_array($prod)) {
		$dato_tipo = $dato['tipo'];
		$dato_nombre = $dato['nombre'];		
		$dato_codigo = $dato['codigo'];
		$dato_cantidad = $dato['cantidad'];
		$dato_descripcion = $dato['descripcion'];
		$dato_imagen = $dato['imagen'];		
		$dato_marca = $dato['marca'];
		$dato_socket = $dato['socket'];
		$dato_capacidad = $dato['capacidad'];
		$dato_rpm = $dato['rpm'];
		$dato_tamano = $dato['tamano'];
		$dato_plataforma = $dato['plataforma'];
		$dato_formato = $dato['formato'];
		$dato_modelo = $dato['modelo'];
		$dato_cores = $dato['cores'];
		$dato_tipoMemoria= $dato['tipoMemoria'];
		$dato_color = $dato['color'];
	}
	$_SESSION['prod_tipo'] = $dato_tipo;
	$_SESSION['prod_nombre'] = $dato_nombre;	
	$_SESSION['prod_codigo'] = $dato_codigo;
	$_SESSION['prod_cantidad'] = $dato_cantidad;
	$_SESSION['prod_descripcion'] = $dato_descripcion;
	$_SESSION['prod_imagen'] = $dato_imagen;
	$_SESSION['prod_marca'] = $dato_marca;
	$_SESSION['prod_socket'] = $dato_socket;
	$_SESSION['prod_capacidad'] = $dato_capacidad;
	$_SESSION['prod_rpm'] = $dato_rpm;
	$_SESSION['prod_tamano']=$dato_tamano;
	$_SESSION['prod_plataforma']=$dato_plataforma;
	$_SESSION['prod_formato']=$dato_formato;
	$_SESSION['prod_modelo']=$dato_modelo;
	$_SESSION['prod_cores'] = $dato_cores;
	$_SESSION['prod_tipoMemoria']=$dato_tipoMemoria;
	$_SESSION['prod_color'] = $dato_color;
}

$errorMSG=' ';

if(empty($nombre)){
	$errorMSG = 'El campo de nombre se encuentra vacio, por favor rellenelo.';
	echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
}else{
	if(comprobar($nombre) == 0){
		$errorMSG = 'El codigo del producto que desea eliminar no se encuentra en la base de datos.';
		echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
	}else{
		$productos = "SELECT * FROM productos WHERE nombre = '$nombre'";
		$prod = mysql_query($productos);
		while ($dato = mysql_fetch_array($prod)) {
			$dato_tipo = $dato['tipo'];
				$dato_nombre = $dato['nombre'];		
				$dato_codigo = $dato['codigo'];
				$dato_cantidad = $dato['cantidad'];
				$dato_descripcion = $dato['descripcion'];
			$dato_imagen = $dato['imagen'];		
				$dato_marca = $dato['marca'];
				$dato_socket = $dato['socket'];
				$dato_capacidad = $dato['capacidad'];
				$dato_rpm = $dato['rpm'];
				$dato_tamano = $dato['tamano'];
				$dato_plataforma = $dato['plataforma'];
				$dato_formato = $dato['formato'];
				$dato_modelo = $dato['modelo'];
				$dato_cores = $dato['cores'];
				$dato_tipoMemoria= $dato['tipoMemoria'];
				$dato_color = $dato['color'];
			$errorMSG = 'Exito, producto encontrado.';
		}
		echo json_encode(['code'=>3, 'msg'=>$errorMSG, 'tipo'=>$dato_tipo, 'nombre'=>$dato_nombre, 'codigo'=>$dato_codigo, 'cantidad'=>$dato_cantidad, 'descripcion'=>$dato_descripcion, 'imagen'=>$dato_imagen, 'marca'=>$dato_marca, 'socket'=>$dato_socket, 'capacidad'=>$dato_capacidad, 'rpm'=>$dato_rpm, 'tamano'=>$dato_tamano, 'plataforma'=>$dato_plataforma, 'formato'=>$dato_formato, 'modelo'=>$dato_modelo, 'cores'=>$dato_cores, 'tipoMemoria'=>$dato_tipoMemoria, 'color'=>$dato_color]);
	}
}



?>
