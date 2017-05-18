<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Gestion des exceptions avec bloc finally</title>
    </head>
    <body>
        <?php
            function inverse($nombre){
                if ($nombre == 0)
                    throw new exception("division par zéro");
                else
                    echo "1/$nombre = ".(1/$nombre)."<br>";
            }
            echo inverse(12);
            try{
                echo inverse(0);
            }
            catch(exception $e){
                echo "Une exception a été générée : ".$e->getMessage()."<br>";
            }
            echo inverse(3);
        ?>
    </body>
</html>