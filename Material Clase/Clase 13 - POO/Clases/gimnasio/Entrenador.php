<?php
    include_once("Persona.php");
    class Entrenador extends Persona {
        private $especialidad;
        public function __construct($d,$n,$ed,$nac,$cel,$em, $es){
            Persona::__construct($n,$d,$ed,$nac,$cel,$em);
            $this->especialidad = $es;
        
        }


    }
?>