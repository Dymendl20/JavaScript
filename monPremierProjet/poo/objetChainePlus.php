<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8" />
        <title>Formulaire d'accès à la page protégée</title>
    </head>
    <body>
        <?php
            include_once("chaineplus.php");
            $st = new chainePlus("Programmation orientée objet en PHP");
            echo "Gras : ".$st->gras();
            echo "Italique : ".$st->italique();
            echo "Souligné : ".$st->souligne();
            echo "Majuscules : ".$st->majuscules();
        ?>
    </body>
</html>