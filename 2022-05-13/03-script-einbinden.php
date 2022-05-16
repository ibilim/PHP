<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>externes Script einbinden</title>
</head>
<body>
    <h1>Externes Script einbinden</h1>
    <?php 
    
    /* Zum einbinden keent PH vier Befehle

     *include
     *require
     -----
     *include_once
     *require_once 
    
    */
    #include 'includes/nicht-vorhanden.php'; //gibt eine warning aus

    #require 'includes/nicht-vorhanden.php'; //gibt eine Fatal error aus

    require_once '03-functions.inc.php';

   

    

    echo gib_mir('Duck','Donald',75);
  

    include '03-irgendwas.php';
    include '03-irgendwas.php';
    include '03-irgendwas.php';
    include '03-irgendwas.php';

    /*Parameter- Reiheinfolge kann man verändert werden*/

    echo gib_mir(alter:41, vorname:'Kayl',nachname:'xy');
    ?>
</body>
</html>