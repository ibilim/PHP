<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indizierte Arrays</title>
</head>
<body>
    <h1>indizierte Arrays</h1>
    <?php 
    
    $steadte = array(
        'Erfurt', 'Jena','Frankfurt','Paris', 'London'
    );

    echo "<p> $steadte[0] </p>";

    //Kurzschreibweise 
    $laender=['Deutschland','Schweiz','Frankreich'];

    echo "<p> $laender[1] </p>";
    
    //Während der Entwicklungsphase: Ausgabe eines Arrays zu Testzwecken
    // mit print_r()

    echo '<pre>';
    print_r($steadte);

    echo '</pre>';

    // Oder 

    echo "<pre>". print_r( $steadte,true). "</pre>";

    

    // oder mit var_dump()
    echo "<pre>", var_dump( $laender,$steadte ), "</pre>";

    //Ein wert Einfügen

    $laender[]='Belgien';
    echo '<pre>', var_dump( $laender, $steadte ), '</pre>';

    // Elemnte Löschen von einem array

    unset($laender[1]);
    $laender[]='Portugal';
    $laender[1]='Österreich';
    echo '<pre>', var_dump( $laender ), '</pre>';

    //Elemente Ändern
    $laender[2]='Luxemburg';
    echo '<pre>', var_dump( $laender ), '</pre>';

    //Sortierung nach indizes

    ksort($laender);

    echo '<pre>', var_dump( $laender ), '</pre>';
    

    $laender[423]='Dänemark'; //theoretisch möglisch abe praktisch mach das nicht schön
    echo '<pre>', var_dump( $laender ), '</pre>';

    //länge des Arrays

    count($laender);
    echo '<p>Das Array Laender hat '.count($laender) .' Einträge</p>';

    //foreach
    echo '<p>';
    foreach ( $steadte as $stadt){
        echo "$stadt <br>";
    }

    echo '</p>';



    ?>
</body>
</html>