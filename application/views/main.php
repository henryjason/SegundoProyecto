<?php

	$funcion = $_POST['funcion'];
	// requerido para conectar ala base de datos
	require_once 'connectbd.php';
	$db = new DB_Connect();
	$db->connect();

	require_once 'employed.php';
	$employed = new employed();

	if($funcion == 'salvar'){

		$name =  $_POST['nombre'];
		$password =  $_POST['password'];
		$categoria =  $_POST['categoria'];
		$email=  $_POST['email'];
		$imagen=  $_POST['imagen'];
		$page =  $_POST['page_web'];

		if($name != null && $password != null && $categoria != null && $email != null && $imagen != null && $page != null){

			if($employed->Salvar($name,$password,$categoria,$email,$imagen, $page, $db)){

				header('Location: index.php');
			}else{
				echo "error al guardar";
			}
		}else{
			echo "Se debe llenar todos los campos";
		}


		}

	if($funcion == 'Login'){

		$email=  $_POST['email'];
		$password =  $_POST['password'];

		if($employed->login($email,$password,$db)){
			echo "Logeado Correctamente";
			//header('Location: juego.html');
		}else{
			echo "Usuario no existe";
			}
	}
?>