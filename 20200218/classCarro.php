<?php
	class Carro{
		//Lista de Atributos
		public $cor;
		public $qtd_porta;
		public $velocidade_maxima;
		public $velocidade_atual;
		
		//Lista de Métodos
		public function acelerar($valor_aceleracao, $tempo){
			$this->velocidade_atual = 
				$this->velocidade_atual + $valor_aceleracao * $tempo;
		}
		public function frear($valor_frenagem){
			$this->velocidade_atual = 
				$this->velocidade_atual - $valor_aceleracao * $tempo;
		}
		public function virar($lado){
			//Implementação
		}
	}
?>