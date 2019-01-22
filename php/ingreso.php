<?
include('conexion.php');
session_start();

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

function comprobar($codigoo){
	$productos = "SELECT * FROM productos";
	$prod = mysql_query($productos);
	$conteo = 0;
	while ($dato = mysql_fetch_array($prod)) {
		$dato_codigo = $dato['codigo'];
		if($dato_codigo == $codigoo){
			$conteo ++;
		}
	}
	if($conteo == 0){
		return 0;
	}else{
		return 1;
	}
}

$errorMSG=' ';
$addItem = "INSERT INTO productos (tipo, nombre, codigo, cantidad, descripcion, imagen, marca, socket, capacidad, rpm, tamano, plataforma, formato, modelo, cores, tipoMemoria, color) VALUES ('$tipo', '$nombre', '$codigo', '$cantidad', '$descripcion','$imagen', '$marca', '$socket', '$capacidad', '$rpm', '$tamano', '$plataforma', '$formato', '$modelo', '$cores', '$tipoMemoria', '$color')";

if (empty($nombre) or empty($codigo) or empty($marca) or empty($cantidad) or empty($descripcion) or empty($imagen)){
	$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
	echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
}else{
	switch ($tipo) {
		case '1':
			 if(empty($socket) or empty($cores)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			 }else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]);			
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}
			 }

			break;
		case '2':
			if(empty($socket) or empty($plataforma) or empty($formato)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			}else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]);	 		
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}			 	
			}
			break;
		case '3':
			if(empty($capacidad) or empty($tipoMemoria)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			}else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]); 		
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}		 	
			}
			break;
		case '4':
			if(empty($capacidad) or empty($color)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			}else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]);			
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}		 	
			}
			break;
		case '5':
			if(empty($plataforma) or empty($modelo)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			}else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]);	
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}		 	
			}
			break;
		case '6':
			if(empty($capacidad) or empty($rpm) or empty($tamano)){
				$errorMSG = 'No se ha efectuado el registro, debido a que hay campos vacios, por favor completelos.';
				echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
			}else{
			 	if(comprobar($codigo) == 0){
			 		mysql_query($addItem);
					$errorMSG = 'Exito, producto registrado';
					
					echo json_encode(['code'=>3, 'msg'=>$errorMSG]);	
			 	}else{
					$errorMSG = 'El codigo corresponde a otro producto, porfavor reintente con un codigo distinto.';
					echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
			 	}			 	
			}
			break;							
		default:
			# code...
			break;
	}
}