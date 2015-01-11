<?php

namespace App\Models;

use SON\Db\Table;
use SON\Di\Container;

class Lancamento extends Table
{
	protected $table = "lancamento";

	#metodo para inserir os lancamentos no banco
	public function inserirLancamento($dados){
		
		#trata a hora por no MySql nao funciona insert com data no padrao 'dd/mm/yyyy', so funciona no padrao 'yyyy-mm-dd'
		$data = Container::trataData($dados[dataLancamento]);

		$sql = "
			INSERT INTO 
				`altmerweb`.`lancamento` 
				(
					`grupoId`, 
					`usuarioIdLancamento`,
					`dataLancamento`,
					`valor`,
					`descricao`
				) 
			VALUES 
				(
					'$dados[lancamentoGrupoId]', 
					'$_SESSION[usuarioId]', 
					'$data', 
					'$dados[valorLancamento]',
					'$dados[descricaoLancamento]'
				);

		";
		//die(print("<pre>".$sql."</pre>"));
		
		$consulta = $this->db->prepare($sql);
		$resultado = $consulta->execute();

		return $resultado;
	}
}