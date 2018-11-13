<?php
    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
        echo "Criado";
    } else if (time() - $_SESSION['CREATED'] > 1) {
        echo "EXPIROU";
        header("Location: http://localhost:8088/cadastroUsuario/login.html");
    }
?>