<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logisch</title>
</head>
<body>
    <h1>Logisch</h1>
    <?php 
    
    $a=3;
    $b=2;

    //logisches UND: AND  oder &&
    if ( ($a>=3)  AND ($a<=8) ){
        echo '<p> a lieagt zwischen 3 und 8 </p>';
    }

    // ODER: OR   oder ||

    if (  $a==3 OR $b<=9){
        echo '<p>  Das ist  eine logische ausführung von if (  $a==3 OR $b<=9) </p>';
    }

    //XOR
    if (  $a==3 XOR $b<=4){
        echo '<p> Entweder a=3 oder b<=4  </p>';
    }

    //logisches NICHT:!
    if (!($a==3)){
        echo '<p> a ist nicht gleich 3. </p>';
    }
    
    // Nicht-identisch operator
    if (($a!=3)){
        echo '<p> a ist nicht gleich 3. </p>';
    }
    ?>
</body>
</html>