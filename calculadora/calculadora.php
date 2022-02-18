<?php

    //Podemos importar um arquivo com : include, include_once, require, require_once
    require_once('functions/variaveis.php');
    require_once('functions/calculos.php');
    require_once('functions/constantes.php');     
    

    if(isset($_POST["btnCalcular"]))        //validação para verificar se o botão calcular foi acionado 
    {
                //usar = "" ou empty para tratar caixas vazias
        if($_POST["txtValor1"] == "" || ($_POST["txtValor2"] ==""))
            echo(ERRO_CAIXA_VAZIA);
            else{
                    //Resgatando valores do formulário no html
                    $valor1 = $_POST["txtValor1"];
                    $valor2 = $_POST["txtValor2"];
                                            //Resgata os valores do radio e converte a escrita
                    if(isset($_POST['conta'])) //Validação para radio vazia
                    {
                        $operacao = strtoupper($_POST["conta"]);

                        if(is_numeric($valor1) && is_numeric($valor2)) //validação para verificar se os dados são numeros
                        {
                            //Chamada da função calcular, enviando os argumentos de valores e operação
                            $resultado = calcular($valor1, $valor2, $operacao);
                        }                  
                        else
                        {
                            echo(ERRO_DADOS_NAO_NUMERICOS);
                       }    
                    }
                    else
                    {
                      echo(ERRO_CAIXA_VAZIA);  
                    }                           //Validação para radio vazia
                }                               //validação para caixa vazia
    }                                           //validação para verificar se o botão calcular foi acionado    
          
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>calculo de Médias</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="divHeader">
        menu
    </div>
    <div id="divMenu">
        <div id="divSubMenu">
            <ul id="ulSubMenu">
                <li class="liSubMenu">calculadora</li>
                <li class="liSubMenu">tabuada</li>
                <li class="liSubMenu">pares e impares</li>
                <li class="liSubMenu">média</li>
            </ul>
        </div>
    </div>
    <div id="alinhamentoCalculadora">
        <div id="estrutura">
            <!--Div Estrutura-->
            <div id="divtextoCalculadora">calculadora simples</div>
            <div id="conteudo">
                <div id="divFormulario">
                    <form name="frmCalculadora" method="post" action="">
                        <div class="caixatxt">
                            <label>valor 1</label>
                            <input type="text" name="txtValor1" value="<?=$valor1?>">
                        </div>
                        <div class="caixatxt">
                            <label>valor 2</label>
                            <input type="text" name="txtValor2" value="<?=$valor2?>">
                        </div>
                        <div id="parteinferior">
                            <div id="selecao">
                                <!--Bolinhas e Botão-->
                                <div class="bolinhas">
                                    <input type="radio" name="conta" value="soma" <?php
                                            if($operacao == "SOMA")
                                            {
                                                echo("checked");
                                            }
                                        ?>> somar
                                </div>
                                <div class="bolinhas">
                                    <input type="radio" name="conta" value="subtracao" <?php
                                            if($operacao == "SUBTRACAO")
                                            {
                                                echo("checked");
                                            }
                                            
                                        ?>> subtrair
                                </div>
                                <div class="bolinhas">
                                    <input type="radio" name="conta" value="multiplicacao" <?php
                                            if($operacao == "MULTIPLICACAO")
                                            {
                                                echo("checked");
                                            }
                                        ?>> multiplicar
                                </div>
                                <div class="bolinhas">
                                    <input type="radio" name="conta" value="divisao" <?php 
                                            if($operacao == "DIVISAO")
                                            {
                                                echo("checked");
                                            }
                                        ?>> dividir
                                </div>
                                <input type="submit" value="calcular" name="btnCalcular" id="botao">
                            </div>
                            <div id="resultado">
                                <!--Resultado--><?=(round($resultado, 4)); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div id="voltarTopo">
        <a href="#divHeader">topo</a>
    </div>

</html>