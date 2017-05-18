<?php
function affiche($a){
    echo "<blockquote>";
    foreach($a as $cle=>$valeur) {
        echo $cle." : ";
        if (is_array($valeur))
            affiche($valeur);
        else
            echo $valeur."<br>";
    }
    echo "</blockquote>";
}

$chiffres = array("Romain" => array("un"=>"I", "deux"=>"II", "trois"=>"III", "quatre"=>"IV", "cinq"=>"V"),
    "Arabe"  => array("un"=>"1", "deux"=>"2", "trois"=>"3", "quatre"=>"4", "cinq"=>"5"));
affiche($chiffres);
?>