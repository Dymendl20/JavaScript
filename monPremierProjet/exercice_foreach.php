<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier projet en PHP</title>
    </head>
    <body>
        <?php
            $prenoms = array("John", "Vitaa", "Jazzy", "Bob", "Émilie", "Ceeseh", "BenjiStarr");
            echo ("<ul>");
            foreach($prenoms as $el)
                echo ("<li>".$el);
            echo ("</ul>");
        ?>
    </body>
</html>