<!DOCTYPE html>
		<html>
		<head>
		    <title>login</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			
			<!-- vinculo a bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
		<!-- Temas-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<!-- estilo formulario de login-->  
	<link rel="stylesheet" type="text/css" href="login.css">
		</head>
		<body>
	<section class="division"></section>
		 <div id="Contenedor">
				<div class="Icon">
					<!--Icono de usuario-->
					<img src="img/LogoLogin.png" alt="Logo">
				</div>
				<br>
				<form action="validar.php" method="POST">
			<div class="ContentForm">
				
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input name="nickname" class="form-control"  placeholder="Usuario"  aria-describedby="sizing-addon1" required>
			</div>

				<br>

				<div class="input-group input-group-lg">
					<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
					<input name="password" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
				</div>

				<br>

				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
				<!-- <input class="botons" type="submit" onclick="location.href='redireccionamiento.html'" value="Registrarse"> -->
				<div class="opcioncontra"><a href="">Olvido su contraseña?</a></div>
		 		</form>
		 	</div>	
		 </div>		
	</section>
</body>

	<!-- ibreria Jquery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- java scritp de bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>