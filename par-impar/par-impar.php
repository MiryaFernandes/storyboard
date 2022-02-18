<?php
  
        require_once('functions/constantes-variaveis.php');


        if(isset($_POST["btnCalcular"])) //Tratamento de erro do Botão
        {
            require_once('functions/variaveis-if.php');


            if($ninicial == "" || $nfinal == "" || $ninicial == "Selecione um Número" || $nfinal == "Selecione um Número" ) //Tratamento de erro de caixa vazia
            {
               echo(ERRO_CAIXA_VAZIA);
            }
            else
            {
                if($ninicial >= $nfinal) //Tratamento de erro Número Inicial maior ou igual ao Número Final 
                {
                    echo(MENOR_IGUAL);
                }
                else
                {
                    for($cont=$ninicial;$cont<=$nfinal;$cont++) //Teste lógico para criar os números
                    {       
                        if($cont%2 == 0) //Teste lógico para definir se o número é par ou ímpar
                        {
                            $numerosPar = $numerosPar.$cont."<br>";
                        $qtdPares++;
                        }
                        else
                        {
                            $numerosImpar = $numerosImpar.$cont."<br>"; 
                            $qtdImpares++;
                        }
                    }
                }
            }
        }

        



?>

<html>

<head>
    <title>projeto php</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="divHeader">
        par-impar
    </div>
    <div id="divMenu">
        <div id="divSubMenu">
            <ul id="ulSubMenu">
                <li class="liSubMenu">Calculadora</li>
                <li class="liSubMenu">Média</li>
                <li class="liSubMenu">Pares e Ímpares</li>
                <li class="liSubMenu">Tabuada</li>
            </ul>
        </div>
    </div>
    <div id="divEstrutura">
        <div id="divForm">
            <div id="tituloTabuada">
                PARES E ÍMPARES
            </div>
            <div>
                <form name="frmParImpar" method="POST" action="">
                    <div>
                        <label class="labels">número inicial: </label>
                        <select name="slcInicial" class="selectLabel">
                            <option value="">
                                <?php
                            for($cont=1;$cont<=500;$cont++) 
                            {
                                echo("<option value='".$cont."'>".$cont."</option>");
                            }
                        ?>
                            <option selected>selecione um número</option>
                            </option>
                        </select>
                    </div>
                    <input type="submit" value="Calcular" name="btnCalcular" id="botao">
                    <div>
                        <label class="labels" >número final: </label>
                        <select name="slcFinal" class="selectLabel">
                            <option value="">
                                <?php
                                    for($cont=100;$cont<=1000;$cont++) 
                                    {
                                        echo("<option value='".$cont."'>".$cont."</option>");
                                    }
                                ?>
                            <option selected>selecione um número</option>
                            </option>
                        </select>
                    </div>
                </form>
                <div id="divResultado">
                    <div id="divImpares">
                        <div>
                            Ímpares:
                        </div>
                        <div class="divNumeros">
                            <?=$numerosImpar?>
                        </div>
                        <div class="qntdNumeros">
                            quantidade de números ímpares: <?=$qtdImpares?>
                        </div>
                    </div>
                    <div id="divPares">
                        <div>
                            pares:
                        </div>
                        <div class="divNumeros">
                            <?=$numerosPar?>
                        </div>
                        <div class="qntdNumeros">
                            quantidade de números pares: <?=$qtdPares?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div id="voltarTopo">
        <a href="#divHeader">topo</a>
    </div>
</footer>

</html>