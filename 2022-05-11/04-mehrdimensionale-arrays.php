<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehrdimensionale-Arrays</title>
</head>
<body>
    <h1>Mehrdimensionale-Arrays</h1>

    <h2>Mehrdimentionale indizierte Arrays</h2>

    <?php 
    
    $personen= array(

        array(
            'Manfrad', 'deutsch',53, 'männlich'
        ),
        array(
            'Cindy', 'englisch',23,'weiblich'
        ),
        array(
            'Carlos', 'spanisch',34,'diverse'
        )
    );
    
    //Ausgabe

    echo '<p>'
        .$personen[0][0].' ist '
        .$personen[0][2].' Jahre alt, spricht '
        .$personen[0][1]. ' und ist '
        .$personen[0][3].'<br>'
        .$personen[1][0].' ist '
        .$personen[1][2].' Jahre alt, spricht '
        .$personen[1][1]. ' und ist '
        .$personen[1][3].'</p>';
    
    //Ändern

    $personen[2][2]=36;

    echo '<pre>', var_dump( $personen ), '</pre>';

    //Hinzufügun

    $personen[3]=array(
        'Ursula','schwedisch',47,'weiblich'
    );

    echo '<pre>', var_dump( $personen ), '</pre>';
    ?>

    <table style="border:1px solid gray;">
        <tr>
            <th style="border:1px solid gray;">name</th>
            <th style="border:1px solid gray;">sprache</th>
            <th style="border:1px solid gray;">alter</th>
            <th style="border:1px solid gray;">geschlecht</th>
        </tr>

        <?php foreach($personen as $person):?>
            <tr> 
                <?php foreach($person as $eigenschaft): ?>
                    <td style="border:1px solid gray;"> <?php echo  $eigenschaft; ?>  </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>


    

    <h3>Liste-Funktion</h3>

    <table>
        <tr>
            <th>Name</th>
            <th>Geschlecht</th>
            <th>Sprache</th>
            <th>Alter</th>
        </tr>
        <!--Schleife für das Außere Array-->
        <?php foreach ($personen as $person): ?>
            <tr>
                <!--list()-Funktion für das innere Array (spalten)-->

                <?php list($pname,$sprache, $alter, $geschlecht )=$person; ?>

                <td><?php echo $pname; ?></td>
                <td><?php echo $geschlecht; ?></td>
                <td><?php echo $sprache; ?></td>
                <td><?php echo $alter; ?></td>
            </tr>
        <?php  endforeach; ?>
    </table>
    
    <h2>mehrdimensionale Arrays</h2>


    <?php
    $laender = array(
            'Spanien' => array(
                'Hauptstadt' => 'Madrid',
                'Sprache' => 'spanisch',
                'Waehrung' => 'Euro',
                'Flaeche' => '504.645 qkm'
            ),
            'England' => array(
                'Hauptstadt' => 'London',
                'Sprache' => 'englisch',
                'Waehrung' => 'Pfund Sterling',
                'Flaeche' => '130.395 qkm'
            ),
            'Portugal' => array(
                'Hauptstadt' => 'Lissabon',
                'Sprache' => 'portugiesisch',
                'Waehrung' => 'Euro',
                'Flaeche' => '92.345 qkm'
            )
        );

        //zugriff

        $land='England';

        echo '<p>Angaben zu '.$land .'<br>';

        echo 'Haupstadt : '.$laender[$land]['Hauptstadt'] .'<br>';

        echo 'Sprache : '.$laender[$land]['Sprache'] .'<br>';

        echo 'Waehrung : '.$laender[$land]['Waehrung'] .'<br>';

        echo 'Flaeche : '.$laender[$land]['Flaeche'] .'</p>';
    ?>

    <table style="border:1px">
        <tr>
            <th >Land</th>
            <th >Haupstadt</th>
            <th >Sprache</th>
            <th >Waehrung</th>
            <th >Flaeche</th>
        </tr>
        <?php foreach($laender as $land=>$infos): ?>

            <tr>
                <td > <?php echo $land; ?></td>
                <?php foreach($infos as $eigenschaft ): ?>
                    <td> <?php echo $eigenschaft; ?></td>
                <?php endforeach; ?>
            </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>