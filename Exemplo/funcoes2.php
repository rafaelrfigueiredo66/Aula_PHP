<?php

function calcularIpva($valor, $estado, $utilitario, $kitgas){
    $porcentagem = 0;
    if ($kitgas == "S"){
        $porcentagem = $valor * 0.005;
    }
    else{
        if ($estado == "PR"){
            if ($utilitario == 'S'){
                $porcentagem = $valor * 0.025;    
            }
            else{
                $porcentagem = $valor * 0.035;
            }
        }
        if ($estado == "BH"){
            if ($utilitario == 'S'){
                $porcentagem = $valor * 0.01;    
            }
            else{
                $porcentagem = $valor * 0.02;
            }
        }
        if ($estado == "RS"){
            if ($utilitario == 'S'){
                $porcentagem = $valor * 0.012;    
            }
            else{
                $porcentagem = $valor * 0.022;
            }
        }
        if ($estado == "SC"){
            if ($utilitario == 'S'){
                $porcentagem = $valor * 0.015;    
            }
            else{
                $porcentagem = $valor * 0.025;
            }
        }
    }
    return $porcentagem;
}

?>