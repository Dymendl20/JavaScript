<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        if (date("j") ==1)
            echo date("\c\'\\e\s\\t \l\\e j\\e\\r \j\o\u\r \d\u \m\o\i\s.");
        else
            echo date("\c\'\\e\s\\t \l\\e j\\é\m\\e \j\o\u\r \d\u \m\o\i\s.");
        ?>
    </body>
</html>