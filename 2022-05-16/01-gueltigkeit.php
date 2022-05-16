<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gültigkeitsbereiche von Variablen (Namespace)</title>
</head>
<body>
    <h1>Gültigkeitsbereiche von Variablen (Namespace)</h1>

    <?php 
    
    $ausgabe='Das ist ein Brot';

    function tue_etwas($n){
        global $ausgabe;

        echo '<pre>', var_dump( $ausgabe ), '</pre>';
        $ausgabe='Das ist ein Brett';

        $innen_variable='von innen';
        
        return $innen_variable;
    }
    
    tue_etwas(0);
    echo '<pre>', var_dump( $ausgabe ), '</pre>';
    
    echo tue_etwas($ausgabe);
    ?>
</body>
</html>