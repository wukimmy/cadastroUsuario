
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/index.css" media="screen,projection" />
    <meta charset="utf8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar</title>
</head>

<body>
    <nav class="nav-extended">
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a href="../index.html">Cadastro</a></li>
                <li class="tab"><a href="./listagem.php">Editar</a></li>
                <li class="tab"><a href="./listagem.php">Listar</a></li>
                <li class="tab"><a href="./listagem.php">Excluir</a></li>
            </ul>
        </div>
    </nav>
    <?php
        include "../dao/conexao.php";
                $cod = $_GET['cod'];

                $query = "select * from usuario where codigo = '$cod'";
                $resultado = mysqli_query($GLOBALS["conexao"],$query);

                $registro = mysqli_fetch_object($resultado);

                $codigo = $registro->codigo;
                $nome = $registro->nome ;
                $idade = $registro->idade ;
                $email = $registro->email ;
                $sexo = $registro->sexo ;
                $curso = $registro->curso ;
    ?>
    <div class="container">
        <form method="post" action="../dao/alterar.php">
            <div class="head">
                <h2>Cadastro</h2>
            </div>
            <input type="text" name="codigo" placeholder="Código" value='<?php echo $cod; ?>'/><br />
            <input type="text" name="nome" placeholder="Nome" value='<?php echo $nome; ?>'/><br />
            <input type="text" name="idade" placeholder="Idade" value='<?php echo $idade; ?>'/><br />
            <input type="email" name="email" placeholder="Email"  value='<?php echo $email; ?>'/><br />
            <p>
                Sexo:
                <label>
                    <input name="campo_sexo" type="radio" value="masculino" checked />
                    <span>Masculino</span>
                </label>
                <label>
                    <input name="campo_sexo" type="radio" value="feminino" checked />
                    <span>Feminino</span>
                </label>
                <label>
                    <input name="campo_sexo" type="radio" value="outro" checked />
                    <span>Outro</span>
                </label>
            </p>
            <br />
            <label>Selecione o curso</label>
            <select class="browser-default" name ="curso">
                <option value="" disabled selected >Selecione o curso</option>
                <option value="computacao" >Ciências da Computação</option>
                <option value="informatica" >Bacharelado em Informática</option>
                <option value="engenharia" >Engenharia da computação</option>
            </select>
            <br />
            Conhecimentos:
            <br />
            <label>
                <input type="checkbox" name="word" />
                <span>Microsoft Word</span>
            </label>
            <label>
                <input type="checkbox" name="html" value="HTML" />
                <span>HTML</span>
            </label>
            <label>
                <input type="checkbox" name="js" value="JavaScript" />
                <span>JavaScript</span>
            </label>
            <label>
                <input type="checkbox" name="php" value="PHP" />
                <span>PHP</span>
            </label>
            <br />
            <br />
            <button id="submit" type="submit" onclick="">
                Enviar
            </button>
            <button id="limpar" type="reset">
                Limpar
            </button>
            </form>
        </form>
    </div>
</body>
</html>
