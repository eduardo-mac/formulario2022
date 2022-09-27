<?php
include_once 'conexao.php';

if(isset($_POST['btn_editar'])):
       $nome = mysqli_escape_string($conexao, $_POST['nome']);
       $sobrenome = mysqli_escape_string($conexao,$_POST['sobrenome']);
       $email = mysqli_escape_string($conexao,$_POST['email']);
       $cpf = mysqli_escape_string($conexao,$_POST['cpf']);
       $cnpj =mysqli_escape_string($conexao, $_POST['cnpj']);
       $cep = mysqli_escape_string($conexao,$_POST['cep']);
        $endereco = mysqli_escape_string($conexao,$_POST['endereco']);
        $bairro =mysqli_escape_string($conexao,$_POST['bairro']);
        $cidade =mysqli_escape_string($conexao,$_POST['cidade']);
        $estado =mysqli_escape_string($conexao,$_POST['estado']);
        $tel = mysqli_escape_string($conexao,$_POST['tel']);
        $numero = mysqli_escape_string($conexao,$_POST['numero']);
        

        $id = mysqli_escape_string($conexao, $_POST['id']);
        

        $sql = "UPDATE pessoa SET no_pessoa = '$nome', ds_sobrenome = '$sobrenome', ds_email = '$email', 
                                                            ds_cpf = '$cpf', ds_cnpj = '$cnpj', nu_cep = '$cep', ds_endereco ='$endereco', ds_bairro ='$bairro',
                                                             ds_cidade = '$cidade', co_uf = '$estado', ds_telefone = '$tel', ds_numero = '$numero' WHERE id = '$id'";

        



        if(mysqli_query($conexao, $sql)):
            echo"Atualizado com Sucesso";
        else:
            echo"Erro ao Atualizar";
    endif;  
endif;  
