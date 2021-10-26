<?php
class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;
    protected $celular;
    protected $email;

    public function __construct($n, $dn, $ed, $nac, $cel, $em){
        $this->nombre = $n;
        $this->dni = $dn;
        $this->ed = $ed;
        $this->nacionalidad = $nac;
        $this->celular = $cel;
        $this->email  = $em;
    
    }

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

    public function imprimir(){
        //definicion de la funcion
    }

    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }


}
?>