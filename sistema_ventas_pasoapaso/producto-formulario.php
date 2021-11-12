<?php

include_once "config.php";
include_once "entidades/producto.php";
include_once "entidades/tipoproducto.php";
$pg = "Edición de productos";
$prod = new Producto(0,0,0,0,0);
$prod->cargarFormulario($_GET);
$tipos = new TipoProducto();
$aTProd = $tipos->obtenerTodos();
if($_POST) {
    if(isset($_POST["btnGuardar"])) {
        // Modificar un producto
    }
    else {
        // Crear un producto
        $prod->cargarFormulario($_POST);
        $prod->insertar();
    }
}
include_once("header.php"); 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Productos</h1>
           <div class="row">
                <div class="col-12 mb-3">
                    <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $prod->nombre; ?>">
                    <label for="txtCantidad">Cantidad:</label>
                    <input type="text" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $prod->cantidad; ?>">
                    <label for="txtPrecio">Precio:</label>
                    <input type="text" required="" class="form-control" name="txtPrecio" id="txtPrecio" value="<?php echo $prod->precio; ?>">
                    <label for="txtDescripcion">Descripción:</label>
                    <textarea name="txtDescripcion" class="form-control" id="txtDescripcion"><?php echo $prod->descripcion; ?></textarea>
                    <label for="slcTipo">Tipo de producto:</label>
                    <select name="slcTipo" id="slcTipo" class="form-control">
                    <?php 
                    foreach ($aTProd as $tipo) {
                    
                        if($tipo->idtipoproducto == $prod->fk_idtipoproducto) {
                    ?>
                    <option value="<?php echo $tipo->idtipoproducto; ?>" selected><?php echo $tipo->nombre; ?></option>
                    <?php
                    }
                    else 
                    {
                    ?>
                    <option value="<?php echo $tipo->idtipoproducto; ?>"><?php echo $tipo->nombre; ?></option>
                    <?php
                    }
                    }
                    ?>
                    </select>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include_once("footer.php"); ?>