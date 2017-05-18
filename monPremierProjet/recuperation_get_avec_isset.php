<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        if (isset($_GET["param1"]))
        echo "La donnée param1 a pour valeur ".htmlspecialchars(
            $_GET["param1"])."<br>";
        if (isset($_GET["param2"]))
        echo "La donnée param2 a pour valeur ".htmlspecialchars(
            $_GET["param2"])."<br>";
        if (!isset($_GET["param1"]) && !isset($_GET["param2"]))
            echo "Aucune donnée n'a été transmise à ce script PHP";
        ?>
    </body>
</html>