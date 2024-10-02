<br ><br>

<?php
echo "<h1><p> <strong> Titres nationaux de la ligue <br />".$nomLigue."</strong></p></h1>";

{print("<img src=\"../../images/ligues/$sigleLigue.jpg\" border=\"0\">");}

$sigle = "(".$sigleLigue.")"; 

?>

<br><br><br>
<h1>
	<?php echo " <strong> Equipes Séniors</strong>"; ?>  
</h1>
<?php
 // *******         Affichage du palmares A             **********************
 $table = "bdequipe1";
 $categorie ="A";
 
 palmaresParLigue($sigle, $table, $categorie, $bdd);
?>

<br /><br />
<h1>
	<?php echo "<strong> Equipes II </strong>";?>
</h1>

<?php //*******************       Palmares de la categorie B      *******************
$table = "bdequipe2";
$categorie ="B";

palmaresParLigue($sigle, $table, $categorie, $bdd);
 ?>
<br /><br />
<h1>
	<?php echo "<strong> Equipes Féminines </strong>";?>
</h1>
<?php
//*********      palmares de la categorie F     ****************
$table = "bdfem";
$categorie ="F";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br><br>
<h1>
<?php echo " <strong> Reichels & Juniors <BR/></strong>";?>
</h1>

<?php
//********   Palmares de la categorie D  **********
$table = "bdjeunes";
$categorie ="D";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>

											
<br><br >

<h1>						 
<?php echo " <strong> Cadets </strong>"; ?>
</h1>

<?php
//********* palmares de la categorie E ********
$table = "bdjeunes";
$categorie ="E";

palmaresParLigue($sigle, $table, $categorie, $bdd);
?>
<br><br >										 
