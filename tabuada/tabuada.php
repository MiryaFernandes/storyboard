<?php

//declarando varaveis
$multiplicador =(int) 0;
$mutiplicando =(int) 0;

if(isset($_POST['btnCalc'])){

$multiplicando = $_POST['txtn2'];
$multiplicador = $_POST['txtn1'];
$opcao = strtoupper($_POST['rdoCalc']);

if($_POST['txtn1'] == "" || $_POST['txtn2' == ""])

    echo ('<script> alert("favor preencer todas as caixas")</script>');

else {

    if(!is_numeric($multiplicador) || !is_numeric($multiplicando))
    
        echo ('<script> alert("não é possivel realizar calculos com dados não numericos")</script>');
    
    else {

        $resultado = $multiplicando * $multiplicador;
    }    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo"> 
            tabuada simples <br><br>
        </div>
        <form name="frmTabuada" method="post" action="tabuada.php">
            tabuada: <input type="text" name="txtn1" value=""><br><br>
            contador: <input type="text" name="txtn2" value=""><br><br>

            <input type="submit" name="btnCalc" value="calcular">

            <div id="resultado">
                
            </div>
        </form>

    </div>    
</body>
</html>