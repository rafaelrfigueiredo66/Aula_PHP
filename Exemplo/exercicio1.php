<?php

    require_once 'funcoes.php';
    $retorno = empty($_POST);
    
    if (!$retorno){

        $v1 = $_POST['valor1'];
        $v2 = $_POST['valor2'];
        $op = $_POST['operacao'];

        $res = calculo($v1,$v2,$op);
    }

?>
<html>
    <head>
        <title>exercicio 1</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <!--<img src="exe1.jpg" alt="img-fluid " style="width: 50%" class="rounded mx-auto d-block">-->
    </head>
    <body>
    <style>
        body {
            background-image: url("exe1.jpg");
            background-repeat: no-repeat;
        }
    </style>
        <div class="container">
        <h1>Calculadora simples</h1>
        <form action="exercicio1.php" method="POST">

        <label for="nome">Valor 1</label>
        <input type="text" name="valor1" class="form-control" placeholder="Digite um numero" required/>
        <br/>
        <label for="nome">Valor 2</label>
        <input type="text" name="valor2" class="form-control" placeholder="Digite um numero" required/>
        <br/>
        <label for="nome">Escola um operação:</label>
        <select name="operacao" class="form-control">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br/>
        <input type="submit" value="Calcular" class="form-control"/>
        <br/>
        <label for="nome">Resultado</label>
        <input type="number" name="resultado" class="form-control" 
            value="<?=$res?>"/>
        </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="js/jquery.mask.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <!--<script>
            $(document).ready(function(){
                $('.data').mask('00/00/0000');
            });
        </script>-->
    </body>
</html>