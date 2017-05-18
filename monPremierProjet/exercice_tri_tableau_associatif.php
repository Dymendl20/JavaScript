<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Premier projet en PHP</title>
    </head>
    <body>
        <?php
            $calories = array(" Miel" => "304", " Réglisse" => "377", " Sorbet" => " 90", " Sucre" => "396", " Cookies" => "464");

            ksort($calories);
            foreach($calories as $cle=>$valeur)
                echo $cle." = ".$valeur." cal.<br>";
            echo"<br><br>";
            asort($calories);
            foreach($calories as $cle=>$valeur)
                echo $cle." = ".$valeur." cal.<br>";
        ?>
    </body>
</html>