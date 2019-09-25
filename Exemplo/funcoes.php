<?php

function calculo($valor1, $valor2, $operacao){
    $resultado = 0;
    if ($operacao == "+"){
        $resultado = $valor1 + $valor2;
    }
    if ($operacao == "-"){
        $resultado = $valor1 - $valor2;
    }
    if ($operacao == "*"){
        $resultado = $valor1 * $valor2;
    }
    if ($operacao == "/"){
        $resultado = $valor1 / $valor2;
    }

    return $resultado;
}

function calcularIpva($valorVeiculo, $estado){
    $porcentagem = 0;
    if ($estado == "PR"){
        $porcentagem = 3.5;
    }
    if ($estado == "BH"){
        $porcentagem = 2;
    }
}

?>