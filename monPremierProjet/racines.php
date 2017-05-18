<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
            function racines($a, $b, $c){
                echo "Recherche des solutions de l'équation $a x² + $b x + $c<br>";
                $delta = $b*$b - (4 * $a * $c);
                if ($delta < 0)
                    echo "Cette équation n'a pas de solution.";
                if ($delta == 0)
                    echo "Cette équation a une racine carrée double égale à ".-$b/(2*$a);
                if($delta > 0){
                    $racine1 = (-$b - sqrt($delta))/(2*$a);
                    $racine2 = (-$b + sqrt($delta))/(2*$a);
                    echo "Cette équation a deux racines : $racine1 et $racine2";
                }
            }
            racines(1,2,3);
        ?>
    </body>
</html>