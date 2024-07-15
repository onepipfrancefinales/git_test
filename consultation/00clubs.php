<br>							
<h1 class="colorRed">  <?php echo $nomLong;?> </h1>
<br>
				
<h1 class="colorBlack"> <?php  echo "Ligue".' '.$nomLigue;?></h1>
				
<h2 class="size4"><b>  <?php echo "( Ex comité".' '.$nomComite.''." )";?>  </b></h2>
<div class="center">
  <?php {print("<img src=\"/../images/blasons200_200/$code.gif\" >");}	
  echo "<br>";
  echo "<br>"; 

if ($smart == true)
$width = "100%";
else
$width = "70%";
?>
</div>
<table class="marginAuto borderWidth1 borderColorBlack" width="<?php echo $width;?>" >
  <tr > 
    <td class="titreGauche" colspan="2" width="30%">Identification FFR : </td>
	<td class="saisie" width="70%"><?php echo $idFfr;?> </td>
  </tr>

 <tr > 
    <td class="titreGauche" colspan="2" width="30%">Création du club : </td>
    <td class="saisieGras" width="70%"> <?php echo $dateCreation;?></td>
  </tr>
</table>
<br>
<table class="marginAuto borderWidth1 borderColorBlack" width="<?php echo $width;?>" >
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
<table class="marginAuto borderWidth1"  width="<?php echo $width;?>" >
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
    <td class="saisie" colspan="2" ><?php echo $cp;?> <?php echo $ville;?></td>
  </tr>
  <tr > 
    <td class="titreGauche" width="30%"> T&egrave;l : </td>
    <td class="saisie" width="70%"> <?php echo $tel;?></td>
  </tr>
</table>
<br>
<table class="marginAuto borderWidth1"  width="<?php echo $width;?>" >
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
    <td class="saisie" colspan="2"  > <?php echo $cpStade;?> <?php echo $villeStade;?> </td>
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
<table class="marginAuto borderWidth1"   width="<?php echo $width;?>" >
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
<table width="<?php echo $width;?>" class="marginAuto borderWidth1" >
  <tr > 
    <td class="titre" colspan="2">Section f&eacute;minine : </td>
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
<table class="marginAuto borderWidth1" width="<?php echo $width;?>" >
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
<table class="marginAuto borderWidth1" width="80%" >
  <tr > 
    <td colspan="6" class="backgroundRed borderColorBlack"> 
      <div align="center"><b><font color="#000000" link="#000000"> 
        <?php echo "<a href=/mise_a_jour/infosclub/mdp.php?idClub=$code target=_blank>Modifier la fiche du club</a> "; ?>
        </font></b></div>
    </td>
  </tr>
</table>
<br>

<p> 
  <?php //include("pub2.php");  ?>
</p>
<?php if ($smart != true )
	{?>
	<hr width= "70%" color="red" >
	<?php ;} ?>

<h1>Palmarès</h1>


<?php
//if (isset ($_GET['smart']))$smart = $_GET['smart'];else $smart=0;
//echo "smart".$smart;
if ($smart == 1 )
require ("../../connect/connexion1.php") ; 
else
require ("../connect/connexion1.php") ;

//****************     Palmares européens      *******************************
$table="bdeurope";
nbreTitreEU($nomChampion, $bdd);
if ($nombreTitreEU > 0 ){echo "<h2> Titres Europ&eacute;ens </h2>";}?>
<div id="palmares" ass="center">
  <?php palmaresEU($nomChampion, $bdd);?>
</div>

<?php  
//****************     Palmares équipes Unes      *******************************
$table="bdequipe1"; $categorie="A";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){	echo "<h2> Equipe Une </h2>";}?>
<div id="palmares" class="center">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>
							
<?php  
//****************     Palmares équipes II      *******************************
$table="bdequipe2"; $categorie="B";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){	echo "<h2> Equipe II </h2>";}?>
<div id="palmares" class="center">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>
	
<?php  
//****************     Palmares challenges      *******************************
$table="bdchallenges"; $categorie="C";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){echo "<h2> Challenges Nationaux </h2>";}?>
<div id="palmares"  class="center">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<?php  
//****************     Palmares Reichels & Juniors      *******************************
$table="bdjeunes"; $categorie="D";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 ){echo "<h2> Reichels & Juniors </h2>";}?>
<div id="palmares" class="center">
	<?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<?php  
//****************     Palmares cadets      *******************************
$table="bdjeunes"; $categorie="E";
nbreTitre($nomChampion, $table, $categorie, $bdd);
if ($nombreTitre > 0 )	{echo "<h2> Cadets </h2>";}?>
<div id="palmares" class="center">
  <?php palmares($nomChampion, $table, $categorie, $bdd);?>
</div>

<br>

<?php if ($smart != true )
	{?>
	<hr width= "70%" color="red" >
	<?php ;} ?>


<p align="center">

  <!--Saison N -->		 
<h1>Saison   <?php echo $debutSaison; ?>  -   <?php echo $finSaison; ?> </h1>
 <div id="saisonEnCours">
   <?php
   if ($saisonEnCoursChiffre > 0)	echo "- ".$saisonEnCours." -";	else echo "-";
   ?>
 </div>
 <br>
<?php if ($smart != true )
	{?>
	<hr width= "70%" color="red" >
	<?php ;} ?>

<h1>Saisons précédentes</h1>

			<p>&nbsp; 
		<?php //echo "code : ".$code;?>	<?php //echo "code : ".$terr2019;
  ?>
<table width="<?php echo $width;?>" bordercolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--Saison N-1 -->
  <tr > 
    <td class="saisonImpaire" width="40%" > Saison <?php echo $debutSaison-1; ?> - <?php echo $finSaison-1; ?>  : </td>
    <td class="saisonImpaireNG" width="60%" >  <?php $saisonRetro = $finSaison-1 ;	echo ${"terr".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp;</td>
    <td class="saisonImpaireNG" > <?php echo ${"france".$saisonRetro}; ?>
    </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp;</td>
    <td class="saisonImpaireNG">&nbsp;</td>
  </tr>
  <!--Saison N-2 -->
  <tr > 
    <td class="saisonPaire" > Saison <?php echo $debutSaison-2; ?>- <?php echo $finSaison-2; ?> : </td>
    <td class="saisonPaireNG" > <?php $saisonRetro = $finSaison -2;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire"  >&nbsp;</td>
    <td class="saisonPaireNG"> <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire"  >&nbsp;</td>
    <td class="saisonPaireNG" >&nbsp;</td>
  </tr>
  <!--Saison N-3 -->
  <tr > 
    <td class="saisonImpaire" > Saison <?php echo $debutSaison-3; ?> - <?php echo $finSaison-3; ?> : </td>
    <td class="saisonImpaireNG" > <?php $saisonRetro = $finSaison -3;echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  >&nbsp;</td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
   <tr > 
    <td class="saisonImpaire" >&nbsp;</td>
    <td class="saisonImpaireNG">&nbsp;</td>
  </tr>
   <!--Saison N-4 -->
   <tr > 
    <td class="saisonPaire" > Saison <?php echo $debutSaison-4; ?>- <?php echo $finSaison-4; ?> : </td>
    <td class="saisonPaireNG" > <?php $saisonRetro = $finSaison -4; echo ${"terr".$saisonRetro};?>  </td>
  </tr>
  <tr > 
    <td class="saisonPaire" >&nbsp;</td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
   <tr > 
    <td class="saisonPaire"  >&nbsp;</td>
    <td class="saisonPaireNG" >&nbsp;</td>
  </tr>
   <!--Saison N-5 -->
   <tr > 
    <td class="saisonImpaire" > Saison   <?php echo $debutSaison-5; ?> -  <?php echo $finSaison-5; ?>: </td>
    <td class="saisonImpaireNG" > <?php $saisonRetro = $finSaison -5;	echo ${"terr".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp;</td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp;</td>
    <td class="saisonImpaire" >&nbsp;</td>
  </tr>
  <!--Saison N-6 -->
  <tr > 
    <td class="saisonPaire" > Saison  <?php echo $debutSaison-6; ?> - <?php echo $finSaison-6; ?> : </td>
	<td class="saisonPaireNG" > <?php $saisonRetro = $finSaison -6; echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" >&nbsp;</td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr> 
    <td class="saisonPaire" >&nbsp;</td>
    <td class="saisonPaireNG">&nbsp; </td>
  </tr>
  <!--Saison N-7 -->
  <tr > 
    <td class="saisonImpaire" > Saison <?php echo $debutSaison-7; ?> - <?php echo $finSaison-7; ?> : </td>
    <td class="saisonImpaireNG"  > <?php $saisonRetro = $finSaison -7;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp; </td>
    <td class="saisonImpaireNG"> <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" >&nbsp; </td>
    <td class="saisonImpaire" >&nbsp;</td>
  </tr>
  <!--Saison N-8 -->
  <tr > 
    <td class="saisonPaire"  > Saison <?php echo $debutSaison-8; ?> - <?php echo $finSaison-8; ?> : </td>
    <td class="saisonPaireNG"  ><?php $saisonRetro = $finSaison -8;	echo ${"terr".$saisonRetro};?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" >&nbsp;</td>
    <td class="saisonPaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" > </td>
    <td class="saisonPaireNG" >&nbsp; </td>
  </tr>
  <!--Saison N-9 -->
  <tr > 
    <td class="saisonImpaire"  > Saison <?php echo $debutSaison-9; ?> - <?php echo $finSaison-9; ?>: </td>
    <td class="saisonImpaireNG"  ><?php $saisonRetro = $finSaison -9; echo ${"terr".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonImpaire"  >&nbsp; </td>
    <td class="saisonImpaireNG"  > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"> </td>
    <td class="saisonImpaire" ></td>
  </tr>
  <!--Saison N-10 -->
  <tr > 
    <td class="saisonPaire"> Saison <?php echo $debutSaison-10; ?> - <?php echo $finSaison-10; ?>: </td>
    <td class="saisonPaireNG"  > <?php $saisonRetro = $finSaison -10; echo ${"terr".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonPaire"></td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonPaire"> </td>
    <td class="saisonPaireNG" > &nbsp;</td>
  </tr>
  <!--Saison N-11 -->
  <tr > 
    <td class="saisonImpaire"> Saison <?php echo $debutSaison-11; ?> - <?php echo $finSaison-11; ?> : </td>
    <td class="saisonImpaireNG"  > <?php $saisonRetro = $finSaison -11;	echo ${"terr".$saisonRetro}; ?>  </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"> </td>
    <td class="saisonImpaireNG" > &nbsp;<?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire"> </td>
    <td class="saisonImpaireNG" ></td>
  </tr>
   <!--Saison N-12 -->
  <tr > 
    <td class="saisonPaire"> Saison <?php echo $debutSaison-12; ?>- <?php echo $finSaison-12; ?> : </td>
    <td class="saisonPaireNG"> <?php $saisonRetro = $finSaison -12;	echo ${"terr".$saisonRetro};  ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire" height="17"> </td>
    <td class="saisonPaireNG" > <?php echo ${"france".$saisonRetro}; ?> </td>
  </tr>
  <tr > 
    <td class="saisonPaire"> </td>
    <td class="saisonPaireNG"> </td>
  </tr>
   <!--Saison N-13 -->
  <tr > 
    <td class="saisonImpaire"> Saison <?php echo $debutSaison-13; ?>- <?php echo $finSaison-13; ?> : </td>
    <td class="saisonImpaireNG" ><?php $saisonRetro = $finSaison -13; echo ${"terr".$saisonRetro};  ?> </td>
  </tr>
  <tr > 
    <td class="saisonImpaire" > </td>
    <td class="saisonImpaireNG" ><?php echo ${"france".$saisonRetro}; ?></td>
  </tr>
  <tr > 
    <td class="saisonImpaire"></td>
    <td class="saisonImpaireNG" ></td>
  </tr>
</table>
	<p>
</p>
<?php if ($smart != true )
	{?>
	<hr width= "70%" color="red" >
	<?php ;} ?>

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









