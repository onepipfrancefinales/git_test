<?php
// connexion à la base de données:
mysql_connect("onepip.sql.free.fr","onepip","lavelan");
mysql_select_db("test");
// récolte des données du fichier:
$image_tmp = $_FILES["image"]["tmp_name"];
$image_name = $_FILES["image"]["name"];
$image_size = $_FILES["image"]["size"];
$image_type = $_FILES["image"]["type"];
// ajout dans la table:
$donnees = addslashes(fread(fopen($image_tmp, "r"), $image_size));
$result = mysql_query("INSERT INTO image (donnees_binaires,nom_fichier,taille_fichier,type_fichier)
VALUES ('$donnees','$image_name','$image_size','$image_type')");
$id = mysql_insert_id();
mysql_close();
?>