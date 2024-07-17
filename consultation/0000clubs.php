
<br />
								
<h2><font size="6" color="#FF0000">
  <?php echo $nomLong;?>
  </font></h2>
				<br/>
				
<h2><font size="6">
  <?php  echo "Ligue".' '.$nomLigue;?>
  </font></h2>
				
<h2> <font color="#000000" size="4"><b>
  <?php echo "( Ex comité".' '.$nomComite.''." )";?>
  </b></font></h2>
<div align="center">
  <?php
				 {print("<img src=\"/../images/blasons200_200/$code.gif\" >");}	
  echo "<br />";
  echo "<br />"; 

if ($smart == true)
$width = "100%";
else
$width = "70%";
?>
</div>
<table border="1" align="center" cellspacing="0" cellpadding="2" width="<?php echo $width;?>" border color="#999999">
  <tr > 
    <td class="titreGauche" colspan="2" width="30%">Identification FFR : </td>
	<td class="saisie"><font color = "#000000" size ="3" width="70%"><?php echo $idFfr;?> </font></td>
  </tr>

 <tr > 
    <td class="titreGauche" colspan="2" width="30%">Création du club : </td>
    <td class="saisieGras" width="70%"> <?php echo $dateCreation;?></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="<?php echo $width;?>" >
  <tr  > 
    <td class="titre" colspan="2" width="100%"> Bureau </td>
  </tr>
  <tr> 
    <td class="titreGauche" width="30%">Président : </td>
    <td class="saisieGras" width="70%"><?php echo $president;?> </td>
  </tr>
  <tr   > 
    <td class="titreGauche" >  Trésorier : </td>
    <td class="saisieGras" > <?php echo $tresorier;?> </td>
  </tr>
  <tr > 
    <td class="titreGauche"> Secrétaire : </td>
    <td class="saisieGras"><?php echo $secretaire;?></td>
  </tr>
  <tr > 
    <td class="titreGauche" > Contact :  </td>
    <td class="saisie"> <?php echo $contact;?></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="<?php echo $width;?>" >
  <tr> 
	<td class="titre" colspan="2" width="70%">Si&egrave;ge</td>
  </tr>
  <tr > 
    <td class="saisieGras" colspan="2"> <?php echo $siege;?></td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2"><?php echo $adresse;?> </td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2" valign="top"><?php echo $cp;?> <?php echo $ville;?></td>
  </tr>
  <tr > 
    <td class="titreGauche" width="30%"> T&egrave;l : </td>
    <td class="saisie" width="70%"> <?php echo $tel;?></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="<?php echo $width;?>" border color="#999999">
  <tr > 
   
  </tr>
  <tr > 
    <td class="titre" colspan="2">	Stade </td>
  </tr>
  <tr >
    <td class="saisieGras" colspan="2" > <?php echo $nomStade;?></td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2"> <?php echo $adresseStade;?></td>
  </tr>
  <tr > 
    <td class="saisie" colspan="2"  valign="top"> <?php echo $cpStade;?> <?php echo $villeStade;?> </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="20%" > T&egrave;l : </td>
    <td class="saisie" width="80%">  <?php echo $telStade;?>  </td>
  </tr>
  <tr > 
    <td  class="titreGauche" >capacité : </td>
    <td class="saisie">  <?php echo $capacite;?> </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="<?php echo $width;?>" >
  <tr > 
    <td class="titre" colspan="3" > Contact </td>
  </tr>
  <tr> 
    <td class="titreGauche" width="25%"> Site Internet : </td>
    <td class="saisieGras" colspan="2" ><a href=" http://<?php echo $site;?>" target="_blank"> <?php echo $site;?> </a></td>
  </tr>
  <tr  > 
    <td class="titreGauche" >Courriel :  </td>
    <td class="saisieGras" colspan="2"> <a href="mailto:<?php echo $donnees['A1616'];?>" oldref=""><?php echo $courriel;?>  </a>	 </td>
  </tr>
  <tr > 
    <td class="titreGauche" > Correspondant : </td>
    <td class="saisieGras" colspan="2"> <?php echo $correspondant;?> </td>
  </tr>
  <tr > 
    <td colspan="3" > 
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr > 
    <td class="titreGauche" > Sigle :</td>
    <td class="saisie" colspan="2">  <?php echo $sigle;?> </td>
  </tr>
  <tr > 
    <td class="titreGauche"> couleurs :</td>
    <td class="saisie" colspan="2"><?php echo $couleurs;?></td>
  </tr>
  <tr > 
    <td colspan="3">&nbsp; </td>
  </tr>
</table>
<br>
<table width="<?php echo $width;?>" border="1" align="center" cellspacing="0" cellpadding="0" >
  <tr > 
    <td class="titre" colspan="2">Section féminine : </td>
  </tr>
  <tr > 
    <td class="titreGauche" width="25%"> Nom/ Entente : </td>
    <td  class="saisie" width="75%"><?php echo $nomEntente;?></td>
  </tr>
  <tr > 
    <td  class="titreGauche"> Niveau :</td>
    <td class="saisie" ><?php echo $niveau;?> </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="<?php echo $width;?>" >
  <tr > 
    <td class="titre">   Dates importantes </td>
  </tr>
  <tr > 
    <td class="info"><?php echo $info1;?> </td>
  </tr>
  <tr > 
    <td class="info"><?php echo $info2;?></td>
  </tr>
  <tr > 
    <td class="info"><?php echo $info3;?> </td>
  </tr>
  <tr >
    <td class="info"><?php echo $info4;?></td>
  </tr>
  <tr > 
    <td class="info"> <?php echo $info5;?> </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="80%" border color="#999999">
  <tr > 
    <td colspan="6" height="25" border color="#000000" bgcolor="#FF0000"> 
      <div align="center"><b><font color="#000000" link="#000000"> 
        <?php
		  echo "<a href=/mise_a_jour/infosclub/modif2.php?idPersonne=$code target=_blank>Modifier la fiche du club</a> ";
		  ?>
        </font></b></div>
    </td>
  </tr>
</table>
<br />
<hr />
<p> 
  <?php //include("pub2.php");  ?>
</p>
<hr />
<h1>Palmar&egrave;s</h1>


<?php
//if (isset ($_GET['smart']))$smart = $_GET['smart'];else $smart=0;
//echo "smart".$smart;
if ($smart == 1 )
require ("../../connect1/connection1.php") ; 
else
require ("../connect1/connection1.php") ;

//****************     Palmares européens      *******************************
nbreTitreEU($nomChampion, $bdd);
if ($nombreTitreEU > 0 ){echo "<h2> Titres Européens </h2>";}?>
<div id="palmares">
  <?php// palmaresEU($nomChampion, $bdd);?>
</div>

<?php  
//****************     Palmares équipes Unes      *******************************
$table="bdequipe1"; $categorie="A";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){	echo "<h2> Equipe Une </h2>";}?>
<div id="palmares">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>
							
<?php  
//****************     Palmares équipes II      *******************************
$table="bdequipe2"; $categorie="B";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){	echo "<h2> Equipe II </h2>";}?>
<div id="palmares">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>
	
<?php  
//****************     Palmares challenges      *******************************
$table="bdchallenges"; $categorie="C";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){echo "<h2> Challenges Nationaux </h2>";}?>
<div id="palmares">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<?php  
//****************     Palmares Reichels & Juniors      *******************************
$table="bdjeunes"; $categorie="D";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){echo "<h2> Reichels & Juniors </h2>";}?>
<div id="palmares">
	<?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<?php  
//****************     Palmares cadets      *******************************
$table="bdjeunes"; $categorie="E";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 )	{echo "<h2> Cadets </h2>";}?>
<div id="palmares">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<br />
<hr />

<p align="center">&nbsp;</p>
<p align="center">

  <!--Saison N -->		 
<h1>Saison   <?php echo $saison-1; ?>  -   <?php echo $saison; ?> </h1>
 <div id="saisonEnCours">
   <?php
   if ($saisonEnCours>0)	echo "- ".$saisonEnCours." -";	else echo "-";
   ?>
 </div>
 <br />
 <hr />				

<h1>Saisons précédentes</h1>
			<p>&nbsp; 
			
<table width="<?php echo $width;?>" bordercolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--Saison N-1 -->
  <tr > 
    <td class="saisonImpaire" width="40%" valign="top"> Saison <?php echo $saison-2; ?> - <?php echo $saison-1; ?>  : </td>
    <td class="saisonImpaireNG" width="60%" >  <?php $saisonRetro = $saison -1;	echo ${"terr".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG" > <?php echo ${"france".$saisonRetro}; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG">&nbsp;</td>
  </tr>
  <!--Saison N-2 -->
  <tr > 
    <td class="saisonPaire" valign="top"> Saison <?php echo $saison-3; ?>- <?php echo $saison-2; ?> : </td>
    <td class="saisonPaireNG" > <?php $saisonRetro = $saison -2;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire"  valign="top">&nbsp;</td>
    <td class="saisonPaireNG"> <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire"  valign="top">&nbsp;</td>
    <td class="saisonPaireNG" >&nbsp;</td>
  </tr>
  <!--Saison N-3 -->
  <tr > 
    <td class="saisonImpaire" valign="top"> Saison <?php echo $saison-4; ?> - <?php echo $saison-3; ?> : </td>
    <td class="saisonImpaireNG" > <?php $saisonRetro = $saison -3;echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  valign="top">&nbsp;</td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
   <tr > 
    <td class="saisonImpaire" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG">&nbsp;</td>
  </tr>
   <!--Saison N-4 -->
   <tr > 
    <td class="saisonPaire" valign="top"> Saison <?php echo $saison-5; ?>- <?php echo $saison-4; ?> : </td>
    <td class="saisonPaireNG" > <?php $saisonRetro = $saison -4;echo ${"terr".$saisonRetro};?>  </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top">&nbsp;</td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
   <tr > 
    <td class="saisonPaire"  valign="top">&nbsp;</td>
    <td class="saisonPaireNG" >&nbsp;</td>
  </tr>
   <!--Saison N-5 -->
   <tr > 
    <td class="saisonImpaire" valign="top"> Saison   <?php echo $saison-6; ?> -  <?php echo $saison-5; ?>: </td>
    <td class="saisonImpaireNG" > <?php $saisonRetro = $saison -5;	echo ${"terr".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp;</td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp;</td>
    <td class="saisonImpaire" >&nbsp;</td>
  </tr>
  <!--Saison N-6 -->
  <tr > 
    <td class="saisonPaire" valign="top"> Saison  <?php echo $saison-7; ?> - <?php echo $saison-6; ?> : </td>
	<td class="saisonPaireNG" > <?php $saisonRetro = $saison -6; echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top">&nbsp;</td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr> 
    <td class="saisonPaire" valign="top">&nbsp;</td>
    <td class="saisonPaireNG">&nbsp; </td>
  </tr>
  <!--Saison N-7 -->
  <tr > 
    <td class="saisonImpaire" valign="top"> Saison <?php echo $saison-8; ?> - <?php echo $saison-7; ?> : </td>
    <td class="saisonImpaireNG"  > <?php $saisonRetro = $saison -7;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp; </td>
    <td class="saisonImpaireNG"> <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top">&nbsp; </td>
    <td class="saisonImpaire" >&nbsp;</td>
  </tr>
  <!--Saison N-8 -->
  <tr > 
    <td class="saisonPaire"  valign="top"> Saison <?php echo $saison-9; ?> - <?php echo $saison-8; ?> : </td>
    <td class="saisonPaireNG"  ><?php $saisonRetro = $saison -8;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top">&nbsp;</td>
    <td class="saisonPaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top"> </td>
    <td class="saisonPaireNG" >&nbsp; </td>
  </tr>
  <!--Saison N-9 -->
  <tr > 
    <td class="saisonImpaire"  valign="top"> Saison <?php echo $saison-10; ?> - <?php echo $saison-9; ?>: </td>
    <td class="saisonImpaireNG"  ><?php $saisonRetro = $saison -9; echo ${"terr".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  valign="top">&nbsp; </td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  valign="top">&nbsp; </td>
    <td class="saisonImpaire" >&nbsp;</td>
  </tr>
  <!--Saison N-10 -->
  <tr > 
    <td class="saisonPaire"  valign="top"> Saison <?php echo $saison-11; ?> - <?php echo $saison-10; ?>: </td>
    <td class="saisonPaireNG"  > <?php $saisonRetro = $saison -10; echo ${"terr".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonPaire"  valign="top">&nbsp;</td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonPaire"  valign="top"> </td>
    <td class="saisonPaireNG" > &nbsp;</td>
  </tr>
  <!--Saison N-11 -->
  <tr > 
    <td class="saisonImpaire"  valign="top"> Saison<?php echo $saison-12; ?> - <?php echo $saison-11; ?>: </td>
    <td class="saisonImpaireNG"  > <?php $saisonRetro = $saison -11;	echo ${"terr".$saisonRetro}; ?>  </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top"> </td>
    <td class="saisonImpaireNG" > &nbsp;<?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  valign="top"> </td>
    <td class="saisonImpaireNG" >&nbsp; </td>
  </tr>
   <!--Saison N-12 -->
  <tr > 
    <td class="saisonPaire" valign="top"> Saison <?php echo $saison-13; ?>- <?php echo $saison-12; ?> : </td>
    <td class="saisonPaireNG"> <?php $saisonRetro = $saison -12;	echo ${"terr".$saisonRetro};  ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top" height="17"> </td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" valign="top"> </td>
    <td class="saisonPaireNG">&nbsp; </td>
  </tr>
   <!--Saison N-13 -->
  <tr > 
    <td class="saisonImpaire" valign="top"> Saison <?php echo $saison-14; ?>- <?php echo $saison-13; ?> : </td>
    <td class="saisonImpaireNG" ><?php $saisonRetro = $saison -13; echo ${"terr".$saisonRetro};  ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top"> </td>
    <td class="saisonImpaireNG" ><?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonImpaire" valign="top"></td>
    <td class="saisonImpaireNG" >&nbsp;</td>
  </tr>
</table>
	<p>
</p>
<hr />
<p> 
  <?php
/*  
  if ($smart == 1)
  {
include("../../pub/pub4.php");  
  }
else
{
include("../pub/pub4.php");
}
*/
 ?>
</p>
</html>









