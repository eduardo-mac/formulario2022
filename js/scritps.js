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
















    
    

    

