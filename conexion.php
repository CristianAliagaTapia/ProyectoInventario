<?php

$conexion=mysql_connect("localhost","root","naxo14101994");

if(!$conexion){
	die('no he podido conectar : '.mysql_error());
}

mysql_select_db("Inventario",$conexion);



?>