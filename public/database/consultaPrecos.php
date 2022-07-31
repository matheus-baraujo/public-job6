<?php

$numero_empresas = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM emp_vend"));

$cota = [];
$total = [];

for ($i=0; $i < $numero_empresas; $i++) { 
    $cota[] = 0;
    $total[] = 0;
}

for ($j=0; $j < count($produtos); $j++) { 
    $query = "SELECT * FROM preco_estoque WHERE codbar = '".$produtos[$j]."'";
    $parcial = mysqli_query($conn, $query);

    for ($k=0; $k < $numero_empresas; $k++) { 
        $preco = mysqli_fetch_array($parcial);

        if ($preco == false) {
            $cota[$k] += 99999.00;
            $total[$k] += 0;

            continue;
        }

        if(floatval(str_replace(',','.',$preco['preco_pub'])) == 0){
            $cota[$k] += 99999.00;
            $total[$k] += 0;
        }else{
            $cota[$k] += floatval(str_replace(',','.',$preco['preco_pub']))*$quants[$j];
            $total[$k] += floatval(str_replace(',','.',$preco['preco_pub']))*$quants[$j];
        }
        
    }
}

$ordenado = $cota;
sort($ordenado);

sort($total);

$empresas = [];

for ($l=0; $l < 4; $l++) { 
    for ($m=0; $m < $numero_empresas; $m++) { 
        if ($ordenado[$l] == $cota[$m]) {
            $empresas[] = $m+1;
        }
    }
}
