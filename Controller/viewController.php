<?php 

/* ./ significa que estamos a la misma altura del directorio y queremos entrar a modelo*/
require_once "./Model/viewModel.php";

class viewController extends viewModel{

	public function obtener_plantilla_controller(){
		return require_once "./View/plantilla.php";
	}

	public function obtener_vistas_controller(){
		if(isset($_GET['views'])){
			$ruta = explode("/", $_GET['views']);
			$respuesta = viewModel::obtener_vistas_model($ruta[0]);
		}else{
			$respuesta = "login";
		}
		return $respuesta;
	}

}