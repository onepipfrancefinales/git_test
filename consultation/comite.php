<br>
<h1>Comité <?php echo $nomComite;?> </h1>
<?php 
{print("<img src=\"/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>

							  <br>
							  <br>
<hr>
<p class="center"> 
							 
							  
	<hr>
	<h1>Présentation :</h1>
	<p class="texte">
	Le comité <?php echo $nomComite; ?> se composait  des <?php //echo $donnees['nbre_dep'];?> départements  suivants :
	<?php
	echo "<br>";
							
	echo $dep1.'<br>'.$dep2.'<br>'.$dep3.'<br>'.$dep4.'<br>'.$dep5.'<br>'. $dep6.' '.$dep7.' '.$dep8.' '.$dep9.' '. $dep10.' '.$dep11.' '.$dep12;						
	echo "<br>";
	echo "Depuis la saison 2018-2019 le comité $nomComite a integré la <br><b> Ligue ".$NomLigueParSigle."</b>";
	echo "<br>";
	echo "<br>";
	echo "----------------------------------------------------------";
	echo"<br>";
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
	"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br><br>'
	.'<strong> Effectif sénior : </strong>'.' '.$nbreSeniors.'<br>'
	.'<strong> Effectif Féminin : </strong>'.' '.$nbreFeminines.'<br>'
	.'<strong> Effectif Jeune : </strong>'.' '.$nbreJeunes.'<br>'
	.'<strong> Effectif dirigeant : </strong>'.' '.$nbreDirigeants.'<br><br>';
	?>
	
	
	
<p class="lien"> 
  <?php 
 if ($mode != "smart") 
{  echo "<a href=../palmares/palmNational/pagePalmComite.php?variable_1=$sigle&mode=$mode> Tous les champions de France du comité </a> ";}
else
{ echo "<a href=../smart/smartPage.php?variable_1=$sigle&mode=smart&page=palmaresParComite> Tous les champions de France du comité </a> ";}
?>
</p>
<br>
<hr>


<hr>
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2018;?>
<form name="form1" method="post" action="page_comite.php?variable_1=(CA)">
  Choisir une saison : 
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		 <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
          <option value="page_comite.php?saisonChoisie=2018&variable_1=<?php echo $sigle; ?>">2017-2018</option>
          <option value="page_comite.php?saisonChoisie=2017&variable_1=<?php echo $sigle; ?>">2016-2017</option>
          <option value="page_comite.php?saisonChoisie=2016&variable_1=<?php echo $sigle; ?>">2015-2016</option>
  </select>
</form>
<br>

<h1 class="colorRed">Palmarès Territorial >
    <?php //  $saisonChoisie=$_GET['saisonChoisie'];  ?>
   <?php //echo "$saison1";  ?>
    <?php echo $saisonChoisie;  ?></h1>


 

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
			 "</strong>"."<br>";							  
		}?>
</p> 
<p class="bold size5"> <br>Equipe II<br></p> 

<p class="texte18">
<?php
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'and titre='Champion' and saison='$saisonChoisie' and categorie='B' 
						ORDER BY rang "); 

	while ($donnees = $reponse->fetch() )
	{ 				
	echo "Champion ".''.$donnees['championnat'].' '.$donnees['division']." : ".
	"<strong>".$donnees['champion']."</strong>"."<br>";
	} ?>
	
</p>



 <br>
<hr class="colorRed">

<h1>Clubs du comité</h1>
<br>

<h3> Clubs professionnels :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 110, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 120, $mode, $bdd);?></p>

<h3>Nationale :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 130, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 135, $mode, $bdd);?></p>

<h3>Fédérale 1 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 140, $mode, $bdd);?></p>

<h3>Fédérale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 150, $mode, $bdd);?></p>

<h3>Fédérale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 160, $mode, $bdd);?></p>


<?php
?>
 <h3>Régionale 1 :</h3>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 170, $mode, $bdd);?></p> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 171, $mode, $bdd);?></p> 

 <h3>Régionale 2 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 180, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 181, $mode, $bdd);?></p>
 
 <h3>Régionale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 190, $mode, $bdd);?></p>
 <p class="afficheEquipe"><?php clubsParComite($sigle, "M", 191, $mode, $bdd);?></p>
 

 <?php

?>

<h3>Equipes féminines :</h3>

<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 281, $mode, $bdd);?></p> 
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 285, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 291, $mode, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParComite($sigle, "F", 295, $mode, $bdd);?></p>

