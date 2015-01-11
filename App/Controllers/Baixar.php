<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Baixar extends Action
{

	public function index()
	{
		$baixar = Container::getClass("Baixar");
		$dados = $baixar->listarLancamentosBaixar();
		$this->view->baixar = $dados;

		$this->render('baixar');
	}

	public function iniciaBaixa()
	{
		echo 'teste';
	}

}