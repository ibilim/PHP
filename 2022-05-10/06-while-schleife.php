<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While </title>
</head>
<body>
    <h1>While loops</h1>


    <?php 
    
    
    $z=$x=5;
    while($z<=10){
        echo "$z  <br>";

        $z++;
    }
    
    ?>


    <h2>do-while </h2>

    <?php 
    do {
        echo "$x <br>";
        $x++;
    } while($x<=4);


    ?>
</body>
</html>