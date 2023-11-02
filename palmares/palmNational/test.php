<?php
require '../../connect1/connection1.php';
$equipe1 = "Stade Toulousain";

$requete = $bdd->query("SELECT count(*)
						FROM bdequipe1
						WHERE champion = '$equipe1' and titre ='champion'");

while ($row = $requete->fetch())
{
	$saison= $row[0];
	echo $equipe1." : ".$saison." titres";
}
echo "<hr />";

//************************************************
// Recherche du nombre de champions différents
//************************************************
$requete = $bdd->query("SELECT COUNT(distinct(entente))
						FROM bdequipe1
						WHERE rang = '110' and titre = 'champion'
						");

while ($row = $requete->fetch())
{
	$nbreChampions= $row[0];
	echo "nombre de champions differents : ".$nbreChampions."<br />";
}

echo "<hr />";
//************************************************
// liste des différents champions
//************************************************
/*
$requete = $bdd->query("SELECT distinct(entente)
						FROM bdequipe1
						WHERE rang = '110' and titre = 'champion'
						");

while ($row = $requete->fetch())
{
	$equipe= $row[0];
	echo $equipe."<br />";
}
*/
echo "<hr />";
//************************************************
//liste des différents champions et leurs nombre de titres
//************************************************
$tabEquipe = array();
$requete = $bdd->query("SELECT distinct(entente)
						FROM bdequipe1
						WHERE rang = '110' and titre = 'champion'
						");

while ($row = $requete->fetch())
	{
	$tabEquipe[]= $row[0];	
	}
//tri du tableau
//sort($tabEquipe);
//echo $tabEquipe[3];
for ($i=0; $i<=$nbreChampions-1;$i++)
{
if (isset($tabEquipe[$i])) ${"champion".$i}=$tabEquipe[$i];else ${"champion".$i}="inconnu";
}

echo "<br />";
echo $champion5;
echo "<hr />";
$tabNbreTitre = array();
for ($i=0; $i<=$nbreChampions-1;$i++)
{
$equipe = ${"champion".$i};

$requete = $bdd->query("SELECT count(*) 
						FROM bdequipe1
						WHERE champion = '$tabEquipe[$i]' 
						and titre ='champion' 
						and rang ='110'
						");

while ($row = $requete->fetch())
	{
	$tabNbreTitre[]= $row[0]." titres ".$tabEquipe[$i];
	}
	//echo $tabNbreTitre[$i];echo "<br />";
	rsort($tabNbreTitre, SORT_NUMERIC);
	
	
}	
	$count=0;
	foreach ($tabNbreTitre as $nbreTitre)
	{
	if ($count > 10)
		{
		break;

		}
		else
		{
	echo $nbreTitre;echo "<br />";
	$count= $count+1;
	}
}
echo "<hr />";
echo "<hr />";
//participation a une finale de l'elite	


$tabEquipe = array();
$requete = $bdd->query("SELECT distinct(entente)
						FROM bdequipe1
						WHERE rang = '110' 
						and (titre = 'champion'
						or titre = 'vice champion')
						");

while ($row = $requete->fetch())
	{
	$tabEquipe[]= $row[0];	
	}
//tri du tableau
//sort($tabEquipe);
//echo $tabEquipe[3];
for ($i=0; $i<=$nbreChampions-1;$i++)
{
if (isset($tabEquipe[$i])) ${"champion".$i}=$tabEquipe[$i];else ${"champion".$i}="inconnu";
}

echo "<br />";
echo $champion5;
echo "<hr />";


$tabNbreTitre = array();
for ($i=0; $i<=$nbreChampions-1;$i++)
{
$equipe = ${"champion".$i};

//echo $equipe;echo "<br />";


$requete = $bdd->query("SELECT count(*) 
						FROM bdequipe1
						WHERE champion = '$tabEquipe[$i]' 
						and rang ='110'
						and (titre ='champion' 
						or titre = 'vice champion')
						");

while ($row = $requete->fetch())
	{
	$tabNbreTitre[]= $row[0]." titres ".$tabEquipe[$i];
	}
	//echo $tabNbreTitre[$i];echo "<br />";
	rsort($tabNbreTitre, SORT_NUMERIC);
	
	
}	

//affichage sur 10 lignes

	$count=0;
	foreach ($tabNbreTitre as $nbreTitre)
	{
	/*
	if ($count > 10)
		{
		break;

		}
		else
		{
	*/	
	echo $nbreTitre;echo "<br />";
	/*
	$count= $count+1;
		}
	*/
	}
echo "<hr />";
echo "test";
echo "<br />";
//************************************************
// Recherche du nombre de champions différents
//************************************************	
	
$requete = $bdd->query("SELECT COUNT(distinct(entente))
						FROM bdequipe1
						WHERE titre = 'champion'
						and championnat ='de France'");

while ($row = $requete->fetch())
{
	$nbreChampions= $row[0];
	echo "nombre de champions differents : ".$nbreChampions."<br />";
}	
	
	
	
	
//************************************************
//champion de france toutes categorie confondues
//************************************************

$tabEquipe = array();
$requete = $bdd->query("SELECT distinct(entente)
						FROM bdequipe1
						WHERE championnat ='de France'
						and titre = 'champion'
						");

while ($row = $requete->fetch())
	{
	$tabEquipe[]= $row[0];	
	}
//tri du tableau
//sort($tabEquipe);
//echo $tabEquipe[3];
for ($i=0; $i<=449;$i++)
{
if (isset($tabEquipe[$i])) ${"champion".$i}=$tabEquipe[$i];else ${"champion".$i}="inconnu";
}

echo "<br />";
echo $champion5;
echo "<hr />";


$tabNbreTitre = array();
for ($i=0; $i<=449;$i++)
{
$equipe = ${"champion".$i};

//echo $equipe;echo "<br />";


$requete = $bdd->query("SELECT count(*) 
						FROM bdequipe1
						WHERE champion = '$tabEquipe[$i]' 
						and championnat ='de France'
						and titre ='champion' 
						");

while ($row = $requete->fetch())
	{
	$tabNbreTitre[]= $row[0]." titres ".$tabEquipe[$i];
	}
	//echo $tabNbreTitre[$i];echo "<br />";
	rsort($tabNbreTitre, SORT_NUMERIC);
	
	
}	

//affichage sur 10 lignes

	$count=0;
	foreach ($tabNbreTitre as $nbreTitre)
	{
	/*
	if ($count > 10)
		{
		break;

		}
		else
		{
	*/	
	echo $nbreTitre;echo "<br />";
	/*
	$count= $count+1;
		}
	*/
	}
	
echo "	<hr/>";
echo "	<hr/>";	
echo "new requete";
echo "	<hr/>";
/*
$requete =$bdd->query("​SELECT champion, count(champion)
						FROM bdequipe1
						WHERE titre ='champion'
						AND championnat = 'de France'
						GROUP by champion order by count(champion) desc");
	
				while ($row = $requete->fetch())
							{
							echo $row[0];
							echo $row[];
							}		
*/
$requete= $bdd->query("	SELECT champion, count(champion)
						FROM bdequipe1
						WHERE titre = 'Champion'
						AND championnat = 'de France'
						GROUP by champion order by count(champion) desc");	

while ($row = $requete->fetch())
{
echo $row[0]." : ".$row[1]." titre(s)"."<br />";
}						
						
?>


