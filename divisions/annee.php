<?php $annee = $_POST['saison']; ?>
<?php require ("../connect/connection1.php") ; ?>
<p class="annee">Equipes s&eacuteniors</p> 
<p class="equipe"><br>
  <?php $reponse = mysql_query("	SELECT division, champion, comite1
									FROM bdequipe1 
									WHERE saison='$annee' and titre='champion' and championnat='de France'and rang<230 order by rang"); 
										while ($donnees = mysql_fetch_array($reponse) )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												 ?>
  <br/>
  <?php
											}
	?>
</p>

<br/>
<p class="annee">Equipes R&eacuteserves<br>
</p> 
<p class="equipe"><br>
  <?php $reponse = mysql_query("	SELECT division, champion, comite1 
									FROM bdequipe2 
									WHERE saison='$annee' and titre='champion' and championnat='de France' and rang<280 and rang>220 
									ORDER BY rang"); 
										while ($donnees = mysql_fetch_array($reponse) )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												 ?>
  <br/>
  <?php
											 }
	?>
</p>
<br/>
<br/>
<p class="annee">Equipes F&eacuteminines</p> 
<p class="equipe">
<br/>
  	<?php $reponse = mysql_query("SELECT division, champion, comite1 
						FROM bdfem 
						WHERE saison='$annee'and titre='champion' and categorie='F' order by rang"); 
										while ($donnees = mysql_fetch_array($reponse) )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												 ?>	
												<br/>
												<?php
											 }
	?>
</p>	
  <br/><br/>
 <p class="annee">Reichels & Juniors</p> 
  <br/>
<p class="equipe"> 
	<?php $reponse = mysql_query("	SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' and rang<360 and rang>300 order by rang"); // Requ�te SQL
										while ($donnees = mysql_fetch_array($reponse) )
											{ 
											echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
											 ?>	
											<br/>
											<?php
											 }

	?>
</p>
<br/><br/>
<p class="annee">Cadets</p>  
  <br/>
<p class="equipe">  
	<?php $reponse = mysql_query("	SELECT division, champion, comite1 
									FROM bdjeunes 
									WHERE saison='$annee' and titre='champion' and rang<380 and rang>=360 and rang2<380 and rang2>=360 order by rang"); // Requ�te SQL
											while ($donnees = mysql_fetch_array($reponse) )
														{ 
															echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
															 ?>	
															<br/>
															<?php
														 }

	?>
</p>
  <br/><br/>
<p class="annee"> Challenges</p> 
<br/>
<p class="equipe"> 
	<?php $reponse = mysql_query("	SELECT division, champion, comite1
									FROM bdchallenges 
									WHERE saison='$annee'and titre='vainqueur' and rang>370 order by rang"); 
										while ($donnees = mysql_fetch_array($reponse) )
											{ 
												echo $donnees['division']." : ".  $donnees['champion']."  ". $donnees['comite1'];
												?>	
												<br/>
												<?php
										 	}
	mysql_close(); ?>
</p>
 




