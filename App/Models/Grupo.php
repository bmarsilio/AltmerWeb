<?php

namespace App\Models;

use SON\Db\Table;

class Grupo extends Table
{
	protected $table = "grupo";

	#metodo para inserir as contas no banco
	public function inserirGrupo($dados){
		if($dados[descricaoGrupo]){
			if($dados[contaGrupo]){
				$sql = "
						INSERT INTO 
							`altmerweb`.`grupo` (`descricao`, `contaId`) 
						VALUES 
							('$dados[descricaoGrupo]', '$dados[contaGrupo]');
				";

				$consulta = $this->db->prepare($sql);
				$resultado = $consulta->execute();
			}
		}

		return $resultado;
	}
}