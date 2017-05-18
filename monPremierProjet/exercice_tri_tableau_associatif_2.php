<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Premier projet en PHP</title>
    </head>
    <body>
        <?php
            function trier(&$a){
                ksort($a);
                foreach($a as $cle=>&$valeur) {
                    if (is_array($valeur))
                        trier($valeur);
                }
            }

            function afficher($a){
                echo "<blockquote>";
                foreach($a as $cle=>$valeur) {
                    echo $cle." : ";
                    if (is_array($valeur))
                        afficher($valeur);
                    else
                        echo $valeur."<br>";
                }
                echo "</blockquote>";
            }

                $chiffres = array("Romain" => array("un"=>"I", "deux"=>"II", "trois"=>"III", "quatre"=>"IV", "cinq"=>"V"),

                                  "Arabe"  => array("un"=>"1", "deux"=>"2", "trois"=>"3", "quatre"=>"4", "cinq"=>"5"));
                trier($chiffres);
                afficher($chiffres);
        ?>
    </body>
</html>