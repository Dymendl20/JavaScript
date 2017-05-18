<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
          $titre = "Envoi de mail par PHP";
          $texte = "<font color=\"red\">Ce mail a été envoyé depuis <b>un script PHP</b>.</font>";
          $destinataire="prenom.nom.@fai.com";
          $delapartde = "expediteur@fai.com";
          $from  = "From:".$delapartde."\n";
          $from .= "MIME-version: 1.0\n";
          $from .= "Content-type: text/html; charset= UTF-8\n";
          if (!mail($destinataire,$titre,$texte,$from))
          echo "Un problème s'est produit lors de l'envoi du message. Recommencez SVP.";
        ?>
    </body>
</html>