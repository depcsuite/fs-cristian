<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body id="portada">
	<div class="container-fluid">
		<header>
			<?php include_once("navbar.php"); ?>
		</header>
	</div>


	<div class="container-fluid">
		<main>
			<! –– PRIMERA FILA -->

				<div class="row">
					<div class="col-12">
						<div class="container ms-10">
							<h1 class="text-cust">¡Hola! Mi nombre es Cristian <Mitas class=""></Mitas>
							</h1>
							<p class="desc-cust">Ingeniero de software</p>
							<p><button class="btn btn-dark">Ver mis trabajos</button></p>
						</div>
					</div>

				</div>


		</main>


		<?php include_once("footer.php"); ?>
	</div>
</body>

</html>