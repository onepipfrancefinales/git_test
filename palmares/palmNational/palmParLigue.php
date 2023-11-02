<?php require ("../../connect1/connection1.php") ; ?>  


<br /><br />


<?php
echo "<h1><p> <strong> Titres nationaux de la ligue <br />".$nomLigue."</strong></p></h1>";

{print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\">");}

$sigle = "(".$sigleLigue.")"; 

?>

<br /><br /><br />
<h1>
	<?php echo " <strong> Equipes S&eacute;niors</strong>"; ?>  
</h1>
<?php
 // *******         Affichage du palmares A             **********************
$reponse = $bdd->query("SELECT saison, division, champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' AND titre='champion' AND championnat='de France'AND categorie='A' AND rang < 225
						ORDER BY saison DESC"); 
								while ($donnees = $reponse->fetch() )
										{ 
											?><h4>
											<?php echo $donnees['saison']; ?>
											Champion de France 
											<?php echo $donnees['division']; ?>
											:<strong> 
											<?php echo $donnees['champion']; ?>
											</strong></h4>
											<?php
										 }
?>

<br /><br /><h1>
	<?php echo "<strong> Equipes II </strong>";?>
</h1>

<?php //*******************       Palmares de la categorie B      *******************

$reponse = $bdd->query("SELECT saison, division, champion  
						FROM bdequipe2 
						WHERE comite1='$sigle' and titre='champion' and championnat='de France' and categorie='B' 
						ORDER BY saison DESC"); 
								while ($donnees = $reponse->fetch() )
										{ 
										?>
										<h4><?php echo $donnees['saison']; ?>
										Champion de France 
										<?php echo $donnees['division']; ?>
										: <strong> 	<?php echo $donnees['champion']; ?>	</strong></h4>
										  <?php
										 }?>
<br /><br />
<h1>
	<?php echo "<strong> Equipes F&eacute;minines </strong>";?>
</h1>
<?php
//*********      palmares de la categorie F     ****************

$reponse = $bdd->query("SELECT saison, division, champion  
						FROM bdfem 
						WHERE comite1='$sigle'and titre='champion' and categorie='F' 
						ORDER BY saison DESC"); 
							while ($donnees = $reponse->fetch() )
									{ 
									?>
									 <h4><?php echo $donnees['saison']; ?>
									  Champion de France
									  <?php echo $donnees['division']; ?>
									  : 
									  <strong><?php echo $donnees['champion']; ?></strong>
									  </h4>
									  <?php
									 }?>
<br /><br />
<h1>
<?php echo " <strong> Reichels & Juniors <BR/></strong>";?>
</h1>

<?php
//********   Palmares de la categorie D  **********

$reponse = $bdd->query("SELECT saison, division, champion  
						FROM bdjeunes 
						WHERE comite1='$sigle' and titre='champion' and championnat='de France'and rang>0 and categorie='D' 
						ORDER BY saison DESC"); 
								while ($donnees = $reponse->fetch() )
											{ 
											?><h4>
											<?php echo $donnees['saison']; ?>
											  Champion de France
											  <?php echo $donnees['division']; ?>
											  : 
											  <strong><?php echo $donnees['champion']; ?></strong>
											  </h4>
											  <?php
											 }?>
<br /><br />
<h1>						 
<?php echo " <strong> Cadets </strong>"; ?>
</h1>

<?php
//********* palmares de la categorie E ********

$reponse =$bdd->query("SELECT saison, division, champion  
						FROM bdjeunes 
						WHERE comite1='$sigle' and titre='champion' and rang2>2 and categorie='E' order by saison DESC"); 
								while ($donnees = $reponse->fetch() )
										{ 
										?>
										<h4><?php echo $donnees['saison']; ?>
										  Champion de France
										  <?php echo $donnees['division']; ?>
										  : 
										  <strong><?php echo $donnees['champion']; ?></strong></h4>
										   <?php
										 }?>
<br /><br />										 

	</body>
</html>