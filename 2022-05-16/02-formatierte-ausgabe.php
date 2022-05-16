<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatierete Ausgaben mit printf()</title>
</head>
<body>
    <h1>Formatierete Ausgaben mit <code>printf()</code></h1>
    
    <?php 
    
    printf('<p>Eine normale Ausgabe</p>');

    printf('<p>Ausgabe Typ b-binär:<b>%b</b>',10);
    printf('<p>Ausgabe Typ c-ASCII:<b>%c</b>',10);
    printf('<p>Ausgabe Typ d- ganzzahl:<d>%d</d>',10);
    printf('<p>Ausgabe Typ f:<b>%f</b>',10);
    printf('<p>Ausgabe Typ s:<b>%s</b>','hallo');
    printf('<p>Ausgabe Typ x:<b>%x</b>',10);

    ?>

    <h2> Führende Nullen</h2>

    <?php 
    
    $hrs=4;
    $min=5;

    printf('<p>Ausgabe der Uhrzeit: <b>%02d:%02d',$hrs,$min);
    printf('<p>Ausgabe der Uhrzeit: <b>%03d:%03d',$hrs,$min);

    ?>

    <h2>Zeichenketten auffüllen</h2>

    <?php 
    
    printf("<p>Ein aufgefüllter String: <b>%07s</b></p>", 'TH')
    
    ?>

    <h2>Formatierte Zahlenwerte</h2>
    <?php 
    
    $preise=array(22123.667,12.8,245,53.212454,.2);
    foreach($preise as $preis){
        printf('Unser Preis: %03.2f € <br>',$preis);
    }
    ?>

    <h2>Formatierte Zahlenwerte mit number_format()</h2>

    <?php 
    foreach ($preise as $preis){

        echo number_format($preis,2).'<br>';
    }
    
    ?>

</body>
</html>