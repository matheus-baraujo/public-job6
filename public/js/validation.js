
$(document).ready(function() {
    $(".expansible").hide();
});

function toggleOptions(div) {
    var options = "#options"+div;
    $(options).slideToggle();
}

function selectProd(prod1, prod2) {
    let codbar = $('#prod'+prod1+'-'+prod2).val();
    let img = $('#imgProd'+prod1+'-'+prod2).attr("src");
    let nome = $('#nome'+prod1+'-'+prod2).text();
    let desc = $('#desc'+prod1+'-'+prod2).text();
    let marca = $('#marca'+prod1+'-'+prod2).text();

    let codbar1 = $('#prod'+prod1).val();
    let img1 = $('#imgProd'+prod1).attr("src");
    let nome1 = $('#nome'+prod1).text();
    let desc1 = $('#desc'+prod1).text();
    let marca1 = $('#marca'+prod1).text();

    $('#prod'+prod1+'-'+prod2).val(codbar1);
    $('#imgProd'+prod1+'-'+prod2).attr("src", img1);
    $('#nome'+prod1+'-'+prod2).text(nome1);
    $('#desc'+prod1+'-'+prod2).text(desc1);
    $('#marca'+prod1+'-'+prod2).text(marca1);

    $('#prod'+prod1).val(codbar);
    $('#imgProd'+prod1).attr("src", img);
    $('#nome'+prod1).text(nome);
    $('#desc'+prod1).text(desc);
    $('#marca'+prod1).text(marca);

    $('.expansible').slideUp();

}

function validateList() {
    let items = $('#numberValidate').val();

    var prods=[], qnts=[];

    for (let index = 0; index < items; index++) {

        var prod = $('#prod'+index).val();
        prods.push(prod);

        var qnt = $('#quant'+index).text();
        qnts.push(qnt);
        
    }

    let input1 = prods.join('-');
    let input2 = qnts.join('-');

    $('#prodValidate').val(input1);
    $('#qntValidate').val(input2);

    $('#validate').submit();
}
