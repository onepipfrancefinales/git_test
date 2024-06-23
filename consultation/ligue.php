<?php
$terr_annee =("terr_".''.$saison);?>
<br />
<h1>Ligue <?php echo $nomLigue;?></h1>

<?php 
require ("../connect/connexion1.php") ; 
{print("<img src=\"../images/ligues/$sigleLigue.jpg\" border=\"0\" target=_top>");}
echo "<br/><br/><br/>";
?>
							  
<p>&nbsp;</p>
<p class="texteGras">Président : </p>
<p class="texte"> 
   <?php  echo $president;?></p>
<?php
 {print("<img src=\"../images/presidents/$idLigue.gif\" border=\"0\" target=_top>");}

  
   echo "<br />";?>
  <p class="texteGras">Adresse: </p>
 <p class="texte"> 
  <?php
   echo $batiment;
   echo "<br />";
   echo $adresse;
   echo "<br />";
   echo $cp.'  '.$ville;
   echo "<br />";
  ?>
  </p>

<br>
<br>
<p class="texteGras">Contacts </p>
<p class="texte"> <b>T&eacute;l :</b> 
  <?php echo $tel; ?>
  <br />
  <b>Fax :</b> 
  <?php echo $fax; ?>
  <br />
  <b>courriel :</b> 
  <br/><br/>
  <b> Site Internet :</b> 
 
</p>
<br/>
  <br/>

<hr />

							  
<hr />

<h1> Présentation :<br></h1>
							
<p class="texte"> La ligue <?php echo $nomLigue; ?> se compose <br/>
	des anciens comit&eacute;s suivants : <br />
  <?php
	echo "<br />";
	$sigle = 0;
							
	if($comite1 !=null)
	{
	 $id = $comite1;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite2 !=null)
	{
	 $id = $comite2;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite3 !=null)
	{
	 $id = $comite3;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
	
	if($comite2 !=null)
	{
	 $id = $comite4;
	 nomComite($sigle, $id,$bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite5 !=null)
	{
	 $id = $comite5;
	 nomComite($sigle, $id, $bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	if($comite6 !=null)
	{
	 $id = $comite6;
	 nomComite($sigle, $id, $bdd);
	 {print("<img src=\"../images/comites/$sigleComite.jpg\" height=\"30\" width=\"30\" border=\"0\" target=_top>");}
	 echo "  ".$nomComite;echo "  (".$nbreClubs." clubs)";echo "<br />";
	}
							
	echo "<br />";
	//echo "Depuis la saison 2018-2019 le comité $nomComite a integré la ligue "/*.$nomLigue*/;
	echo "<br />";
	echo"<br/>";
	echo "----------------------------------------------------------";
	echo"<br/>";
	?>
</P>
	<h1> Quelques chiffres : </h1>
		<br>												
<?php 

$nb_equipe_tt = $bdd->query("
				SELECT COUNT(siglecomite) 
				FROM bdsaisons 
				WHERE siglecomite='$sigle'"); 
				
	$nb_equipe_tt=$nb_equipe_tt->fetch();?>
	
	
<p class="texte18">
<?php
echo 
"<strong> Nbre de clubs : </strong>".' '.$nb_equipe_tt[0].'<br/><br/>'
.'<strong> Effectif s&eacute;niors : </strong>'.' '.number_format ($nbreSeniors).'<br/>'.'<br/>'
.'<strong> Effectif F&eacute;minins : </strong>'.' '.number_format ($nbreFeminines).'<br/>'.'<br/>'
.'<strong> Effectif Jeunes : </strong>'.' '.number_format ($nbreJeunes+$nbreFemininesJeunes).'<br/>'
.'<strong> dont </strong>'.' '.    number_format ($nbreFemininesJeunes).' f&eacute;minines'.'<br/>'
.'<strong>  et </strong> '.number_format ($nbreJeunes).' jeunes hommes'.'<br/>'.'<br/>'
.'<strong> Effectif dirigeants : </strong>'.' '.number_format ($nbreDirigeants).'<br/><br/>';
?>
</p>

<?php 

echo"<br/>";
echo "--------------------------------------------------------------";
echo"<br/>";

structureLigue($idLigue, $bdd);
?>

<h1  > Structure de la ligue :<br></h1>
<table width="407" class="marginAuto">
 <tr> 
    <td width="150" class="texte18">  </td>
    <td width="80" class="texte18"> <span class=" size2">(En nombre de clubs) </span></td>
 </tr>
 <tr> 
    <td width="150" class="texte18">Professionnel : </td>
    <td width="80" class="texte18"><?php echo ($d110+$d120);?></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td class="texte18">  Nationale : </td>
    <td class="texte18"><?php echo ($d130+$d135);?></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr />
    </td>
  </tr>
  
  <tr> 
    <td class="texte18">Fédérale  1 : </td>
    <td class="texte18"><?php echo $d140;?></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td class="texte18">Fédérale 2 :</td>
    <td class="texte18"><?php echo $d150;?></td>
  </tr>
  <tr> 
    <td class="texte18">Fédérale 3 :</td>
    <td class="texte18">  <?php echo $d160;?></td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <hr />
    </td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td class="texte18">Régional 1 : </td>
    <td class="texte18"> <?php if($d170 > 0) echo $d170;?></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
  </tr>
  <tr> 
    <td class="texte18">Régional 2 : </td>
    <td class="texte18">  <?php if($d180 > 0) echo $d180;?></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td colspan="4" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td class="texte18">Régional 3 :</td>
    <td class="texte18"><?php if($d190 >0) echo $d190;?> </td>
  </tr>
 
  <tr> 
    <td colspan="2"></td>
  </tr>
<tr> 
    <td colspan="2"> <hr /></td>
  </tr>
  <tr> 
    <td class="texte18">F&eacute;minines Elite:</td>
    <td class="texte18"><?php  if($d281 >0) echo ($d281+$d285); ?></td>
  </tr>
    <tr> 
    <td class="texte18">F&eacute;minines F&eacute;d&eacute;rale:</td>
    <td class="texte18"><?php  if($d291 >0) echo ($d291+$d301); ?></td>
  </tr>
</table>

<br />
<hr />
<br />
<hr />

<p align="center"> 
  <?php    include("../pub/pub_carre.php");
    echo"<br/>";
	?>
  <font color="#FF0000"> <br>
  _______________________________________________________</font> </p>
<br>

<br>
<h1><font color="#000000">Palmars national </font></h1>
<h3><font size="3"> (Les dix derniers titres de la ligue)</font></h3>
<p class="texte18">
<?php
$sigle = '('.$sigleLigue.')';

$reponse =  $bdd->query("
			SELECT saison,championnat, division, champion 
			FROM bdequipe1 
			WHERE comite1='$sigle'
			AND titre='Champion' 
			AND  championnat='de France' 
			ORDER BY saison 
			DESC limit 0,10"); 
									
	while ($donnees = $reponse->fetch() )
		{ 
		?>
		<?php echo $donnees['saison'].' Champion '. $donnees['championnat'].' '.$donnees['division'].' : <strong> '.$donnees['champion'].'</strong>' ; ?>
		<?php
		echo "<br />";
		} 
?>

<br />
</p>

 <p class="lien">      
<?php
echo "<a href=../palmares/palmNational/pagePalmLigue.php?idLigue=$idLigue > Tous les champions de France de la ligue </a> ";
?>
   
</p>

<br />
<hr />
<?php if (isset($_GET['saisonChoisie'])) $saisonChoisie=$_GET['saisonChoisie']; else $saisonChoisie=2020;?>
<br />
<!--
<form name="form1" method="post" action="page_comite.php?variable_1=<?php echo $sigle; ?>">
  Choisir une saison : 
  <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
		 <option value="page_ligue.php?saisonChoisie=2018&idLigue=<?php echo $idLigue; ?>"><?php echo $saisonChoisie-1;echo "-".$saisonChoisie; ?></option>
         <option value="page_ligue.php?saisonChoisie=2018&idLigue=<?php echo $idLigue; ?>">2018-2019</option>
  </select>
</form>
-->
<h1 ><font color="#000000">Palmar&egrave;s R&eacute;gional 
  <?php
  //  $saisonChoisie=$_GET['saisonChoisie'];  
  //echo "$saison1";  
  $saisonChoisie = 2022;
  echo $saisonChoisie; 
?>
<font></h1>

<p class="texte18"> 
<?php
  //**** palmarès equipe I de la saison passée *****

$reponse =  $bdd->query("
			SELECT champion, championnat, division 
			FROM bdequipe1 
			WHERE comite1='$sigle' 
			AND titre='Champion' 
			AND rang <'225' 
			AND rang >'165' 
			AND saison='$saisonChoisie' 
			AND rang2='1' 
			AND categorie='A'
			ORDER BY rang "); 

	while ($donnees = $reponse->fetch() )
	{ 											
	 echo "Champion ".$donnees['championnat'].' '.$donnees['division'].' '.":";  
 ?>
 <strong> 
  <?php echo $donnees['champion']; ?>
  </strong>
  <br/>
  <?php
	}											
?>
  <strong> 
	<?php
	echo "<br/>";
	echo "Equipe II";
	echo "<br/>";
	?>
  </strong> 
  <?php
//**** palmarès équipe II de la saison passée*****
 
$reponse = $bdd->query("SELECT champion, championnat, division
						FROM bdequipe2 
						WHERE comite1='$sigle'
						AND titre='Champion' 
						AND saison='$saisonChoisie' 
						AND rang2='2'  and categorie='B' 
						ORDER BY rang "); 
echo"<br />";
 

		while ($donnees = $reponse->fetch() )
				{ 				
  echo "Champion ".$donnees['championnat'].' '.$donnees['division'];
  
  ?>
  : <strong> 
  <?php echo $donnees['champion']; ?>
  </strong> 
  <?php
					 echo "<br/>";
				 } 
				 
?>
</p>
<?php
echo "<br/>";
?>
 
 <p class="lien">     
 <?php
echo "<a href=\"../../palmares/palmTerritorial/tableauPalmReg.php?idLigue=$idLigue\" target=\"_top\"> Tous les champions r&eacute;gionaux de la ligue</a> ";
?>
      </p> 
<p align="center">
<br>
  <br>
  <hr> <br>
  <br>
  <?php   include("../pub/pub4.php");
    ?>
  <br>
<font color="#FF0000">_______________________________________________________</font> 
<br>
<h1>Clubs de la ligue</h1>
<br />
<h3> Clubs professionnels :</h3>
 <p class="afficheEquipe"> 
 <?php  
 clubsParLigue($idLigue, "M", 110, $bdd);
 clubsParLigue($idLigue, "M", 120, $bdd);
 ?>
 </p>
<h3> Nationales :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 130, $bdd); ?></p>

<h3>Fédérale 1 :</h3> 
<p class="afficheEquipe"> <?php clubsParLigue($idLigue, "M", 140, $bdd);?></p>
<h3>Fédérale 2 :</h3> 
<p class="afficheEquipe"> <?php clubsParLigue($idLigue, "M", 150, $bdd);?></p>

<h3>Fédérale 3 :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 160, $bdd);?></p>
<br />
<h3>
 

<h3>Régionale 1 :</h3>
 <p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 170, $bdd);?></p> 
 
 <h3>Régionale 2 :</h3> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 180, $bdd);?></p>

<h3>Régionale 3 :</h3> 
 <p class="afficheEquipe"><?php clubsParLigue($idLigue, "M", 190, $bdd);?></p>

<h3>Equipes féminines :</h3>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 281, $bdd);?></p> 
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 285, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 291, $bdd);?></p>
<p class="afficheEquipe"><?php clubsParLigue($idLigue, "F", 295, $bdd);?></p>
</p>
<p>&nbsp;</p>
<hr /><hr />
<h3>Que sont ils devenus ? : </h3>
<p> 
  <?php // require ("../connect1/connection1.php") ;?>
  <?php

//$query = "	SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url, bdclubs.logo, bdclubs.url, bdclubs.fusion 
//			FROM bdsaisons, bdclubs 
//			WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle' and (terr_2014='F' )";
//				$result = mysql_query($query);
//				while($row = mysql_fetch_array($result))
//						{                                    
//						echo "<img src=\"$row[4]\">";
//						echo "  </b> <a href=\"$row[3]\">$row[1]</a>    ($row[5])";
//						echo "<br>";
//						}
//mysql_close(); ?>
  <?php
//echo "<br/>";
echo "<br/>";
?>
</p>
<h3>Clubs en sommeils : </h3>
<p>


<?php require ("../connect/connexion1.php") ; ?>



<?php  // include("pub_carre.php");  ?>

	
