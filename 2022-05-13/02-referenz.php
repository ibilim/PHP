<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter übergabe per Referenz</title>
</head>
<body>
    <h1>Parameter übergabe per Referenz</h1>


    <?php 
    
    function quadrat($zahl){
        
        echo "Das quadrat von $zahl ist : ";
        $zahl *=$zahl;
        echo "$zahl.</p>";
    
    }
    
    function quadrat_ref(&$zahl){
        
        echo "Das quadrat von $zahl ist : ";
        $zahl *=$zahl;
        echo "$zahl.</p>";
    
    }

    $wert=3;

    quadrat($wert);
    
    echo "<p>Der Ausgangwert von \$wert ist: <b> $wert </b> </p>";

    echo '<h2>call-by-value (standardverhalten)</h2>';

    for($i=1;$i<4;$i++){
        echo quadrat($wert);
    } 
    echo "</p>Der Wert von \$wert nach Call-by-reference : <b> $wert </b> </p>";

    echo '<h2>call-by-reference </h2>';
    for($i=1;$i<4;$i++){
        echo quadrat_ref($wert);
    }

    echo "</p>Der Wert von \$wert nach Call-by-reference : <b> $wert </b> </p>";
    ?>

</body>
</html>