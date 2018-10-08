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
				<span class="login100-form-title">
					Datos
				</span>
				<div class="col-sm-12 col-md-12 templatemo_col12" align="center">
					
				<form action="tab.php" method="POST" class="login100-form validate-form">
					<button type="button" class="btn btn-primary btn-lg btn-block">Tab 1</button>
				</form>
				&nbsp;
				<form action="tab.php" method="POST" class="login100-form validate-form">
					<button type="button" class="btn btn-primary btn-lg btn-block">Tab 2</button>
				</form>
				&nbsp;
				<form action="tab.php" method="POST" class="login100-form validate-form">
					<button type="button" class="btn btn-primary btn-lg btn-block">Partitura 1</button>
				</form>
				&nbsp;
				<form action="tab.php" method="POST" class="login100-form validate-form">
					<button type="button" class="btn btn-primary btn-lg btn-block">Partitura 2</button>
				</form>
				&nbsp;
				</div>

				<div class="col-sm-6 col-md-6 templatemo_col6" align="center">

				<form method="POST" class="login100-form validate-form">
					<button class="login100-form-btn">
						Convertir
					</button>
				</form>
				</div>
				<div class="col-sm-6 col-md-6 templatemo_col6" align="center">
				<form method="POST" class="login100-form validate-form">
					<button class="login100-form-btn">
						Volver
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