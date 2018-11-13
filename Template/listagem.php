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
    <title>Listagem</title>
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
    <div class="container">
        <table> 
			<h2>Dados: </h2>
			<tr>
                <th>
                    Código
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Idade
                </th>
                <th>
                    Email
                </th>
                <th>
                    Sexo
                </th>
                <th>
                    Curso
                </th>
                <th>
                    Conhecimento
                </th>
                <th>
                    --
                </th>
                <th>
                    --
                </th>
            </tr>
				<?php
                    include "../dao/conexao.php";
                    include "../Validation/sessionValidation.php";
                    $consulta = "select * from usuario";
                    $resultado = mysqli_query($GLOBALS["conexao"],$consulta);

                    if($resultado != null)
                    {
                        while($registro = mysqli_fetch_object($resultado))
                        {
                            echo '<tr>';
                            echo '<td>' .$registro->codigo . '</td>' ;
                            echo '<td>' .$registro->nome .   '</td>';
                            echo '<td>' .$registro->idade .  '</td>' ;
                            echo '<td>' .$registro->email .  '</td>' ;
                            echo '<td>' .$registro->sexo .   '</td>';
                            echo '<td>' .$registro->curso .  '</td>';
                            echo '<td>' .$registro->conhecimento .  '</td>';
                            echo "<td><a href='../dao/excluir.php?cod=$registro->codigo'> Excluir </a></td>";
                            echo "<td><a href='formulario_alterar.php?cod=$registro->codigo'>Editar </a></td>";
                            echo '</tr>';
                        }
                    }
                ?>
		</table>															
		
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>