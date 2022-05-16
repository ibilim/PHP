<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung 2-seite110</title>
</head>
<body>
    <h1>Bewerbung, Neswletter oder Infomaterial</h1>

    <p>Bitte nennen Sie uns Ihr Anliegen: </p>
    <?php 

    $vornam='';
    $nam='';
    $email='';

    if(isset($_GET['bewerben']) OR isset($_GET['abonnieren']) OR isset($_GET['anfordern']) ){
        $vornam=$_GET['vorname'];
        $nam=$_GET['nachname'];
        $email=$_GET['e-mail'];
    }
    ?>

    <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="get">

    <p><input type="radio" name="anrede" value="Herr"> Herr 
        <input type="radio" name="anrede" value="Frau" checked>Frau</p>

    <p>Vorname : <input type="text" name="vorname" value="<?php echo $vornam; ?>"  </p>
    <p>Nachname : <input type="text" name="nachname" value="<?php echo $nam; ?>"  </p>
    <p>Mailadresse: <input type="email" name="e-mail" value="<?php echo $email; ?>"  </p>

    <p></p>
    <input type="submit" value="bei Ihnen bewerben" name="bewerben">
    <input type="submit" value="Newsletter abonnieren" name="abonnieren">
    <input type="submit" value="Infomaterial anfordern" name="anfordern">
    </form>
    
    <?php 

    $message='';
    
    if(isset($_GET['bewerben']) OR isset($_GET['abonnieren']) OR isset($_GET['anfordern']) ){

        if (empty(trim($_GET['vorname']))){
            echo '<p>Vornmame ist leer. Bitte geben Sie Ihre Name ein! </p>';
            
        }
        elseif (empty(trim($_GET['nachname']))){
            echo '<p>Nachnmame ist leer. Bitte geben Sie Ihre Nachname ein! </p>';
        }
        elseif (empty(trim($_GET['e-mail']))){
            echo '<p>Nachnmame ist leer. Bitte geben Sie Ihr e-mail ein! </p>';
        }
        else{
            if(isset($_GET['bewerben'])) {$message='Bewerbungsanfrage . Unsere Personalabteilung';}
            elseif(isset($_GET['abonnieren'])) {$message='Newslettersanfrage . Unsere Marketingabteilung';}
            elseif(isset($_GET['anfordern'])) {$message='Infosanfrage . Unsere Kundenabteilung';}
            
        echo '<p>Herzlichen Dank,'. $_GET['anrede'].' '. $_GET['vorname'].', für Ihre '. $message. ' <br> 
        wird per Mail an Ihre Adresse: '. $_GET['e-mail']. '-Kontakt zu Ihnen aufnehmen. </p>';
        }   
    }
    ?>
    
</body>
</html>