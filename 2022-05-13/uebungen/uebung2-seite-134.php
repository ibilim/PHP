<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung1-Seite134</title>
</head>
<body>
    <h1>Addition mit eingebundener Funktion</h1>
    <p>Bitte geben Sie zwei oder drei Zahlen ein und senden Sie das Formular ab:</p>

    <?php 
    require_once 'funktion.inc.php';

    if( isset($_GET['send'])){

        $number1=$_GET['number1'];
        $number2=$_GET['number2'];
        if(empty(trim($_GET['number3']))){
            $number3=0;
        }else{
            $number3=$_GET['number3'];
        }
       


    }

    
    ?>
    <form action="<?php $_SERVER['PHP_SELF'];  ?>" method="get">


    <p> Zahl 1:<input type="number" name="number1" value="<?php echo $number1; ?>"></p>
    <p> Zahl 2:<input type="number" name="number2" value="<?php echo $number2; ?>"></p>
    <p> Zahl 3 (<i>optional</i>):<input type="number" name="number3" value="<?php if($number3!=0){ echo $number3;} ?>"></p>

    <p><input type="submit" value="Absenden" name="send"></p>
    </form>

    <?php 

    if( isset($_GET['send'])){
        echo '<p>Das Formular wurde abgesendet, das Ergebnis der ... </p>';
        

        echo addition($number1,$number2,$number3);


    }

    
    ?>
    
</body>
</html>