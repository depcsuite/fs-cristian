<?php
    class Clase {
        private $nombre;
        private $entrenador;
        private $aAlumnos;
        function __construct($n, $e) {
            $this->nombre = $n;
            $this->entrenador = $e;
            $this->aAlumnos = array();
        }
        public function asignarEntrenador($e) {
            $this->entrenador = $e;

        }
        public function echarEntrenador() {
            $this->entrenador = NULL;

        }
        public function inscribirAlumno($a) {
            array_push($this->aAlumnos, $a);

        }
        public function imprimirListado() {
            foreach ($this->aAlumnos as $al) {
                echo "Nombre alumno: ".$al->getNombre()."<br>";

            }



        }

    }
?>