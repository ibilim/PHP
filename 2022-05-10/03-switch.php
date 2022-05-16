<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch-Case</title>
</head>
<body>
    <h1>Switch - Case</h1>
    <h2>Wochentage</h2>

    <?php 
    // sobald eine variable zu einer Case anweisung triftt, wird alle anweisungen bis zum nächsten Break durchgeführt.
    $heute='Dienstag';
    switch ($heute){  
        case 'Samstag' : echo '<p>Heute ist Samstag </p>';
        break;
        case 'Sonntag' : echo '<p>hEUTE IST sONNTAG </p>';
        break;
        default :
            echo '<p> Leider keine Wochenende </p>';
    }
    
    ?>

    <h2>Prüfungsergebnis</h2>
    

    <?php 
    
    //Variante 1

    $note=5;

    switch ($note){
        case 1:
        case 2:
        case 3:
        case 4:
            $erg='Bestanden';
            break;
        case 5:
        case 6:
            $erg='Durchgefallen';
            break;
        case 'keine Wertung':
            $erg=$note;
            break;
        default:
            $erg='keine auswertbare Bedingung gefunden.';
    }

    echo "<p> Das Ergebnis der prüfung : <b> $erg </b> </p> ";

    //variante 2

    switch(true){
        case ($note>=1 AND $note <=4):
            $erg='Bestanden';
            break;
        case ($note>=5 AND $note<=6):
            $erg='Durchgefallen';
            break;
        case 'keine Wertung':
            $erg=$note;
            break;
        default:
                $erg='keine auswertbare Bedingung gefunden.';
    }

    echo " <p> Das Ergebnis der prüfung : <b> $erg <b> </p> ";


    
    
    ?>
</body>
</html>