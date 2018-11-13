<?php
    include "../dao/conexao.php";
    
    $consulta = "select * from login";
    $resultado = mysqli_query($GLOBALS["conexao"],$consulta );
    
    if($resultado != null)
    {
        while($registro = mysqli_fetch_object($resultado))
        {
            if($registro->nome == $_POST['usuario'] && $registro->senha == $_POST['senha'] ){
                include "../Validation/sessionValidation.php";
                header("Location: http://localhost:8088/cadastroUsuario/index.html");
            }else{
                header("Location: http://localhost:8088/cadastroUsuario/login.html");
            }
            
        }
    }
?>

