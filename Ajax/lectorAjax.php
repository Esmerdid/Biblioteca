<?php
	/*Script que no permitira acceder a éste archivo ajax desde la URL, 
	de intentarlo se redireccionará al login*/
	$peticionAjax = true;
	require_once "../Core/configGeneral.php";

	/*comprobar si viene definido la variable*/
	if (isset($_POST['documento'])) {
		require_once "../Controller/lectorController.php";
		/*Instanciamos la clase lectorController*/
		$insLector = new lectorController();

		if (isset($_POST['documento']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['direccion']) && isset($_POST['correo']) && isset($_POST['telefono'])) {
			
			echo $insLector->registrar_lector_controller();
		}
		
	} else {
		session_start();
		session_destroy();
		echo '<script> window.location.href="'.SERVERURL.'login/" </script>';
	}


	