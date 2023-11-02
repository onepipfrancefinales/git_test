 <?php $sigle=$_GET['variable_1'];?>

<?php require ("connection.php") ; ?>  


<br /><br />

<?php
$reponse = mysql_query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' ");
								while ($donnees = mysql_fetch_array($reponse) )
								{ 
								?>
								<h1><strong> <?php echo "Comit&eacute;"?> <?php echo $donnees['nom'];?> </strong></h1>
								<?php
								}
?>

<?php
echo "<h2><p> <strong> Titres nationaux du comit&eacute; </strong></p></h2>";
{print("<img src=\"http://francefinalesrugby.franceserv.fr/images/comites/$sigle.jpg\" border=\"0\">");}
?>

<br /><br /><br />
<h1>
	<?php echo " <strong> Equipes S&eacute;niors</strong>"; ?>  
</h1>
<?php
 // *******         Affichage du palmares A             **********************
$reponse = mysql_query("SELECT saison, division, champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' AND titre='champion' AND championnat='de France'AND categorie='A' AND rang < 225
						ORDER BY saison DESC"); 
								while ($donnees = mysql_fetch_array($reponse) )
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

$reponse = mysql_query("SELECT saison, division, champion  
						FROM bdequipe2 
						WHERE comite1='$sigle' and titre='champion' and championnat='de France' and categorie='B' 
						ORDER BY saison DESC"); // Requête SQL
								while ($donnees = mysql_fetch_array($reponse) )
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

$reponse = mysql_query("SELECT saison, division, champion  
						FROM bdfem 
						WHERE comite1='$sigle'and titre='champion' and categorie='F' 
						ORDER BY saison DESC"); 
							while ($donnees = mysql_fetch_array($reponse) )
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

$reponse = mysql_query("SELECT saison, division, champion  
						FROM bdjeunes 
						WHERE comite1='$sigle' and titre='champion' and championnat='de France'and rang>0 and categorie='D' 
						ORDER BY saison DESC"); 
								while ($donnees = mysql_fetch_array($reponse) )
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

$reponse = mysql_query("SELECT saison, division, champion  
						FROM bdjeunes 
						WHERE comite1='$sigle' and titre='champion' and rang2>2 and categorie='E' order by saison DESC"); 
								while ($donnees = mysql_fetch_array($reponse) )
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
<h1>
	<?php echo " <strong> Challenges </strong>"; ?>
</h1> 
<?php 
$reponse = mysql_query("SELECT saison, division, champion  
						FROM bdchallenges 
						WHERE comite1='$sigle'and titre='vainqueur' and categorie='c' 
						ORDER BY saison DESC"); // Requête SQL
							while ($donnees = mysql_fetch_array($reponse) )
									{ 
									?><h4>
									  <?php echo $donnees['saison']; ?>
									  Vainqueur du challenge
									  <?php echo $donnees['division']; ?>
									  : 
									  <strong><?php echo $donnees['champion']; ?></strong>
									  </h4>
									  <?php
									 }
		mysql_close();?>
	</body>
</html>