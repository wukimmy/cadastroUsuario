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
            <a href="index.php">Cadastro</a>
            <a class="active" href="./lista_altera">Editar</a>
            <a href="./listagem">Listar</a>
            <a href="./lista_excluir">Excluir</a>
        </div>
    </body>
    <div class="container">
			<table> 
				<h2>Escolha para fazer a exclusão</h2>
				<ul>
				<?php
					include "conexao.php";
					$consulta = "select * from cliente";
					$resultado = mysqli_query($GLOBALS["conexao"],$consulta);
					if($resultado != null)
					{
						while($registro = mysqli_fetch_object($resultado))
						{
							echo '<li>';
							echo "<a href='formulario_alterar.php?cod=$registro->codigo'>";
							echo $registro->nome ;
							echo "</a><br>";
							echo '</li>';
						}
					}
				?>
				</ul>
			</table>															
		
		</div>
</html>