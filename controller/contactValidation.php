<?php
	/*
		This file verify if data is valid and sanitize results.
	*/
	require_once "functions.php";
    
	header("Content-Type: application/json");

	try {
		$name 			= $_POST['name'] ?? null;
		$phone 			= $_POST['phone'] ?? null;
		$email			= $_POST['email'] ?? null;
		$description	= $_POST['description'] ?? null;
		
		if (!$name || !$phone || !$email || !$description) 
		{
			throw new Exception("Todos os campos são obrigatorios");
		}
	
		sanitizeFormContact($name, $email, $description, $phone);
	
		require_once "../model/contactSave.php";

	} catch (Exception $e) {
		http_response_code(400);
		echo json_encode([
			"status" => "error",
			"message" => $e->getMessage()
		]);
		exit;
	}

