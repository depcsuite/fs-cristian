<?php
include_once("Persona.php");
class Alumno extends Persona
{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __construct($n, $dn, $ed, $nac){
        Persona::__construct($n,$dn,$ed,$nac); // Invocación al constructor de la clase padre
        // Persona, desde el constructor de la clase hija Alumno
        $this->legajo = $this->dni*2/(3.5);
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "Alumno:  " . $this->nombre . "<br>";
        echo "Documento:  " . $this->dni . "<br>";
        echo "Nota del portfolio:  " . $this->notaPortfolio . "<br>";
        echo "Nota PHP:  " . $this->notaPhp . "<br>";
        echo "Nota Proyecto:  " . $this->notaProyecto . "<br>";
        echo "Promedio:  " . $this->calcularPromedio() . "<br><br>";
    }

    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
    }

    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
}
?>