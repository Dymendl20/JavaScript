<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier projet en PHP</title>
    </head>
    <body>
        <?php
            $ch="Hydrogène, Hélium, Lythium, Beryllium, Bore, Carbone, Azote, Oxygène, Fluor, Néon";
            $tableau = explode(",", $ch);
            foreach($tableau as $element)
                echo ($element."<br>");

        ?>
    </body>
</html>
