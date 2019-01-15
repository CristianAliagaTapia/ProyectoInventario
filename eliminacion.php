<?
include('conexion.php');
session_start();

$_SESSION['mensaje_error2'] = '';

$codigo = NULL;

$codigo = $_POST['codigo'];

function error1(){
	$_SESSION['mensaje_error2'] = '<div class="alert alert-danger"> El campo de codigo se encuentra vacio, por favor rellenelo. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexEliminar.php">
		</head>
	</html>
	<body>
	</body>
	';
}


function error2(){
	$_SESSION['mensaje_error2'] = '<div class="alert alert-danger"> El codigo del producto que desea eliminar no se encuentra en la base de datos. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexEliminar.php">
		</head>
	</html>
	<body>
	</body>
	';	
}
function exito(){
	$_SESSION['mensaje_error2'] = '<div class="alert alert-success"> Exito, producto eliminado. </div>';
	echo   '<html>
		<head>
			<meta http-equiv="refresh" content="0;url=indexEliminar.php">
		</head>
	</html>
	<body>
	</body>
	';		
}

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

function eliminar($codigoo){
	$eliminar = "DELETE FROM productos WHERE codigo = $codigoo";
	mysql_query($eliminar);
}

if(empty($codigo)){
	error1();
}else{
	if(comprobar($codigo) == 0){
		error2();
	}else{
		eliminar($codigo);
		exito();
	}
}

?>