<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alterar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/default.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/nav.css" />
	<script src="main.js"></script>
</head>
<body>
<div class="topnav">
  <a href="index.php">Cadastro</a>
  <a class="active" href="./lista_altera">Editar</a>
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
 	$query  = "update cliente set nome = '$nome', endereco = '$end' "; 
	$query .= "where codigo = '$codigo'";

	// executando a query
	$res = mysqli_query($GLOBALS["conexao"],$query);

	if($res == null)
		echo "erro na query... Dados não foram alterados...<br>" . $query;
	else
		echo "Dados alterados corretamente no banco";

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
