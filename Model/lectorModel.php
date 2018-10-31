<?php 
	if ($peticionAjax) {
		/*Si true realizamos una peticion AJAX*/
		require_once "../Model/mainModel.php";
	} else {
		/*Si la peticion se está ejecuntado desde la plantilla o es false sólo accedemos a la carpeta Model*/
		require_once "./Model/mainModel.php";
	}

	class lectorModel extends mainModel{

		protected function registrar_lector_model($datos){
			$sql = mainModel::conectar()->prepare('CALL crearlector(:nom, :ape, :tipoD, :cc, :dir, :numcon, :correo)');

				$sql->bindParam(':nom', $datos['nom'], PDO::PARAM_STR,50);
                $sql->bindParam(':ape', $datos['ape'], PDO::PARAM_STR,50);
                $sql->bindParam(':tipoD', $datos['tipoD'], PDO::PARAM_STR,2);
                $sql->bindParam(':cc', $datos['cc'], PDO::PARAM_STR,20);
                $sql->bindParam(':dir', $datos['dir'], PDO::PARAM_STR,20);
                $sql->bindParam(':numcon', $datos['numcon'], PDO::PARAM_STR,20);
                $sql->bindParam(':correo', $datos['correo'], PDO::PARAM_STR,20);
                
                $sql->execute();
                return $sql;
		}

		protected function eliminar_lector_model($codigo){
			$sql = mainModel::conectar()->prepare("DELETE FROM lectores WHERE Idlector=:Id");
			$sql->bindParam(":Id",$codigo);
			$sql->execute();
			return $sql;
		}
	}