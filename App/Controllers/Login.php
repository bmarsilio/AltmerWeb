<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Login extends Action
{

	public function index()
	{
		$this->render('login',false);
	}

	public function autentica()
	{
		$autentica = Container::getClass("Login");
		//var_dump($autentica);
		$dados = $autentica->autentica($_POST);

		if($dados){
			header('Location: /');
		}else{
			header('Location: login');
		}
	}

}