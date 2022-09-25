<?php
include ("conexao.php");
if(isset($_GET['id'])):
    $id = mysqli_escape_string($conexao, $_GET['id']);

    $sql = "SELECT * FROM pessoa WHERE  id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
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
            <h3 >Editar Clientes</h3>
            </center>
        <form action="update.php" method="POST">    
            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
            <div class="row ; ocult">    
            <div class="col-sm "  id="soletra">
                <label class="form-label"> Razão Social:</label>
                <input class="fortela" class="quebra espaco" type="text" name="r_social" name size="20" >
            </div>
            <div class="col-sm" id="sol01">
                <label class="form-label"> Nome Fantasia:</label>
                <input class="fortela" class="quebra espaco" type="text" name="n_fantasia" size="20" >
            </div>
            <div class="col-sm">
                <label class="form-label"> CNPJ:</label>
                <input name="cnpj" id="cnpj" value="<?php echo $dados['ds_cnpj'];?>"  size="20" class="fortela" class="quebra espaco" type="text" >    
            </div>
        </div>
        <div class="row">
            <div  id="sol02" class="col-sm mt-5">
                <label class="form-label"> Nome:</label>
                <input   class="fortela" value="<?php echo $dados['no_pessoa'];?>"  class="quebra espaco" type="text" name="nome" size="20" required> 
            </div> 
            <div class="col-sm mt-5" id="sol03">
                <label class="form-label"> Sobrenome:</label>
                <input   class="fortela" id="l" value="<?php echo $dados['ds_sobrenome'];?>"  class="quebra espaco" type="text" name="sobrenome" size="20" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Data de Nascimento:</label>
                <input class="fortela" value="<?php echo $dados['dt_nascimento'];?>"  name="dt" class="quebra espaco" type="date"  min="1900-01-01" max="2022-08-01" required>  
            </div>
        </div>
        <div class="row">
            <div id="validac" class="col-sm mt-5">    
                <label class="form-label"> CPF:</label>
                <input id="cpf" name="cpf" class="fortela" value="<?php echo $dados['ds_cpf'];?>" class="quebra espaco" type="text" maxlength="14" size="20">
            </div>    
            <div class="col-sm mt-5">
                <label class="form-label">Sexo:</label>
                <select class="fortela" class="quebra espaco" name="f_sexo" required>
                    <option> Masculino</option>
                    <option> Feminino</option>
                    <option> Nada a declarar</option>
                </select>
            </div>
            <div class="col-sm mt-5">   
                <label class="form-label"> Digite seu Email</label>
                <input name="email" id="email" value="<?php echo $dados['ds_email'];?>"  class="fortela" class="quebra espaco" type="email"  size="20" required>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm mt-5">
                <label class="form-label"> Telefone:</label>
                <input id="tel" name="tel"  value="<?php echo $dados['ds_telefone'];?>" class="fortela" class="quebra espaco" type="text" size="20" placeholder="(xx)9xxxx-xxxx" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Cep:</label>
                <input id="cep" name="cep" class="fortela" value="<?php echo $dados['nu_cep'];?>" class="quebra espaco" type="text" size="20"  required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Endereço:</label>
                <input id="rua" class="fortela" value="<?php echo $dados['ds_endereco'];?>" class="quebra espaco" name="endereco" type="text" size="20" required>
            </div>    
        </div>    
        <div class="row">
            <div class="col-sm mt-5">
                <label class="form-label"> Número:</label>
                <input id="num" name="numero" class="fortela" value="<?php echo $dados['ds_numero'];?>"  class="quebra espaco" maxlength="8" type="text" size="20" required>
                
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Cidade:</label>
                <input id="cidade" class="fortela" value="<?php echo $dados['ds_cidade'];?>"  class="quebra espaco" name="cidade" type="text"  size="20" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Bairro:</label>
                <input id="bairro" class="fortela" value="<?php echo $dados['ds_bairro'];?>"  name="bairro" class="quebra espaco" type="text" size="20"  required>
            </div> 
        </div>
        <div class="row" id="soletra02">      
            <div class="col-sm mt-5">
                <label class="form-label"> Estado:</label>
                <input id="uf" class="fortela" class="quebra espaco" value="<?php echo $dados['co_uf'];?>"  name="estado" type="text" size="20"  required>
            </div>
        </div>
              
            
            <div class="mt-3">
                <a  href="index.php" class=" btn btn-primary" type="submit" name="bto_editar">Atualizar</a>
                <a href="index.php" class="btn btn-primary" >Lista de Clientes</a>
            </div>
</form>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>