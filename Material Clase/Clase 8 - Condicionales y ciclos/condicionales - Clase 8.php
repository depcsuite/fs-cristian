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
		<main>
<?php
// Matemática Discreta
// Leyes de DeMorgan
$numeroA = 5;
$numeroB = 8;
$numeroC = 1;
$resultado = $numeroA > $numeroB; // Estamos si numeroA es igual a numeroB
// Si la comparación da True (se cumple), se interpreta valor verdadero 1
// Si la comparación fuera False (NO se cumple), se interpreta valor falso 0
$resultadoB = ($numeroA < $numeroB) && ($numeroB < $numeroC);
// Condición compuesta (AND): Da True (1) si y sólo si, todos sus componentes
// se cumplen
$resultadoC = ($numeroA < $numeroB) || ($numeroB == 17);
// Condición compuesta (OR): Da True (1) si AL MENOS UNO de los componentes se cumple
$resultadoD = $resultadoB || !($resultadoC && ($numeroA<=10));
// $resultadoB + $resultadoC*($numeroA<=10)
// Los símbolos de OR (||) funcionan MARCANDO TÉRMINOS, como si fueran el "+".
// !True = False
// !False = True
$nombre = "Cristian";
$numeroAbis = "5"; // Recuerden las comillas identifican un tipo de dato "string"
/*if($numeroA === $numeroAbis) {
    echo "Ambas variables son iguales";
}
else {
    echo "Las variables NO son iguales";
}
$i = 0;
while($i<1000) {
    echo "<div class=\"card\"><div class=\"card-header\">Producto ".$i."</div><div class=\"card-body\">Descripcion</div></div>";
    $i++;
}
¨*/
$registro = array();

$datosPersonaU = array();
$datosPersonaU["nombre"] = "Luca";
$datosPersonaU["apellido"] = "Mitas";
$datosPersonaU["edad"] = 30;
$datosPersonaU["lenguajes"] = array("Java","C++",".NET","Python","PHP","Matlab","Julia");

$datosPersonaD = array();
$datosPersonaD["nombre"] = "Laura";
$datosPersonaD["apellido"] = "Ortiz";
$datosPersonaD["edad"] = 38;
$datosPersonaD["lenguajes"] = array("Ninguno");

$registro[0] = $datosPersonaU;
$registro[1] = $datosPersonaD;
 
for ($i = 0; $i < count($registro); $i++) {
    echo "<div class=\"card\">";
    echo "<div class=\"card-header\">".$registro[$i]["nombre"]." ".$registro[$i]["apellido"]."</div>";
    echo "<div class=\"card-body\">Edad:".$registro[$i]["edad"]."<br>";
    echo "Lenguajes manejados:<ul>";
    foreach($registro[$i]["lenguajes"] as $leng) {
        echo "<li>".$leng."</li>"; 
    }
    echo "</ul></div></div>";

}
    





?>
        </main>
        <footer>

        </footer>
	</div>
</body>

</html>