<!DOCTYPE html>
<html> 
<head>
	<script src="js/imprimirHorarios.js"></script>
	<title>Mujer Holística</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/Style.css">


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
				<a href="index.php?menu=alta" class="header_menu">Darse de alta</a>
				<a href="close_sesion.php?close" class="header_menu">Salir</a>
			</nav>	
		</div>
	</header>

 <main class="container">
	<div class="seccion">
		<div class="area">
			<h2>Seleccione un area</h2>

			<div class="area-seleccion">
				<input type="button" value="Ginecología" onclick="imprimirHorarios(1);"></input><br><br><br><br>
				<input type="button" value="Psicología" onclick="imprimirHorarios(2);"></input><br><br><br><br>
				<input type="button" value="Nutrición" onclick="imprimirHorarios(3);"></input><br><br><br><br>
				<input type="button" value="Ayuda legal" onclick="imprimirHorarios(4);"></input><br><br><br><br>
			</div>
		</div>
		<div class="calendario">
			<h2>Fechas</h2>
			<div id="horario">
			</div>
		</div>
	</div>

</main>	

		<footer class="footer">
			<p class="footer_inf">Información Legal</p>
		</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>