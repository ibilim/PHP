<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular-Auswertung</title>
</head>
<body>
    <h1>Formular Auswertung</h1>
    <p>Folgende Daten wurden übermittelt</p>

    <?php 

    foreach ($_POST as $ids=>$values) {
        echo '<p>'.$ids.' : '.$values.'</p>';
    }

    echo '<pre>', var_dump( $_POST ), '</pre>';
    ?>
</body>
</html>