<?php
include_once "config.php";
include_once "entidades/cliente.php";
include_once "entidades/localidad.php";
include_once "entidades/Domicilio.php";
$domicilio = new Domicilio(0,0,0,0,0);
$cliente = new Cliente();
$cliente->cargarFormulario($_REQUEST);
$pg = "Listado de clientes";

if($_POST){
    if(isset($_POST["btnGuardar"])){
        if(isset($_GET["id"]) && $_GET["id"] > 0){
              //Actualizo un cliente existente
              $cliente->actualizar();
        } else {
            //Es nuevo
            $cliente->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";

    } else if(isset($_POST["btnBorrar"])){
        $cliente->eliminar();
        header("Location: cliente-listado.php");
    }
} 
if(isset($_GET["id"]) && $_GET["id"] > 0){
    $cliente->obtenerPorId($_GET["id"]);
}

$aDomicilios = $domicilio->obtenerTodos();
include_once("header.php"); 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cliente</h1>
          <?php if(isset($msg)): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                        <?php echo $msg["texto"]; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="cliente-listado.php" class="btn btn-primary mr-2">Listado</a>
                    <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                    <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                    <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $cliente->nombre ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="txtApellido">Apellido:</label>
                    <input type="text" required class="form-control" name="txtApellido" id="txtApellido" value="<?php echo $cliente->apellido ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="txtCuit">CUIT:</label>
                    <input type="text" required class="form-control" name="txtCuit" id="txtCuit" value="<?php echo $cliente->cuit ?>" maxlength="11">
                </div>
                <div class="col-6 form-group">
                    <label for="txtCorreo">Correo:</label>
                    <input type="text" class="form-control" name="txtCorreo" id="txtCorreo" required value="<?php echo $cliente->correo ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="slcFk_iddomicilio">Domicilio:</label>
                    <select name="slcFk_iddomicilio" id="slcFk_iddomicilio" class="form-control">
                    <?php 
                    foreach ($aDomicilios as $d) {
                    
                        if($d->iddomicilio == $cliente->fk_iddomicilio) {
                    ?>
                    <option value="<?php echo $d->iddomicilio; ?>" selected><?php echo $d->calle." ".$d->altura." ".$d->piso." ".$d->letra; ?></option>
                    <?php
                    }
                    else 
                    {
                    ?>
                    <option value="<?php echo $d->iddomicilio; ?>" selected><?php echo $d->calle." ".$d->altura." ".$d->piso." ".$d->letra; ?></option>
                    <?php
                    }
                    }
                    ?>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label for="txtTelefono">Teléfono:</label>
                    <input type="text" class="form-control" name="txtTelefono" id="txtTelefono" value="<?php echo $cliente->telefono ?>">
                </div>
                <div class="col-6 form-group">
                    <label for="txtFechaNac" class="d-block">Fecha de nacimiento:</label>
                    <select class="form-control d-inline"  name="txtDiaNac" id="txtDiaNac" style="width: 80px">
                        <option selected="" disabled="">DD</option>
                        <?php for($i=1; $i <= 31; $i++): ?>
                            <?php if($cliente->fecha_nac != "" && $i == date_format(date_create($cliente->fecha_nac), "d")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                    <select class="form-control d-inline"  name="txtMesNac" id="txtMesNac" style="width: 80px">
                        <option selected="" disabled="">MM</option>
                        <?php for($i=1; $i <= 12; $i++): ?>
                            <?php if($cliente->fecha_nac != "" && $i == date_format(date_create($cliente->fecha_nac), "m")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                    <select class="form-control d-inline"  name="txtAnioNac" id="txtAnioNac" style="width: 100px">
                        <option selected="" disabled="">YYYY</option>
                        <?php for($i=1900; $i <= date("Y"); $i++): ?>
                         <?php if($cliente->fecha_nac != "" && $i == date_format(date_create($cliente->fecha_nac), "Y")): ?>
                            <option selected><?php echo $i; ?></option>
                            <?php else: ?>
                            <option><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?> ?>
                    </select>
                </div>
            </div>
            
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include_once("footer.php"); ?>