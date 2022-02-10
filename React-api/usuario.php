<?php
class Usuario {
    private $idusuario;
    private $usuario;
    private $clave;

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
    public function insertar(){
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO simple_users (userName, password) VALUES ('$this->usuario', '$this->clave');";
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            return("Error en query: %s\n". $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idusuario = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
		return true;
    }

	public function encriptarClave($clave){
        $claveEncriptada = password_hash($clave, PASSWORD_DEFAULT);
        return $claveEncriptada;
    }

    public function verificarClave(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "SELECT userName, password
                FROM simple_users WHERE userName = '$this->usuario'";
        $resultado = $mysqli->query($sql);
        if($datos = $resultado->fetch_assoc()) {
			return password_verify($this->clave, $datos["password"]);
		}
		else {
			false;
		}
		//echo $this->clave;
		//echo "<br>";
		//echo $datos["password"];
		//echo password_verify($this->clave, $datos["password"]);;
        
    }
    public function obtenerTodos() {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "SELECT userName
                FROM simple_user";
        $resultado = $mysqli->query($sql);
		$data = array();
        while($fila = $resultado->fetch_assoc()){ // $array["userName] y $aray["password"]	
            $data[] = $fila;			
        }
        $mysqli->close();
		return $data;
    }

}


?>
