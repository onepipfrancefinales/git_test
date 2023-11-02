<?php
require '../../connect1/connection1.php';

echo "<br />";
echo "<br />";
echo "---------------------------------------";
echo "--------------   top14   --------------";
echo "---------------------------------------";
echo "<br />";
echo "<br />";
//////
//////******   TOP 14     *************
//////
echo "nombre d'éditions";echo "<br />";
//************************************************
// Recherche du nombre de champions différents
//************************************************
$requete = $bdd->query("SELECT COUNT(distinct(entente))
						FROM bdequipe1
						WHERE rang = '110' and titre = 'champion'
						and championnat ='de France '
						");

while ($row = $requete->fetch())
{
	$nbreChampions= $row[0];
	echo "Nombre de champions differents : ".$nbreChampions."<br />";
}

echo "<hr />";
//************************************************
// liste des différents champions
//************************************************
echo "<br />";
echo "tous les champions de France de l'Elite";
echo "<br />"; echo "<br />";
$requete= $bdd->query("	SELECT champion, count(champion)
						FROM bdequipe1
						WHERE titre = 'Champion'
						AND championnat = 'de France' 
						and rang='110'
						GROUP by champion order by count(champion) desc");	

while ($row = $requete->fetch())
{
	
echo $row[0]." : ".$row[1]." titre(s)"."<br />";
}	
echo "<hr />";

//************************************************
// liste des finalites
//************************************************


echo "<br />";
echo "tous les finalestes de France de l'Elite";
echo "<br />"; echo "<br />";
$requete= $bdd->query("	SELECT champion, count(champion)
						FROM bdequipe1
						WHERE (titre = 'Champion' or titre = 'Vice Champion')
						AND championnat = 'de France' 
						and rang='110'
						GROUP by champion order by count(champion) desc");	

while ($row = $requete->fetch())
{
	
echo $row[0]." : ".$row[1]." titre(s)"."<br />";
}	
echo "<hr />";


//******* Toutes divisions confondues *******//
echo "---------------------------------------";
echo "----  Toutes divisions confondues  ----";
echo "---------------------------------------";
//************************************************
// Recherche du nombre de champions différents
//************************************************	
echo "<br />";	echo "<br />";
$requete = $bdd->query("SELECT COUNT(distinct(entente))
						FROM bdequipe1
						WHERE titre = 'champion'
						and championnat ='de France'
						and categorie = 'A'");

while ($row = $requete->fetch())
{
	$nbreChampions= $row[0];
	echo "Nombre de champions differents : ".$nbreChampions."<br />";
}	
	
	
	
	
//************************************************
//champion de france toutes categorie confondues
//************************************************
echo "<br />";
echo "<br />";
echo "Liste des champions de france";
echo "<br />";
echo "<br />";
$requete= $bdd->query("	SELECT champion, count(champion)
						FROM bdequipe1
						WHERE titre = 'Champion'
						AND championnat = 'de France' 
						AND categorie = 'A'
						GROUP by champion 
						ORDER BY COUNT(champion) DESC");	

while ($row = $requete->fetch())
{
	
echo $row[0]." : ".$row[1]." titre(s)"."<br />";
}						
						
?>


