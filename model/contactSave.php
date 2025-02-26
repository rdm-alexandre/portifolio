<?php
    try {
        mysqli_begin_transaction($mysql);

        $sql    = "INSERT INTO contato (name, email, phone, msg) VALUES (?, ?, ?, ?)";
        $stmt   = mysqli_prepare($mysql, $sql);

        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $phone, $description);
        if(!mysqli_stmt_execute($stmt)){
            throw new Exception("Erro ao inserir registros no banco.");
        }

        mysqli_commit($mysql);
        echo json_encode([
			"status"    => "success",
			"message"   => "Obrigado ".getFirsName($name).", entrarei em contato em breve.☺️",
		]);

    } catch (Exception $e) {
        mysqli_rollback($mysql);

        http_response_code(400);
        echo json_encode([
			"status" => "error",
			"message" => $e->getMessage()
		]);
    }

    mysqli_close($mysql);