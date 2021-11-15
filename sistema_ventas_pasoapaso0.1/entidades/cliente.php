<?php

class Cliente
{
    private $idcliente;
    private $nombre;
    private $apellido;
    private $cuit;
    private $telefono;
    private $correo;
    private $fecha_nac;
    private $fk_iddomicilio;

    public function __construct()
    {

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

    public function cargarFormulario($request)
    {
        if(isset($request["id"])) {
            $this->idcliente = $request["id"];
            $this->obtenerPorId($this->idcliente);
        }
        elseif(isset($request["txtNombre"])){
            $this->nombre = $request["txtNombre"];
            $this->apellido = $request["txtApellido"];
            $this->cuit = $request["txtCuit"];
            $this->telefono = $request["txtTelefono"];
            $this->correo = $request["txtCorreo"];
            $this->fecha_nac = NULL;
            $this->fk_iddomicilio = $request["slcFk_iddomicilio"];
        }
        
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO cliente (
                    nombre,
                    apellido,
                    cuit,
                    telefono,
                    correo,
                    fecha_nac,
                    fk_iddomicilio
                ) VALUES (
                    '$this->nombre',
                    '$this->apellido',
                    $this->cuit,
                    $this->telefono,
                    '$this->correo',
                    '$this->fecha_nac',
                    $this->fk_iddomicilio
                );";
        // print_r($sql);exit;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idcliente = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar()
    {
        echo $this->apellido;
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE cliente SET
                nombre = '" . $this->nombre . "',
                apellido = '" . $this->apellido . "',
                cuit = " . $this->cuit . ",
                telefono = " . $this->telefono . ",
                correo = '" . $this->correo . "',
                fecha_nac =  '" . $this->fecha_nac . "',
                fk_iddomicilio =  " . $this->fk_iddomicilio . "
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
                FROM cliente
                WHERE idcliente = $id";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idcliente = $fila["idcliente"];
            $this->nombre = $fila["nombre"];
            $this->apellido = $fila["apellido"];
            $this->cuit = $fila["cuit"];
            $this->telefono = $fila["telefono"];
            $this->correo = $fila["correo"];
            $this->fecha_nac = $fila["fecha_nac"];
            $this->fk_iddomicilio = $fila["fk_iddomicilio"];
        }
        $mysqli->close();

    }

     public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "SELECT *
                FROM cliente";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo

            while($fila = $resultado->fetch_assoc()){
                $entidadAux = new Cliente();
                $entidadAux->idcliente = $fila["idcliente"];
                $entidadAux->nombre = $fila["nombre"];
                $entidadAux->cuit = $fila["cuit"];
                $entidadAux->telefono = $fila["telefono"];
                $entidadAux->correo = $fila["correo"];
                $entidadAux->fecha_nac = $fila["fecha_nac"];

                $entidadAux->fk_iddomicilio = $fila["fk_iddomicilio"];
                $aResultado[] = $entidadAux;
            }
        }
        return $aResultado;
    }

}
?>