<?php
    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
    } else if (time() - $_SESSION['CREATED'] > 1800) {
        header("Location: http://localhost:8088/cadastroUsuario/login.html");
    }
?>