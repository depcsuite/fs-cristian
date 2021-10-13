<?php
//Definicion de pacientes
$pacientes = array();
$aPacientes = array();
$aPacientes[]  = array(
   "dni" =>  "33.765.012",
   "nombre" => "Ana Acuña",
   "edad" => 45,
   "peso" => 81.50
);
$pacientes[0] = $aPacientes;
$aPacientes[]  = array(
   "dni" =>  "23.684.385",
   "nombre" => "Gonzalo Bustamante",
   "edad" => 66,
   "peso" => 79
);
$pacientes[1] = $aPacientes;
function listarPacientes($arrayPacientes) {
    for ($i = 0; $i < count($arrayPacientes); $i++) {
        echo "<tr>";
		echo "<td>".$arrayPacientes[$i]["dni"]."</td>";
		echo "<td>".$arrayPacientes[$i]["nombre"]."</td>";
		echo "<td>".$arrayPacientes[$i]["edad"]."</td>";
		echo "<td>". $arrayPacientes[$i]["peso"]."</td>";
        echo "</tr>";
    }

}
?>
<table class="table table-hover">
	<tr>
		<th>DNI</th>
        <th>Nombre y apellido</th>
        <th>Edad</th>
        <th>Peso</th>
	</tr>
<!-- Empieza el bucle -->
	
    <?php 
        listarPacientes($aPacientes);
    ?>
	
<!-- Termina el bucle -->
</table>