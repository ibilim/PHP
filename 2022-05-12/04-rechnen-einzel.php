<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnen</title>
</head>
<body>
    <h1>Rechenen</h1>

    <?php 
    $zahl1='';
    $zahl2='';
    if(isset($_GET['plus']) OR isset($_GET['mal'])){
        $erg=0;
        $op='';
        $zahl1=$_GET['zahl1'];
        $zahl2=$_GET['zahl2'];

        if(isset($_GET['plus'])){
            $erg= (double)$zahl1+ (double)$zahl2;
            $op='Addition';
            
        }elseif(isset($_GET['mal'])){
            $erg= (double)$zahl1* (double)$zahl2;
            $op='Multiplikation';
        }else{
            echo '<p> Diese seite wurde nicht durch ein Formular aufgerufen. Bitte fülle zunächst das <a href="03-rechnen.html"> Formular </a> aus! </p>';
        }
        echo '<p> Das Ergebnis der '.$op.' ist: '.$erg.' ('.gettype($erg).')</p>';

    

    }
    
    ?>
    
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="get">

        <p>Erste Zahl: <input type="text" name="zahl1" step="any" value="<?php echo $zahl1; ?>" ></p>
        <p>Zweite Zahl: <input type="text" name="zahl2" step="any" value="<?php echo $zahl2; ?>" ></p>

        <p><input type="submit" value="+" name="plus">
            <input type="submit" value="x" name="mal">
        </p>
    </form>


</body>
</html>