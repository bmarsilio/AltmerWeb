<?php

namespace App\Models;

use SON\Db\Table;

class Conta extends Table
{
	protected $table = "conta";

	#metodo para inserir as contas no banco
	public function inserirConta($dados){
		if($dados[descricaoConta]){
			$sql = "
				INSERT INTO 
					`altmerweb`.`conta` (`descricao`) 
				VALUES 
					('$dados[descricaoConta]');
			";

			//echo "<pre>".$sql."</pre>";
			$consulta = $this->db->prepare($sql);
			$resultado = $consulta->execute();
		}

		return $resultado;
	}

	#metodo para listar todas as contas cadastradas
	public function listaContas()
	{
		$sql = "
				SELECT
					contaId,
					descricao
				FROM
					conta
		";

		$consulta = $this->db->prepare($sql);
		$resultado = $consulta->execute();

		return $this->db->query($sql);
	}
}