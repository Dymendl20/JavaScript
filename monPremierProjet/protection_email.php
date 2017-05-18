<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
            function proteger($adr){
                $adresseCodee = "";
                for ($i = 0; $i<strlen($adr); $i++)
                    $adresseCodee .= "&#" .ord(substr($adr, $i, 1)) . ";";
                return $adresseCodee;
            }
            echo "<a href='" . proteger("mailto:admin@mediaform.com") .
                "'>Pour nous joindre, cliquez ici</a>";
    ?>
    
    </body>
</html>