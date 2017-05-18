<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
        $dateEtHeure = "18 March 2017 17:45:38";

        $premierBlanc = strpos($dateEtHeure," ");
        $deuxiemeBlanc = strpos($dateEtHeure," ",$premierBlanc+1);
        $troisiemeBlanc = strpos($dateEtHeure," ",$deuxiemeBlanc+1);
        $premierDeuxPoints = strpos($dateEtHeure,":");
        $deuxiemeDeuxPoints = strpos($dateEtHeure,":",$premierDeuxPoints+1);

        echo "Jour = ".substr($dateEtHeure,0,$premierBlanc)."<br>";
        echo "Mois = ".substr($dateEtHeure,$premierBlanc+1, $deuxiemeBlanc-$premierBlanc)."<br>";
        echo "Année = ".substr($dateEtHeure,$deuxiemeBlanc+1, $troisiemeBlanc-$deuxiemeBlanc)."<br>";
        echo "Heure = ".substr($dateEtHeure,$troisiemeBlanc+1, $premierDeuxPoints-$troisiemeBlanc-1)."<br>";
        echo "Minutes = ".substr($dateEtHeure,$premierDeuxPoints+1, $deuxiemeDeuxPoints-$premierDeuxPoints-1)."<br>";
        echo "Seconde = ".substr($dateEtHeure,$deuxiemeDeuxPoints+1, strlen($dateEtHeure) - $deuxiemeDeuxPoints)."<br>";

        ?>

    </body>
</html>