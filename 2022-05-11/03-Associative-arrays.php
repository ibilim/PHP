<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative-Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>

    <?php 
    
    $hauptstaedte=array(
        'Schweiz'=> 'Bern', 
        'Frankreich' => 'Paris',
        'Spanien' => 'Madrid'
    );

    //Array-Werte ausgeben

    echo "<p> {$hauptstaedte['Frankreich']} </p>";
    
    //Hinzufügen
    $hauptstaedte['Polen']='Warschau';

    echo '<pre>', var_dump( $hauptstaedte ), '</pre>';

    //Löschen

    unset($hauptstaedte['Spanien']);

    echo '<pre>', var_dump( $hauptstaedte ), '</pre>';

    ?>

    <table style="border:1px solid gray;">
        <tr>
            <th>Land</th>
            <th>Haupstadt</th>
        </tr>
        <?php 
        //Foreach ($array as $key => $value)
        foreach( $hauptstaedte as $land=>$stadt){
            echo '<tr>';
            echo "<td> $land </td>";
            echo "<td> $stadt </td>";
            echo '</tr>';

        }
        
        ?>
    </table>
</body>
</html>