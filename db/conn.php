<?php
	try {
		// Informações Removidas
		$server		= "";
		$user 		= "";
		$password 	= "";
		$database	= "";
		
		$mysql = mysqli_connect($server, $user, $password, $database);
		if(!$mysql){
			throw new Exception("Conexão com o banco não realizada, entre em contato com o suporte");
		}

	} catch (Exception $e) {
		echo "Falha: " . $e->getMessage(); 
	}