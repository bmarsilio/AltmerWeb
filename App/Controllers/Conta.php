<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Conta extends Action
{

	public function index()
	{
		$this->render('conta');
	}

}