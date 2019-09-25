<?php

    //print_r($_POST);

    $inteiros = array(1,5,7,9,10);
        echo "</br><h1>Confirmação dos dados</h1>";
    

    //print_r($inteiros);

    foreach($_POST as $index => $valor){
        echo "</br>".$index." - ".$valor;
    }
    //print_r($inteiros)
   // for ($i = 0; $i < sizeof($inteiros); $i++){
    //    echo $inteiros[$i]." ";
    //}



    //print_r($_POST);
    //echo "<br/><h1>Dados do Cadastro</h1>";
    //echo "<br/>Nome..: ".$_POST['nome'];
    //echo "<br/>E-mail..: ".$_POST['email'];
    //echo "<br/>CPF..: ".$_POST['CPF'];
    //echo "<br/>Data..: ".$_POST['data'];
    //echo "<br/>Telefone..: ".$_POST['Telefone'];

    /*$variavel = 8;
    if ($variavel > 7) {
        echo "maior que sete";
    } else {
        echo "menor que sete";
    }

    for ($i = 0; $i < $variavel; $i++) {
        echo "<br/>valor..: ".$i;
    }
    $i = 0;
    while($i < $variavel) {
        echo "<br/>valor..: ".$i;
        $i++;
    }*/
    
    //echo $variavel;
    
    
    
?>