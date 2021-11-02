<?php
    class Producto {
        private $idproducto;
        private $nombre;
        private $cantidad;
        private $precio;
        private $descripcion;
        private $imagen;   
        private $idTipoProducto; // Referencia a un tipo de producto determinado
        private $idMarca;
        public function __construct($nom, $can, $prec, $desc, $img, $idT, $idM) {
            $this->nombre = $nom;
            $this->cantidad = $can;
            $this->precio = $prec;
            $this->descripcion = $desc;
            $this->imagen = $img;
            $this->idTipoProducto = $idT;
            $this->idMarca = $idM;
        }
        public function crearProducto() {
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'cursofulls');
            if ($mysqli->connect_errno) {
            // La conexión falló. ¿Que vamos a hacer? 
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
                    echo "Errno: " . $mysqli->connect_errno . "\n";
                    exit;
            }
            $sql = "INSERT INTO productos (nombre, cantidad, precio, descripcion, imagen, fk_idtipoproducto, fk_idmarca) VALUES ('".$this->nombre."', ".$this->cantidad.", ".$this->precio.", '".$this->descripcion."', '".$this->imagen."', ".$this->idTipoProducto.", ".$this->idMarca.");";
            $mysqli->query($sql);
        }


    }
     

?>