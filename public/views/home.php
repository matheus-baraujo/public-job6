<style>
    body{
        background-image: url("./public/resources/bg (4).png");
        background-color: #111F44;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>


<?php
    $_SESSION['return'] = "home";
?>

<div class="container-xxl " style="min-height: 100vh; position: relative;">
    <div class="row">

        <img class="logo mx-auto my-5" src="./public/resources/logo (2).png" alt="logo">

    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <p style="text-align: center; color: white;">Sua lista de materiais de construção de modo prático e rápido!
                Agora você não precisa mais ir em diversas lojas para encontrar 
                os melhores preços para seus materiais de construção. Faça sua 
                lista e encontre tudo aqui na Tuyster!
            </p>
        </div>

        <div class="col-md-5 mb-3">
            <h3 style="text-align: center; color: white; font-weight: bold;">Como funciona a Tuyster?</h3>

            <div class="row p-3">
                <div class="col-1 my-auto bookmark">
                    <h1>1</h1> 
                </div>
                <div class="col-11 py-3 cardBody">
                    <div style="display: flex;">
                        <img class="my-auto" src="./public/resources/icon (3).png" style="height: 50%; margin-right: 5%;" alt="">
                        <p class="aligned"> <span class="highlightCard"> Monte sua lista de materiais de construção. </span>
                            Copie e cole os produtos de sua lista, para 
                            que a Tuyster possa procurar seus materiais 
                            de construção nas melhores lojas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-1 my-auto bookmark">
                    <h1>2</h1> 
                </div>
                <div class="col-11 py-3 cardBody">
                    <div style="display: flex;">
                        <img class="my-auto" src="./public/resources/icon (2).png" style="height: 50%; margin-right: 5%;" alt="">
                        <p class="aligned"> <span class="highlightCard"> Compare os preços e compre nas melhores lojas. </span>
                            Confirme ou modifique a marca e quantidade de seus produtos 
                            para descobrir seu orçamento. Ou salve os seus preferidos 
                            para uma compra futura.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-1 my-auto bookmark">
                    <h1>3</h1> 
                </div>
                <div class="col-11 py-3 cardBody">
                    <div style="display: flex;">
                        <img class="my-auto" src="./public/resources/icon (1).png" style="height: 50%; margin-right: 5%;" alt="">
                        <p class="aligned"> <span class="highlightCard"> Confirme sua lista de materiais. </span>
                            Após login sua lista será enviada para a loja 
                            selecionada e você já poderá receber ou retirar 
                            seus produtos!
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-7 mb-3">
            <h3 style="text-align: center; color: white; font-weight: bold;">Digite ou cole sua lista de materiais de construção</h3>

            <div class="row ps-3 pe-0 pt-3" style="width: calc(100% - 2px);">
                <div class="col-md-8 col-6 p-3 px-4 tableHeader" style="border-top-left-radius: 23px; border-right: white solid 1px;">
                    <h4>Produtos</h4>
                </div>
                <div class="col-md-4 col-6 p-3 tableHeader" style="border-top-right-radius: 23px;">
                    <h4>Quantidade</h4>
                </div>
            </div>

            <form action="?page=validation" method="post">

                <div class="row px-3 mb-3">
                    <div class="col-12 pb-3" id="tableBody">

                        <input type="hidden" name="items" id="items" value="1">

                        <div class="row tableRow">
                            <div class="col-md-8 col-6 p-3 tableColumn">
                                <textarea class="form-control borderless" rows="1"  name="item1" id="item1" placeholder="Item 1"></textarea>
                            </div>
                            <div class="col-md-4 col-6 p-3" >
                                <input class="form-control borderless" type="text" name="qnt1" id="qnt1" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="row my-3 d-none" id="addItem">
                            <button onclick="addItem(); return false;">Adicionar Item</button>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-6 mx-auto">
                        <input type="submit" class="btn buscarBtn w-100" value="Buscar">
                    </div>
                </div>

            </form>
            
        </div>
    </div>

    <?php include './public/partials/buttons.php'; ?>
    
</div>

<script src="./public/js/home.js"></script>