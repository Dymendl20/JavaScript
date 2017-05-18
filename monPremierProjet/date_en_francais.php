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
        echo strftime("Le %#d %B %Y est un %A",strtotime("18/03/2017"));
        ?>
    </body>
</html>