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

$datosPU = array();
$datosPU["nombreProd"] = "Smart TV";
$datosPU["descProd"] = "Televisor smart";
$datosPU["modelo"] = "554KS";
$datosPU["stock"] = 10;
$datosPU["precio"] = 1000;

$datosPD = array();
$datosPD["nombreProd"] = "Celular smartphone";
$datosPD["descProd"] = "Celu pantalla táctil";
$datosPD["modelo"] = "Samsung";
$datosPD["stock"] = 100;
$datosPD["precio"] = 20000;

$datosPT = array();
$datosPT["nombreProd"] = "Lavarropas";
$datosPT["descProd"] = "Lavarropas blanco";
$datosPT["modelo"] = "554KS";
$datosPT["stock"] = 2;
$datosPT["precio"] = 5000;

$registro[0] = $datosPU;
$registro[1] = $datosPD;
$registro[2] = $datosPT;
echo "<div class=\"row\">";
echo "<div class=\"col-12 col-sm-6\">Nombre</div>";
echo "<div class=\"col-12 col-sm-1\">Modelo</div>";
echo "<div class=\"col-12 col-sm-1\">Stock</div>";
echo "<div class=\"col-12 col-sm-1\">Precio</div>";
echo "<div class=\"col-12 col-sm-3\">Descripcion</div>";
echo "</div>";
for ($i = 0; $i < count($registro); $i++) {
    echo "<div class=\"row\">";
    echo "<div class=\"col-12 col-sm-6\">".$registro[$i]["nombreProd"]."</div>";
    echo "<div class=\"col-12 col-sm-1\">".$registro[$i]["modelo"]."</div>";
    echo "<div class=\"col-12 col-sm-1\">".$registro[$i]["stock"]."</div>";
    echo "<div class=\"col-12 col-sm-1\">".$registro[$i]["precio"]."</div>";
    echo "<div class=\"col-12 col-sm-3\">".$registro[$i]["descProd"]."</div>";
    echo "</div>";

}
    





?>
        </main>
        <footer>

        </footer>
	</div>
</body>

</html>