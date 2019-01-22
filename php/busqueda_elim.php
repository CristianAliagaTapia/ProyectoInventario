<?
include('conexion.php');
session_start();

$codigo = NULL;

$codigo = $_POST['codigo'];

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
function eliminar($codigoo){
	$eliminar = "DELETE FROM productos WHERE codigo = $codigoo";
	mysql_query($eliminar);
}

if(empty($codigo)){
	$errorMSG = 'El campo de codigo se encuentra vacio, por favor rellenelo.';
	echo json_encode(['code'=>1, 'msg'=>$errorMSG]);
}else{
	if(comprobar($codigo) == 0){
		$errorMSG = 'El codigo del producto que desea eliminar no se encuentra en la base de datos.';
		echo json_encode(['code'=>2, 'msg'=>$errorMSG]);
	}else{
		$producto = "SELECT * FROM productos WHERE codigo = '$codigo'";
		$prod = mysql_query($producto);
		while ($dato = mysql_fetch_array($prod)) {
		$dato_tipo = $dato['tipo'];
		$dato_nombre = $dato['nombre'];		
		$dato_codigo = $dato['codigo'];
		$dato_cantidad = $dato['cantidad'];
		$dato_descripcion = $dato['descripcion'];
		$dato_imagen = $dato['imagen'];		
		$dato_marca = $dato['marca'];
		}
		$errorMSG = 'Exito, producto encontrado.';
		echo json_encode(['code'=>3, 'msg'=>$errorMSG, 'tipo'=>$dato_tipo, 'nombre'=>$dato_nombre, 'codigo'=>$dato_codigo, 'cantidad'=>$dato_cantidad, 'descripcion'=>$dato_descripcion, 'marca'=>$dato_marca]);
	}
}

?>