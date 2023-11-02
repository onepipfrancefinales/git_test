<?php
if (isset ($_GET['id_equipe'])) $idChampion = $_GET['id_equipe']; else $idChampion = "-";
//echo "champion".$idChampion;
if (strlen($idChampion) > 7)
	$idChampion = substr($idChampion,-7);


	
require ("../../connect/connexion1.php") ;
 
 $reponse = $bdd->query("SELECT nom_1
						FROM bdclubs
						WHERE id='$idChampion' and type = 'M'");
 while ($row = $reponse->fetch() )
	{ 
	$champion = $row[0];
	}


 //**********************/Affichage  de la categorie eu  *******************************

 $reponse = $bdd->query("SELECT champion
						FROM bdeurope 
						WHERE champion='$champion' and categorie='eu'  
						LIMIT 0,1");
	
 while ($donnees = $reponse->fetch() )
{ 
	if ($champion = $donnees['champion'] )
		{
		echo "<h2> Titres Europ&eacute;ens </h2>";
		}

 //************************************** Palmares EU  *******************************************

 $reponse = $bdd->query("SELECT saison, titre, division
						FROM bdeurope 
						WHERE champion='$champion' and categorie='eu'  
						ORDER BY saison DESC");
									
 while ($donnees = $reponse->fetch() )
	{ 
	?>
	<div class="palmares">	<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['division'];?>
	</div>
	<?php
	}
		
}
								
								
?>

<?php  //****************        Affichage  de la categorie A            *******************************

$reponse = $bdd->query("SELECT entente
							FROM bdequipe1 
							WHERE entente='$champion' and categorie='a'  
							LIMIT 0,1");
	
				while ($donnees = $reponse->fetch() )
					{ 
					if ($champion = $donnees['entente'] )
						{
						echo "<h2> Equipe Une </h2>";
						}
						?>

<?php //*************************        Palmares A            *****************************************

		$reponse = $bdd->query("SELECT saison, titre, championnat, division, champion_entente
								FROM bdequipe1 
								WHERE entente='$champion' and categorie='a'  
								ORDER BY saison desc");
		
					while ($donnees = $reponse->fetch() )
						{ 
							?>
<div class="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
							
							<?php
						}
						?>

		<?php
					}

?>


<?php   //***************        Affichage  de la categorie B         *******************************
	$reponse = $bdd->query("SELECT entente
							FROM bdequipe2 
							WHERE entente='$champion' and categorie='B'  
							LIMIT 0,1");
	while ($donnees = $reponse->fetch() )
	{ 
 		if ($champion = $donnees['entente'] )
			{
			echo "<h2> Equipe II </h2>";
			}
		?>

		<?php //***************************     Palmares B            ************************************
		$reponse = $bdd->query("SELECT saison, titre, championnat, division, champion_entente
								FROM bdequipe2 
								WHERE entente='$champion' and categorie='B'  
								ORDER BY saison desc");
		while ($donnees = $reponse->fetch() )
			{ 
			?>
			<div class="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '.$donnees['champion_entente'];?></div>
			
			<?php
			}
			?>
		<?php
 	}

?>


 
<?php   //*********************            Affichage  de la categorie C      **************************************
	$reponse = $bdd->query("SELECT entente
							FROM bdchallenges 
							WHERE entente='$champion' and categorie='C'  
							LIMIT 0,1");
								while ($donnees = $reponse->fetch() )
									{ 
										if ($champion = $donnees['entente'] )
											{
											echo "<h2> Challenges Nationaux</h2>";
											}
											?>
										<?php //Palmares C
										$reponse = $bdd->query("SELECT saison, titre, championnat, division, champion_entente
																FROM bdchallenges 
																WHERE entente='$champion' and categorie='C'  
																ORDER BY saison DESC");
									while ($donnees = $reponse->fetch() )
													{ 
													?>
													<div class="palmares">	<?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['champion_entente'];?></div>
														
													<?php
													}
									}

?>
 
 

<?php  //***********     Affichage  de la categorie D    *****************************
$reponse = $bdd->query("SELECT entente
						FROM bdjeunes 
						WHERE entente='$champion' and categorie='D'  
						LIMIT 0,1");
while ($donnees = $reponse->fetch() )
	{ 
 	if ($champion = $donnees['entente'] )
		{
 		echo "<h2> Reichels & Juniors</h2>";
		}
		?>
		<?php //*******************     Palmares D     *********************************
		$reponse = $bdd->query("SELECT saison, titre, championnat, division, champion_entente 
								FROM bdjeunes 
								WHERE entente='$champion' and categorie='D'  
								ORDER BY saison desc");
		while ($donnees = $reponse->fetch() )
		{ 
		?>
		<div class="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
		
   		 <?php
		}
 	}
?> 


 <?php  //**********************      Affichage  de la categorie E           *******************
$reponse = $bdd->query("SELECT entente
						FROM bdjeunes 
						WHERE entente='$champion' and categorie='E'  
						LIMIT 0,1");
						while ($donnees = $reponse->fetch() )
							{ 
								if ($champion = $donnees['entente'] )
									{
									echo "<h2> Cadets</h2>";
									}
		?>
<?php //*******************         Palmares E      *******************************************
		$reponse = $bdd->query("SELECT saison, titre, championnat, division, champion_entente
								FROM bdjeunes 
								WHERE entente='$champion' and categorie='E'  
								ORDER BY saison DESC");
		while ($donnees = $reponse->fetch() )
			{ 
			?>
			<div class="palmares"><?php echo $donnees['saison'].' '.$donnees['titre'].' '.$donnees['championnat'].' '.$donnees['division'].' '. $donnees['champion_entente'];?></div>
			
   		 	
<?php
			}
 	}
?>

