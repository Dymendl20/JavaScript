<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Premier projet en PHP</title>
    </head>
    <body>
        <?php
        function afficheImpair($data){

            return ($data & 1);

        }

        $tableau = array("un"=>1, "deux"=>2, "trois"=>3, "quatre"=>4, "cinq"=>5);

        $tableau_filtre = array_filter($tableau,"afficheImpair");

        foreach($tableau_filtre as $cle=>$valeur)

            echo $cle."<br>";
        ?>
    </body>
</html>