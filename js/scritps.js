function mostrarOcultarSenha(){
    let senha=document.getElementById("senha");
    if(senha.type=="password"){
        senha.type="text";
    }else{
        senha.type="password"
    }
}
$(document).ready(function () { 
    var $seuCampoCpf = $("#cpf");
    $seuCampoCpf.mask('000.000.000-00', {reverse: true});
});
$(document).ready(function () { 
    var $seuCampocnpj = $("#cnpj");
    $seuCampocnpj.mask('02.000.000/0000-00', {reverse: true});
});
// ASPA NÃO FICA EM SEU LUGAR
$(document).ready(function () { 
    var $seuCampotel = $("#tel");
    $seuCampotel.mask("(00) 00000-0000", {reverse: true});
});
$(document).ready(function () { 
    var $seuCampocep = $("#cep");
    $seuCampocep.mask('00000-000', {reverse: true});
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










    
    

    

