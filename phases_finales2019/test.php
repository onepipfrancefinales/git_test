<?php

echo "saisir dans l'URl ........phases_finales2019/test.php?choix=990141";
echo "<br/>";echo "<br/>";

echo "***********************************************";
echo "<br />";
echo "fédérale 1 : 990141"."<br />";
echo "féderale 2 : 990151"."<br />";
echo "féderale 3 : 991160 - poule de 1 à 10"."<br />";
echo "féderale 3 : 992160 - poule de 11 à 20"."<br />";
echo "<br />";
echo "Nationale 1 : 990241"."<br />";
echo "féderale B : 990251"."<br />";
echo "Excellence B : 991260 - poule de 1 à 10"."<br />";
echo "Excellence B : 992260 - poule de 11 à 20"."<br />";
echo "<br />";
echo "***********************************************";
echo "<br />";




if (isset($_GET['choix'])) $choix = $_GET['choix'];else $choix=990141;
echo "choix : ".$choix;
echo "<br/>";echo "<br/>";
require '../connect/connexion6.php';
require 'autresFonctions.php';



if ($choix == 990141){ $debut = 990141; $fin=990145; $comite = "pro";}// fédérale 1 : 990141
elseif ($choix == 990151){ $debut = 990151; $fin=990159; $comite = "pro";}// féderale 2 : 990251
elseif ($choix == 991160){ $debut = 991160; $fin=991169; $comite = "fed3NE";}// féderale 3 : 991160 - poule de 1 à 10
elseif ($choix == 992160){ $debut = 992160; $fin=992169; $comite = "fed3NE";}// féderale 3 : 991260 - poule de 11 à 20

elseif ($choix == 990241){ $debut = 990241; $fin=990245; $comite = "pro";}// Nationale 1 : 990241
elseif ($choix == 990251){ $debut = 990251; $fin=990259; $comite = "pro";}// féderale B : 990251
elseif ($choix == 991260){ $debut = 991260; $fin=991269; $comite = "fed3NE"; }// Excellence B : 991260 - poule de 1 à 10
elseif ($choix == 992260){ $debut = 992260; $fin=992269; $comite = "fed3NE";}// Excellence B : 992260 - poule de 11 à 20


// Equipes classées 1re
echo "<b>"."1er de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,1);}
echo "<br />";echo "<br />";

// Equipes classées 2me
echo "<b>"."2me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,2);}
echo "<br />";echo "<br />";

// Equipes classées 3me
echo "<b>"."3me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,3);}
echo "<br />";echo "<br />";

//Equipes classées 4me
echo "<b>"."4me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,4);}
echo "<br />";echo "<br />";

//Equipes classées 5me
echo "<b>"."5me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,5);}
echo "<br />";echo "<br />";

//Equipes classées 6me
echo "<b>"."6me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,6);}
echo "<br />";echo "<br />";

//Equipes classées 7me
echo "<b>"."7me de chaque poule"."</b>";
echo "<br>";
for ($division=$debut; $division <= $fin; $division = $division + 1)
{traitement($comite, $division,7);}

echo "<br>";
echo "<br />";
?>