<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionen</title>
</head>
<body>
    <h1>Funnktionen</h1>
    
    <?php 
    /* Eine Funktion wird definiert...*/
    function hallo(){
        echo '<p>Hallo </p>';
    }

    function hallo2($ausgabe){
        return "<p> Hallo $ausgabe </p>";
    }
    /*...und hier aufgerufen*/
    hallo();

    $msg=hallo2('from message varibale');
    echo hallo2(' Leute');
    
    echo $msg;
    echo hallo2('ibrahim', 'extra'); // zweiter parameter wird nicht funktioniert 

    /*optionale parameter*/
     // gehören immer ans Ende der Parameter- Kette

     function gesamtpreis($anzahl, $preis=56, $waehrung='Euro'){
         $erg=$anzahl*$preis;
         return "<p>Ihr Einkauf kostet $erg $waehrung . </p>";
     }

     echo gesamtpreis(21,11.2);
     echo gesamtpreis(21,11.2,'Dollar');
     echo gesamtpreis(20);


     /*beliebig viele Parameter*/
     function viele_parameter($a){
        $args=func_get_args(); 
        $num_args=func_num_args();
        echo "</p>Das erste parameter ist $a.</p>";
        echo '<pre>', print_r( $args ), '</pre>';
        echo "</p>Das erste parameter ist $args[1].</p>";

        echo "</p>Es wurden $num_args  Parameter eingegeben.</p>";
        
     }
     viele_parameter(5,'heeesay',12.4,true);


     /*Varidische parameter*/
     function variadisch(...$params){
         echo '<pre>', print_r( $params ), '</pre>';
     }

     variadisch('Butter','Mehl', 'Milch','Eier',true,6.8);

     function mitarbeiter(string $m_name,string|array $m_vorname,string $beruf,int $ater) :string {

        if(is_array($m_vorname)){
            $vn=implode(', ',$m_vorname);
        }else{
            $vn=$m_vorname;
        }
        return "<p>$vn $m_name ist $beruf und $ater Jahre alt.</p>";
     };

     //Normaler aufruf

     echo mitarbeiter('Ibrahim', 'Bilim','programci',36);


     //variadicher aufruf
     $m_array=array(
         'Duck',
         array('Donald', 'Fauntleroy'),
         'Ente',
         '75'
     );

     echo mitarbeiter(...$m_array);
    ?>
</body>
</html>