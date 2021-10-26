<?php
    include_once("Persona.php");
    class Alumno extends Persona {
        private $peso;
        private $altura;
        private $aptoFisico;
        private $presentismo;
        private $fecNac;
        function __construct($d,$n,$ed,$nac,$cel,$em, $fec)
        {
            Persona::__construct($n,$d,$ed,$nac,$cel,$em);
            $this->peso = 0;
            $this->altura = 0;
            $this->aptoFisico = false;
            $this->presentismo = 0;
            $this->fecNac = $fec;
            
        }
        public function setFichaMedica($p,$es,$ap) {
            $this->peso = $p;
            $this->altura = $es;
            $this->aptoFisico = $ap;
            return "Ficha médica cargada";
        }
        public function setPresentismo($p) {
            $this->presentismo = $p;
        }

    }

?>