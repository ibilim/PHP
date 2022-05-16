<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung Formular- Elemente</title>
</head>
<body>
    <h1>Auswertung Formular- Elemente</h1>

    <?php 
    
    //isset() 

    if(isset($_POST['e-mail'])){
        //Hier Fromularauswertung durchführen


        //Prüfe, ob die mail-addresse leer ist 
        if(empty(trim($_POST['e-mail']))){
            echo '<p>Mail ist leer.</p>';
        } else {
            echo '<p>Mail-Adresse: '.$_POST['e-mail'].'</p>';
        }

        if ($_POST['eissorte']=='-1'){
            echo '<p>Bitte eissorte wählen !</p>';
        } else {
            echo '<p>Eissorte :'.$_POST['eissorte'].'</p>';
        }

        //Ausgabe der Nachricht
        echo '<p>Ihre Nachricht:  <br>'.nl2br($_POST['memo']).'</p>';
    } else {
        echo '<p> Diese seite wurde nicht durch ein Formular aufgerufen. Bitte fülle zunächst das <a href="02-form-elemente.html"> Formular </a> aus! </p>';
    }
    echo '<pre>', print_r( $_POST), '</pre>';
    
    ?>
</body>
</html>