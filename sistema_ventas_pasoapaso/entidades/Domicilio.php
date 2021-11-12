<?php

class Domicilio
{
    private $iddomicilio;
    private $calle;
    private $altura;
    private $piso;
    private $letra;
    private $fk_idlocalidad;
    public function __construct($c, $a, $p, $l, $idl) {
        $this->calle = $c;
        $this->altura = $a;
        $this->piso = $p;
        $this->letra = $l;
        $this->fk_idlocalidad = $idl;

    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }

    public function cargarFormulario($request){
        
        if(isset($request["id"])) {
            $this->obtenerPorId($request["id"]);
        }
        elseif(isset($request["txtNombre"]))
        {
            $this->calle = $request["txtCalle"];
            $this->altura = $request["txtAltura"];
            $this->piso = $request["txtPiso"];
            $this->letra = $request["txtLetra"];
            $this->fk_idlocalidad = $request["slcFk_idlocalidad"];
            
        }
        
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO cliente (
                calle,
                altura,
                piso,
                letra,
                fk_idlocalidad
                ) VALUES (
                    '$this->calle',
                    '$this->altura',
                    '$this->piso',
                    '$this->letra',
                    '$this->fk_idlocalidad',
                );";
        // print_r($sql);exit;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idlocalidad = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE cliente SET
                nombre = '" . $this->nombre . "',
                cuit = '" . $this->cuit . "',
                telefono = '" . $this->telefono . "',
                correo = '" . $this->correo . "',
                fecha_nac =  '" . $this->fecha_nac . "',
                domicilio =  '" . $this->domicilio . "'
                WHERE idcliente = " . $this->idcliente;

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM cliente WHERE idcliente = " . $this->idcliente;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function obtenerPorId($id)
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT *
                FROM domicilio
                WHERE iddomicilio = $id";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->iddomicilio = $fila["iddomicilio"];
            $this->calle = $fila["calle"];
            $this->altura = $fila["altura"];
            $this->piso = $fila["piso"];
            $this->letra = $fila["letra"];
            $this->fk_idlocalidad = $fila["fk_idlocalidad"];
        }
        $mysqli->close();

    }

     public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT * FROM domicilio";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo

            while($fila = $resultado->fetch_assoc()){
                $dom = new Domicilio($fila["calle"], $fila["altura"], $fila["piso"], $fila["letra"] , $fila["fk_idlocalidad"]);
                $aResultado[] = $dom;
            }
        }
        return $aResultado;
    }

}
?>