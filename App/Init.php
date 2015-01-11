<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{

	public function initRoutes()
	{
		# menus principais
		$ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
		$ar['lancamento'] = array('route'=>'/lancamento','controller'=>'lancamento','action'=>'index');
		$ar['baixar'] = array('route'=>'/baixar','controller'=>'baixar','action'=>'index');
		$ar['relatorio'] = array('route'=>'/relatorio','controller'=>'relatorio','action'=>'index');
		$ar['conta'] = array('route'=>'/conta','controller'=>'conta','action'=>'index');
		$ar['grupo'] = array('route'=>'/grupo','controller'=>'grupo','action'=>'index');

		# funcionalidades de login e logout
		$ar['login'] = array('route'=>'/login','controller'=>'login','action'=>'index');
		$ar['autentica'] = array('route'=>'/autentica','controller'=>'login','action'=>'autentica');
		$ar['logout'] = array('route'=>'/logout','controller'=>'logout','action'=>'index');

		$this->setRoutes($ar);
	}

	public static function getDb()
	{

		$db = new \PDO("mysql:host=localhost;dbname=altmerweb","root","1H0z9f4e");

		return $db;
	}

}

