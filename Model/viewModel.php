<?php 

class viewModel{
	protected function obtener_vistas_model($vistas){
		$listaBlanca=["home","lector","libro","prestamo"];
		if (in_array($vistas, $listaBlanca)) {

			/* Si el archivo exite en esa ruta de nombre vistas-view.php*/
			if (is_file("./View/contenidos/".$vistas."-view.php")) {
				$contenido = "./View/contenidos/".$vistas."-view.php";
			} else {
				$contenido = "login";
			}
			
		} elseif ($vistas == "login"){
			$contenido = "login";
		} elseif($vistas == "index"){
			$contenido = "login";
		}else{
			$contenido = "404";
		}
		return $contenido;
	}
}