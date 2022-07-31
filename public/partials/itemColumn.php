<?php

if($array[$m]['foto_webp'] == "" || $array[$m]['foto_webp'] == '""""""'){
    $img = './public/resources/noimg.png';
}else{
    $img = "./public/webp/".$array[$m]['foto_webp'];
}

echo '
<div class="row tableRow expansibleRow">

    <input type="hidden" name="prod'.$n.'-'.$m.'" id="prod'.$n.'-'.$m.'" value="'.$array[$m]['codbar'].'">

    <div class="col-md-2 p-2 ps-3 tableColumn">
        <img id="imgProd'.$n.'-'.$m.'" class="imgProd" src="'.$img.'" alt="'.$img.'">
    </div>
    <div class="col-md-2 p-2 ps-3 tableColumn">
        <p id="nome'.$n.'-'.$m.'" class="descriptionText" style="margin-top: 10%;">'.$array[$m]['produto'].'</p>
    </div>
    <div class="col-md-3 p-2 ps-3 tableColumn">
        <p id="desc'.$n.'-'.$m.'" class="descriptionText" style="margin-top: 2.5%;">'.str_replace("<b>",", ", str_replace("</b>", " ", $array[$m]['descricao'])).'</p>
    </div>
    <div class="col-md-2 p-2 ps-3 tableColumn">
        <p id="marca'.$n.'-'.$m.'" style="margin-top: 10%;">'.$array[$m]['marca'].'</p>
    </div>
    <div class="col-md-2 p-2 ps-3 tableColumn">
        <p style="margin-top: 10%;">'.$order[$n][2].'</p>
    </div>
    <div class="col-md-1 p-2 ps-3" >
        <button style="margin-top: 15%;" class="btn w-100 addBtn" onclick="selectProd('.$n.','.$m.')"> Select </button>
    </div>
</div>';