
$("#cep").blur(function(){
    
    var cep = this.value.replace(/[^0-9]/, "");
    
    if(cep.length != 8){
        return false;
    }
    
    var url = "https://viacep.com.br/ws/"+cep+"/json/";
    
    $.getJSON(url, function(dadosRetorno){
        try{
            
            $("#cep").value = this.value;
            $("#end").val(dadosRetorno.logradouro);
            $("#cidade").val(dadosRetorno.localidade);
            $("#estado").val(dadosRetorno.uf);
        }catch(ex){}
    });
});


$(document).ready(function() {
    $("#opt1").css("opacity", 0.6);
    $("#opt2").css("opacity", 0.6);
});

function perfil(option) {
    if (option === 0) {
        $("#perfilValue").val(0);
        $("#opt1").css("opacity", 1);
        $("#opt2").css("opacity", 0.6);
        
    } else if( option === 1 ) {
        $("#perfilValue").val(1);
        $("#opt1").css("opacity", 0.6);
        $("#opt2").css("opacity", 1);
    }
    
}