<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung1</title>
</head>
<body>
    <h1>Übung: Berechnungen mithilfe von Funktionen</h1>
    <?php 
    
    function addition($number1,$number2,$number3=0){
        $erg=$number1+$number2+$number3;

        return "<p>Addition (Zahlen $number1, $number2, $number3): $erg </p>";
    }

    function multiply($number1,$number2,$number3=1){
        $erg=$number1*$number2*$number3;

        return "<p>Multiplication (Zahlen $number1, $number2, $number3): $erg </p>";
    }

    function extended($number1,$number2,$number3=0){

        echo addition($number1,$number2,$number3);
        if($number3==0){
            $number3=1;
        }
        echo multiply($number1,$number2,$number3);

        
    }
    echo addition(5,20,10);

    echo multiply(10,21);

    echo extended(5,20,10);
    ?>
</body>
</html>