<?php

class Producto {
    private $idproducto;
    private $nombre;
    private $fk_idtipoproducto;
    private $cantidad;
    private $precio;
    private $descripcion;
    private $imagen;

    public function __construct($n, $fk_idtipo, $c, $p, $d){
        $this->nombre = $n;
        $this->fk_idtipoproducto = $fk_idtipo;
        $this->cantidad = $c;
        $this->precio = $p;
        $this->descripcion = $d;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }


    public function cargarFormulario($request){
        if(isset($request["id"])) {
            $this->obtenerPorId($request["id"]);
        }
        elseif(isset($request["txtNombre"]))
        {
            $this->nombre = $request["txtNombre"];
            $this->descripcion = $request["descripcion"];
            $this->precio = $request["precio"];
            $this->cantidad = $request["cantidad"];
            $this->fk_idtipoproducto = $request["slcTipo"];
            
        }
        
    }

    public function insertar(){
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO productos (
                    nombre, 
                    fk_idtipoproducto,
                    cantidad, 
                    precio, 
                    descripcion
                ) VALUES (
                    '$this->nombre', 
                    $this->fk_idtipoproducto,
                    $this->cantidad,
                    $this->precio, 
                    '$this->descripcion',

                );";
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idproducto = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function actualizar(){

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "UPDATE productos SET
                nombre = '$this->nombre',
                fk_idtipoproducto = $this->fk_idtipoproducto,
                cantidad = $this->cantidad,
                precio = $this->precio,
                descripcion = '$this->descripcion,
                imagen = '$this->imagen'
                WHERE idproducto = $this->idproducto";
          
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM productos WHERE idproducto = " . $this->idproducto;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function obtenerPorId($id){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $query = "SELECT * FROM producto WHERE idproducto = ".$id;
        $resultado = $mysqli->query($query);
        if($resultado != true) {
            printf("ERROR", $mysqli->error);

        }
        else {
            $dato = $resultado->fetch_assoc();
            $this->idproducto = $dato["idproducto"];
            $this->nombre = $dato["nombre"];
            $this->descripcion = $dato["descripcion"];
            $this->precio = $dato["precio"];
            $this->cantidad = $dato["cantidad"];
            $this->fk_idtipoproducto = $dato["fk_idtipoproducto"];
        }
    }
// public function __construct($n, $fk_idtipo,$c, $p, $d){
    public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $consulta = "SELECT * FROM producto";
        $resultado = $mysqli->query($consulta);
        if($resultado != true) {
            printf("ERROR" , $mysqli->error);

        }
        $aProducto = [];
        while($fila = $resultado->fetch_assoc()) {
            $producto = new Producto($fila["nombre"], $fila["fk_idtipoproducto"],
             $fila["cantidad"], $fila["precio"], $fila["descripcion"]);
            $producto->idproducto = $fila["idproducto"];
            $aProducto[] = $producto; // Almaceno el producto recién creado en el array
            // "aProducto", con la idea de poder devolverlo después.
        }
        $mysqli->close();
        return $aProducto; // Retorno el array "aProducto"
    }
        
        
        
        
        
        
    
}


?>