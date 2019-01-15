<?php
include('conexion.php');
session_start();

$_SESSION['message']='';
$_SESSION['Usuario']='';

$nombreUsuario = $_POST ['nombreUsuario'];
$contrasenaUsuario = $_POST['contrasenaUsuario'];

$extraerLogins = "SELECT * FROM login";
$logins = mysql_query($extraerLogins);

if(empty($nombreUsuario) or empty($contrasenaUsuario)){
	$_SESSION['message'] = '<div class="alert alert-warning"> Hay campos vacios, por favor completelos. </div>';
	echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexLogin.php">
				</head>
			</html>
			<body>
			</body>
			';

}else{

	$verificacion = 0;
	while ($dato = mysql_fetch_array($logins)) {

		if($nombreUsuario == $dato['NombreUsuario'] && $contrasenaUsuario ==$dato['Contrasena']){
			$dato_id = $dato['id'];
			$dato_username =$dato['NombreUsuario'];
			$dato_contrasena = $dato['Contrasena'];
			$verificacion ++;
		}

	}
	if ($verificacion == 0) {
	 	$_SESSION['message'] = '<div class="alert alert-warning"> Usuario o contraseña incorrectos. </div>';
	 	
		echo   '<html>
					<head>
						<meta http-equiv="refresh" content="0;url=indexLogin.php">
					</head>
				</html>
				<body>
				</body>
				';

	}else{
	    $_SESSION['Usuario'] = $nombreUsuario;
 	    echo   '<script>alert ("INGRESO EXITOSO");</script>
			<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexAvanzado.php">
				</head>
			</html>
			<body>
			</body>
			';
	}
	
}
?>