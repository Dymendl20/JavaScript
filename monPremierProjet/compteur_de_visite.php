<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Compteur de visite</title>
    </head>
    <body>
        <?php
            $handle=fopen("compteur.txt","r+");
            $visites = fgets($handle);
            echo "Cette page a été visitée $visites fois.";
            $visites++;
            fseek($handle, 0);
            fputs($handle, $visites);
            fclose($handle);
        ?>
    </body>
</html>