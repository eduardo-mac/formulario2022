<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'teste';

$conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao->connect_errno){
    echo "erro";
}
else{ 
    echo "Conexão Efetuada com sucesso";
}*/


    if(isset($_POST['bto_enviar']))
    {
       

        //$r_social = $_POST['r_social'];
       // $n_fantasia = $_POST['n_fantasia'];
       //$sexo = $_POST['f_sexo'];
       $nome = $_POST['nome'];
       $sobrenome = $_POST['sobrenome'];
       $email = $_POST['email'];
       $cpf = $_POST['cpf'];
       $pf_pj = $_POST['pf_pj'];
       $r_social = $_POST['r_social'];
       $n_fantasia = $_POST['n_fantasia'];
       $cnpj = $_POST['cnpj'];
       $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $tel = $_POST['tel'];
        $numero = $_POST['numero'];
        $dt = $_POST['dt'];
        $senha = $_POST['senha'];
        $opiniao = $_POST['opiniao'];

        

        $result = "INSERT INTO pessoa( no_pessoa, ds_sobrenome, ds_email, 
                                                            ds_cpf, pf_pj, r_social, n_fantasia, ds_cnpj, nu_cep, ds_endereco, ds_bairro,
                                                             ds_cidade, co_uf, ds_telefone, ds_numero, 
                                                             dt_nascimento, senha, opiniao) 
                                            VALUES('$nome', '$sobrenome', '$email', '$pf_pj', '$r_social', '$n_fantasia', '$cpf', '$cnpj',
                                             '$cep', '$endereco', '$bairro', '$cidade', '$estado', '$tel', 
                                             '$numero', '$dt', '$senha', '$opiniao')";

        $resultofin = $conexao->query($result) or trigger_error($conexao->error);



        if($resultofin ==true){
            
            echo"Dados enviados com Sucesso!";
        }else{
            echo"Erro ao enviar dados";
        }

    }
    
?>