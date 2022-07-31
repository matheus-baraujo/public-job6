<style>
    body{
        background-color: white;
    }
</style>

<div style="background-color: white;"> 
    <div class="container-xxl " style="min-height: 20vh; position: relative;">

        <div class="row">
            <img class="logo3 mx-auto  my-5" src="./public/resources/logo (1).png" alt="logo">
        </div>

    </div>
</div>

<div style="background-color: #111F44;"> 
    <div class="container-xxl " style="position: relative; min-height: 80vh;">

        <div class="row p-3 px-md-5">
            <div class="col-md-10 mx-auto p-5" style="background-color: white; border-radius: 23px;">

                <div class="row  p-2 adminSection">


                    <?php 
                    
                        switch ($_GET['type']) {
                            case 'cliente':
                                include './public/partials/formCliente.php';
                                break;

                            case 'parceiros':
                                include './public/partials/formParceiros.php';
                                break;

                            case 'estoque':
                                include './public/partials/formEstoque.php';
                                break;
                            
                            default:
                                header('location: index.php?page=loggedAdmin');
                                break;
                        }
                    
                    
                    ?>
                    
                </div>

            </div>
        </div>

    </div>
</div>
