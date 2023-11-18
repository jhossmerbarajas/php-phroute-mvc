<?php 

namespace App\Controllers;

class Controller 
{
	function view ($route, $data = []) {
		extract($data);
		
		$route = str_replace(".", "/", $route);

		if(file_exists("../resources/views/{$route}.php")) {

			ob_start();
			include "../resources/views/{$route}.php";
			$content = ob_get_clean();
			
			return $content;
		} else {
			echo "La vista no existe";
		}
	}

	function redirect ($route) {
		return header("Location: {$route}");
	}
}