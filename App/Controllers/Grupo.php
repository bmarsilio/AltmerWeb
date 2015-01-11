<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Grupo extends Action
{

	public function index()
	{
		$conta = Container::getClass("conta");
		$listaContas = $conta->listaContas();

		$this->view->listaContas = $listaContas;
		$this->render('grupo');
	}

	#metodo para cadastrar os grupos no banco
	public function cadastraGrupo()
	{
		$this->render('grupo');

		$conta = Container::getClass("Grupo");
		$dados = $conta->inserirGrupo($_POST);

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
							window.location = 'grupo';
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
							window.location = 'grupo';
						});
				}
			</script>
<?php
		}
	}


}