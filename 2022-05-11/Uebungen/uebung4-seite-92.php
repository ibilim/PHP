<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uebung4 -Seite 92</title>
</head>
<body>
    <h1>Autokennzeichen und dazugehörige Städte</h1>

    <?php 
    
    $plakat=array(
        'HH'=> 'Hamburg', 'B' =>'Berlin', 'S'  =>'Stuttgart'
    );

    echo '<pre>', var_dump( $plakat ), '</pre>';
    
    $plakat['F']= 'Frankfurt';
    $plakat['HB']= 'Bremen';

    unset($plakat['HB']);

    $plakat['F']='Frankfurt am Main';
    ?>

    <table style="border: 1px;">
        <tr>
            <th>Kennzeichen</th>
            <th>Stadt</th>
        </tr>
        <?php foreach($plakat as $plaka=>$stadt): ?>
            <tr>
                <td><?php echo $plaka; ?></td>
                <td><?php echo $stadt ?></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>