$(document).ready(function () {
  var $seuCampoCpf = $("#cpf");
  $seuCampoCpf.mask('000.000.000-00', {
    reverse: true
  });

  var $seuCampocnpj = $("#cnpj");
  $seuCampocnpj.mask('00.000.000/0000-00', {
    reverse: true
  });

  var $seuCampotel = $("#tel");
  $seuCampotel.mask('99 99999-9999', {
    reverse: true
  });

  var $seuCampocep = $("#cep");
  $seuCampocep.mask('00000-000', {
    reverse: true
  });
  var $seuCampocep = $("#num");
  $seuCampocep.mask('0000', {
    reverse: true
  });
});

  var inputNome = document.querySelector("#soletra");
  soletra.addEventListener("keypress", function (e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    if (keyCode > 47 && keyCode < 58) {
      e.preventDefault();
    }
  });
  var inputNome = document.querySelector("#sol01");
  sol01.addEventListener("keypress", function (e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    if (keyCode > 47 && keyCode < 58) {
      e.preventDefault();
    }
  });
  var inputNome = document.querySelector("#sol02");
  sol02.addEventListener("keypress", function (e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    if (keyCode > 47 && keyCode < 58) {
      e.preventDefault();
    }
  });
  var inputNome = document.querySelector("#sol03");
  sol03.addEventListener("keypress", function (e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    if (keyCode > 47 && keyCode < 58) {
      e.preventDefault();
    }
  });
  function mostrarOcultarSenha(){
    let senha=document.getElementById("senha");
    if(senha.type=="password"){
        senha.type="text";
    }else{
        senha.type="password"
    }
}

$("#ocult").click(
  function(){
    $(".ocult").toggle()
    if($(".ocult").is(':visible')){
      $("#ocult").text('Não Sou Pessoa Jurídica')
    }else{
      $("#ocult").text('Sou Pessoa Jurídica')

    }
  }
); 
$(document).ready(function() {

  function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#rua").val("");
      $("#bairro").val("");
      $("#cidade").val("");
      $("#uf").val("");
  }
  
  $("#cep").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

              //Preenche os campos com "..." enquanto consulta webservice.
              $("#rua").val("...");
              $("#bairro").val("...");
              $("#cidade").val("...");
              $("#uf").val("...");

              //Consulta o webservice viacep.com.br/
              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                  if (!("erro" in dados)) {
                      //Atualiza os campos com os valores da consulta.
                      $("#rua").val(dados.logradouro);
                      $("#bairro").val(dados.bairro);
                      $("#cidade").val(dados.localidade);
                      $("#uf").val(dados.uf);
                  } //end if.
                  else {
                      //CEP pesquisado não foi encontrado.
                      limpa_formulário_cep();
                      alert("CEP não encontrado.");
                  }
              });
          } //end if.
          else {
              //cep é inválido.
              limpa_formulário_cep();
              alert("Formato de CEP inválido.");
          }
      } //end if.
      else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
      }
  });
});


















    
    

    

