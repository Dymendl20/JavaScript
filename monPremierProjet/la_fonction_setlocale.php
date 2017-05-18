<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        $el = setlocale(LC_TIME, "USA");
        echo "setlocale retourne ".$el."<br>";
        setlocale(LC_TIME,$el);
        echo strftime("Nous sommes le %A %#d %B %Y");
        ?>
    </body>
</html>