<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{

	public function initRoutes()
	{
		$ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
		$ar['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
		$this->setRoutes($ar);
	}

	public static function getDb()
	{

		$db = new \PDO("mysql:host=localhost;dbname=mvc","root","1H0z9f4e");

		return $db;
	}

}

