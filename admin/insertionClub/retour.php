<?php

if (isset ($_POST['id'])) $id = $_POST['id'];
if (isset ($_POST['idffr'])) $idffr = $_POST['idffr'];
if (isset ($_POST['nom'])) $nom = $_POST['nom'];
if (isset ($_POST['nomComplet'])) $nomComplet = $_POST['nomComplet'];
if (isset ($_POST['saison'])) $saison = $_POST['saison'];else $saison= '0';
if (isset ($_POST['type'])) $type = $_POST['type'];
if (isset ($_POST['comite'])) $sigleComite = $_POST['comite'];else $sigleComite= "null";
if (isset ($_POST['ligue'])) $ligue = $_POST['ligue'];

$nomAutre ="";
$fusion="";
$siglecomite="";

echo "table bdclubs"; echo "<br />";echo "<br />";

echo "1- id :".$id; echo "<br />";
echo "2- nom_1 : ".$nom; echo "<br />";
echo "3- nom_2 : ".$nomAutre; echo "<br />";
echo "4- nom_3 : ".$nomAutre; echo "<br />"; 
echo "5- nom_4 : ".$nomAutre; echo "<br />";
echo "6- fusion : ".$fusion; echo "<br />";
echo "7- idffr :".$idffr; echo "<br />";
echo "8- type: ".$type; echo "<br />";
echo "9- sigle: ".$nomComplet; echo "<br />";
echo "10- ligue : ".$ligue; echo "<br />";
echo "11- siglecomite : ".$sigleComite; echo "<br />";

require '../../connect/connexion1.php';
	$reponse = $bdd->query( " SELECT nom
			FROM bdcomite
			WHERE sigle = '$sigleComite' "); 		
	
	while ($row = $reponse->fetch())
		{
		$nomComite = $row[0];
		}

$comiteLitteral = "comité; ".$nomComite;

echo "12- comite : ".$comiteLitteral; echo "<br />";


// Insertion dans la table bdclubs

$bdd->exec("INSERT INTO bdclubs
			VALUES('$id','$nom','$nomAutre','$nomAutre','$nomAutre','$fusion','$idffr' ,'$type', '$nomComplet','$ligue','$sigleComite','$sigleComite')");


//$sigleComite a traite en comite
echo "<br />";echo "<br />";
echo "<hr />";

//Insertion dans la table infoclub
echo "table infosClub"; echo "<br />";echo "<br />";

$idReduit = substr($id,-5);
echo "1- id :".$idReduit; echo "<br />";
echo "2- Création : ".$saison; echo "<br />";
echo "3- club : ".$nom; echo "<br />";

$vide = "";
$videInt = 0;
$bdd->exec("INSERT INTO infosclub
			VALUES('$idReduit',  '$nom', '$ligue','$vide','$vide','$vide','$vide','$vide','$vide', 
			       '$vide',      '$vide', '$vide', '$vide','$vide','$vide','$vide','$vide','$vide',
			       '$vide',      '$vide', '$vide', '$vide','$vide','$vide','$vide','$vide','$vide',
				   '$saison','$vide','$vide', '$vide','$vide','$vide','$vide','$vide','$vide'  )");



echo "<hr />";
echo "table bdsaisons"; echo "<br />";echo "<br />";

$bdd->exec("INSERT INTO bdsaisons(id, nom_1, code_bdsaison, siglecomite, ligue)
			VALUES('$idReduit','$nom','$idReduit', ''  , '$ligue')");


echo "1- id :".$idReduit; echo "<br />";
echo "2- nom_1 : ".$nom; echo "<br />";
echo "3- code_bdsaison : ".$idReduit; echo "<br />";
echo "4- sigleComite : ".$sigleComite; echo "<br />";
echo "5- ligue : ".$ligue; echo "<br />";



echo "<hr />";
echo "<hr />";
echo "insertions effectuées";	


require '../majScores/bas.php';
?>

