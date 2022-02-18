<?php

    require_once('functions/constantes-variaveis.php');
    require_once('functions/laco-repeticao.php');
   


    if(isset($_POST["btnCalcular"]))
    {
        $tabuada = $_POST["txtTabuada"];
        $contador = $_POST["txtContador"];
        
        if($tabuada == "" || $contador == "") //Tratamento de erro de caixa vazia
        {
           echo(ERRO_CAIXA_VAZIA);
        }
        else
        {
            if(is_numeric($tabuada) && is_numeric($contador))
            {
                if($tabuada == 0 || $contador == 0)
                {
                    echo(ERRO_TABUADA_0);
                }
                else
                {
                    for($cont=1;$cont<=$contador;$cont++) 
                    {
                        ($resultado = $tabuada * $cont);
                        $equacoes = $equacoes.$tabuada." x ".$cont." = ".$resultado."<br>"; 
                    }        
                }   
            }
            else
            {
                echo(ERRO_VALORES_NAO_NUMERICOS);
            }  
        }
    }
     

?>


<html>
    <head>
        <title></title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="divHeader">
            tabuada
        </div>
        <div id="divMenu">
            <div id="divSubMenu">
                <ul id="ulSubMenu">
                    <li class="liSubMenu">calculadora</li>
                    <li class="liSubMenu">tabuada</li>
                    <li class="liSubMenu">pares e ímpares</li>
                    <li class="liSubMenu">média</li>
                </ul>
            </div>
        </div>
        <div id="divEstrutura">
            <div id="divForm">
                <div id="tituloTabuada">
                    TABUADA
                </div>
                <div>
                    <form name="frmTabuada" method="POST" action="">
                        <div class="divLabel">
                         <label class="labels">tabuada: </label>
                         <input type="text" name="txtTabuada" maxlength="2" class="textoLabel">
                        </div>
                        <div>
                            <input type="submit" value="Calcular" name="btnCalcular" id="botao">
                        </div>                   
                        <div class="divLabel">
                        <label class="labels">contador: </label>
                        <input type="text" name="txtContador" maxlength="2" class="textoLabel">
                        </div> 
                    </form>
                    <div id="divResultado">
                        <?php
                        echo($equacoes); 
                        ?>
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