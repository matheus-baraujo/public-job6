var number = 1;

function addItem() {

    number+=1;

    var component = "<div class='row tableRow'><div class='col-md-8 col-6 p-3 tableColumn'>"+
    "<input class='form-control borderless' type='text' name='item"+number+"' id='item"+number+"' placeholder='Item "+number+"'></div>"+
    "<div class='col-md-4 col-6 p-3' >"+
    "<input class='form-control borderless' type='text' name='qnt"+number+"' id='qnt"+number+"' placeholder='Quantidade'></div>"+
    "</div>";

    $(component).insertBefore("#addItem");

    $("#items").val(number);
}

$(document).ready(function() {
    addItem();
    addItem();
    addItem();
    addItem();
});


$('#item1').change(function() {
    var text = $(this).val();

    for(let i = 0; i < text.split('\n').length; i++){

        text = text.replace('	','\n');

    }

    var lista = text.split('\n');

    if(lista.length > 1){

        $(this).val(lista[0]);
        $('#qnt1').val(lista[1]);

        while (lista.length/2 > number) {
            addItem();
        }

        for (let i = 2; i < lista.length; i+=2) {

            var item = lista[i];
            var qnt = lista[i+1];
            var input1;
            var input2;

            if (i>2) {
                input = "#item"+(i/2+1);
                input2 = "#qnt"+(i/2+1);
            }else{
                input = "#item"+(i);
                input2 = "#qnt"+(i);
            }

            $(input).val(item);
            $(input2).val(qnt);
            
        }
    }
});