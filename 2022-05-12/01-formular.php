<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    <h1>Formular</h1>
    <p>Bitte füllen Sie die folgenden felder aus!</p>
    <!--für normale formular es ist ehpfohlen, post zu nutzen-->  
    <form action="01-formular-auswertung.php" method="post">

        <p>Vorname: <input type="text" name="vorname" ></p>
        <p>Nachname: <input type="text" name="nachname" ></p>
        <p>E-mail: <input type="email" name="e-mail" ></p>

        <p><input type="submit" value="Absenden"></p>
    </form>

</body>
</html>