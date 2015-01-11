<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class Conta extends Action
{

	public function index()
	{
		$this->render('conta');
	}

	public function cadastraConta()
	{
		$this->render('conta');
		
		$conta = Container::getClass("Conta");
		$dados = $conta->inserirConta($_POST);

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
							window.location = 'conta';
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
							window.location = 'conta';
						});
				}
			</script>
<?php
		}
	}

}