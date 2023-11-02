
<?php
 require ("../../connect/connexion1.php") ; 

if ($division<230)
	{
	$base="bdequipe1";
	$titre="Champions de France";
	}
elseif($division<280)
	{
	$base="bdequipe2";
	$titre="Champions de France";
	}	
elseif($division<310)
	{
	$base="bdfem";	
	$titre="Championnes de France";
	}
elseif($division<380)
	{
	$base="bdjeunes";
	$titre="Champions de France";
	}
elseif($division<500)
	{
	$base="bdchallenges";
	$titre="Challenge de ";
	}

$reponse = $bdd->query("SELECT division
						FROM bddivisions 
						WHERE id='$division' "); 
 while ($donnees =  $reponse->fetch()  )
	{ 		
	$nomDivision = $donnees['division']; 		
	}

$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $base
						WHERE championnat='de France' 
						AND rang=$division 
						AND rang2=$division  AND saison < 2019
						AND titre='champion' 
						ORDER BY saison DESC"); 
					 
	while ($donnees =  $reponse->fetch()  )
	{ 							
	
	if ($donnees['saison'] =='2018' and $division =='330') 
	{ echo "<h1><font color=\"#000000\">"; echo "Jules Balandrade"; echo "<br />";echo "</font></h1>";}
elseif ($donnees['saison'] =='2018' and $division =='370') 
	{ echo "<h1><font color=\"#000000\">"; echo "Jean Teuli&egrave;re"; echo "<br />";echo "</font></h1>";}
	echo "<h4>";
	echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; 
	echo "</h4>";
	}

if ($division<380)
{/*
	$reponse = $bdd->query("SELECT saison, champion, comite1 
							FROM $base
							WHERE championnat='de France'
							AND rang=$division 
							AND rang2=$division  
							AND titre='champion' 
							ORDER BY saison DESC"); 
					 
	while ($donnees =  $reponse->fetch()  )
	{ 						
	echo "<h4>";
	echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; ?>
	echo "</h4>";
	}								 
*/			 
}			 			 
else
{
	$reponse = $bdd->query("
		SELECT saison, champion, comite1  
		FROM bdchallenges 
		WHERE rang=$division AND titre='vainqueur'
		ORDER BY saison DESC"); 
				 
	while ($donnees =  $reponse->fetch()  )
	{ 
	 echo "</h4>";
  	 echo $donnees['saison'].' - '.$donnees['champion'].$donnees['comite1']; 
	 echo "</h4>"; 									
	}			 							 
}
echo "<br />";
echo "<br />";
//include("../../pub/pub_carre.php"); 
?>
