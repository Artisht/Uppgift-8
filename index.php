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
    <div> första uppgift <br>
        <?php

        for($i = 0; $i < 100; $i++){
            echo"$i<br>";
        }
        ?>

        <br>
    </div>
    <div> Andra uppgift <br>
        <?php

        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10; $j ++){
                echo"$i$j<br>";
            }
        }
        ?>
    </div>
    <div> Tredje uppgift <br>
        <?php

        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < $i; $j++){
                echo"*";
            }
            echo "<br>";
        }
        ?>
    </div>
    <div> Fjärde uppgiften <br>
        <?php
            for($i = 0; $i < 10; $i++){
                for($j = 0; $j < $i; $j++){
                    echo"*";
                }                  
                echo"<br>";
            }
            for($i = 10; $i > 0; $i--){
                for($j = 0; $j < $i; $j++){
                    echo"*";
                }                  
                echo"<br>";
            }
        ?>

    </div>
    <div> Femte uppgiften
        <?php
        for($i = 0; $i < 8; $i ++){
            echo"<div class='row'>";
            for($j = 0; $j < 8; $j++){
                $color;
                if($i % 2 == 0 and $j % 2 != 0
                or
                $i % 2 != 0 and $j % 2 == 0){
                    $color = "white";
                }
                else{
                    $color = "black";
                }

                echo"<div class='square $color'> </div>";
            }
            echo"</div>";
        }
        ?>

    </div>
</body>
</html>