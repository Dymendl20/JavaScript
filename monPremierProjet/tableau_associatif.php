<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier projet en PHP</title>
    </head>
    <body>
        <?php
            $calories = array("Pain au choco" => "410",
                              "Miel" => "304",
                              "Réglisse" => "377",
                              "Sorbet" => "90",
                              "Sucre" => "396",
                              "Cookies" => "464");

            echo $calories["Sorbet"]."<br>";

            foreach($calories as $cle => $valeur)
                echo $cle." = ".$valeur.",";

        ?>
    </body>
</html>