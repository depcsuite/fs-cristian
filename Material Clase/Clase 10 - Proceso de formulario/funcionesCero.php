<?php
function sumar($num1, $num2) { // Declaración de la función
	$resultado = $num1 + $num2;
    return $resultado;
}
function generarNumeros($inicio, $hasta, $paso) {
    $resultados = array();
    for ($i = $inicio; $i <= $hasta; $i = $i+$paso) {
        //$resultados[] = $i;
        array_push($resultados,$i);
        // $resultados[$i] = $i Esto no lo usamos...¿ Por qué?
    }
    return $resultados;
}
// Vamos a representar la función lineal: y = -6x+4
function fLineal($x=0) { // Declaración de la función
	$resultado = -6*$x+4;
    return $resultado;
}
function saludar($nombre, $apellido = "") {
    $saludo = "Hola $nombre $apellido"; 
    return $saludo;
}
function contarElementos($aUnArray) {
    $cantidad = 0;
    while($cantidad<count($aUnArray)) {
        $cantidad = $cantidad+1; // $cantidad++
    }
    return $cantidad;

}
$bruto = 50000; //ámbito global

function calcularNeto() {
    global $bruto;
    return $bruto - $bruto*0.17; //ámbito local
}
function generarPacientes(){
    
    $aPacientes = array();
    $aPacientes[]  = array(
   "dni" =>  "33.765.012",
   "nombre" => "Ana Acuña",
   "edad" => 45,
   "peso" => 81.50
    );
    
    $aPacientes[]  = array(
   "dni" =>  "23.684.385",
   "nombre" => "Gonzalo Bustamante",
   "edad" => 66,
   "peso" => 79 
    );
    return $aPacientes;
}
function listarPacientes($arrayPacientes) {
    for ($i = 0; $i < count($arrayPacientes); $i++) {
        echo "<tr>";
		echo "<td>".$arrayPacientes[$i]["dni"]."</td>";
		echo "<td>".$arrayPacientes[$i]["nombre"]."</td>";
		echo "<td>".$arrayPacientes[$i]["edad"]."</td>";
		echo "<td>". $arrayPacientes[$i]["peso"]."</td>";
        echo "</tr>";
    }

}
function generarExamenes() {
    $aExamenes = array();
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "7/10/2021", "dniAlumno" => 11111111, "nota" => 6, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    $aExamenes[] = array("fecha" => "5/10/2021", "dniAlumno" => 35729101, "nota" => 5, "materia" => "Cálculo vectorial");
    return $aExamenes;
}
function displayArray($unArray) {
    
    for($i = 0; $i<count($unArray); $i++){
        echo "<div class=row><div class=\"col-12 col-sm-3\">".$unArray[$i]["fecha"]."</div>";
        echo "<div class=\"col-12 col-sm-3\">".$unArray[$i]["dniAlumno"]."</div>";
        echo "<div class=\"col-12 col-sm-3\">".$unArray[$i]["nota"]."</div>";
        echo "<div class=\"col-12 col-sm-3\">".$unArray[$i]["materia"]."</div>";
        echo "</div>";    

    }
}
function duplicar() {
    static $numero = 10;
    $numero = $numero*2;
    return $numero;
    
}

function fechas() {
    $fecha = strtotime("2019-12-01");
    $mes_proximo = date("Y-m-d", strtotime("+137 day", $fecha));
    return $mes_proximo;

}
function login($u,$e,$c) {


    $validoUs = "Cristian";
    $emailValido = "cmitas@depcsuite.com";
    $passValida = "019c9fbe91025390efb1c65ce5eee5d6";
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        return "Logueo exitoso";
    } 
    else 
    {
        header("Location: registro.php");
        
    }
}
// Las variables que se crean en el interior de una función sólo tienen vigencia dentro de ella
// Esto significa que no son ni accesibles ni visibles desde el exterior
//echo calcularNeto();
//echo "<br>La variable bruto vale: ".$bruto;
