<?php

include_once "config.php";
include_once "entidades/Domicilio.php";
include_once "entidades/localidad.php";
$pg = "Listado de domicilios";

$domicilio = new Domicilio(0,0,0,0,0);
$aDomicilios = $domicilio->obtenerTodos();

include_once("header.php"); 
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Listado de domicilios</h1>
          <div class="row">
                <div class="col-12 mb-3">
                    <a href="domicilio-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                </div>
            </div>
          <table class="table table-hover border">
            <tr>
                <th>Calle</th>
                <th>Altura</th>
                <th>Piso</th>
                <th>Letra</th>
                <th>Localidad</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($aDomicilios as $dom){ 
                $loc = new Localidad(0,0);
                $loc->obtenerPorId($dom->fk_idlocalidad);
                ?>
              <tr>
                  <td><?php echo $dom->calle; ?></td>
                  <td><?php echo $dom->altura; ?></td>
                  <td><?php echo $dom->piso; ?></td>
                  <td><?php echo $dom->letra; ?></td>
                  <td><?php echo $loc->nombre; ?></td>
                  <td>Ver detalle</td>
              </tr>
            <?php } ?>
          </table>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include_once("footer.php"); ?>