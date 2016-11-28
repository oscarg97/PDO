<?php
require_once ('../back/verT.php');
?>
<!DOCTYPE html> <!--comentario-->
<html lang="en">
	<head>
		<title>
			Prueba
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css\bootstrap.min.css">
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css\slide.css">
		<style type="text/css">
		.bg-grey{
			background-color: #f6f6f6;
		}

		</style>
	</head>
	<body>
		<div class="container">
		<div class="rows">
			<div class="col-md-6">
		<h1>Productos Comida</h1>
		
			<form method="get">
				<h4>ID</h4>
				<input type="text" name="idp">
				<input type="submit" value="Buscar">
			</form>
		
		<?php
		if(isset($_GET['idp'])){
			buscarP($_GET['idp']);
		}else{
			cargarP();
		}
		?>
		</div>
		<div  class="col-md-6">
		<h1>Productos Bebidas</h1>
		
			<form method="get">
				<h4>ID</h4>
				<input type="text" name="idb">
				<input type="submit" value="Buscar">
			</form>

		<?php
		if(isset($_GET['idb'])){
			buscarPb($_GET['idb']);
		}else{
			cargarPb();
		}
		?>
		</div>
		</div>
		</div><br><br><br>
		<div class="container">
		<div class="rows">
			<div class="col-md-6">
				<h1>Usuarios</h1>
				<form method="get">
					<h4>ID</h4>
					<input type="text" name="idu">
					<input type="submit" value="Buscar">
				</form>
			
		<?php 
		if(isset($_GET['idu'])){
			buscarU($_GET['idu']);
		}else{
			cargarU();
		}
		?>
		</div>
		</div>
		</div>
	</body>
</html>