
<!-- Bootstrap and jpopper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Datatables -->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableSEO').DataTable();
        $('#tableClientes').DataTable();
        $('#tableParceiros').DataTable();
        $('#tableProdutos').DataTable();
    });


    var width;
    window.onresize = window.onload = function() {
        width = this.innerWidth;

        var column = $('#tableClientes').DataTable().column(0);
        var column1 = $('#tableClientes').DataTable().column(1);


        var column2 = $('#tableParceiros').DataTable().column(0);
        var column3 = $('#tableParceiros').DataTable().column(2);

        if(width <= 600){
            column.visible(false);
            column1.visible(false);

            column2.visible(false);
            column3.visible(false);
        }else{
            column.visible(true);
            column1.visible(true);

            column2.visible(true);
            column3.visible(true);
        }
    }

    
</script>
