<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Food</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $meal = array(
                "Kebab roll" => "GOD","
                Kebab pizza" => "GOD",
                "Adana Kebab" => "GOD",
                "Gorme Sabzi" => "GOD",
                "Lasagne" => "Great",
                "Pasta alfredo" => "Great",
                "Pizza" => "Great",
                "Tacos" => "Great",
                "Hamburger" => "Good",
                "Pasta bolognes" => "Good",
                "Pasta carbonada" => "Good",
                "Chicken Teriaky with rice" => "Good",
                "Salmon" => "Ok",
                "ur mom" => "Mediocre",
                ) ;
                foreach ($meal as $food => $tier) {
                    echo("<tr>");
                    echo("<td>$food</td>");
                    echo("<td>$tier</td>");
                    echo("<tr>");
                }
            ?>
        </tbody>

    </table>
</body>
</html>