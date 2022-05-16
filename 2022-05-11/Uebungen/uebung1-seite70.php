<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uebung 1</title>
</head>
<body>
    <h1>Übung 1 </h1>
    <?php 
    
    $note=8;
    $bewertung='Unbekannt';
    
    switch (true){
        case ($note==10):
            $bewertung='Sehr gut';
            echo "<p> Note: $bewertung </p>";
            break;
        case ($note==9):
            $bewertung= 'Gut';
            echo "<p> Note: $bewertung </p>";
            break;
        case ($note==8):
            $bewertung= 'Befriedigend';
            echo "<p> Note: $bewertung </p>";
            break;
        case ($note==7):
            $bewertung= 'Ausreichend';
            echo "<p> Note: $bewertung </p>";
            break;
        case ($note<7):
            $bewertung= 'Leider zu wenige punkt';
            echo "<p> Note: $bewertung </p>";
            break;
        default:
        echo "<p> Note: $bewertung </p>";
    }
    ?>
</body>
</html>