<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung 3</title>
</head>
<body>
    <h1>Übung 3</h1>

    <?php 
    
    $zahl=1;
    while($zahl<6){
        echo "<p> $zahl </p> ";
        $zahl++;

    }

    echo '<hr>';
    $zahl=1;
    do{
        echo "<p> $zahl </p> ";
        $zahl++;
    } while($zahl<6);
    
    ?>
</body>
</html>