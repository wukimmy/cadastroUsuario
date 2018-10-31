
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
    <?php
        include "conexao.php";
                $cod = $_GET['cod'];

                $query = "select * from cliente where codigo = '$cod'";
                $resultado = mysqli_query($GLOBALS["conexao"],$query);

                $registro = mysqli_fetch_object($resultado);

                $nome = $registro->nome;
                $endereco = $registro->endereco
    ?>
    <div class="topnav">
        <a href="index.php">Cadastro</a>
        <a class="active" href="./lista_altera">Editar</a>
        <a href="./listagem">Listar</a>
        <a href="./lista_excluir">Excluir</a>
    </div>
    <form method = 'post' action='alterar.php'>
    <div class="container">
        <div class="head">
        <h2>Cadastro</h2>
        </div>
        <input type='hidden' name='codigo' value='<?php echo $cod; ?>'/><br />
        <input type='text' name='nome' value='<?php echo $nome; ?>' /><br />
        <input type='text' name='endereco' value='<?php echo $endereco; ?>' /><br />
        <button id="submit" type="submit"  value='Atualizar'>
        Atualizar
        </button>
    </div>
    </form>
</body>
</html>
