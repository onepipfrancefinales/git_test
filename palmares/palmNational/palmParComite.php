<br /><br />

<?php
$reponse = $bdd->query("SELECT * 
						FROM bdcomite 
						WHERE sigle='$sigle' ");
while ($donnees = $reponse->fetch()) {
?>

<?php
}
?>

<?php
echo "<h2><p> <strong> Titres nationaux du comité </strong></p></h2>"; {
	print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\">");
}
?>

<br /><br /><br />
<!-- palmares Equipes I -- categorie A -->
<h1>
	<?php echo " <strong> Equipes Séniors</strong>"; ?>
</h1>
<?php
$table = "bdequipe1";
$categorie = "A";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>

<br /><br />

<!-- palmares Equipes II -- categorie B -->
<h1>
	<?php echo "<strong> Equipes II </strong>"; ?>
</h1>
<?php 
$table = "bdequipe2";
$categorie = "B";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br /><br />

<!-- palmares Feminines -- categorie F -->
<h1>
	<?php echo "<strong> Equipes Féminines </strong>"; ?>
</h1>
<?php
$table = "bdfem";
$categorie = "F";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br /><br />

<!-- palmares Juniors -- categorie D -->
<h1>
	<?php echo " <strong> Reichels & Juniors <BR/></strong>"; ?>
</h1>
<?php
$table = "bdjeunes";
$categorie = "D";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br /><br />

<!-- palmares Cadets -- categorie E -->
<h1>
	<?php echo " <strong> Cadets </strong>"; ?>
</h1>
<?php
$table = "bdjeunes";
$categorie = "E";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>









<br /><br />
<!-- palmares Challenges -- categorie C -->
<h1>
	<?php echo " <strong> Challenges </strong>"; ?>
</h1>
<?php
$table = "bdjeunes";
$categorie = "C";

//palmaresParLigue($sigle, $table, $categorie, $bdd);

$reponse = $bdd->query("SELECT saison, division, champion  
						FROM bdchallenges 
						WHERE comite1='$sigle'and titre='vainqueur' and categorie='c' 
						ORDER BY saison DESC");
while ($donnees = $reponse->fetch()) {
?><h4>
		<?php echo $donnees['saison']; ?>
		Vainqueur du challenge
		<?php echo $donnees['division']; ?>
		:
		<strong><?php echo $donnees['champion']; ?></strong>
	</h4>
<?php
}
?>