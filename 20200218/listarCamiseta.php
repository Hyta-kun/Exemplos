<?php
	include "classCamiseta.php";
	include "cabecalhoCamiseta.php";
?>
	Objetos "Camisetas" instanciadas no sistema:
<?php
	foreach($_SESSION["Camiseta"] as $c){
		echo "<br />
		Cor: <span style=' color:$c->cor'> $c->cor </span>
		<br />
		Tamanho: $c->tamanho
		<br />
		Modelo: $c->modelo 
		<br />
		Estampa: $c->estampa 
		<hr />";
	}
?>