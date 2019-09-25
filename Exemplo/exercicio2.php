<?php

    require_once 'funcoes2.php';
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

        $placa = isset($_POST['placa'])?$_POST['placa']:0;
        $valor = isset($_POST['valor'])?$_POST['valor']:0;
        $estado = isset($_POST['estado'])?$_POST['estado']:"PR";
        $utilitario = $_POST['utilitario'];
        $kitgas = $_POST['kitgas'];

        $res = calcularIpva($valor, $estado, $utilitario, $kitgas);

        array_push($_SESSION['resultado'],"O valor do IPVA para a placa".$placa. "é de R$".$res);
        //print_r($_SESSION['resultado']);

    }

?>
<html>
    <head>        
        <div class="container">
        <title>exercicio 2</title>
        <link rel="stylesheet" href="bootstrap.min.css">    
        </div>
    </head>
    <body>
        <div class="container">
        <h1>Calcular IPVA</h1>
        <form action="exercicio2.php" method="POST">
        <label for="nome">Placa</label>
        <input type="text" name="placa" id="placa" class="form-control" placeholder="Digite a placa" required/>
        <br/>
        <label for="nome">Valor</label>
        <input type="text" name="valor" id="valor" class="form-control" placeholder="Digite o valor" required/>
        <br/>
        <label for="nome">Estado</label>
        <select name="estado" class="form-control">
            <option value="PR">PR</option>
            <option value="BH">BH</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
        </select>
        <br/>
        <label for="nome">Selecione um tipo:</label>
        <select name="utilitario" class="form-control">
            <option value="N">Passeio</option>
            <option value="S">Utilitário</option>
        </select>
        <br/>
        <label for="nome">Possui kit gás?</label>
        <select name="kitgas" class="form-control">
            <option value="S">Kit Gás</option>
            <option value="N">Nenhum</option>
        </select>
        <br/>
        <input type="submit" value="Calcular" class="form-control"/>
        <br/><br/>
        <!--<input type="text" name="resultado"
            value="<?=$res?>"/>-->

        <?php if (!$retorno){ ?>
        <h5>O valor do IPVA para a placa <?=$placa?> é de R$ <?=$res?></h5>
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
                $('#placa').mask('AAA-0000');
                $('#valor').mask('00.000,00');
            });
        </script>
    </div>
    </body>
</html>