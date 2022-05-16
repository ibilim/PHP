<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raumschiffe-und-anderes</title>
</head>
<body>
    <h1>Raumschiffe-und-Anderes</h1>

    <?php 
    
    $a=9;
    $b=4;

    /*
    //Ergibt 1 --> wenn a>b  ist      
            -1 -->wenn  a<b ist
             0 -->wenn  a=b ist
    */
    echo $a<=>$b;
    
    $x=null;
    $y=null;
    $j='ganz anderes wert';

    $z= $x ?? $y ?? $j;

    echo "<p> $z </p>";

    //null-coalescing_operator
    /* 
     weist den variablen von z bis a zu, wenn die variable initialisiert und nicht null ist
    */
    ?>
</body>
</html>