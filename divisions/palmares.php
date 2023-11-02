<?php $division = $_GET['division'];  ?>
<?php
 require ("../connect/connection1.php") ; 

if ($division<230)
	{
	$base=bdequipe1;
	$titre="Champions de France";
	}
elseif($division<280)
	{
	$base=bdequipe2;
	$titre="Champions de France";
	}	
elseif($division<310)
	{
	$base=bdfem;	
	$titre="Championnes de France";
	}
elseif($division<380)
	{
	$base=bdjeunes;
	$titre="Champions de France";
	}
elseif($division<500)
	{
	$base=bdchallenges;
	$titre="Challenge de ";
	}
?>


<?php
$reponse = mysql_query("SELECT division
						FROM bddivisions 
						WHERE id='$division' "); 
 while ($donnees = mysql_fetch_array($reponse) )
	{ 		
	$nomDivision = $donnees['division']; 		
	}
?>
<br />
<h1> <font color="#000000"> 
  <?php echo $titre; ?>
  <br>
  </font> <font color="#000000">
  <?php echo $nomDivision; ?>
  </font><br/>
</h1>
<br />
<?php

if ($division<380)


{

					$reponse = mysql_query("SELECT saison, champion, comite1 
											FROM $base
											WHERE championnat='de France' and rang=$division and rang2=$division  and titre='champion' 
											ORDER BY saison DESC"); 
					 
							while ($donnees = mysql_fetch_array($reponse) )
								{ 
								?>
								<h4>
									<?php echo $donnees['saison'].' - '.$donnees['champion'].' '.$donnees['comite1']; ?>
								</h4>
					
								<?php
								 }
			 
}			 
			 
else
{
				$reponse = mysql_query("	SELECT saison, champion, comite1  
											FROM bdchallenges 
											WHERE rang=$division AND titre='vainqueur'
											ORDER BY saison DESC"); 
				 
									while ($donnees = mysql_fetch_array($reponse) )
										{ 
										?>
										<h4>
										<?php echo $donnees['saison']; ?> - <?php echo $donnees['champion'];  ?> <?php echo $donnees['comite1']; ?>
										</h4>  
										<?php
										 }			 
							 
}

mysql_close(); ?>

<br />
<br />
<?php include("../pub/pub_carre.php"); ?>
