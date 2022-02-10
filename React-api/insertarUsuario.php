<?php
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    // Las líneas superiores son configuraciones de HEADERS, para que el servidor le permita el acceso a
    // la solicitud que envía React
	require_once("usuario.php");
	require_once("config.php");
	$data = json_decode(file_get_contents('php://input')); // Se codifica en JSON la solicitud que llegó
	$datos = array(
		"p_userName" => $data->username, // Se leen los atributos "id" y "mensaje" del objeto JSON
                // que llega desde el front en React
		"p_password" => password_hash($data->password, PASSWORD_DEFAULT)
		);
			
	$userData = new Usuario();
	$userData->usuario = $datos["p_userName"];	
	$userData->clave = $datos["p_password"];
	if($userData->usuario != "") {
		$userData->insertar();
	}
	$response["code"] = 200; // Representa el código de Response HTTP 200, que significa
	// universalmente EXITO.
	$response["msg"] = "Usuario: ".$datos["p_userName"]." creado con exito";
	echo json_encode($response);

?>
