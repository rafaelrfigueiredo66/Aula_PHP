<?php

    require_once 'funcoes3.php';
    session_start();

    //$contador = 1;
    //$_POST['contador'] = $_POST['contador'] + 1;
    //$_SESSION['contador'] = $_SESSION['contador'] + 1;

    //echo $_POST['contador']." ".$_SESSION['contador'];

    //exit ();

    if (empty($_SESSION['resultado'])){
        $_SESSION['resultado'] = array();
    }

    $retorno = empty($_POST);
    
    if (!$retorno){

        $altura = isset($_POST['altura'])?$_POST['altura']:0;
        $peso = isset($_POST['peso'])?$_POST['peso']:0;
        $genero = isset($_POST['genero'])?$_POST['genero']:0;

        $res = calcularIMC($altura, $peso, $genero);

        array_push($_SESSION['resultado'],"O seu IMC é:".$res);
        //print_r($_SESSION['resultado']);

    }

?>
<html>
    <head>
    <div class="container">
    <link rel="stylesheet" href="bootstrap.min.css">
        <title>exercicio 3</title>
    </div>
    </head>
    <body>
        <div class="container">
        <h1>Calcular IMC</h1>
        <form action="exercicio3.php" method="POST">
        <label for="nome">Altura</label>
        <input type="text" name="altura" id="altura" class="form-control" placeholder="Digite sua altura" required/>
        <br/>
        <label for="nome">Peso</label>
        <input type="text" name="peso" id="peso" class="form-control" placeholder="Digite seu peso" required/>
        <br/>
        <label for="nome">Gênero</label>
        <select name="genero" class="form-control">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br/>
        <input type="submit" value="Calcular" class="form-control"/>
        <br/>
        <label for="nome">Resultado</label>
        <input type="text" name="resultado" class="form-control"
            value="<?=$res?>"/>
        <br/>
        <?php if (!$retorno){ ?>
        <h5>O seu IMC é: <?=$res?></h5>
        <?php } ?>
        </form>
        <h4>Histórico de cálculos</h4>
        <?php

        for ($i = 0; $i < count($_SESSION['resultado']); $i++){
            echo $_SESSION['resultado'] [$i]."<br/>";
        }
        
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script src="js/jquery.mask.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#altura').mask('0.00');
                $('#peso').mask('000');
            });
        </script>
    </div>
    </body>
</html>