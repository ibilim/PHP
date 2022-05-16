<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung3:seite 45</title>
</head>
<body>

<h1>Variablen, Operatoren</h1>
    <?php 
    
    $tisch='Schreibtisch';
    $stuhl='Bürostuhl';
    $lampe='Lampe';
    $pctisch='Computertisch';
    $preis_tisch= 1999.00;
    $preis_stuhl=589.00;
    $preis_lampe=29.00;
    $preis_pctisch=999.00;
    $gesamt_preis=$preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
    define('MWSt', 0.19);
    const  GELD=' Euro';
    echo '<p> Netto- Gesamtpreis der eingekauften Artikel:'.$gesamt_preis.' Euro. </p>';

    echo '<p> Brutto- Gesamtpreis der eingekauften Artikel:'.$gesamt_preis+$gesamt_preis*MWSt. ' Euro. </p>';

    echo '<hr>';
    echo '<p>  Brutto- Preis <b>'.$tisch .'</b>: '.$preis_tisch+$preis_tisch*MWSt.GELD. ' </p>';

    echo '<p>  Brutto- Preis <b>'.$stuhl .'</b>: '.$preis_stuhl+$preis_stuhl*MWSt.GELD. ' </p>';

    echo '<p>  Brutto- Preis <b>'.$lampe .'</b>: '.$preis_lampe+$preis_lampe*MWSt.GELD. ' </p>';

    echo '<p>  Brutto- Preis <b>'.$pctisch .'</b>: '.$preis_pctisch+$preis_pctisch*MWSt.GELD. ' </p>';
    ?>
    
</body>
</html>