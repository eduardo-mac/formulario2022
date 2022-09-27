<?php
include_once 'conexao.php';

if(isset($_POST['btn_editar'])):
       $nome = mysqli_escape_string($conexao, $_POST['nome']);
       $sobrenome = mysqli_escape_string($conexao,$_POST['sobrenome']);
       $email = mysqli_escape_string($conexao,$_POST['email']);
       $cpf = mysqli_escape_string($conexao,$_POST['cpf']);
       $r_social = mysqli_escape_string($conexao,$_POST['r_social']);
       $n_fantasia = mysqli_escape_string($conexao,$_POST['n_fantasia']);
       $cnpj =mysqli_escape_string($conexao, $_POST['cnpj']);
       $cep = mysqli_escape_string($conexao,$_POST['cep']);
        $endereco = mysqli_escape_string($conexao,$_POST['endereco']);
        $bairro =mysqli_escape_string($conexao,$_POST['bairro']);
        $cidade =mysqli_escape_string($conexao,$_POST['cidade']);
        $estado =mysqli_escape_string($conexao,$_POST['estado']);
        $tel = mysqli_escape_string($conexao,$_POST['tel']);
        $numero = mysqli_escape_string($conexao,$_POST['numero']);
        $senha = mysqli_escape_string($conexao,$_POST['senha']);
        $opiniao = mysqli_escape_string($conexao,$_POST['opiniao']);
        

        $id = mysqli_escape_string($conexao, $_POST['id']);
        

        $sql = "UPDATE pessoa SET no_pessoa = '$nome', ds_sobrenome = '$sobrenome', ds_email = '$email', 
                                                            ds_cpf = '$cpf', ds_cnpj = '$cnpj', r_social = '$r_social', n_fantasia = '$n_fantasia' nu_cep = '$cep', ds_endereco ='$endereco', ds_bairro ='$bairro',
                                                             ds_cidade = '$cidade', co_uf = '$estado', ds_telefone = '$tel', ds_numero = '$numero' senha = '$senha', opiniao = '$opiniao' WHERE id = '$id'";

        



if(mysqli_query($conexao, $sql)):
    $_SESSION['mensagem'] = "Atualizado com Sucesso!";
    header('Location: ../backend/index.php');
else:
    $_SESSION['mensagem'] = "Erro ao Atualizar";
    header('Location: ../backend/index.php');
    endif;  
endif;  

