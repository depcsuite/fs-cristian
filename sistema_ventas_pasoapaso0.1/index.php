<?php

include_once "config.php";
include_once "entidades/venta.php";
$pg = "Inicio";

$venta = new Venta();
$facturacionMes = $venta->obtenerFacturacionMensual(date('m'));
$facturacionAnual = $venta->obtenerFacturacionAnual(date('Y'));

include_once("header.php"); 

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
            <a href="reporte.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            

          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include_once("footer.php"); ?>