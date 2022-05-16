<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konstanten</title>
</head>
<body>
    <h2>Konstanten</h2>

    <?php 
    /* === Konstanten definioeren und initialisieren
    ============================================================================================= */

    //1. Standard-Variante  
    define('MWSt',0.19);
    
    echo '<p>Die Mehrsteuer in Deutsclnad beträgt zurzeit '.(MWSt*100). ' %.</p>';

    define('MWSt',0.22);

    //2. Variante 
    const PI=3.1415;  // Das funktioniert num im Top-level-Scope
    ?>
</body>
</html>