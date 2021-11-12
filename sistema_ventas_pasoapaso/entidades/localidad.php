<?php

class Localidad{
    private $idlocalidad;
    private $nombre;
    private $fk_idprovincia;

    public function __construct($n, $fkidp){
        $this->nombre = $n;
        $this->fk_idprovincia = $fkidp;

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
    
    public function obtenerPorProvincia($idProvincia){
        $aLocalidades = null;
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT *
            FROM localidades 
            WHERE fk_idprovincia = $idProvincia
            ORDER BY idlocalidad DESC";
        $resultado = $mysqli->query($sql);

        while ($fila = $resultado->fetch_assoc()) {
            $aLocalidades[] = array(
                "idlocalidad" => $fila["idlocalidad"],
                "nombre" => $fila["nombre"]);
       
        }
        return $aLocalidades;
    }
    public function obtenerPorId($id){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $query = "SELECT * FROM localidad WHERE idlocalidad = ".$id;
        $resultado = $mysqli->query($query);
        if($resultado != true) {
            printf("ERROR", $mysqli->error);

        }
        else {
            $dato = $resultado->fetch_assoc();
            $this->idlocalidad = $dato["idlocalidad"];
            $this->nombre = $dato["nombre"];

        }
    }
    public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT * FROM localidad";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo

            while($fila = $resultado->fetch_assoc()){
                $loc = new Localidad($fila["nombre"], $fila["fk_idprovincia"]);
                $aResultado[] = $loc;
            }
        }
        return $aResultado;
    }
}


?>