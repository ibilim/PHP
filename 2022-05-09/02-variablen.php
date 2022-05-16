<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variablen</title>
</head>
<body>
    <h1>Variablen</h1>
    <?php

    //variablen beginne mit einem $ zeichen
    // variablen namen beginnem gleich nach dem $ 
    // variablen namen dürfen nicht mit nummern beginnen

    //Deklaration (Bekanntgabe) und Initialisierung

    $eine_zahl= 5;  // Datentyp: integer (Ganzzahl)
    $eine_zeichenkette=' Hier kommt einen String.'; // Datentyp: String (Zeichenkette) 
    $keine_ahnung='5';

    /*Umganag mit zeichenketten*/
    // . ist, um zu verketten: Verkettungsoperator
    echo '<h2>' .$eine_zeichenkette.'</h2>'; 

    /* Double Quotes: PHP interpretiert sie und ersetzt durch ihren Wert*/
    echo "<h2> $eine_zeichenkette </h2>";
    
    echo '<p> Das Ergebnis ist:'.$keine_ahnung + $eine_zahl. '</p>';

    echo '<p>' .gettype($eine_zahl).'<br>';

    echo gettype($eine_zeichenkette ) .'<br>';
    echo gettype($keine_ahnung).'<br>';
    echo gettype($keine_ahnung+ $eine_zahl) . '</p>';

    //automatische Typkonvertierung

    $keine_ahnung=10.5; 
    echo '<p style="font-size:24px;">' .gettype($keine_ahnung). '</p>';

    /* === Rechnen
    ============================================================================================= */

    $a=2.4;
    $b='3 Tassen Kaffee';
    $c='2.5';

    $erg=$a*$c;
    echo "<p> $a mal $c ist gleich $erg.</p>";

    $preis=$eine_zahl * $b;
    echo "<p>$b kosten $preis €. </p>";

    /* === Inkrement und dekrement
    ============================================================================================= */

    //1. Pre-Inkrement

    $a=39;
    $b=2;

    echo "<p> a=$a, b=$b </p>";

    ++$a; // --> $a+1
    echo "<p> a=$a, b=$b </p>";

    $erg=++$a+$b;

    echo "<p> Das ergebnis von $a + $b ist <b>$erg</b> .</p> ";

    /*Was macht PHP
    1. 40 + 1  =41 
    2. 41 + 2    =43*/

    // 2. Post -Inkrement
    $a=39;
    $erg=$a++ + $b;
    echo "<p> Das ergebnis von $a + $b ist <b>$erg</b> .</p> ";
    /*Was macht PHP 
    
    1. 39+2=41 ($a + $b)
    2. Das ergebnis (41) wird der Variablen $erg zugewiesen
    3. Inkrement wird durchgeführt (39+1=40) */

    /* === Abgekürzte Mathematische Operationen
    ============================================================================================= */

    //Beispiel: Adition
    
    $a  =10;
    $a *=5;
    echo ' <p> =======   <br>
    $a=10;<br>
    $a *=5;<br>
    =======   </p>';
    echo "<p>Der wert von a ist $a . </p> ";

    /* === Datentyp explicit konvertieren
    ============================================================================================= */


    $z1 = '25.8';
    $z2 = '17';

    $z3= (int) $z2;
    $z4=(double) $z1;
    $type=gettype($z3);
    $erg= $z3+$z4;
    echo "<p> Das Ergebnis von $z3+$z4 =$erg </p>";

    $z5= (int) $z1;
    $z6=(double) $z2;
    $erg= $z5+$z6;
    echo "<p> Das Ergebnis von $z5+$z6 =$erg </p>";

    
    ?>
</body>
</html>