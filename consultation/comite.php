<br/>
<h1><font color="#000000">Comit&eacute; <?php echo $nomComite;?></font> </h1>
<?php 
{print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>

							  <br/>
							  <br/>
<hr />
<p align="center"> 
							 
							  
	<hr />
	<h1><font color="#000000"> Pr&eacute;sentation :</font></h1>
	<p class="texte">
	Le comit&eacute; <?php echo $nomComite; ?> se composait  des <?php //echo $donnees['nbre_dep'];?> d&eacute;partements  suivants :
	<?php
	echo "<br />";
							
	echo $dep1.'<br/>'.$dep2.'<br/>'.$dep3.'<br/>'.$dep4.'<br/>'.$dep5.'<br/>'. $dep6.' '.$dep7.' '.$dep8.' '.$dep9.' '. $dep10.' '.$dep11.' '.$dep12;						
	echo "<br />";
	echo "Depuis la saison 2018-2019 le comité $nomComite a integré la <br /><b> Ligue ".$NomLigueParSigle."</b>";
	echo "<br />";
	echo "<br />";
	echo "----------------------------------------------------------";
	echo"<br />";
	?>
	</P>
	<p class="texte">Quelques chiffres :</p>
							
	<?php 
	/*
	//$nb_equipe_tt=mysql_query("SELECT SUM(siglecomite)
	$nb_equipe_tt=$bdd->query("SELECT COUNT(siglecomite) 
								FROM bdsaisons 
							   WHERE siglecomite='$sigle'"); 
		$nb_equipe_tt=$nb_equipe_tt->fetch();
		//echo $nb_equipe_tt[0]; 
	*/
	?>
	
	<p class="texte18">
	<?php
	echo 
	"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
	.'<strong> Effectif s&eacute;nior : </strong>'.' '.$nbreSeniors.'<br/>'
	.'<strong> Effectif F&eacute;minin : </strong>'.' '.$nbreFeminines.'<br/>'
	.'<strong> Effectif Jeune : </strong>'.' '.$nbreJeunes.'<br/>'
	.'<strong> Effectif dirigeant : </strong>'.' '.$nbreDirigeants.'<br/><br/>';
	?>
	
	
	
<p class="lien"> 
  <?php echo "<a href=../palmares/palmNational/pagePalmComite.php?variable_1=$sigle > Tous les champions de France du comit&eacute; </a> ";?>
</p>
<br />
<hr />
<?php require '../pub/pub_displayHorizontal.php';?>

<hr />
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2018;?>
<form name="form1" method="post" action="page_comite.php?variable_1=(CA)">
 <font color = "#000000" > Choisir une saison : </font>
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		 <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
          <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>">2017-2018</option>
          <option value="page_comite.php?saisonChoisie=2017&variable_1=<?php echo $sigle; ?>">2016-2017</option>
          <option value="page_comite.php?saisonChoisie=2016&variable_1=<?php echo $sigle; ?>">2015-2016</option>
  </select>
</form>
<br />

<h1><font color = "#FF0000" >Palmar&egrave;s Territorial 
    <?php//  $saisonChoisie=$_GET['saisonChoisie'];  ?>
   <?php //echo "$saison1";  ?>
    <?php echo "$saisonChoisie";  ?></font></h1>


 

<p class="texte18">
<?php

$reponse = $bdd->query("SELECT champion, championnat, division 
						FROM bdequipe1 
						WHERE comite1='$sigle' and titre='Champion' and rang <'225' and rang >'165' 
										and saison='$saisonChoisie' and rang2='1' 
										and categorie='A'
						ORDER BY rang "); 

		while ($donnees = $reponse->fetch() )
		{ 
		echo "Champion ".$donnees['championnat'].' '.$donnees['division']." : ".
			 "<strong>".$donnees['champion'].
			 "</strong>"."<br/>";							  
		}?>
</p> 
<p><strong><font color="#000000" size = "5"> <br/>Equipe II<br/></font></strong></p> 

<p class="texte18">
<?php
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$saisonChoisie' and categorie='B' 
						ORDER BY rang "); 

	while ($donnees = $reponse->fetch() )
	{ 				
	echo "Champion ".''.$donnees['championnat'].' '.$donnees['division']." : ".
	"<strong>".$donnees['champion']."</strong>"."<br/>";
	} ?>
	
</p>



 <br>
<font color="#FF0000">_______________________________________________________</font> 

<h1><font color="#000000">Clubs du comit&eacute;</font></h1>
<br />

<h3> Clubs professionnels :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 110, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 120, $bdd);?></p>

<h3>Nationale :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 130, $bdd);?></p>

<h3>F&eacute;d&eacute;rale 1 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 140, $bdd);?></p>

<h3>F&eacute;d&eacute;rale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 150, $bdd);?></p>

<h3>F&eacute;d&eacute;rale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 160, $bdd);?></p>

<!--
honneur 
honneur promotion honneur
honneur promotion
promotion honneur 1serie
1re serie 2me serie
3me serie 4me serie
2me serie 3me serie 4me serie
1re 2me serie 3me serie 4me serie
-->


<?php

if ($sigle == "(BG)" or $sigle == "(N)")
{
?>
<h3>Honneur ou Pr&eacute;-f&eacute;d&eacute;rale :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 170, $bdd);?></p> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 171, $bdd);?></p> 
 
 <h3>Promotion honneur ou R&eacute;gionale 1 :</h3> 
<p class="afficheEquipe"><?php clubsParComite($sigle, "M", 180, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "M", 181, $bdd);?></p>

<h3>1er 2me 3me 4me s&eacute;rie :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 225, $bdd);?></p>
<?php
}
elseif ($sigle == "(CE)" or $sigle == "(PL)")
{
?>
<h3>Honneur / Promotion honneur :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 175, $bdd);?></p>
  
 <h3>1re / 2me S&eacute;rie ou R&eacute;gionale 2 :</h3> 
<p class="afficheEquipe"><?php clubsParComite($sigle, "M", 195, $bdd);?></p>

 <h3>3me / 4me S&eacute;rie ou R&eacute;gionale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 215, $bdd);?></p>
<?php
}
elseif ($sigle == "(AL)")
{
?>
 <h3>Honneur :</h3>
<p class="afficheEquipe"><?php clubsParComite($sigle, "M", 195, $bdd);?></p> 

 <h3>Promotion honneur / 1re S&eacute;rie :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 195, $bdd);?></p>

 <h3>2me / 3me / 4me S&eacute;rie :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 195, $bdd);?></p><?php
}
else
{
?>
 <h3>Honneur ou Pr&eacute;-f&eacute;d&eacute;rale :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 170, $bdd);?></p> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 171, $bdd);?></p> 

 <h3>Promotion honneur ou R&eacute;gionale 1 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 180, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 181, $bdd);?></p>
 
 <h3>1re / 2me S&eacute;rie ou R&eacute;gionale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 190, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 191, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 200, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 195, $bdd);?></p>
 
 <h3>3me / 4me S&eacute;rie ou R&eacute;gionale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 210, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 211, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 220, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 215, $bdd);?></p>
 <?php
}
?>

<h3>Equipes f&eacute;minines :</h3>

<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 281, $bdd);?></p> 
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 285, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 291, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 295, $bdd);?></p>

<?php require '../pub/pub_displayCarre.php';?>