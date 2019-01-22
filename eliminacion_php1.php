<?
include('conexion.php');
session_start();

$codigo = NULL;

$codigo = $_POST['codigo'];

$errorMSG=' ';
function eliminar($codigoo){
	$eliminar = "DELETE FROM productos WHERE codigo = $codigoo";
	mysql_query($eliminar);
}

//eliminar($codigo);
$errorMSG = 'Exito, producto eliminado.';
echo json_encode(['code'=>4, 'msg'=>$errorMSG]);

?>