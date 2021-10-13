<?php
include("navbar.php");
include("funcionesCero.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body id="portada">
	<div class="container-fluid">
		<header>
			<?php echo navbar(); ?>			

		</header>
	</div>


	<div class="container-fluid">
		<main>
			<! –– PRIMERA FILA -->
			<?php
			$arrayExamenes = generarExamenes();
			displayArray($arrayExamenes);
			?>

				
		</main>


		<footer class="fixed-bottom bg-light">
			<div class="row">
				<div class="col-12 col-sm-4">
					<p class="text-center"><i class="fab fa-linkedin-in"></i></p>
				</div>
				<div class="col-12 col-sm-4">
					<p class="text-center">Parte 1</p>
				</div>
				<div class="col-12 col-sm-4">
					<p class="text-center">Parte 1</p>
				</div>
			</div>
			
		</footer>
	</div>
</body>

</html>