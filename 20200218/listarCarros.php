<?php
	include "classCarro.php";
	include "cabecalho.php";
?>
	Objetos "carro" instanciados no sistema:
<?php
	foreach($_SESSION["Carro"] as $c){
		echo "Cor: <span style=' color:$c->cor'> $c->cor </span>
		<br />
		Quantidade Portas: $c->qtd_porta
		<br />
		Velocidade Máxima: $c->velocidade_maxima 
		<br />
		Velocidade Atual: $c->velocidade_atual 
		<hr />";
	}
?>