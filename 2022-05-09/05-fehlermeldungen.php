<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fehlermeldungen</title>
</head>
<body>
    <h1>Fehlermeldungen</h1>
    <?php
    // Regeln von Fehler-Ausgaben im Script
    error_reporting(E_ALL);

    //Erzeugt eine Warnung
    echo "<p> Der Wert der variable i ist: $i </p>";
    
    //Erzeugt einen Fatal Error. Folge-Anweisungen werden nicht mher durchgeführt.
    #echo 4/0 ;

    //funktionname gibt es nicht, deswegen erzeugt einen  Fatal-Error
    prin_r($i);

    echo '<p> Weitere Ausgaben etc. </p>';

    /* Beim identisch oder nicht identisch Operator müssen Wert und Datentyp übereinstimmen
     */

    if (6=='6'){
        echo 'wahr <br>';
    }
    else{
        echo 'falsch <br>';
    }

    
    ?>
</body>
</html>