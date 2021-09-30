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
                <?php
                    // Todo lo que haya acá es código PHP
                    $nombre = "Cristian"; // Variable de tipo String, cadena de texto
                    $edad = 30; // Variable de tipo Integer, número entero
                    $numeroComa = 3.14; // Variable de tipo Float, número con punto flotante
                    $valorBooleano = false; // Variable de tipo Boolean, o bien true o bien false
                    $apellido = "Mitas";
                    $numA = 4;
                    $numB = 2;
                    $producto = $numA*$numB;
                    $prom = ($numA+$numB)/2;
                    //echo "<h1>Hola mundo, programando en PHP! Mi nombre es ".$nombre." </h1><br>";
                    //echo "<h3>El resultado de multiplicar ".$numA." con ".$numB." es : ".$producto."</h3>";
                    //echo gettype($valorBooleano); // Ver tipo de dato de una variable
                    $variableArray = array("Luca","Mitas");
                    //$variableArray[0] = "Primera posición del Array";
                    //$variableArray[1] = "Segunda posición del Array";
                    //echo "<ul><li>".$variableArray[0]."</li><li>".$variableArray[1]."</li></ul>"
                    $datosPersonaU = array();
                    $datosPersonaU["nombre"] = "Luca";
                    $datosPersonaU["apellido"] = "Mitas";
                    $datosPersonaU["edad"] = 30;
                    $datosPersonaU["lenguajes"] = array("Java","C++",".NET","Python","PHP","Matlab","Julia");
                    echo "<br>Nombre: ".$datosPersonaU["nombre"]." | Apellido: ".$datosPersonaU["apellido"];
                    echo "<br>Edad: ".$datosPersonaU["edad"];
                    echo "<br>Lenguajes manejados: <ul>";
                    foreach($datosPersonaU["lenguajes"] as $leng) {
                        echo "<li>".$leng."</li>"; 
                    }
                    
                    echo "</ul>";
                    
                    $datosPersonaD = array();
                    $datosPersonaD["nombre"] = "Laura";
                    $datosPersonaD["apellido"] = "Sánchez";
                    $datosPersonaD["edad"] = 38;
                    $datosPersonaD["lenguajes"] = array("Golang","COBOL");
                    echo "<br>Nombre: ".$datosPersonaD["nombre"]." | Apellido: ".$datosPersonaD["apellido"];
                    echo "<br>Edad: ".$datosPersonaD["edad"];
                    echo "<br>Lenguajes manejados: <ul>";
                    foreach($datosPersonaD["lenguajes"] as $leng) {
                        echo "<li>".$leng."</li>"; 
                    }
                    
                    echo "</ul>";
                    
                    $registroPersona = array($datosPersonaU, $datosPersonaD); 
                    echo $registroPersona[0]["nombre"];




                ?>

        </header>
        <main>

        </main>
        <footer>

        </footer>
	</div>
</body>

</html>