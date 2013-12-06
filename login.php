<?php
	require_once("driver.php");
	require_once("view.php");
	validarSession("login");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>
        ReportaTec - Login
    </title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php
		printTopbar();
	?>
	<div class="container CScontenedor">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading CScentrar">
			        	Sistema de Reportes
			        </div>
					<form class="form-signin" action="crearSession.php" method="post">
						<div id="message">
						
			        	</div>
			        	<input id="userId" type="text" name="userId" class="form-control firstInput" placeholder="Matrícula" autofocus required>
			        	<input type="password" name="password" class="form-control lastInput" placeholder="Contraseña" required>
			        	<button class="btn btn-lg btn-primary btn-block signIn" type="submit">Iniciar sesión</button>
			    	</form>
		    	</div>
    		</div>
    	</div>
	</div>
	
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>
