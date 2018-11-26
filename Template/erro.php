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
    <title>erro</title>
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
        <h1>Ocorreu um erro ao fazer a ação:</h1>
        <br>
        <?php
            $log = $_GET['log'];
            echo $log;
        ?>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    
</body>

</html>