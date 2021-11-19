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
            $this->descripcion = $request["txtDescripcion"];
            $this->precio = $request["txtPrecio"];
            $this->cantidad = $request["txtCantidad"];
            $this->fk_idtipoproducto = $request["slcTipo"];
            //echo "<h1>Vale: ".$this->nombre."</h1>";
        }
        
    }

    public function insertar(){
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        //Arma la query
        $sql = "INSERT INTO producto (
                    nombre, 
                    cantidad,
                    precio, 
                    descripcion,
                    fk_idtipoproducto
                ) VALUES (
                    '$this->nombre', 
                    $this->cantidad,
                    $this->precio, 
                    '$this->descripcion',
                    '$this->fk_idtipoproducto'

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
        $sql = "UPDATE producto SET
                nombre = '$this->nombre',
                cantidad = $this->cantidad,
                precio = $this->precio,
                descripcion = '$this->descripcion',
                fk_idtipoproducto = $this->fk_idtipoproducto
                WHERE idproducto = $this->idproducto";
          
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE, Config::BBDD_PORT);
        $sql = "DELETE FROM producto WHERE idproducto = " . $this->idproducto;
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