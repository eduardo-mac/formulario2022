<?php
session_start();
include_once 'conexao.php';

if(isset($_POST['btn_deletar'])):
        $id = mysqli_escape_string($conexao, $_POST['id']);
        

        $sql = "DELETE FROM pessoa WHERE id = '$id'";



        if(mysqli_query($conexao, $sql)):
            $_SESSION['mensagem'] = "Deletado com Sucesso";
            header('Location: ../backend/index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Deletar";
            header('Location: ../backend/index.php');
    endif;  
endif;  

