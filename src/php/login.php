<?php

//echo __DIR__.'src/php/_Class/LoginClass.php';die;

require_once '_Class/LoginClass.php';

session_start();

    $login = new LoginClass();

	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

    $auth = $login->authUser($usuario,$senha);

	$result = 0;

	if($auth == '1'){
		$result = 1;
	}

	if($result == 1){
		$_SESSION['logado'] = true;
		$_SESSION['usuario'] = $usuario;
	}

	print($result);


?>