<?php

require_once 'conexao.php';
if(isset($_POST['bto_enviar'])):
    $nome = mysqli_escape_strings($conexao, $_POST['nome']);
    $sql = "INSERT INTO pessoa(no_nome) VALUES ('$nome')";

    if(mysqli_query($conexao, $sql)):
        echo"enviados com sucesso";

    endif;


endif;