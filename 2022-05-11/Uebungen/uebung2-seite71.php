<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uebung2 </title>
</head>
<body>
    <h1>Übung2-seite 70</h1>
    <?php 
    for ($i=10; $i>-1;$i--){
        switch (true){
            case ($i==10):
                $bewertung='Sehr gut';
                echo "<p> Note:$i  $bewertung </p>";
                break;
            case ($i==9):
                $bewertung= 'Gut';
                echo "<p> Note:$i $bewertung </p>";
                break;
            case ($i==8):
                $bewertung= 'Befriedigend';
                echo "<p> Note:$i $bewertung </p>";
                break;
            case ($i==7):
                $bewertung= 'Ausreichend';
                echo "<p> Note:$i $bewertung </p>";
                break;
            case ($i<7):
                $bewertung= 'Leider zu wenige Punkte';
                echo "<p> Note:$i $bewertung </p>";
                break;
            default:
            echo "<p> Note:$i $bewertung </p>";

        }
            
    }
    ?>
</body>
</html>