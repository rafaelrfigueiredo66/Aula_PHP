<?php

function calcularIMC($altura, $peso, $genero){
    $imc = 0;
    if ($genero == "Masculino"){
        $imc = $peso / ($altura * $altura);
    } else{        
        $imc = $peso / ($altura * $altura);        
    }
    return number_format($imc, 2, ',', ' ');
}

?>