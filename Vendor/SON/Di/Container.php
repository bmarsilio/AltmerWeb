<?php

namespace SON\Di;

class Container
{
	public static function getClass($name)
	{
		$str_class = "\\App\\Models\\".ucfirst($name);

		$class = new $str_class(\App\Init::getDb());

		return $class;
	}

	public static function trataData($data)
	{
		$resultado = implode( '-', array_reverse( explode( '/', $data ) ) );

		return $resultado;
	}
}