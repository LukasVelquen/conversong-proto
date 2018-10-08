<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplicación</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="col-sm-8 col-md-8 templatemo_col8">
					<img src="images/musica.jpg" alt="IMG">
				</div>
				<div class="col-sm-4 col-md-4 templatemo_col4">
				<span class="login100-form-title">
					ConverSong
				</span>
				<form action="camara.php" method="POST" class="login100-form validate-form">
					<button class="login100-form-btn">
						<img src="images/camara.png" alt="IMG" height="42" width="42">
						Capturar y Convertir partitura
					</button>
				</form>
				&nbsp;
				<form action="datos.php" method="POST" class="login100-form validate-form">
					<button class="login100-form-btn">
						<img src="images/folder.png" alt="IMG" height="42" width="42">
						Ver datos guardados
					</button>
				</form>
				&nbsp;
				<form action="config.php" method="POST" class="login100-form validate-form">
					<button class="login100-form-btn" style="background-color: #FF9900">
						<img src="images/settings.png" alt="IMG" height="42" width="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Configuración
					</button>
				</form>
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>