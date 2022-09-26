

/*if(isset($_POST['bto_editar']))
    {
       $nome = $_POST['nome'];
       $sobrenome = $_POST['sobrenome'];
       $email = $_POST['email'];
       $cpf = $_POST['cpf'];
       $cnpj = $_POST['cnpj'];
       $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $tel = $_POST['tel'];
        $numero = $_POST['numero'];
        $dt = $_POST['dt'];

        $id = mysqli_escape_string($conexao, $_POST['id']);
        

        $result = "UPDATE pessoa SET no_pessoa = '$nome', ds_sobrenome = '$sobrenome', ds_email = '$email', 
                                                            ds_cpf = '$cpf', ds_cnpj = '$cnpj', nu_cep = '$cep', ds_endereco ='$endereco', ds_bairro ='$bairro',
                                                             ds_cidade = '$cidade', co_uf = '$estado', ds_telefone = '$tel', ds_numero = '$numero', 
                                                             dt_nascimento = '$dt' WHERE id = '$id'";

        $resultofin = $conexao->query($result) or trigger_error($conexao->error);



        if($resultofin ==true){
            echo"Atualizado com Sucesso";
        }else{
            echo"Erro ao Atualizar";
        }

    }
    
?>