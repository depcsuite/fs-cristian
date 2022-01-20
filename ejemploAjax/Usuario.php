<?php

class Usuario{
    private $idUsuario;
    private $nombre;
    private $username;
  

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
    public function obtenerTodos(){
        $aLocalidades = null;
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT 
            idUsuario,
            nombre, 
            username
            FROM usuarios";
        $resultado = $mysqli->query($sql);

        while ($fila = $resultado->fetch_assoc()) {
            $aUsuarios[] = array(
                "idUsuario" => $fila["idUsuario"],
                "nombre" => $fila["nombre"],
                "username" => $fila["username"]);
       
        }
        return $aUsuarios;
    }

}


?>