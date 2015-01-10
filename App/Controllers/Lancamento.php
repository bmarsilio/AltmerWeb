<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Lancamento extends Action
{

	public function index()
	{
		$this->render('lancamento');
	}

}