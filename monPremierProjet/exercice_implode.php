<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier projet en PHP</title>
    </head>
    <body>
        <?php

            $legumes = array("Poireaux", "Betteraves", "Radis", "Concombre", "Salade");

            $chaine = implode("<br>",$legumes);
            echo $chaine;
        ?>
    </body>
</html>
