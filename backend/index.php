<?php
include ("conexao.php");


?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de CRUD formulario</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      
            <center>
            <h3 >Dados Formulários</h3>
            </center>
        <div class="row">
          <div class="col s12 m6 push-m1 ">
           
            <table class="striped">
              <thead>
                <tr>
                  <th>Nome:</th>
                  <th>Sobrenome:</th>
                  <th>Email:</th>
                  <th>CPF:</th>
                  <th>CNPJ:</th>
                  <th>CEP:</th>
                  <th>Endereço:</th>
                  <th>Bairro:</th>
                  <th>Cidade:</th>
                  <th>Estado:</th>
                  <th>Telefone:</th>
                  <th>Número:</th>
                  <th>Data Nascimento:</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM pessoa";
                $resultado = $conexao->query($sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                  <td><?php echo $dados['no_pessoa'];?></td>
                  <td><?php echo $dados['ds_sobrenome'];?></td>
                  <td><?php echo $dados['ds_email'];?></td>
                  <td><?php echo $dados['ds_cpf'];?></td>
                  <td><?php echo $dados['ds_cnpj'];?></td>
                  <td><?php echo $dados['nu_cep'];?></td>
                  <td><?php echo $dados['ds_endereco'];?></td>
                  <td><?php echo $dados['ds_bairro'];?></td>
                  <td><?php echo $dados['ds_cidade'];?></td>
                  <td><?php echo $dados['co_uf'];?></td>
                  <td><?php echo $dados['ds_telefone'];?></td>
                  <td><?php echo $dados['ds_numero'];?></td>
                  <td><?php echo $dados['dt_nascimento'];?></td>

                  
                  <td><a href="editar.php? id = <?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                  <td><a class="btn-floating red modal-trigge"><i class="material-icons">delete</i></a></td>
                  
   
     
    </div>
  </div>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
            <br>
            <a href="/formulario2022/formulario.php" class="btn">Adicionar</a>

          </div>

        </div>

                   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>