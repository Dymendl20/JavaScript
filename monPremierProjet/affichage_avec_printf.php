<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
            $entier = 125;
            $flottant = 12.45;
            $chaine = "Ceci est une chaine.";

            printf("125 affiché en binaire: %b<br>",$entier);
            printf("125 interprété comme un code ASCII : %b<br>",$entier);
            printf("125 affiché en octal : %b<br>",$entier);
            printf("125 affiché en hexadécimal : %b<br>",$entier);
            printf("12.45 affiché en notation scientifique : %b<br>",$flottant);
            printf("12.45 affiché en nombre à virgule flottante : %b<br>",$flottant);
        ?>

    </body>
</html>