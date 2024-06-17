
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
						WHERE id='$division' and annee != '2023' "); 
 while ($donnees =  $reponse->fetch()  )
	{ 		
	$nomDivision = $donnees['division']; 		
	}
?>
<?php 
if ($division == '170' or $division == '180' or $division == '190' or $division == '270') {
	?>
<br>
<h1 class="colorBlack">  
  <?php echo $titre; ?>
  <br>
  
  <?php echo $nomDivision; ?>
  <br>
</h1>
<br>
<?php
}
?>
<?php

$reponse = $bdd->query("SELECT saison, champion, comite1 
						FROM $base
						WHERE championnat='de France' 
						AND rang=$division 
						AND rang2=$division  AND saison between  2019 and 2022  
						AND titre='champion' 
						ORDER BY saison DESC"); 
					 
							while ($donnees =  $reponse->fetch()  )
								{ 
								
								echo "<h4>";
							    echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1'];
								echo "</h4>";
					
								
								 }

if ($division<380)
{/*
					$reponse = $bdd->query("SELECT saison, champion, comite1 
											FROM $base
											WHERE championnat='de France' and rang=$division and rang2=$division  and titre='champion' 
											ORDER BY saison DESC"); 
					 
							while ($donnees =  $reponse->fetch()  )
								{ 
								?>
								<h4>
									<?php echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; ?>
								</h4>
					
								<?php
								 }
								 
*/			 
}			 
			 
else
{
$reponse = $bdd->query("	SELECT saison, champion, comite1  
	FROM bdchallenges 
	WHERE rang=$division AND titre='vainqueur'
	ORDER BY saison DESC"); 
				 
	while ($donnees =  $reponse->fetch()  )
	{ 									
		echo "<h4>";
		echo $donnees['saison'].' - '.$donnees['champion'].$donnees['comite1']; 
		echo "</h4>";  
	}			 							 
}
 ?>
