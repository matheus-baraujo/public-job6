<style>
    body{
        background-image: url("./public/resources/bg (1).png");
        background-color: #111F44;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>


<?php 

    $_SESSION['return'] = "validation";

    // Checando se já acessou essa página
    if(isset($_POST["items"])){

        $numberItems = $_POST["items"];

    }else if (isset($_SESSION['prod1']) and isset($_SESSION['qntd1'])) {

        $lista1 = explode(';', $_SESSION['prod1']);
        $lista2 = explode(';', $_SESSION['qntd1']);

        $numberItems = count($lista1);

        for ($i=1; $i <= $numberItems; $i++) { 
            $item = "item".$i;
            $quant = "qnt".$i;

            $_POST[$item] = $lista1[$i-1];
            $_POST[$quant] = $lista2[$i-1];
        }

    }

    //lista de items pedidos pelo cliente
    $order = [];
    $produtos = [];
    $quantidades = [];

    for ($i=1; $i <= $numberItems; $i++) { 
        $id_prod = "";
        $item = "item".$i;
        $quant = "qnt".$i;

        $linha = array($id_prod , $_POST[$item] , $_POST[$quant]);

        $order[] = $linha;
        $produtos[] = $_POST[$item];
        $quantidades[] =  $_POST[$quant];
    }

    //Salvando as variáveis para reacessar a página
    $_SESSION['prod1'] = implode(';', $produtos);
    $_SESSION['qntd1'] = implode(';', $quantidades);

    //lista de itens encontrados
    $list = [];

    //busca dos possíveis items
    for ($j=0; $j < $numberItems; $j++) { 

        $item = $order[$j][1];

        if ($item != '' && $item != ' ') {
            if (count(explode(' ', $item)) > 1 ) {

                $produto = explode(' ', $item);
    
                $query = 'SELECT * FROM produtos WHERE';
    
                for ($k=0; $k < count($produto); $k++) { 
                    if ($k == 0) {
                        $query .= ' produto LIKE "%'.$produto[$k].'%" ';
                    }else {
                        if ($produto[$k] != '' && $produto[$k] != ' ') {
                            $query .= ' and produto LIKE "%'.$produto[$k].'%" ';
                        }
                    }
                }
    
                $query .= ' order by locate("'.$item.'", produto) LIMIT 50; ';
    
            }else{
                $query = 'SELECT * FROM produtos WHERE produto LIKE "%'.$item.'%" order by locate("'.$item.'", produto) LIMIT 50;';
            }
    
            $result = mysqli_query($conn, $query);


            //array_push($list, mysqli_fetch_all($result, MYSQLI_ASSOC));

            while($aux = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
               $rows[] = $aux;
            }
    
            array_push($list, $rows);
            unset($rows); 
            $rows = array();
        }
    }

    $numberItems = count($list);

?>


<div class="container-xxl " style="min-height: 100vh; position: relative;">
    <div class="row">

        <img class="logo mx-auto my-5" src="./public/resources/logo (2).png" alt="logo">

    </div>
    <div class="row">

        <div class="col-md-12 mx-auto mb-3">
            <h3 style="text-align: center; color: white; font-weight: bold;">Validando sua lista</h3>

            <div class="row ps-3 pe-0 pt-3" style="width: calc(100% - 2px);"> <!-- Cabeçalho da tabela -->
                <div class="col-md-2 col-2 p-3 px-2 tableHeader2" style="border-top-left-radius: 23px;">
                    <p>Imagem</p>
                </div>
                <div class="col-md-2 col-2 p-3 px-2 tableHeader2" >
                    <p>Produto</p>
                </div>
                <div class="col-md-3 col-2 p-3 px-2 tableHeader2" >
                    <p>Descrição</p>
                </div>
                <div class="col-md-2 col-2 p-3 px-2 tableHeader2" >
                    <p>Marca</p>
                </div>
                <div class="col-md-2 col-2 p-3 px-2 tableHeader2" >
                    <p>Quantidade</p>
                </div>
                <div class="col-md-1 col-2 p-3 px-2 tableHeader2" style="border-top-right-radius: 23px; border-right: none;">
                    <p>Ver mais</p>
                </div>
            </div>

            <div class="row px-3 mb-3"> <!-- Corpo da tabela -->
                <div class="col-12 pb-3" id="tableBody" >

                <?php 
                
                    for ($n=0; $n < $numberItems; $n++) { 

                        $array = $list[$n];

                        for ($m=0; $m < count($array); $m++) { 

                            if ($m == 0) { //Produto escolhido

                                if($array[$m]['foto_webp'] == "" || $array[$m]['foto_webp'] == '""""""'){
                                    $img = './public/resources/noimg.png';
                                }else{
                                    $img = "./public/webp/".$array[$m]['foto_webp'];
                                }

                                echo '<div class="row tableRow" id="produto'.$n.'">

                                    <input type="hidden" name="prod'.$n.'" id="prod'.$n.'" value="'.$array[$m]['codbar'].'">

                                    <div class="col-md-2 p-2 ps-3 tableColumn">
                                        <img id="imgProd'.$n.'" class="imgProd" src="'.$img.'" alt="'.$img.'">
                                    </div>
                                    <div class="col-md-2 p-2 ps-3 tableColumn">
                                        <p id="nome'.$n.'" class="descriptionText" style="margin-top: 10%;">'.$array[$m]['produto'].'</p>
                                    </div>
                                    <div class="col-md-3 p-2 ps-3 tableColumn">
                                        <p id="desc'.$n.'" class="descriptionText" style="margin-top: 2.5%;">'.str_replace("<b>",", ", str_replace("</b>", " ", $array[$m]['descricao'])).'</p>
                                    </div>
                                    <div class="col-md-2 p-2 ps-3 tableColumn">
                                        <p id="marca'.$n.'" style="margin-top: 10%;">'.$array[$m]['marca'].'</p>
                                    </div>
                                    <div class="col-md-2 p-2 ps-3 tableColumn">
                                        <p id="quant'.$n.'" style="margin-top: 10%;">'.$order[$n][2].'</p>
                                    </div>
                                    <div class="col-md-1 p-2 ps-3" >
                                        <button style="margin-top: 15%;" class="btn w-100" onclick="toggleOptions('.$n.')">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>';

                            }else if($m == 1){ //Opções de produtos similares
                                echo '<div class="expansible" id="options'.$n.'">';

                                include './public/partials/itemColumn.php';

                                if ($m == count($array)-1) {
                                    echo '</div>';
                                }

                            }else if($m == count($array)-1){

                                include './public/partials/itemColumn.php';

                                echo '</div>';
                            }else {

                                include './public/partials/itemColumn.php';
                                
                            }

                        }
                    }
                
                
                ?>
                

                </div>
            </div>

        </div>

        
    </div>

    <div class="row"> <!-- Modal para adicionar novo item -->
        <div class="col-2 mx-auto" style="text-align: center;">
            <button class="btn addBtn" data-bs-toggle="modal" data-bs-target="#modalAdd"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="row" style="justify-content: space-between;">

                <form id="validate" action="?page=result" method="post">
                    
                    <input type="hidden" id="numberValidate" name="number" value="<?php echo $numberItems; ?>">
                    <input type="hidden" id="prodValidate" name="products" value="">
                    <input type="hidden" id="qntValidate" name="quants" value="">

                </form>

                <a href="?page=home" class="btn loginBtn" style="width: auto;">Voltar</a>
                <button class="btn registerBtn" style="width: auto;" onclick="validateList()">Continuar</button>

            </div>
        </div>
    </div>

    <?php include './public/partials/buttons.php'; ?>
    
</div>

<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="border-bottom: none;">
        <h5 class="modal-title">Adicionar Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >

        <form action="?page=validation" method="post">
            <div class="row">

                <input type="hidden" name="items" value="<?php echo $numberItems+1; ?>">

                <?php 
                
                    for ($o=1; $o <= $numberItems; $o++) { 

                        $item = "item".$o;
                        $quant = "qnt".$o;

                        echo '<input type="hidden" name="'.$item.'" value="'.$_POST[$item].'">';
                        echo '<input type="hidden" name="'.$quant.'" value="'.$_POST[$quant].'">';
                    }
                
                ?>

                <div class="col-6">
                    <input class="form-control homeInput" type="text" name="item<?php echo $numberItems+1; ?>" id="item<?php echo $numberItems+1; ?>" placeholder="Item">
                </div>
                <div class="col-6">
                    <input class="form-control homeInput" type="text" name="qnt<?php echo $numberItems+1; ?>" id="qnt<?php echo $numberItems+1; ?>" placeholder="Quantidade">
                </div>
            </div>
        
      </div>
      <div class="modal-footer" style="border-top: none;">
        <input type="submit" class="btn btn-primary" value="Buscar">
      </div>
        </form>
    </div>
  </div>
</div>

<script src="./public/js/validation.js"></script>