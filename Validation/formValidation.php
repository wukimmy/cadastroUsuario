<?php
    include "../Validation/sessionValidation.php";
    $erro = false;
    $log = "";
    if($conhecimento == "" ){
        $log = $log ."conhecimento deve ser escolhido pelo mernos duas opções <br>";
        $erro = true;
    }else if(substr_count($conhecimento, '-') <2){
        $log = $log ."conhecimento deve ser escolhido pelo mernos duas opções <br>";
        $erro = true;
    }
    if (strlen($nome) < 5 || strlen($nome) > 64) {
        $log = $log ."O nome deve conter entre 5 à 64 caracteres <br>";
        $erro = true;
    }
    if ( $idade < 4 || $idade > 120) {
        $log = $log ."A idade não pode ser menor que 4 e maior que 128 <br>";
        $erro = true;
    }

    if (strlen($email)< 5 ||strlen($email)> 128 ) {
        $log = $log ."email deve conter mais de 5 caracteres e menos de 128 <br>";
        $erro = true;
    }

    if($sexo == false){
        $log = $log ."Deve ser escolhido o sexo <br>";
        $erro = true;
    }

    if($curso == null){
        $log = $log ."Selecione um curso <br>";
        $erro = true;
    }
    if($erro){
        echo $log;
        header("Location: http://localhost:8088/cadastroUsuario/Template/erro.php?log=".$log);
        exit();
    }
?>