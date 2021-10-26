<?php
include_once("Persona.php");
class Docente extends Persona
{
    private $especialidad;
    const ESPECILIADAD_WP = "Wordpress";
    const ESPECILIADAD_ECO = "Economía aplicada";
    const ESPECILIADAD_BBDD = "Base de datos";

    public function __construct($n,$d,$ed,$nac){
        Persona::__construct($n,$d,$ed,$nac);
    
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function imprimir(){

    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Las especialidades habilitadas para un docente son: <br>";
        echo self::ESPECILIADAD_WP . "<br>";
        echo self::ESPECILIADAD_ECO . "<br>";
        echo self::ESPECILIADAD_BBDD . "<br>";
    }

    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
}
?>