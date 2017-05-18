<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
            function test()
            {
                $a = 10;
                echo "\$a = " . $a . "<br>";
                $a++;
            }
            test();
            test();
            test();
            test();
        ?>

    </body>
</html>