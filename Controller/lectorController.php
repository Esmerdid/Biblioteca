<?php 
	if ($peticionAjax) {
		/*Si true realizamos una peticion AJAX*/
		require_once "../Model/lectorModel.php";
	} else {
		/*Si la peticion se está ejecuntado desde la plantilla o es false sólo accedemos a la carpeta Core*/
		require_once "./Model/lectorModel.php";
	}

	class lectorController extends lectorModel{

		public function registrar_lector_controller(){

			$nombres = mainModel::limpiar_cadena($_POST['nombres']);
			$apellidos = mainModel::limpiar_cadena($_POST['apellidos']);
			$tipo = mainModel::limpiar_cadena($_POST['SelectTipo']);
			$dni = mainModel::limpiar_cadena($_POST['documento']);
			$dir = mainModel::limpiar_cadena($_POST['direccion']);
			$tel = mainModel::limpiar_cadena($_POST['telefono']);
			$correo = mainModel::limpiar_cadena($_POST['correo']);

			$consulta = mainModel::ejecutar_consulta_simple("SELECT identificacion FROM lectores WHERE identificacion = '$dni'");
			/*Si hay un DNI registrado */
			if ($consulta->rowCount()>=1) {
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrio un error inesperado",
					"Texto"=>"El DNI que acaba de ingresar ya se encuentra registrado en el sistema",
					"Tipo"=>"error"
				];
			}else{

				if ($correo != "") {
					$consulta2 = mainModel::ejecutar_consulta_simple("SELECT correo FROM lectores WHERE correo = '$correo'"); 
					$res = $consulta2->rowCount();
				} else {
					$res = 0;
				}

				if ($res >= 1) {
					$alerta=[
						"Alerta"=>"simple",
						"Titulo"=>"Ocurrio un error inesperado",
						"Texto"=>"El Email que acaba de ingresar ya se encuentra registrado en el sistema",
						"Tipo"=>"error"
					];
				}else{
					$dataLector=[
						"nom"=>$nombres,
						"ape"=>$apellidos,
						"tipoD"=>$tipo,
						"cc"=>$dni,
						"dir"=>$dir,
						"numcon"=>$tel,
						"correo"=>$correo
					];

					$registrarLector = lectorModel::registrar_lector_model($dataLector);

					if ($registrarLector->rowCount()>=1) {
						$alerta=[
							"Alerta"=>"limpiar",
							"Titulo"=>"Registro exitoso",
							"Texto"=>"El lector se registró satisfactoriamente",
							"Tipo"=>"success"
						];
					} else {
						$alerta=[
							"Alerta"=>"simple",
							"Titulo"=>"Ocurrio un error inesperado",
							"Texto"=>"No hemos podido registrar al lector",
							"Tipo"=>"error"
						];
					}
					
				} 
				
			}
			return mainModel::sweet_alert($alerta);		

		}

	}

