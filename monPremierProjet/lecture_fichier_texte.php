<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
            $handle=fopen("data.txt","r");
            while (!feof($handle))
            echo fgets($handle)."<br>";
            fclose($handle);
        ?>
    </body>
</html>