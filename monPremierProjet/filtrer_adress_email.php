<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Premier projet en PHP</title>
    </head>
    <body>
        <?php
            function filtreEmail($data){
            $arobas = strpos($data, "@");
            $dernierPoint = strrpos($data,".");
            if (($arobas!=false) &&
                ($dernierPoint!=false) &&
                ($dernierPoint - $arobas >= 3))
                return true;
            else
                return false;
            }
            $adresses = array("nom.com", "nom@fai.com", "nom@fai", "nom.prenom@fai.com", "nom@fai.fr", "nom@t.fr");
            $adressesValides = array_filter($adresses, "filtreEmail");
            foreach($adressesValides as $element)
                echo $element."<br>";
        ?>
    </body>
</html>