<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnen Auswertung</title>
</head>
<body>
    <h1>Rechnen Auswertung</h1>

    <?php 
    
    $erg=0.0;
    $op='';
    if(($_GET['plus'])=='+'){
        $erg= (double)$_GET['zahl1']+ (double)$_GET['zahl2'];
        $op='Addition';
        
    }elseif(isset($_GET['mal'])){
        $erg= (double)$_GET['zahl1']* (double)$_GET['zahl2'];
        $op='Multiplikation';
    }else{
        echo '<p> Diese seite wurde nicht durch ein Formular aufgerufen. Bitte fülle zunächst das <a href="03-rechnen.html"> Formular </a> aus! </p>';
    }
    echo '<p> Das Ergebnis der '.$op.' ist: '.$erg.' ('.gettype($erg).')</p>';

    echo '<pre>', print_r($_GET), '</pre>';
    
    ?>

</body>
</html>