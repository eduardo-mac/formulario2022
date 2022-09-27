
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario UI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        
        .informa{
            border: 1px solid;
            border-radius: 5pv;
            background-color: #eee;
        }
        .informa{
            position: absolute;
            background-color: #0f0;
            left: 500px;
            top: 20%;
            border-radius: 50px;
        }
            

            .fortela{
                border-radius: 80px;
                background-color: rgb(232, 224, 224);
                display: block;
                font-size: larger;
            }    
            form{
                padding: 50px;
                font-size: larger;
            }
            
            .quebra{display: block;}
            .espaco_t{margin-top:15px;}
            .espaco{margin-bottom: 15px;}

            .tcentral{
                width: 400px;
                margin: auto;
                font-family: 'DynaPuff', cursive;
            }
            .imag{
                width: 400px;
                margin: auto;
            }
            .letra{color: #eee;}
            
           
            
    </style>
    <link type="text/css" rel="stylesheet" href="estilo.css" >

</head>
<body class="fundo"  onloada="o_number()">
    <div class="container ">
        <center >
        <img class="imag" src="imaform.webp" >
        <div class="tcentral">
             <h1 class="letra">Formulário de Cadastro</h1>
        </div>
        </center>

<form  id="valid" class="letra" action="backend/conexao.php" method="POST">
        <button id="ocult" type="text" class="btn btn-white  btn-outline-info rounded-pill btn-block mb-3 ; anim">Não Sou Pessoa Jurídica</button>
        </center> 

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
                <input name="cnpj" id="cnpj" size="20" class="fortela" class="quebra espaco" type="text" >    
            </div>
        </div>
        <div class="row">
            <div  id="sol02" class="col-sm mt-5">
                <label class="form-label"> Nome:</label>
                <input   class="fortela"  class="quebra espaco" type="text" name="nome" size="20" required> 
            </div> 
            <div class="col-sm mt-5" id="sol03">
                <label class="form-label"> Sobrenome:</label>
                <input   class="fortela" id="l" class="quebra espaco" type="text" name="sobrenome" size="20" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Data de Nascimento:</label>
                <input class="fortela" name="dt" class="quebra espaco" type="date"  min="1900-01-01" max="2022-08-01" required>  
            </div>
        </div>
        <div class="row">
            <div id="validac" class="col-sm mt-5">    
                <label class="form-label"> CPF:</label>
                <input id="cpf" name="cpf" class="fortela" class="quebra espaco" type="text" maxlength="14" size="20">
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
                <input name="email" id="email" class="fortela" class="quebra espaco" type="email"  size="20" required>
            </div>
        </div>    
        <div class="row">
            <div class="col-sm mt-5">
                <label class="form-label"> Telefone:</label>
                <input id="tel" name="tel" class="fortela" class="quebra espaco" type="text" size="20" placeholder="(xx)9xxxx-xxxx" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Cep:</label>
                <input id="cep" name="cep" class="fortela" class="quebra espaco" type="text" size="20"  required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Endereço:</label>
                <input id="rua" class="fortela" class="quebra espaco" name="endereco" type="text" size="20" required>
            </div>    
        </div>    
        <div class="row">
            <div class="col-sm mt-5">
                <label class="form-label"> Número:</label>
                <input id="num" name="numero" class="fortela" class="quebra espaco" maxlength="8" type="text" size="20" required>
                
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Cidade:</label>
                <input id="cidade" class="fortela" class="quebra espaco" name="cidade" type="text"  size="20" required>
            </div>
            <div class="col-sm mt-5">
                <label class="form-label"> Bairro:</label>
                <input id="bairro" class="fortela" name="bairro" class="quebra espaco" type="text" size="20"  required>
            </div> 
        </div>
        <div class="row" id="soletra02">      
            <div class="col-sm mt-5">
                <label class="form-label"> Estado:</label>
                <input id="uf" class="fortela" class="quebra espaco" name="estado" type="text" size="20"  required>
            </div>
        </div>
              
            <div class="col-sm mt-5">
                <label class="form-label">Senha:</label>
                <input onKeyUp="verificaForcaSenha();" class="fortela ; mb-3  " class="quebra espaco" id="password" type="password" name="f_senha" size="20" maxlength="10" required> 
                <span id="password-status"></span>
            </div>
                <input type="checkbox" onclick="mostrarOcultarSenha()">Mostrar Senha

            <div class="col-sm mt-5">
                <label class= "quebra espaco" class="quebra"> Opiniões:</label>
                <textarea class="quebra espaco" name="f_comantário" cols="50" rows="10"required></textarea>   
            </div>
           
            <input type="checkbox" name="termo" checked required> 
            <label> Aceito termos e condições:</label> 
            
            <div class="mt-3">
                <input class=" btn btn-primary" type="submit" name="bto_enviar" value="Enviar" >
                <input type="reset" name="bto_limpar" class="btn btn-secondary" value="Limpar"> 
                
            </div>
            
    </div>   
</form>


</script>
    <script type="text/javascript" src="js/jquery.3.3.1min.js"></script>
    <script type="text/javascript" src="js/scritps.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.js"></script>
    <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    

</body>
</html>