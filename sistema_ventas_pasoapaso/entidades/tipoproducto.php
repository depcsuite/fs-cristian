<?php

class TipoProducto {
    private $idtipoproducto;
    private $nombre;

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }


    public function cargarFormulario($request){
        //$this->idtipoproducto = isset($request["id"])? $request["id"] : "";
       if(isset($request["id"])) {
            $this->idtipoproducto = $request["id"];
            $this->obtenerPorId($this->idtipoproducto);
        }
        else {
            $this->idtipoproducto = "";
        }
        
        //$this->nombre = isset($request["txtNombre"])? $request["txtNombre"] : "";
    }

    public function insertar(){
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO tipoproducto (
                    nombre
                ) VALUES (
                    '$this->nombre'
                );";
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idtipoproducto = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar(){

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE tipoproducto SET
                nombre = '$this->nombre'
                WHERE idtipoproducto = ".$this->idtipoproducto;
          
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM tipoproducto WHERE idtipoproducto = " . $this->idtipoproducto;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function obtenerPorId(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT idtipoproducto, 
                        nombre
                        FROM tipoproducto
                WHERE idtipoproducto = ".$this->idtipoproducto;
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if($fila = $resultado->fetch_assoc()){
            $this->nombre = $fila["nombre"];
        }
        $mysqli->close();

    }

    public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT 
                    idtipoproducto, 
                    nombre 
                FROM tipoproducto";
        $resultado = $mysqli->query($sql);
        if ($resultado == False) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo
            while($fila = $resultado->fetch_assoc()){
                // Me genera un array llamado "fila", que contiene dos elementos: "idtipoproducto" y "nombre"
                // si usara $resultado->fetch_array(), en $fila no habría los elementos nombrados, sino que
                // tendría que acceder a ellos por número (posición)
                $entidadAux = new TipoProducto();
                $entidadAux->idtipoproducto = $fila["idtipoproducto"]; // $fila[0]
                $entidadAux->nombre = $fila["nombre"]; // $fila[1]
                $aResultado[] = $entidadAux;
            }
        }
        return $aResultado;
    }

}


?>