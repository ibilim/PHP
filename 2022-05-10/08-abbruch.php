<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbruch</title>
</head>
<body>
    <h1>Break and  Continue </h1>

    <?php 
    
    $ep=9;
    $menge=1;
    $budget=50;

    while ($menge<=15){
        $gp=$ep*$menge;

        if ($gp>$budget){

            echo " <p>Budget Überschritten!</p>";
            break;
        }
        echo "<p> $menge Stück: $gp  €</p>";

        $menge++;
    }
    
    ?>

    <h2> Continue</h2>

    <p>Alle geraden Zahlen zwischen 1 und 20 ausgeben:</p>
    <?php 
    
    for ($i=1; $i<=20; $i++){
        if ($i%2!=0){
            continue;
        }
        echo "$i <br>";
    }
    ?>
</body>
</html>