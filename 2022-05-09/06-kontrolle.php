<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen</title>
</head>
<body>
    <h1>Kontrollstrukturen</h1>
    <?php 
    
    $a=4;
    $b=3;

    /* === Wenn 
    ============================================================================================= */

    if ($a==6) {
        
        echo '<p> a ist gleich 6 <br>';
        echo 'weil die Prüfung <b> wahr </b>  ergibt </p>';
    } else{
        echo '<p> a ist nicht gleich 6 <br>';

        echo 'weil die Prüfung <b> falsch </b>  ergibt </p>';
    }

    echo '<p> Diese Zeile wird immer ausgeführt </p>';
    
    /* === Ternär- Operationen
    ============================================================================================= */

    // Standard if- else
    $schalter=1;
    $licht='AUS'; 

    if ($schalter==1){
        echo  '</p>Das Licht ist "AN". </p>';
    } else {
        echo  '<p>Das Licht ist "AUS". </p>';
    }

    // Ternär Operation

    $licht= ($schalter==1)? 'AN' : 'AUS';

    echo "<p> Das Licht ist $licht . </p>";

    //Var 2

    echo '<p> Das Licht ist '. (($schalter==1)? 'AN':'AUS').' .</p>';
    ?>

</body>
</html>