<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match (neue seit PHP 8)</title>
</head>
<body>
    <h1>Match</h1>

    <?php 
    
    $status=400;

    echo "<p>Server-Status: $status </p> ";

    $erg= match ($status){
        200,300 => 'Okay',
        400 => 'Datei nicht gefunden',
        500 => 'Server-Fehler',
        default => 'Ungültiger Status-Code'
    };

    echo "<p> Server-Status: $status ($erg) </p>";
    
    ?>
</body>
</html>