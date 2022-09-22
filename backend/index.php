<?php
include_once 'conexao.php';
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

        <div class="row">
          <div class="col s12 m6 push-m3 ">
            <h3 class="light">Dados Formulários</h3>
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
                $resultado = mysqli_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                  <td><?php echo $dados['no_pessoa'];?></td>
                  
                  <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                  <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
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