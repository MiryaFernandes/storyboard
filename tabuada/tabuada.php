<?php

//declarando varaveis
$multiplicador =(int) 0;
$mutiplicando =(int) 0;


if(isset($_POST['btnCalc'])){

$multiplicando = $_POST['txtn2'];
$multiplicador = $_POST['txtn1'];
$valor = $_POST['resultado'];
$limpar = $_POST['limpar'];

if($_POST['txtn1'] == "" || $_POST['txtn2'] == "")

   echo('<script> alert ("verificar se todas as lacunas foram preenchidas!"); </script>');

else 
{  
    if(!is_numeric($multiplicando) || !is_numeric($multiplicador)) 

       echo('<script> alert("nao é possivel realizar calculos com dados não numericos")</script>');

    else {
        
        $contador = 0;

        while($contador <= 10):
    
           $valor = $multiplicador * $multiplicando;
    
           $contador++;
         
        endwhile;  
    
    
    }   

}

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>tabuada</title>
</head>
<body>
    <section>
        <div id="conteudo">
            <div id="titulo"> 
                tabuada simples <br><br>
            </div>
            <form name="frmTabuada" method="post" action="tabuada.php">
                tabuada: <input type="text" name="txtn1" value=""><br><br>
                contador: <input type="text" name="txtn2" value=""><br><br>

                <input type="submit" name="btnCalc" value="calcular">
                <input type="submit" name="btnRst" value="limpar">

                <div id="resultado">
                    <?php echo($valor);?>
                </div>
            </form>
        </div>  
    </section>  
</body>
</html>