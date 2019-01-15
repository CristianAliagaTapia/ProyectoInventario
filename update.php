<?
include('conexion.php');
session_start();
$_SESSION['mensaje_error'];

$tipo = NULL;
$nombre = NULL;
$codigo = NULL;
$marca = NULL;
$plataforma = NULL;
$cores = NULL;
$cantidad = NULL;
$descripcion = NULL;
$imagen = NULL;
$socket = NULL;
$capacidad = NULL;
$rpm = NULL;
$tamano = NULL;
$formato = NULL;
$modelo = NULL;
$tipoMemoria = NULL;
$color = NULL;

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_VALIDATE_INT);
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$plataforma = $_POST['plataforma'];
$cores = $_POST['cores'];
$cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_VALIDATE_INT);
$descripcion = $_POST['comment'];
$imagen = $_POST['myfile'];
$socket = $_POST['socket'];
$capacidad = $_POST['capacidad'];
$rpm = $_POST['rpm'];
$tamano = $_POST['tamano'];
$formato = $_POST['formato'];
$modelo = $_POST['modelo'];
$tipoMemoria = $_POST['tipoMemoria'];
$color = $_POST ['color'];

function error1(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-danger"> No se ha efectuado la modificacion, debido a que hay campos vacios, por favor reintente. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexModificar.php">
		</head>
	</html>
	<body>
	</body>
	';
}


function exito(){
	$_SESSION['mensaje_error3'] = '<div class="alert alert-success"> Exito, producto modificado. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexModificar.php">
		</head>
	</html>
	<body>
	</body>
	';		
}

$modItem = "UPDATE productos SET tipo='$tipo', nombre='$nombre', cantidad='$cantidad', descripcion='$descripcion', imagen='$imagen', marca='$marca', socket='$socket', capacidad='$capacidad', rpm='$rpm', tamano='$tamano', plataforma='$plataforma', formato='$formato', modelo='$modelo', cores='$cores', tipoMemoria='$tipoMemoria', color='$color' WHERE codigo='$codigo';";



if (empty($nombre) or empty($codigo) or empty($marca) or empty($cantidad) or empty($descripcion) or empty($imagen)){
	error1();
}else{
	switch ($tipo) {
		case '1':
			 if(empty($socket) or empty($cores)){
			 	error1();
			 }else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;
		case '2':
			if(empty($socket) or empty($plataforma) or empty($formato)){
			 	error1();
			}else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;
		case '3':
			if(empty($capacidad) or empty($tipoMemoria)){
			 	error1();
			}else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;
		case '4':
			if(empty($capacidad) or empty($color)){
			 	error1();
			}else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;
		case '5':
			if(empty($plataforma) or empty($modelo)){
			 	error1();
			}else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;
		case '6':
			if(empty($capacidad) or empty($rpm) or empty($tamano)){
			 	error1();
			}else{
			 	mysql_query($modItem);
				exito();				 		
			 }
			 break;						
		default:
			# code...
			break;
	}
}


?>