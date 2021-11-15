<?php
include_once "config.php";
include_once "entidades/localidad.php";
include_once "entidades/Domicilio.php";
$pg = "Edición de domicilio";
$dom = new Domicilio(0,0,0,0,0);
$dom->cargarFormulario($_GET);
$loc = new Localidad(0,0);
$aLoc = $loc->obtenerTodos();
if($_POST) {
    if(isset($_POST["btnGuardar"])) {
        if(isset($_GET["id"]) && $_GET["id"] > 0){
            //Actualizo un  registro existente
            //$producto->nombre = $_POST["txtNombre"];
            $dom->cargarFormulario($_POST);
            $dom->actualizar();
        } 
        else {
        //Es nuevo
        $dom->cargarFormulario($_POST);
        $dom->insertar();
        }
    } else if(isset($_POST["btnBorrar"])){
        $dom->cargarFormulario($_GET);
        $dom->eliminar();
    }
}
include_once("header.php");
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Domicilios</h1>
           <div class="row">
                <div class="col-12 mb-3">
                    <a href="domicilio-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="domicilio-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="txtCalle">Calle:</label>
                    <input type="text" required="" class="form-control" name="txtCalle" id="txtCalle" value="<?php echo $dom->calle; ?>">
                    <label for="txtAltura">Altura:</label>
                    <input type="text" required="" class="form-control" name="txtAltura" id="txtAltura" value="<?php echo $dom->altura; ?>">
                    <label for="txtPiso">Piso:</label>
                    <input type="text" required="" class="form-control" name="txtPiso" id="txtPiso" value="<?php echo $dom->piso; ?>">
                    <label for="txtLetra">Letra:</label>
                    <input name="txtLetra" class="form-control" id="txtLetra" value="<?php echo $dom->letra?>">
                    <label for="slcFk_idlocalidad">Localidad:</label>
                    <select name="slcFk_idlocalidad" id="slcFk_idlocalidad" class="form-control">
                    <?php 
                    foreach ($aLoc as $l) {
                    
                        if($l->idlocalidad == $dom->fk_idlocalidad) {
                    ?>
                    <option value="<?php echo $l->idlocalidad; ?>" selected><?php echo $l->nombre; ?></option>
                    <?php
                    }
                    else 
                    {
                    ?>
                    <option value="<?php echo $l->idlocalidad; ?>"><?php echo $l->nombre; ?></option>
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