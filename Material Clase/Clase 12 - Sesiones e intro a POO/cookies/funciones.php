<?php
function login($u,$e,$c) {


    $validoUs = "Cristian";
    $emailValido = "cmitas@depcsuite.com";
    $passValida = "019c9fbe91025390efb1c65ce5eee5d6";
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        setcookie("usuario", $validoUs);
    } 
    else 
    {
        header("Location: formulario.php");
        
    }
}
// Las variables que se crean en el interior de una función sólo tienen vigencia dentro de ella
// Esto significa que no son ni accesibles ni visibles desde el exterior
//echo calcularNeto();
//echo "<br>La variable bruto vale: ".$bruto;
