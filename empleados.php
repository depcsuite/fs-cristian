<?php

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 70000);

function calcularNeto($bruto){
    return $bruto - $bruto * 0.17;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Sueldo</th>
                </tr>

                <?php for($i = 0; $i < count($aEmpleados); $i++) { ?>
                <tr>
                    <td><?php echo $aEmpleados[$i]["dni"]; ?></td>
                    <td><?php echo mb_strtoupper($aEmpleados[$i]["nombre"]); ?></td>
                    <td><?php echo number_format(calcularNeto($aEmpleados[$i]["bruto"]), 2, ",", "."); ?></td>
                </tr>
                <?php } ?>
                </table>
            </div>
        </div>
        <div>
            <div class="col-12">
                    <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>
    
    </div>
</body>
</html>