<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Übung5-seite93</title>
</head>
<body>
    <h1>Sportfest: Startzeiten und Veranstaltungen</h1>

    <?php 
    $sport=array(
        '09.30 Uhr'=> array(
            'Disziplin'=>'Diskuswurf', 
            'Ort'=>'Nebenplatz',
            'Bemerkung'=>' Jugnedmeisterschaften'),
        '10:00 Uhr'=> array(
            'Disziplin'=>'5-km-Lauf', 
            'Ort'=>'Stadion-Laufbahn',
            'Bemerkung'=>'Offener lauf'),
        '11:00 Uhr'=> array(
            'Disziplin'=>'Halbmarathon', 
            'Ort'=>'Waldgebiet',
            'Bemerkung'=>' Teilnahme ab 18 Jahren'),
        '12:00 Uhr'=> array(
            'Disziplin'=>'Stacbhochsprung', 
            'Ort'=>'Stadion-Stacbhochsprunganlagen',
            'Bemerkung'=>' Nur Frauen')
    );


    
    ?>
    <table style="border:1px solid gray; box-shadow:red 2px solid;;">
        <tr>
            <th style="border:1px solid gray;">Begin</th>
            <th style="border:1px solid gray;">Disziplin</th>
            <th style="border:1px solid gray;">Ort</th>
            <th style="border:1px solid gray;">Bemerkung</th>
        </tr>

        <?php foreach($sport as $time=>$details): ?>
        
            <tr>
                <td style="border:1px solid gray;"><?php echo $time; ?></td>
            <?php foreach($details as $info): ?>

                <td style="border:1px solid gray;"><?php echo $info; ?></td>
                
            
            <?php endforeach; ?>

            </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>