<?php

$conexion=mysql_connect("localhost","root","naxo14101994");

if(!$conexion){
	die('no he podido conectar : '.mysql_error());
}

mysql_select_db("Inventario",$conexion);

$request = $_POST["query"];

$query = "SELECT * FROM productos WHERE nombre LIKE '%".$searchTerm."%' ORDER BY nombre ASC";

$result = mysql_query($query);

$data = array();
if(mysql_num_rows($result) > 0){
	while ($row = mysql_fetch_assoc($result)) {
		$data[] = $row["nombre"];
			}
}
echo json_encode($data);
?>