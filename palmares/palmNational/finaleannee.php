<?php 
$annee = $_POST['saison'];        
$annee=$_GET['variable_1'];?>
<br><br>
<p id="titre" class="colorBlack"> Finales du Championnat de France<br>
  <?php echo  $annee;?>
  </p>
<br><br>
<p class="annee">Equipes S&eacuteniors</p> 
<p class="equipe">
	
	<?php 

	require ("../../connect/connexion1.php") ; 
		
	$reponse =$bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2 
						FROM bdequipe1 
						WHERE saison='$annee' and titre='champion'and championnat='de France'and rang<230 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php
								 }
								 
	?>
</p>
<br><br>
<p class="annee">Equipes R&eacuteserves</p> 
<p class="equipe">
	<?php 
	
	$reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdequipe2 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<280 and rang>220 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php 
								 }
								 
 	?>
</p>
<br><br>
<p class="annee"> Equipes F&eacuteminines </p>
<p class="equipe">
	<?php
	
	 $reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdfem 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<310 and rang>270 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
									   <?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
									  
									  <br>  
									<?php 
								 }
							
						?>
</p>						
<br><br>						
<p class="annee"> Reichels & Juniors </p>
<p class="equipe">
	<?php
	
	 $reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
								FROM bdjeunes 
								WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<360 and rang>300 order by rang"); 
									while ($donnees = $reponse->fetch() )
										{ 
											?>
											<strong>
											   <?php echo $donnees['division']." : "; ?>
											</strong>  
											<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>
											  
											  <br>  
											<?php 
								 		}
								
	?>
</p>
<br><br>
<p class="annee"> Cadets </p>
<p class="equipe">
	<?php
	
	 $reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						FROM bdjeunes 
						WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<380 and rang>=360 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
											<?php echo $donnees['division']." : "; ?>
										</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>	  
									<br>  
									<?php 
								}
							
							?>
</p>
<br><br>
<p class="annee"> Challenges </p>
<p class="equipe">
<?php

$reponse = $bdd->query("SELECT division, champion, comite1, vice_champion, comite2, score1, score2  
						 FROM bdchallenges 
						 WHERE saison='$annee' and titre='vainqueur' and rang>370 order by rang"); 
							while ($donnees = $reponse->fetch() )
								{ 
									?>
									<strong>
										<?php echo $donnees['division']." : "; ?>
									</strong>  
									<?php echo $donnees['champion'] ." " .  $donnees['comite1'].  " - ". $donnees['vice_champion']." " . $donnees['comite2']."  " .$donnees['score1']. " - " . $donnees['score2']; ?>	  
									<br>  
									<?php 
							
							
								}
								
		 require("../../pub/pub_carre.php");	
								
 ?>
</p>