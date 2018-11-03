<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gravar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/default.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/nav.css" />
	<script src="main.js"></script>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Cadastro</a>
  <a href="./lista_altera">Editar</a>
  <a href="./listagem">Listar</a>
  <a href="./lista_excluir">Excluir</a>
</div>
<div class="container">

<?php
	include "conexao.php";
	$codigo	= $_POST['codigo'];
	$nome	= $_POST['nome'];
	$end	= $_POST['endereco'];

	// Montando a query
    $query  ='INSERT cliente VALUES ("'.$codigo .'","'.$nome .'","'.$end .'");';
    
	// executando a query
	$res = mysqli_query( $GLOBALS["conexao"],$query);

	if($res == null)
		echo "erro na query... Dados não foram inseridos...<br>$query";
	else
		echo "Dados inseridos corretamente no banco";
	?>
	<br>
	<a href="index.php">
	<button >
      Voltar
    </button>
	</a>
</div>
</body>
</html>
