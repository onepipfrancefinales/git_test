<?php
function infosComite($champ, $bdd)
{
//echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
//echo "<br>";echo "<br>";echo "<br>";echo "<br>";

$numLigue=	substr($champ,0,2);
//echo "champ : ".$champ;
global $nomCompletComite, $nomCompletLigue, $codeLigue, $sigleComite;

$reponse = $bdd->query("SELECT nom, nomLigue, codeLigue, sigle
						FROM comite
						WHERE codeLigue = '$numLigue' ");
							while($donnees = $reponse->fetch())
								{
								$nomCompletComite = $donnees['nom'];
								$nomCompletLigue = $donnees['nomLigue'];
								$codeLigue = $donnees['codeLigue'];
								$sigleComite = $donnees['sigle'];
								}

}

function infosLigue($codeLigue, $bdd)
{
global $sigleLigue;
$reponse = $bdd->query("SELECT sigle 
						FROM bdligue
						WHERE id = '$codeLigue' ");
		while($donnees = $reponse->fetch())
			{					
			$sigle = $donnees['sigle'];
			}
$sigleLigue = "(".$sigle.")";

//echo "sigleLigue : ".$sigleLigue;
}

function nomDivision($rang, $bdd)
{
global $division;

$reponse = $bdd->query("SELECT division
						FROM divisions
						WHERE id= '$rang' ");
							while($donnees = $reponse->fetch())
								{
								$division=$donnees['division'];
								}
}

function palmaresLigue($sigleLigue, $annee, $rang, $bdd)
{



Global	$tabSaisons, $tabChampions, $intervalleAnnee;

$tabSaisons = array();	
$tabChampions = array();

$intervalleAnnee=$annee-2018;

  for($i=2019; $i<=$annee; $i++)
  {
	$reponse = $bdd->query("
			   SELECT saison, champion, comite1 
			   FROM bdequipe1
			   WHERE titre = 'Champion' 
			   AND comite1 = '$sigleLigue' 
			   AND rang='$rang'  
			   AND rang2= '1'
			   AND saison > 2018
			   ORDER BY saison DESC"); 
	
	while ($donnees = $reponse->fetch() )
	{
	 $tabSaisons[] = $donnees['saison'];
	 $tabChampions[] = $donnees['champion'];	
    }
  }
}

function palmaresFrance($rang, $annee, $bdd)
{
	
global $tabSaison, $tabChampion, $tabComite, $intervalleAnneeChampion;

if ($rang > 100 && $rang < 225)
	$table="bdequipe1";
elseif ($rang > 225 && $rang < 275)
	$table="bdequipe2";	
elseif ($rang > 275 && $rang < 305)
	$table="bdfem";
elseif ($rang > 305 && $rang < 375)
	$table="bdjeunes";
elseif ($rang > 375 && $rang < 455)
	$table="bdchallenges";
	
	
$reponse = $bdd->query("SELECT Min(saison)
						FROM $table
							WHERE championnat='de France' and rang=$rang and titre='champion' 
							ORDER BY saison DESC"); 

$row = $reponse->fetch();
$minAnneeChampion = $row[0];


$tabSaison = array();
$tabChampion = array();
$tabComite = array();

$intervalleAnneeChampion=$annee-$minAnneeChampion;

  for ($i=$minAnneeChampion; $i<= $annee; $i++)
  {
  $reponse =$bdd->query("SELECT saison, champion, comite1, division 
							FROM $table
							WHERE championnat='de France' and rang=$rang and titre='champion' 
							ORDER BY saison DESC"); 
		
	while ($donnees = $reponse->fetch() )
	{ 
	 $tabSaison[] = $donnees['saison'];
	 $tabChampion[] = $donnees['champion'];
	 $tabComite[] = $donnees['comite1'];
    }		
  $reponse->closeCursor(); 
  }
}






function palmaresComite($comitePlus, $rang, $bdd)
{

echo "--------------------";
echo $comitePlus ;echo "<br />";
echo $rang ;echo "<br />";

	
Global	$tabSaisonsComite, $tabChampionsComite, $intervalleAnneeComite;

$tabSaisonsComite = array();	
$tabChampionsComite = array();

$reponse = $bdd->query("SELECT Min(saison)
						FROM bdequipe1
						WHERE titre = 'Champion' AND comite1 = '$comitePlus' 
						AND rang='$rang'  
						AND rang2= '1'
						AND saison < 2019
						ORDER BY saison DESC"); 

$row = $reponse->fetch();
$maxAnneeComite = $row[0];

$intervalleAnneeComite=2019-$maxAnneeComite;

  for ($i=$maxAnneeComite;$i<2019;$i++)
  {
  $reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM bdequipe1
						WHERE titre = 'Champion' AND comite1 = '$comitePlus' 
						AND rang='$rang'  
						AND rang2= '1'
						AND saison < 2019
						ORDER BY saison DESC"); 
	while ($donnees = $reponse->fetch())
	{ 						   
	 $tabSaisonsComite[] = $donnees['saison'];
	 $tabChampionsComite[] = $donnees['champion'];				
    }
  }
}
?>