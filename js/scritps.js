$(document).ready(function () {
  var $seuCampoCpf = $("#cpf");
  $seuCampoCpf.mask('000.000.000-00', {
    reverse: true
  });

  var $seuCampocnpj = $("#cnpj");
  $seuCampocnpj.mask('02.000.000/0000-00', {
    reverse: true
  });

  var $seuCampotel = $("#tel");
  $seuCampotel.mask("(00) 00000-0000", {
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




// JS-RADIO-PJ
// var selecionar_pfpj= document.getElementById("selec_pj");

// selecionar_pfpj.addEventListener("click", function(){
//     let pj = document.querySelector("#pj");
    
//     if(pj.style.display === "none"){
//         pj.style.display = "block"
//     }else {
//         pj.style.display = "none";
//     }
// })










    
    

    

