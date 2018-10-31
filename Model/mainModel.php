<?php
	if ($peticionAjax) {
		/*Si true realizamos una peticion AJAX*/
		require_once "../Core/configAPP.php";
	} else {
		/*Si la peticion se está ejecuntado desde la plantilla o es false sólo accedemos a la carpeta Core*/
		require_once "./Core/configAPP.php";
	}

	/*Conexión a la BD, funcion pricipal*/
	class mainModel{

		/*Funcion que nos permite conectar a la BD*/
		protected function conectar(){
			$enlace = new PDO (SGBD,USER,PASS);
			return $enlace;
		}

		/*Modelo para ejecutar una consulta simple*/
		protected function ejecutar_consulta_simple($consulta){
			$respuesta = self::conectar()->prepare($consulta);
			$respuesta->execute();
			return $respuesta;
		}

		/*Estas funciones son con el objetivo que al utilizar claves, # de cuenta se vean como una serie de símbolos y números desde la URL o en el mismo campo*/
		public static function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}

		public static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}

		/*Funcion para evitar las inyecciones SQL*/
		protected function limpiar_cadena($cadena){
			/*Funcion para limpiar espacios en blanco de un campo*/
			$cadena = trim($cadena);
			/*funcion para limpiar barras / \ */
			$cadena = stripslashes($cadena);
			/*Funcion para limpiar este tipo de etiquetas*/
			$cadena = str_replace("<script>", "", $cadena);
			$cadena = str_replace("</script src", "", $cadena);
			$cadena = str_replace("</script type", "", $cadena);
			$cadena = str_replace("</script src", "", $cadena);
			$cadena = str_replace("SELECT * FROM", "", $cadena);
			$cadena = str_replace("DELETE FROM", "", $cadena);
			$cadena = str_replace("INSERT", "", $cadena);
			$cadena = str_replace("--", "", $cadena);
			$cadena = str_replace("^", "", $cadena);
			$cadena = str_replace("]", "", $cadena);
			$cadena = str_replace("[", "", $cadena);
			$cadena = str_replace("==", "", $cadena);
			return $cadena;
		}

		protected function sweet_alert($datos){
			if($datos['Alerta']=="simple"){
				$alerta = "
					<script>
						swal(
						  '".$datos['Titulo']."',
						  '".$datos['Texto']."',
						  '".$datos['Tipo']."'
						);
					</script>
				";

			}elseif($datos['Alerta'] == "recargar"){
				$alerta = "
					<script>
						swal({
						  title: '".$datos['Titulo']."',
						  text: '".$datos['Texto']."',
						  type: '".$datos['Tipo']."',
						  confirmButtonText: 'Aceptar'
						}).then(function () {
							location.reload();
						});
					</script>
				";

			}elseif($datos['Alerta'] == "limpiar"){
				$alerta = "
					<script>
						swal({
						  title: '".$datos['Titulo']."',
						  text: '".$datos['Texto']."',
						  type: '".$datos['Tipo']."'
						  confirmButtonText: 'Aceptar'
						}).then(function (){
							$('.FormularioAjax')[0].reset();
						});
					</script>
				";
			}
			return $alerta;
		}
	}