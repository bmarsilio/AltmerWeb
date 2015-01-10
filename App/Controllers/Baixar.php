<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Baixar extends Action
{

	public function index()
	{
		$this->render('baixar');
	}

}