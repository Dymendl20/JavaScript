<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
        $ch = "Cette   chaine contient   un   peu   trop d'espaces, mais  preg_replace   va la simplifier !";

        $ch2 = preg_replace("# +#"," ",$ch);
        echo "<pre>";
        echo "AVANT : ".$ch."<br><br>";
        echo "APRES : ".$ch2;
        echo "</pre>";

        ?>
    </body>
</html>