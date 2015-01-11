<?php

namespace App\Models;

use SON\Db\Table;

class Baixar extends Table
{
	protected $table = "baixar";

	#metodo para listar todos os lancamentos a serem aprovados
	public function listarLancamentosBaixar()
	{
		$sql = "
				SELECT
					A.lancamentoId AS lancamentoId,
					C.login AS usuarioLancamento,
					B.descricao AS grupo,
					A.dataLancamento AS dataLancamento,
					A.valor AS valor,
					A.descricao AS descricao
				FROM
					lancamento A
					INNER JOIN grupo B ON (B.grupoId = A.grupoId)
					INNER JOIN usuario C ON (C.usuarioId = A.usuarioIdLancamento)
				WHERE
					A.dataAprovacao IS NULL
		";

		$consulta = $this->db->prepare($sql);
		$resultado = $consulta->execute();

		return $this->db->query($sql);
	}
}