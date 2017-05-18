<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Utilisation des classes debutant et avance</title>
    </head>
    <body>
        <?php
            include_once("debutant_class.php");
            include_once("avance_class.php");
            $coursDebutant = new debutant;
            $coursAvance = new avance;
            echo "<b>Formation pour débutants PHP</b><br>";
            echo "<i>Programme :</i><br>";
            echo $coursDebutant->programme();
            echo "<i>Pratique :</i><br>";
            echo $coursDebutant->pratique();

            echo "<br><b>Formation avancée PHP</b><br>";
            echo "<i>Programme :</i><br>";
            echo $coursAvance->programme();
            echo "<i>Pratique :</i><br>";
            echo $coursAvance->pratique();
        ?>
    </body>
</html>