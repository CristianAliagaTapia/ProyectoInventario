<?php
include('conexion.php');
session_start();

$_SESSION['message']='';
$_SESSION['Usuario']='';
$_SESSION['id']='';
$_SESSION['contraseña']='';


$nombreUsuario = $_POST ['nombreUsuario'];
$contrasenaUsuario = $_POST['contrasenaUsuario'];
$recontrasenaUsuario = $_POST['recontrasenaUsuario'];

$extraerLogins = "SELECT * FROM login";
$logins = mysql_query($extraerLogins);

$idUser = 0;

if(empty($nombreUsuario) or empty($contrasenaUsuario) or empty($recontrasenaUsuario)){
	$_SESSION['message'] = '<div class="alert alert-warning"> Hay campos vacios, por favor completelos. </div>';
	echo   '<html>
				<head>
					<meta http-equiv="refresh" content="0;url=indexSignup.php">
				</head>
			</html>
			<body>
			</body>
			';
}else{
	if ($contrasenaUsuario == $recontrasenaUsuario) {
		$conteo = 0;
		while ($dato = mysql_fetch_array($logins)) {

			$dato_username =$dato['NombreUsuario'];

			if($dato_username == $nombreUsuario){
				$conteo ++;
			}
			$idUser ++;
		}
		if ($conteo == 0) {
		 	/*$_SESSION['message'] = '<div class="alert alert-warning"> Se puede ingresar </div>'*/;
		 	$_SESSION['Usuario']=$nombreUsuario;
			$_SESSION['id']=$idUser;
			$_SESSION['contraseña']=$contrasenaUsuario;
		 	
			echo   '<html>
						<head>
							<meta http-equiv="refresh" content="0;url=indexSignup2.php">
						</head>
					</html>
					<body>
					</body>
					';
		}else{
			$_SESSION['message'] = '<div class="alert alert-warning"> Usuario ya registrado, utilize un nombre de usuario distinto. </div>';
			echo   '<html>
						<head>
							<meta http-equiv="refresh" content="0;url=indexSignup.php">
						</head>
					</html>
					<body>
					</body>
					';		
			}
	}else{
		$_SESSION['message'] = '<div class="alert alert-warning"> Las dos contraseñas no coinciden, reintente nuevamente. </div>';
		echo   '<html>
					<head>
						<meta http-equiv="refresh" content="0;url=indexSignup.php">
					</head>
				</html>
				<body>
				</body>
				';
	}
}
?>