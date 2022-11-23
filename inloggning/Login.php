<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Index.html">fel besällning</a>
    <?php
    $Användarnamn = "Kebabmannen";
    $Lösen = "Adana";
    if ($_POST["Användarnamn"] == $Användarnamn && $_POST["lösenord"] == $Lösen)
    {
        echo("Hej Kebabmannen");
    } else 
    {
        echo("Fel Användarnamn eller Lösenord.");
    }
    ?>
</body>
</html>