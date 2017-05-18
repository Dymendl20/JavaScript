<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        $el = setlocale(LC_TIME, "FRA");
        setlocale(LC_TIME,$el);
        $d = strtotime("11/03/2015");
        echo strftime("La date 03/11/2015 mise en forme %A %#d %B %Y",$d);
        ?>
    </body>
</html>