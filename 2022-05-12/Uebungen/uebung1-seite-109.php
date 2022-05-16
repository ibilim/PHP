<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uebung1-seite-109</title>
</head>
<body>
    <h1>Auswertung des Formulars</h1>

    
    <?php 
    
    if(isset($_POST['submit-form'])){

        if(empty(trim($_POST['nachricht']))){
            $_POST['nachricht']='keine';
        }

        $tv_sendungen='';
        foreach($_POST['TV-Sendungen'] as $sendungen=>$send){
            $tv_sendungen=$tv_sendungen.$send.', ';
        }
        echo '<p>Vielen Dank für die Teilnahmen an unserer Umfrage. Sie haben folgende Daten übermittelt</p>';
        echo  '<p> Vorname: '.$_POST['vorname'].'<br>
                Nachname: '.$_POST['nachname'].'<br>
                Ort: '.$_POST['wohnort'].'<br>
                Wohnung: '.$_POST['wohntype'].'<br>
                Belibte TV-Sendungen: '.rtrim($tv_sendungen,', ').'<br> 
                Nachricht: <i>'.$_POST['nachricht'].'</i>
                </p>';
    }
    
    
    ?> 
</body>
</html>