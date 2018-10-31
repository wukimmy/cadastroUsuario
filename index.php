<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/nav.css" />
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Cadastro</a>
  <a href="./lista_altera">Editar</a>
  <a href="./listagem">Listar</a>
  <a href="./lista_excluir">Excluir</a>
</div>
<form method = "post" action="gravar.php">
  <div class="container">
    <div class="head">
      <h2>Cadastro</h2>
    </div>
    <input type="text" name="codigo" placeholder="Código" /><br />
    <input  type="text" name="nome" placeholder="Nome" /><br />
    <input  type="text" name="endereco" placeholder="Endereço" /><br />
    <button id="submit" type="submit">
      Enviar
    </button>
  </div>
</form>
</body>
</html>