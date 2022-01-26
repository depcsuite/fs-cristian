<?php
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

	
	if (file_exists('asuntos.dat'))
		$aAsuntos = json_decode(file_get_contents('asuntos.dat'), true);
	else
		$aAsuntos = array();

	$response["code"] = 200;
	$response["data"] = $aAsuntos;
    echo json_encode($response);
?>