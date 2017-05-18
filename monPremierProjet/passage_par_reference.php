<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
            function ajouterRef($a){
                $a = $a . "texte à la fin.";
            }

            function ajouter($a){
                $a = $a . "texte à la fin.";
            }
                $chaine = "texte au début.";
                ajouter($chaine);
                echo $chaine."<br>";

                ajouterRef($chaine);
                echo $chaine."<br>";
        ?>

    </body>
</html>