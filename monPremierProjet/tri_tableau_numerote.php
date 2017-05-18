<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Premier projet en PHP</title>
    </head>
    <body>
        <?php
            sort($tableau,SORT_NUMERIC|SORT_REGULAR|SORT_STRING);

            $prenoms = array("Jean", " Pierre", " Paul", " Michel", " Hélène", " Sandrine", " Christel", " Isabelle", " Evariste");

            sort($prenoms, SORT_STRING);
            foreach($prenoms as $element)
                echo $element."<br>";
        ?>
    </body>
</html>