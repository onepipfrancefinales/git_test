<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
require ("../../connection.php") ;
 ?>

<?php
$reponse = mysql_query("SELECT id, nom_1, siglecomite FROM bdclubs WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$clubA3= $donnees['nom_1']; 
$clubA2= $donnees['siglecomite']; 
}
$E012=($clubA3.' '.$clubA2);
?>
<?php
$reponse = mysql_query("SELECT id, nom_1, siglecomite FROM bdclubs WHERE id=29006 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$clubA3= $donnees['nom_1']; 
$clubA2= $donnees['siglecomite']; 
}
$E022=($clubA3.' '.$clubA2);
?>

<?php
$reponse = mysql_query("SELECT id, nom_1, siglecomite FROM bdclubs WHERE id=29012 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$clubA3= $donnees['nom_1']; 
$clubA2= $donnees['siglecomite']; 
}
$E032=($clubA3.' '.$clubA2);
?>
<?php
$reponse = mysql_query("SELECT id, nom_1, siglecomite FROM bdclubs WHERE id=15006 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$clubA3= $donnees['nom_1']; 
$clubA2= $donnees['siglecomite']; 
}
$E042=($clubA3.' '.$clubA2);
?>

<?php
$reponse = mysql_query("SELECT id, A3201 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3201= $donnees['A3201']; 
 }
echo $A3201;
?>

<?php
$reponse = mysql_query("SELECT id, A3202 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3202= $donnees['A3202']; 
 }
echo $A3202;
?>

<?php
$reponse = mysql_query("SELECT id, A3203 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3203= $donnees['A3203']; 
 }
echo $A3203;
?>

<?php
$reponse = mysql_query("SELECT id, A3204 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3204= $donnees['A3204']; 
 }
echo $A3204;
?>






<?php
$clubA3201= ' Flandres 3';
$clubA3202= ' Alsace Lorraine 1';

$clubA3203= ' Ile-de-France 4';
$clubA3204= ' Bourgogne 2 ';

$clubA3205= ' Flandres 1 ';
$clubA3206= ' Ile de France 5';

$clubA3207= ' Alsace Lorraine 2';
$clubA3208= ' Barrage LY 3 -  BG 4 ';

$clubA3209= ' Alsace Lorraine 3';
$clubA3210= ' Ile de France 3';

$clubA3211= ' Bourgogne 1';
$clubA3212= ' Lyonnais 2 ';

$clubA3213= ' Ile de France 1';
$clubA3214= ' Bourgogne 3';

$clubA3215= ' Lyonnais 1';
$clubA3216= ' Auvergne 2 ';

$clubA3217= ' Normandie 1';
$clubA3218= ' Flandres 2';

$clubA3219= ' Bretagne 1';
$clubA3220= ' Pays de Loire 2 ';

$clubA3221= ' Normandie 2';
$clubA3222= ' Barrage CE 3 -  IDF 6';

$clubA3223= ' Bretagne 2';
$clubA3224= ' Poitou Charente 2 ';

$clubA3225= ' Centre 1';
$clubA3226= ' Bretagne 3';

$clubA3227= ' Pays de Loire 1';
$clubA3228= ' Normandie 3 ';

$clubA3229= ' Ile de France 2';
$clubA3230= ' Centre 2';

$clubA3231= ' Poitou Charente 1';
$clubA3232= ' Barrage PA 3 -  AU 3';

$clubA3233= ' Auvergne 1';
$clubA3234= ' Limousin 3';

$clubA3235= ' Provence 1';
$clubA3236= ' Drome Ardeche 2 ';

$clubA3237= ' Alpes 2';
$clubA3238= ' Drôme Ardèche 1';

$clubA3239= ' Languedoc 1';
$clubA3240= ' Provence 4 ';

$clubA3241= ' Alpes 1';
$clubA3242= ' Provence 3';

$clubA3243= ' Pyrenees 1';
$clubA3244= ' Barrage PC 2 -  LD 3 ';

$clubA3245= ' Provence 2';
$clubA3246= ' Languedoc 2';

$clubA3247= ' Armagnac Bigorre 1';
$clubA3248= ' Pyrénées 3 ';

$clubA3249= ' Périgord Agenais 2 ';
$clubA3250= ' Limousin 2';

$clubA3251= ' Cote d Argent 1';
$clubA3252= ' Pyrénées 2 ';

$clubA3253= ' Limousin 1';
$clubA3254= ' Pyrénées 5';

$clubA3255= ' Bearn 1';
$clubA3256= ' Armagnac Bigorre 2 ';

$clubA3257= ' Perigord Agenais 1';
$clubA3258= ' Pyrénées 4';
 
$clubA3259= ' Cote basque Landes 2';
$clubA3260= ' Barrage CA 3 -  BE 2';

$clubA3261= ' Cote Basque Landes 1';
$clubA3262= ' Cote d Argent 2';

$clubA3263= ' Barrage AB 3 -  MPY 6';
$clubA3264= ' Pays Catalan 1';
?>

<?php 
$reponse = mysql_query("SELECT id, A3201, A3202, E01, E02 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3201= $donnees['A3201']; 
$A3202= $donnees['A3202']; 
$E01= $donnees['E01']; 
$E02= $donnees['E02']; 
 }
 if ($A3201>$A3202)
 $clubA1601=$E01;
 else
 $clubA1601=$E02;
?>
<?php
echo $clubA1601;
?>

<?php 
$reponse = mysql_query("SELECT id, A3203, A3204, E03, E04 FROM bdpf2015 WHERE id=170 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$A3203= $donnees['A3203']; 
$A3204= $donnees['A3204']; 
$E03= $donnees['E03']; 
$E04= $donnees['E04']; 
 }
 if ($A3203>$A3204)
 $clubA1602=$E03;
 else
 $clubA1602=$E04;
?>

<?php
$reponse = mysql_query("SELECT id, nom_1, siglecomite FROM bdclubs WHERE id=$clubA1602 "); // Requête SQL
 while ($donnees = mysql_fetch_array($reponse) )
{ 
$clubA3= $donnees['nom_1']; 
$clubA2= $donnees['siglecomite']; 
}
$E0122=($clubA3.' '.$clubA2);
?>


<?php
echo $clubA1602;
?>


<?php
mysql_close(); // Déconnexion de MySQL

?>
</body>
</html>
