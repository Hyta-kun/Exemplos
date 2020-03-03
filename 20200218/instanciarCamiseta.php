<?php
	include "classCamiseta.php";
	include "cabecalhoCamiseta.php";
	$c = new Camiseta();
	$c->cor = $_POST["cor"];
	$c->tamanho = $_POST["tamanho"];
	$c->modelo = $_POST["modelo"];
	$c->estampa = $_POST["estampa"];
	$_SESSION["Camiseta"][] = $c
?>
			<h3>Camiseta Inserida com Sucesso.</h3>
		</body>
	</html>