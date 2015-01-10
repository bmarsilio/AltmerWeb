<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Grupo extends Action
{

	public function index()
	{
		$this->render('grupo');
	}

}