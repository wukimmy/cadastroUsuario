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
    <title>Gravar
    </title>
</head>

<body>
	<nav class="nav-extended">
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a href="../index.html">Cadastro</a></li>
                <li class="tab"><a href="../Template/listagem.php">Editar</a></li>
                <li class="tab"><a href="../Template/listagem.php">Listar</a></li>
                <li class="tab"><a href="../Template/listagem.php">Excluir</a></li>
            </ul>
        </div>
    </nav>
  <div class="container">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">Gravar</span>
					<?php
						include "../Validation/session.php";
						include "conexao.php";
						$codigo	= $_POST['codigo'];
						$nome	= $_POST['nome'];
						$idade	= $_POST['idade'];
						$email	= $_POST['email'];
						$sexo	= $_POST['campo_sexo'];
						$curso	= $_POST['curso'];
						$conhecimento =" ";
						$html = ( isset($_POST['html']) ) ? $conhecimento = $conhecimento."HTML - " : null;
						$word = ( isset($_POST['word']) ) ? $conhecimento =$conhecimento."Microsoft Word - " : null;
						$php = ( isset($_POST['php']) ) ? $conhecimento =$conhecimento."PHP - " : null;
						$js = ( isset($_POST['js']) ) ? $conhecimento =$conhecimento."JavaScript - " : null;
						include "../validation/formValidation.php";

						// Montando a query
						$query  ='INSERT usuario VALUES ("'.$codigo .'","'.$nome .'","'.$idade .'","'.$email .'","'.$sexo  .'","'.$curso .'","'.$conhecimento .'");';
						
						// executando a query
						$res = mysqli_query( $GLOBALS["conexao"],$query);

						if($res == null)
							echo "erro na query... Dados não foram inseridos...<br>$query";
						else
							echo "Dados inseridos corretamente no banco";
					?>
				</span>
			</div>
		</div>
	</div>	
	<br>
	<a href="../index.html">
		<button >
		Voltar
		</button>
	</a>
</div>
</body>
</html>
