<?php
include('conexion.php');
session_start();

$idUser = $_SESSION['id'];
$nombreUsuario = $_SESSION['Usuario'];
$contrasenaUsuario = $_SESSION['contraseña'];

$nombreUsuarioReal = $_POST['nombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$celular = $_POST['celular'];
$email = $_POST['email'];

if(empty($nombreUsuarioReal) or empty($primerApellido) or empty($segundoApellido) or empty($celular) or empty($email)){
	$_SESSION['message'] = '<div class="alert alert-warning"> Hay campos vacios, por favor completelos. </div>';
	echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexSignup2.php">
				</head>
			</html>
			<body>
			</body>
			';
}else{
	$ingresoUsuario = "INSERT INTO login (id, NombreUsuario, Contrasena) Values ('$idUser', '$nombreUsuario','$contrasenaUsuario')";
	mysql_query($ingresoUsuario);
	$ingresoDatos = "INSERT INTO usuarios(id, NombreUsuario, Nombre, PrimerApellido, SegundoApellido, Celular, e_mail) Values('$idUser','$nombreUsuario','$nombreUsuarioReal','$primerApellido','$segundoApellido','$celular','$email')";
	mysql_query($ingresoDatos);
	session_unset();
	session_destroy();
	echo   '<script>alert ("REGISTRO COMPLETADO EXITOSAMENTE");</script>
			<html>
				<head>
					<meta http-equiv="refresh" content="0;url=index.php">
				</head>
			</html>
			<body>
			</body>
			';
}
?>