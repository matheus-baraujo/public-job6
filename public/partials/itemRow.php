<?php

$search = "SELECT * FROM produtos WHERE codbar = '".$produtos[$k]."'";

$item = mysqli_fetch_array(mysqli_query($conn, $search));


if($item['foto_webp'] == "" || $item['foto_webp'] == '""""""'){
    $img = './public/resources/noimg.png';
}else{
    $img = "./public/webp/".$item['foto_webp'];
}

echo'<div class="row tableRow">
    <div class="col-md-1 p-2 tableColumn" >
        <img style="margin-top: 20%; width: 70px; height: 45px; border-radius: 10px;" src="'.$img.'" alt="teste">
    </div>
    <div class="col-md-1 p-2 tableColumn" >
        <p class="descriptionText" style="margin-top: 20%;">'.$item['produto'].'</p>
    </div>
    <div class="col-md-3 p-2 tableColumn" >
        <p class="descriptionText" style="margin-top: 2.5%;">'.str_replace("<b>",", ", str_replace("</b>", " ", $item['descricao'])).'</p>
    </div>
    <div class="col-md-1 p-2 tableColumn" >
        <p style="margin-top: 20%;">'.$item['marca'].'</p>
    </div>
    <div class="col-md-2 p-2 tableColumn" >
        <p style="margin-top: 10%;">'.$quants[$k].'</p>
    </div>';


for ($i=0; $i < 4; $i++) { 

    $query3 = "SELECT * FROM preco_estoque WHERE codbar = '".$produtos[$k]."' AND id_emp = '".$empresas[$i]."'";

    //$valores = mysqli_fetch_all(mysqli_query($conn, $query3), MYSQLI_ASSOC);

    $teste = mysqli_query($conn, $query3);
    while($aux = mysqli_fetch_array( $teste ,MYSQLI_ASSOC))
    {
        $valores[] = $aux;
    }
    

    if ($valores != false) {
        if ($quants[$k] <= $valores[0]['estoque']) {
            $disp = '<p class="mb-0 green">Disponível</p>';
        } else if (($quants[$k]/2) <= $valores[0]['estoque']){
            $disp = '<p class="mb-0 yellow">Parcialmente</p>';
        } else {
            $disp = '<p class="mb-0 red">Indisponível</p>';
        }
    
        if ($i == 3) {
            echo '<div class="col-md-1 p-2">
                <p class="mb-0 mt-3">R$ '.$valores[0]['preco_pub'].'</p>
                '.$disp.'
            </div>';
        }else{
            echo '<div class="col-md-1 p-2 tableColumn" >
                <p class="mb-0 mt-3">R$ '.$valores[0]['preco_pub'].'</p>
                '.$disp.'
            </div>';
        }
    }else {
        $disp = '<p class="mb-0 red">Indisponível</p>';
        if ($i == 3) {
            echo '<div class="col-md-1 p-2">
                <p class="mb-0 mt-3">R$ - </p>
                '.$disp.'
            </div>';
        }else{
            echo '<div class="col-md-1 p-2 tableColumn" >
                <p class="mb-0 mt-3">R$ - </p>
                '.$disp.'
            </div>';
        }

    }

    unset($valores); 
    $valores = array();

    
}
    
echo '</div>';