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

<body>
	<div class="container-fluid">
		<header>
			<nav class="navbar" role="navigation">
				<div class="container-fluid justify-content-md-center">
					<div class="row">
						<div class="col-12 p-3">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link link-cust" href="index.html">Home</a>
									
								</li>
								<li class="nav-item">
									<a class="nav-link link-cust" href="sobremi.html">Sobre mí</a>
								</li>
								<li class="nav-item">
									<a class="nav-link link-cust" href="contacto.html">Contactame</a>
								</li>
								<li class="nav-item text-center">
									<a class="nav-link link-cust" href="trabajos.html">Mis trabajos</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>

		</header>
	</div>


	<div class="container-fluid">
		<main>
			<! –– PRIMERA FILA -->

				<div class="row">
					<div class="col-12 col-sm-12">
						<div class="container p-5">
							<h1 class="text-cust">¡Contactame!</h1>
							<p class="desc-cust">Aquí algún texto invitando a que me escriban</p>
                            
						</div>
					</div>

					
				</div>
                
                <div class="row">
                    <div class="col-12 p-5">
                        
                            <form action="..." method="POST">
                                <label><h3>Nombre:</h3></label><input type="text" class="form-control form-cust" name="nombreUs">
                                <p>Email:</p><input type="text" class="form-control form-cust" name="emailUs">
                                <p>Mensaje:</p>
                                <textarea class="form-control form-cust" name="mensajeUs"></textarea>
                                <input class="form-control" type="submit" name="enviar" value="Mensajeame">
                            </form>        
                                
                                
                        
                                           
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