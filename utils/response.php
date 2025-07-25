<?php 

function response($data, $code = 200)
{
	try {
		http_response_code($code);
		echo json_encode($data);
	} catch (\Throwable $th) {
		json_encode([
			"code" => "error",
			"message" => "Erreur de formatage de la réponse : " . $th->getMessage()
		]);
	}
}