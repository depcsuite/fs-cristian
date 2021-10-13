<!DOCTYPE html>
<html lang="es">

<?php
include("navbar.php");
?>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
</head>

<body>
	<div class="container-fluid">
		<header>
		<?php echo navbar(); ?>	
		</header>
	</div>


	<div class="container-fluid">
		<main>
			<!–– PRIMERA FILA -->

				<div class="row">
					<div class="col-12 col-sm-6">
						<div class="container p-5">
							<h1 class="text-cust">Sobre mí...</h1>
							<p class="desc-cust">Ingeniero de software</p>
							<p><a href="..."><button class="btn btn-dark">Descargar CV</button></a></p>
							<img src="..." alt="suCV">
						</div>
					</div>
                    <div class="col-12 col-sm-6">
                        <img class="rounded" src="images/perfilCampus.png" alt="Una linda foto suya">
                    </div>
					
				</div>
                
                <div class="row">
                
                    <div class="col-12 col-sm-6 p-5">
                        
                            <div class="cont-cust p-5">
								<h3>Educación</h3>
								<p>Información sobre nuestra trayectoria profesional...</p>
							</div>
                                           
                    </div>
                    <div class="col-12 col-sm-6 p-5">
                        <div class="cont-cust p-5">
							<h3>Trayectoria</h3>
							<p>Información sobre nuestra trayectoria profesional...</p>
						</div>
                    </div>
                
                </div>  
                <div class="row">
                
                    <div class="col-12 col-sm-4 p-5">
                        
                            <div class="cont-cust p-5">
								<h3>Educación</h3>
								<p>Información sobre nuestra trayectoria profesional...</p>
							</div>
                                           
                    </div>
                    <div class="col-12 col-sm-4 p-5">
                        <div class="cont-cust p-5">
							<h3>Trayectoria</h3>
							<p>Información sobre nuestra trayectoria profesional...</p>
						</div>
                    </div>

					<div class="col-12 col-sm-4 p-5">
						<div class="cont-cust p-5">
							<h3>Trayectoria</h3>
							<p>Información sobre nuestra trayectoria profesional...</p>
						</div>
					</div>                
                </div>  
                <div class="row">
                
                    <div class="col-12 col-sm-12 p-5">
                        
                            <div class="cont-cust p-5">
								<h3>Educación</h3>
								<p>Información sobre nuestra trayectoria profesional...</p>
							</div>
					</div> 
				</div>
                                                     
		</main>


		<footer class="fixed-bottom">
			<div class="row">
				<div class="col-12 col-sm-4">
					<p class="text-center">Parte 1</p>
				</div>
				<div class="col-12 col-sm-4">
					<p class="text-center">Parte 1</p>
				</div>
				<div class="col-12 col-sm-4">
					<p class="text-center">Parte 1</p>
				</div>
			</div>

            </div>
			
		</footer>
	</div>
</body>

</html>