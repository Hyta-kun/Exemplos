<?php
	include "classCarro.php";
	include "cabecalho.php";
	$c = new Carro();
	$c->cor = $_POST["cor"];
	$c->qtd_porta = $_POST["qtd_porta"];
	$c->velocidade_maxima = $_POST["velocidade_maxima"];
	$c->velocidade_atual = 0;
	$_SESSION["Carro"][] = $c
?>
			<h3>Carro Inserido com Sucesso.</h3>
		</body>
	</html>