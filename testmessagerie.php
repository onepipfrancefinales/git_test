<?php
$prenom=""test1";
$name="test2";
$message = "<span style=\"font-family: Courier;\">Bonjour, " . $prenom . " " . $name . "<br />
        Test";
$headers =  "From: \"Pierre LAGOUTTE\"<francefinalesrugby@free.fr>\n"; // Expéditeur
$headers .= "Content-type: text/html; charset=\"utf-8\""; // Encodage en HTML et UTF-8
mail($mail, "Bonjour !", $message, $headers); // Envoi du mail
echo "message envoyé";
?>