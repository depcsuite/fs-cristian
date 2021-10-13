<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function generarNumeros($inicio, $hasta, $paso) {
    $resultados = array();
    for ($i = $inicio; $i <= $hasta; $i = $i+$paso) {
        //$resultados[] = $i;
        array_push($resultados,$i);
        // $resultados[$i] = $i Esto no lo usamos...¿ Por qué?
    }
    return $resultados;
}
//Imprimir un listado de números consecutivos del 1 a 100.
function consecutivosHtaCien() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";
    }
}
//Luego sobre el mismo listado, modificarlo para que sólo muestre los números pares.
function soloPares() {
    for ($i = 2; $i <= 100; $i += 2) { // $i = $i +2
        echo $i . "<br>";
    }
}
//Cuando el número llegue a 60 mostrarlo e interrumpir la ejecución del código con un break.
function soloParesHtaSesenta() {
    for ($i = 2; $i <= 100; $i += 2) {
        echo $i . "<br>";
        if ($i == 60) {
            break;
        }
    }
}


//generarNumeros(2,60,2); // Arranca en uno, va hasta cien,suma de a uno
// Múltiplos de 5 entre el 25y el 5000 incluidos ambos.
$numeros = generarNumeros(25,5000,5);
foreach($numeros as $n) {
    echo $n."<br>";
}
?>