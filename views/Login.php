<!DOCTYPE html>
<html> 
<head>
	<title>Mujer Holística</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/StyleLogin.css">

</head>
<body>

<header class="header2">
		<div class="container flex">
			<img class="header_imgLogo" src="Images/MHLogo.png">
			<a href="index.php" class="header_pHolistica">Mujer Holistica</a>
			<nav class="navegacion">
				<a href="index.php?menu=conocenos" class="header_menu">Conocenos</a>
				<a href="index.php?menu=servicios" class="header_menu">Servicios</a>
				<a href="index.php?menu=contactanos" class="header_menu">Contactanos</a>
				<a href="#" class="header_menu">Darse de alta</a>
				<a href="inicioSesion.php" class="header_menu">Iniciar Sesión</a>
			</nav>	
		</div>
	</header>
	<main class="contenedor">
		<div class="imagen-login">
			<img class="" src="Images/LoginIcon.png">
		</div>
		<form action="">
			<div class="row my-3">
				<label for="email" class="col-12 col-md-3 text-center ">Correo Electronico: </label>
				<input class="art_bd-email col-12 col-md" type="email" name="email" placeholder="email@ejemplo.com">
			</div>
			<div class="row my-3">
				<label for="password" class="col-12 col-md-3 text-center">Contraseña:</label>
				<input class="art_bd-pass col-12 col-md" type="password" name="password" placeholder="password">
			</div>	
				<input type="submit" value="Aceptar" class="art_bd-accept">
				<p class="text-center">¿Aun no te has registrado? Crea una cuenta ando click <a href="registro.php">aqui</a></p>
		</form>
	</main>
			


		<footer class="footer">
			<p class="footer_inf">Información Legal</p>
		</footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>