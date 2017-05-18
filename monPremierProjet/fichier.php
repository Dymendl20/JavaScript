<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
    <?php
    if (isset($_FILES["fichierTexte"]) AND $_FILES["fichierTexte"
    ]["error"] == 0){
        if (($_FILES["fichierTexte"]["size"]<1000) AND ($_FILES[
            "fichierTexte"]["type"] == "text/plain")){
            $tmp_name = $_FILES["fichierTexte"]["tmp_name"];
            $name = $_FILES["fichierTexte"]["name"];
            move_uploaded_file($tmp_name, $name);
        }
        else
            echo "Le fichier spécifié n'est pas un fichier texte ou
            sa taille dépasse les 10000 octets<br>";
    }
    ?>
    </body>
</html>