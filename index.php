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
    <a class="active" href="index.html">Cadastro</a>
    <a href="./Template/listagem.php">Editar</a>
    <a href="./Template/listagem.php">Listar</a>
    <a href="./Template/listagem.php">Excluir</a>
  </div>
  <form method="post" action="./dao/gravar.php">
    <div class="container">
      <div class="head">
        <h2>Cadastro</h2>
      </div>
      <input type="text" name="codigo" placeholder="Código" /><br />
      <input type="text" name="nome" placeholder="Nome" /><br />
      <input type="text" name="idade" placeholder="Idade" /><br />
      <input type="email" name="email" placeholder="Email" /><br />
      <div class="radio" id="radio">
        <p>Sexo:</p>
        <input type="radio" name="campo_sexo" value="masculino"> Masculino
        <input type="radio" name="campo_sexo" value="feminino"> Feminino
        <input type="radio" name="campo_sexo" value="outro"> Outro
      </div>
      <br/>
      Selecione o Curso: 
      <select name = "campo_curso">
        <option selected>Ciência da Computação</option>
        <option>Bacharelado em Informática</option>
        <option>Engenharia da Computação</option>
      </select>
      <br/>
      <button id="submit" type="submit">
        Enviar
      </button>
    </div>
  </form>
</body>

</html>