<?php
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$banco = "dbCliente";

	$conexao = mysqli_connect('127.0.0.1:3303', 'root', '');

	if($conexao != null)
	{
		$banco = mysqli_select_db($conexao,$banco);
		if($banco != null)
			echo "<br>";
	}
?>

