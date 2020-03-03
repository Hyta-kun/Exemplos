<?php
	include "cabecalhoCamiseta.php";
?>
			<h1>Criar objeto camiseta</h1>
			<form action="instanciarCamiseta.php" method="POST">
				Definir cor da camiseta:
				<input type="color" name="cor" />
				<br />
				<input type="number" step="2" min="4" max="16" name="tamanho" 
									placeholder="Informe o tamanho..." />
				<br />
				<input type="radio" name="modelo" value="Normal" checked /> Normal
				<input type="radio" name="modelo" value="Babylook" /> Babylook
				<br />
				<input type="text"  name="estampa" placeholder="Informe a estampa..." />
				<br />
				<input type="submit" value="Criar Camiseta" />
			</form>
		</body>
	</html>