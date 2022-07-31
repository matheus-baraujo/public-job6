<style>
    body{
        background-image: url("./public/resources/bg (3).png");
        background-color: #111F44;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<?php 
    $_SESSION['return'] = "result";

    //Verificando se a página de resultado já foi acessada

    if(isset($_POST['products']) and isset( $_POST['quants'])) {
        $produtos = explode('-', $_POST['products']);
        $quants = explode('-', $_POST['quants']);

        $_SESSION['prod2'] = $_POST['products'];
        $_SESSION['qntd2'] = $_POST['quants'];
    }else {
        $produtos = explode('-', $_SESSION['prod2']);
        $quants = explode('-', $_SESSION['qntd2']);
    }

?>

<div class="container-xxl " style="min-height: 100vh; position: relative;">
    <div class="row">

        <img class="logo mx-auto my-5" src="./public/resources/logo (2).png" alt="logo">

    </div>
    <div class="row"> 

        <div class="col-md-12 mx-auto mb-3">

            <div class="row px-3 pe-4 pt-3"> <!-- Cabeçalho da tabela -->
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" style="border-top-left-radius: 23px;">
                    <p>Imagem</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" >
                    <p>Produto</p>
                </div>
                <div class="col-md-3 col-3 p-3 px-2 tableHeader2" >
                    <p>Descrição</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" >
                    <p>Marca</p>
                </div>
                <div class="col-md-2 col-2 p-3 px-2 tableHeader2" >
                    <p>Quantidade</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" >
                    <p >A</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" >
                    <p >B</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" >
                    <p >C</p>
                </div>
                <div class="col-md-1 col-1 p-3 px-2 tableHeader2" style="border-top-right-radius: 23px; border-right: none;">
                    <p>D</p>
                </div>
                
            </div>

            <div class="row px-3"> <!-- Corpo da tabela -->
                <div class="col-12 pb-3" id="tableBody" style="border-radius: 0%;">

                    <?php 

                        include './public/database/consultaPrecos.php';

                    
                        for ($k=0; $k < count($produtos); $k++) { 

                            include './public/partials/itemRow.php';
                        }


                    ?>
                    
                </div>
            </div>

            <div class="row px-3 pe-4"> <!-- Footer da tabela -->
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" style="border-bottom-left-radius: 23px;">
                    <p style="font-weight: bold;">Total</p>
                </div>
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" >
                    
                </div>
                <div class="col-md-3 col-3 p-1 px-2 tableFooter" >
                    
                </div>
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" >
                    
                </div>
                <div class="col-md-2 col-2 p-1 px-2 tableFooter" >
                    
                </div>
                
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" >
                    <p>R$ <?php echo str_replace('.', ',', strval($total[0])); ?></p>
                </div>
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" >
                    <p>R$ <?php echo str_replace('.', ',', strval($total[1])); ?></p>
                </div>
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" >
                    <p>R$ <?php echo str_replace('.', ',', strval($total[2])); ?></p>
                </div>
                <div class="col-md-1 col-1 p-1 px-2 tableFooter" style="border-bottom-right-radius: 23px; border-right: none;">
                    <p>R$ <?php echo str_replace('.', ',', strval($total[3])); ?></p>
                </div>

                
            </div>

        </div>

    </div>

    <div class="row" style="justify-content: space-around;">
        <a href="?page=validation" class="btn loginBtn" style="width: auto;">Voltar</a>
        <button class="btn registerBtn" style="width: auto;">Continuar</button>
    </div>

    <?php include './public/partials/buttons.php'; ?>
    
</div>

<script src="./public/js/result.js"></script>