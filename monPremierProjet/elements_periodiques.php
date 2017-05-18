<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier projet en PHP</title>
    </head>
    <body>
        <?php
            $elements = array("H"=>"Hydrogène", "He"=>"Helium", "Li"=>"Lythium", "Be"=>"Beryllium", "B"=>"Bore", "C"=>"Carbonne", "N"=>"Azote", "O"=>"Oxygène", "F"=>"Fluor", "Ne"=>"Néon");
            echo ("<table border>");
            echo ("<tr><th>Symbole</th><th>Elément</th></tr>");
            foreach ($elements as $cle=>$valeur)
                echo ("<tr><td>".$cle."</td><td>$valeur</td></tr>");
            echo("</table>");
        ?>
    </body>
</html>