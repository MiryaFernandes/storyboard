<?php

    $media= null;
    $nota1= null;
    $nota2= null;
    $nota3= null;
    $nota4= null;
    if(isset($_POST["btnCalcular"]))
    {
        $nota1 = $_POST["txtN1"];
        $nota2 = $_POST["txtN2"];
        $nota3 = $_POST["txtN3"];
        $nota4 = $_POST["txtN4"];

        if( $nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "")
        {
            echo("<script> alert('Preencha todas as caixas'); </script>");
        }
        else
        {
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            $media = ( $nota1 + $nota2 + $nota3 + $nota4 ) / 4 ;
            else
            {
                echo("<script> alert('Não é possivel calcular com dados não numéricos');</script>");
            }    
            
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculo de Médias</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="divHeader">
        Matemática
    </div>
    <div id="divMenu">
        <div id="divSubMenu">
            <ul id="ulSubMenu">
                <li class="liSubMenu">calculadora</li>
                <li class="liSubMenu">média</li>
                <li class="liSubMenu">pares e ímpares</li>
                <li class="liSubMenu">tabuada</li>
            </ul>
        </div>
    </div>
    <div id="fundo">
        <div id="estrutura">
            <div id="cabecalio">
                <header class="fonte">calculo de médias</header>
            </div>
            <form id="form" name="frmMedia" method="post" action="">
                <div class="espacamento">
                    <label>nota 1:</label>
                    <input type="text" name="txtN1" value="<?=$nota1?>" >
                </div>
                <div class="espacamento">
                    <label>nota 2:</label>
                    <input type="text" name="txtN2" value="<?=$nota2?>" >
                </div>
                <div class="espacamento">
                    <label>nota 3:</label>
                    <input type="text" name="txtN3" value="<?=$nota3?>" >
                </div>
                <div class="espacamento">
                    <label>nota 4:</label>
                    <input type="text" name="txtN4" value="<?=$nota4?>" >
                </div>
                <div class="espacamento">
                    <input type="submit" value="calcular" name="btnCalcular">
                    <div id="botaoreset"><a href="calculadora.php">Novo Cálculo</a></div>
                </div>
            </form>
            <div id="media">
                <span class="fonte">a média é: <?php echo($media); ?> </span> 
            </div>
        </div>
    </div>
    <footer>
        <div id="voltarTopo">
            <a href="#divHeader">topo</a>
        </div>
    </footer>
</body>
</html>