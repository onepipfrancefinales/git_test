<?php

if (isset ($_POST['id'])) $id = $_POST['id'];echo $id;
if (isset ($_POST['nom_1'])) $nom_1 = $_POST['nom_1'];echo $nom_1;

if (isset ($_POST['nom_2'])) $nom_2 = $_POST['nom_2'];echo $nom_2;
if (isset ($_POST['nom_3'])) $nom_3 = $_POST['nom_3'];echo $nom_3;
if (isset ($_POST['nom_4'])) $nom_4 = $_POST['nom_4'];echo $nom_4;
if (isset ($_POST['fusion'])) $fusion = $_POST['fusion'];echo $fusion;
if (isset ($_POST['idffr'])) $idffr = $_POST['idffr'];echo $idffr;
if (isset ($_POST['type'])) $type = $_POST['type'];echo $type;
if (isset ($_POST['sigle'])) $sigle = $_POST['sigle'];echo $sigle;
if (isset ($_POST['ligue'])) $ligue = $_POST['ligue'];echo $ligue;
if (isset ($_POST['siglecomite'])) $sigleComite = $_POST['siglecomite'];echo $sigleComite;
if (isset ($_POST['comite'])) $comite = $_POST['comite'];echo $comite;


require '../../connect/connexion1.php';

// Insertion dans la table bdclubs
/*
$bdd->exec("UPDATE bdclubs
			SET nom_1 ='$nom_1'
				  
			WHERE id ='$id'");

*/





$bdd->exec("UPDATE bdclubs
			SET nom_1='$nom_1',nom_2='$nom_2',nom_3='$nom_3',nom_4='$nom_4',
				   fusion='$fusion',idffr= '$idffr', type='$type',sigle ='$sigle', ligue='$ligue',
				   siglecomite= '$sigleComite', comite='$comite'
			WHERE id ='$id'");
/*
//$sigleComite a traite en comite
echo "<br />";echo "<br />";
echo "<hr />";

//Insertion dans la table infoclub
echo "table infosClub"; echo "<br />";echo "<br />";

$idReduit = substr($id,-5);
echo "1- id :".$idReduit; echo "<br />";
echo "2- Cr&eacute;ation : ".$saison; echo "<br />";

$vide = "";
$videInt = 0;
$bdd->exec("INSERT INTO infosclub
			VALUES('$idReduit',  '$vide','$ligue','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$saison','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide'  )");



echo "<hr />";
echo "table bdsaisons"; echo "<br />";echo "<br />";

$bdd->exec("INSERT INTO bdsaisons
			VALUES('$id',  '$vide','$vide','$vide','$ligue','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$videInt','$vide','$vide','$vide','$vide','$vide','$vide','$vide',
				   '$vide','$vide','$vide','$vide','$vide','$vide','$vide','$vide'  )");

echo "1- id :".$id; echo "<br />";
echo "2- ligue : ".$ligue; echo "<br />";

/*
echo "<br />";
//echo $id; echo "<br />";echo $nom; echo "<br />";
echo $idffr; echo "<br />";
echo $type; echo "<br />";
echo $nomComplet; echo "<br />";
echo $ligue; echo "<br />";
echo $comite; echo "<br />";
*/

echo "<hr />";
echo "<hr />";
echo "insertions effectu&eacute;es";	








require '../majScores/bas.php';
?>

