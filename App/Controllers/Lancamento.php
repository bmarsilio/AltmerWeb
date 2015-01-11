<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Lancamento extends Action
{

	public function index()
	{
		$grupo = Container::getClass("grupo");
		$listaGrupos = $grupo->listaGrupos();

		$this->view->listaGrupos = $listaGrupos;
		$this->render('lancamento');
	}

	public function cadastraLancamento()
	{
		$this->render('lancamento');

		$lancamento = Container::getClass("Lancamento");
		$dados = $lancamento->inserirLancamento($_POST);

		if($dados){
?>
			<script type="text/javascript">
				window.onload = function(){
				    swal({
						title: "Parabéns!",
						text: "Cadastro Realizado com Sucesso!",
						type: "success"
						},
						function(){
							window.location = 'lancamento';
						});
				}
			</script>
<?php
		}else{
?>
			<script type="text/javascript">
				window.onload = function(){
				    swal({
						title: "Erro!",
						text: "Verifique os Dados Digitados e Tente Novamente!",
						type: "error"
						},
						function(){
							window.location = 'lancamento';
						});
				}
			</script>
<?php
		}
	}

}