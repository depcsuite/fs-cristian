<?php

class Usuario {
    // Atributos o propiedades, ambos nombres son válidos
    private $dni;
    private $sNombre;
    private $sApellido;
    private $sUserName;
    private $sPassw;
    private $sMail;
    private $edad;
    private $sGenero;
    public function __construct($dni, $nom, $ap, $uname, $upass, $mail, $ed, $gen) {
        // El método constuctor se ejecuta automáticamente apenas se instancia un objeto
        $this->dni = $dni;
        $this->sNombre = $nom;
        $this->sApellido = $ap;
        $this->sUserName = $uname;
        $this->sPassw = $upass;
        $this->sMail = $mail;
        $this->edad = $ed;
        $this->sGenero = $gen;
    }
    private function metodoPrivado() {
        echo "Este método es privado, sólo se puede invocar desde otros métodos de la clase...<br>";
    }
    public function setsNombre($nombreUsuario) { // "setter"
        $this->sNombre = $nombreUsuario;
    }
    public function getsNombre() { // "getter"
        return $this->sNombre;
    }
    // Cada una de los atributos de tipo privado tiene asignado un "setter" y un "getter" para poder
    // interactuar con el exterior
    public function comprar() {
        $this->metodoPrivado();
        echo $this->sNombre." comprando...<br>";


    }
    public function cambiarPassw() {

    }
    public function registrarse() {

    }
    public function loguearse() {

    }


    /**
     * Get the value of sUserName
     */ 
    public function getSUserName()
    {
        return $this->sUserName;
    }

    /**
     * Set the value of sUserName
     *
     * @return  self
     */ 
    public function setSUserName($sUserName)
    {
        $this->sUserName = $sUserName;

        return $this;
    }
}
?>