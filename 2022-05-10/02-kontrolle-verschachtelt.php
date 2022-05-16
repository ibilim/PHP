<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verschachtelte Kontrolstrukturen</title>
</head>
<body>
    <h1>Verschachtelte Kontrolstrukturen</h1>

    <h2>Zahlungsweise(Erwitert)</h2>
    <?php 
    
    $zw='Rechnung'; // Rechnung, Vorkasse, Sofortüberweisung

    if ($zw=='Rechnung'){
        echo '<p> Zahlung per Rechnung, <br> bitte überweisen innerhalb von 10 Tagen. </p>';
    }elseif ($zw=='Vorkasse'){
        echo '<p> Zahlung per Vorkasse, <br> Nach Begleichung des rechnungsbetrages versenden wir die Ware. </p>';
    } elseif ($zw=='Sofortüberweisung') {
        echo '<p> Zahlung per Sofortüberweisung, <br> Ihre Ware wird sofort versendet.</p>';
    } else {
        echo ' <p> Bitte wählen Sie eine Zahlungsweise! </p>';
    }

    ?>

    <h2>Gepäck-Kategorie</h2>

    <?php 
    $g=45; //Gewicht in kg

    if($g<=20){
        echo  '<p>Kategorie S (bis 20 kg)</p>';
    } else {
        if($g<=40){
            echo '<p>Kategorie M (bis 40 kg)</p>';
        } else {
            if($g<=60){
                echo '<p>Kategorie L (bis 60 kg)</p>';
            } else{
                echo '<p>Kategorie XL (über 60 kg)</p>';
            }
        }
    }
    
    ?>
</body>
</html>