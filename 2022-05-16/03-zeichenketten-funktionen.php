<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeichenketten Funktionen</title>
</head>
<body>
    <h1>Zeichenketten Funktionen</h1>

    <?php 
    
    $e_mail='Brigette.B@abc.com';

    echo "</p>Original-Zeichenkette <b>$e_mail</b></p>";

    /*Zeichenketten finden*/

    echo '<p>';


    echo 'suche nach B@ ergibt: <b>'.strstr($e_mail,'B@').'</b> <br>';
    echo 'suche nach B@ ergibt: <b>'.strstr($e_mail,'B@',true).'</b> <br>';
    echo 'suche nach b@ ergibt: <b>'.stristr($e_mail,'b@').'</b> <br>';


    echo '</p>';

    /*Einzelen Zeichenketten */


   
    echo '<p>';
    echo 'Suche nach i ergibt :<b>'.strchr($e_mail,'i').'</b> <br>';
    echo 'Suche nach i ergibt :<b>'.strrchr($e_mail,'i').'</b> <br>';

    echo '</p>';

    echo '<p>';
    
    echo 'Suche nach i ergibt :<b>'.str_contains($e_mail,'i').'</b> <br>';
    echo 'Suche nach z ergibt :<b>'.str_contains($e_mail,'z').'</b> <br>';
    echo 'Suche nach starts with  \'Bri\' ergibt :<b>'.str_starts_with($e_mail,'Bri').'</b> <br>';
    echo 'Suche nach ends with  \'org\' ergibt :<b>'.str_ends_with($e_mail,'org').'</b> <br>';

    echo '</p>';
   
    echo '<p>';

     /*Einzelne Zecihen - Position finden*/
     echo 'Suche nach i strpos ergibt :<b>'.strpos($e_mail,'i').'</b> <br>';
     echo 'Suche nach e strpos(-erste gefundene char) ergibt :<b>'.strpos($e_mail,'e').'</b> <br>';
     echo 'Suche nach e strpos(-erste gefundene char vom rechten seite angefangene Suche) ergibt :<b>'.strrpos($e_mail,'e').'</b> <br>';
     echo 'Suche nach b strpos(-erste gefundene char) ergibt :<b>'.stripos($e_mail,'b').'</b> <br>';
     echo 'Suche nach b strpos(-erste gefundene char vom rechten seite angefangene Suche) ergibt :<b>'.strripos($e_mail,'b').'</b> <br>';
    echo '</p>';

    echo '<p>';
    /*Begin der Suche*/
    echo 'Suche nach i  ergibt :<b>'.strpos($e_mail,'i',3).'</b> <br>';
    echo '</p>';

    echo '<p>';
    
    /*Teilstrings extrahieren*/

    $e_mail='meister.nadeloehr@wie-ist-meine-ip.de';
    echo "Die neue Original-Zeichenkette: <b>$e_mail</b> </p>";


    echo "Domain name:<b>" .substr($e_mail,strpos($e_mail,'@')+1)."</b> </p>";

    echo '</p>';

    echo '<p>';
    $addressen=array(
        'Breigette.B@abc.com',
        'meister.nadeloehr@wie-ist-meine-ip.de',
        'ben.a@gmx.de'
    );

    foreach($addressen as $address){
        echo "Domain name:<b>" .substr($address,strpos($address,'@')+1)."</b><br> ";
        /*Anzahl Ausgeben*/
        echo '=>Lenght von  '.$address.' als bytes ist :'.strlen($address).' <b> Bytes</b> <br>'; 
        /*Anzahl von gefundenen zeichenketten*/
        echo '=>Anzal von ei kommt in <b>'.substr_count($address,'ei').' -mal </b> vor <br> '; 
        // zeichenketen wiederholen
        echo '=>Wiederhole @ 4 mal :'.str_repeat('@',4).' <br>  ';

        //zeichenfolgen austauschen--  strtr()

        echo '=>Tausche e mit u : '.strtr($address,'e','u').'</p>';
    
    }
    
    /*Arrays und Zeichenketten*/
    $aus_csv='Elstar;Gala;Jonagold;Boskoop;Pinova';

    //Zeichenketten => Arrays

    $csv_array=explode(';',$aus_csv);

    echo '<pre>', var_dump( $csv_array ), '</pre>';

    $aus_array=implode(';',$csv_array);

    echo '<pre>', var_dump( $aus_array ), '</pre>';

    echo '</p>';
    ?>
</body>
</html>