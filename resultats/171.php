<?php 
if (isset($_GET['comite'])){$comite=$_GET['comite'];} 
if (isset($_GET['champ'])){$champ = $_GET['champ'];} 

require '../resultats/fonctions.php';
require "../Phpleague/php".$comite."/consult/fonctions_matchs.php";
require "../Phpleague/php".$comite."/lang/lang_fr.php";
require "../Phpleague/phpfed3GS/consult/fonctions_matchsSmart.php";
//require "../Phpleague/phpfed3GS/lang/lang_fr.php";
require 'fonctions.php';

 $phpcomite_divisions= "php".''.$comite.''."_divisions";
 $id=$champ - 1;
 include("../saison.php");

		
require ("../connect/connexion1.php");
		
division($champ, $bdd);

?>
<!DOCTYPE html>
<head> 
<title>Resultats et classementsss</title>
<link rel="stylesheet" type="text/css" href="menu_smart2.css">  
<link type="text/css" rel="stylesheet" href="10.css"> 
<link type="text/css" rel="stylesheet" href="paramTiroir.css">
<link type="text/css" rel="stylesheet" href="../Phpleague/<?php echo "php".$comite;?>/league.css"/>
<meta name="description" 
content="R�sultat, classement, stats et infos de la poule nom de la poule nom de la competition">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Francaise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="All">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#CCCCCC">
  <div class="fixed-header">
    <div class="container">
	  <table width="99%" border="1">
		<tr> 
	      <td width= "5%"class="h22" height="20"><a href="sommaire.php"><img src="../images/smart/flecheGauche.jpg" width="27" height="20"></a></td>
	      <td width= "95%"class="h22" height="20"> France Finales Rugby </td>
		</tr>
		<tr> 
		  <td colspan="2" class="h12"> 
			<?php nomLigue2($comite, $champ, $bdd);
			
			if ($champ == 990110 ){$ligne2="Compétitions professionnellles";}
			elseif ($champ == 990140){$ligne2="Fédérale 1";}
			elseif ($champ == 990150){$ligne2="Fédérale 2";}
			elseif ($champ == 160){$ligne2="Fédérale 3";}
			elseif ($champ == 240){$ligne2="Espoir Fédérale 1";}
			elseif ($champ == 250){$ligne2="Fédérale B";}
			elseif ($champ == 260){$ligne2="Excellence B";}
			elseif ($champ > 279 and $champ < 310 ){$ligne2="Compétitions féminines";}
			
			else{$ligne2 = "Compétitions Régionales";}
			
			
			echo $ligne1."<br />".$ligne2;
			

			?>
	  </td>
	</tr>
</table>
	<table width="100%" border="0">
	<tr>
<td >

<?php
    echo "<br/>";	

if ($comite=="fem" OR  $comite=="pro" OR  $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE"  OR $comite=="fed3GS"  )
{
	require ("../connect/connexion3.php"); 
	require ("phaseFinaleFrance.php");
}	
else
{
	require ("../connect/connexion2.php"); 
	require ("phaseFinale.php");
}
?>
</td>
	</tr>
	</table>
<?php
echo "<br/>";
//include("texte_defilant.htm");

//if ($comite=="ab")
//	require ("menus/menuOCC.php");
if ($comite=="ab")
	require ("menus/menu1.php");
	
//elseif ($comite=="au")
//	require ("menus/menuARA.php");	
elseif ($comite=="au")
	require ("menus/menuNAQ.php");	
elseif ($comite=="ca")
	require ("menus/menuNAQ.php");	
//elseif ($comite=="idf")
	//require ("menus/menuIDF.php");	
//elseif ($comite=="pro")
//	require ("menus/menuPro.php");	
elseif ($comite=="f1")
	require ("menus/menuFed1.php");
elseif ($comite=="fed2")
	require ("menus/menuFed2.php");
	
elseif ($comite=="fed3NE" OR $comite=="fed3GS")
	require ("menus/menuFed3.php");
elseif ($comite=="fem")
	require ("menus/menuFem.php");	
else
	require ("menus/menuA.php");
	
	?>
<hr />
	
  </div>
</div>
	
	<!-- fin entete fig�e-------->
	
	
<div class="container">	
<?php if ($comite=="pro")
{
?>
<br>
<?php
}
elseif ($comite=="f1" or $comite=="fed2" or $comite=="fed3NE")
{
?>
</br>
<?php
}
?>


<?php if ($comite=="f1" OR $comite=="fed2" OR $comite=="fed3NE" OR $comite=="pro")
{
?>
<br></br><br></br><br></br><br></br></br><br></br>		
<?php
}
else
{
?>
<br></br><br></br><br></br><br></br></br></br></br></br>		
<?php
}
?>

<?php
if ($comite=="fem" OR  $comite=="pro" OR  $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE"  OR $comite=="fed3GS"  )
{	require ("../connect/connexion3.php"); }	
else
{	require ("../connect/connexion2.php"); }
divisionPlusPoule($comite, $champ, $bdd);


//echo $poule."-";echo "<br>";
//echo $max;


//------- Cas comite PRO ----------

if ($comite =="pro")
{
	
 $phpComite = "php".$comite;	  
 $finChamp=	$champ+$max;
 if (substr($champ,-1)==0)
 $champ=$champ+1;
	
 $tabLigue = array(990110, 990120, 990130);
 foreach ($tabLigue as $champ)
 {
 ?>
	<table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php if ($champ == 990110) echo "TOP 14"; 
	   elseif ($champ == 990120) echo "Pro D2";
	   elseif  ($champ == 990130) echo "Nationale";
	   else echo "Poule ".substr($champ,5,1);?></td>
     </tr>
	 </table>
	 <br />
	  <div align="center">
	  <?php 
	  AffichageLogos($champ, $phpComite, true, $bdd);?></div>
		<?php	 
	 aff_journee($champ, $bdd);
	 clmnt($champ, true, $bdd);?>
	  
	  <table width="90%" border="0" align="center">
	    <tr border="0"> 
        
<!--
		<td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</b></font></font></a></td>
      -->
	  </tr>
	 </table>
	  
	  <?php aff_journeeSupp($champ,  $bdd);
    
	 include("../pub/pub25.php"); ?>
	
	
	<hr /><hr />
    <br /> 
  
    <?php
	$champ = $champ +10;
 }
 
}
   
//------ fed 1, 2, 3 et ligues (ARA, NAQ, OCC)------
elseif ( $comite == "f1" OR $comite == "fed2" 
			OR $comite == "fed3NE" OR $comite == "fed3GS" OR $comite == "fem"
			OR $comite == "au" OR $comite == "ca" OR $comite == "ab")
{
 $phpComite = "php".$comite;	  
 
 if (substr($champ,-1)==0)
 $champ=$champ+1;
// echo  $champ;
 $finChamp = $champ+$max;
//echo "finchamp :".$finChamp;
	for ($i=$champ; $i < $finChamp; $i++)
	{
	divisionPlusPoule($comite, $champ, $bdd);		
	// echo "poule : ".$poule; echo "champ : ".$i; 
	 ?>
	 
	 <table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php if ( $champ > 990169 and $champ < 990240 or $champ > 990279) echo $poule; else echo "Poule ".substr($champ,5,1);?></td>
      </tr>
	 </table>
	 
	 <br />
	  <div align="center">
	   <?php AffichageLogos($champ, $phpComite, true, $bdd);?>
	  </div>
		<?php	 
	   aff_journee($champ, $bdd);
	   clmnt($champ, true, $bdd);?>
	  
	  <table width="90%" border="0" align="center">
	    <tr border="0"> 
       <!--
	   <td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</b></font></font></a></td>
       -->
	  </tr>
	 </table>
	  
	  <?php aff_journeeSupp($champ,  $bdd);
    
	include("../pub/pub25.php"); 
	echo "<hr />"."<hr />";
    echo "<br />"; 
	$champ = $champ +1;
   }
	 
	// echo $comite;
	// echo "on continue1";
	// fed 3 poule 8 � 15 ------*/
   if ($comite == "fed3NE")
   {
	// echo "on continue2";
	   $champ = 990161;
	for ($i=$champ; $i <= $champ+8; $i++)
	{
	// echo "test : ".$i;		
	// $comite="fed3GS";
	// echo "poule : ".$poule; echo "champ : ".$champ; 
 
	 ?>
	 <table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php 
	   $prePoule= substr($i,5,1);
	  // echo $prePoule;
	   $NumPoule = $prePoule+9;
	   
	   if ( $champ > 990169 and $champ < 990240) echo $poule; else echo "Poule ".$NumPoule;?></td>
      </tr>
	 </table>
	 <br />
	  <div align="center">
	   <?php 
	   AffichageLogos($i, "phpfed3GS", true, $bdd);
	   echo "</div>";
	   aff_journeeGS($i, $bdd);
	   clmntGS($i, true, $bdd);?>
	  
	  <table width="90%" border="0" align="center">
	    <tr border="0"> 
		<!--
         <td border="0" align="center" bgcolor="#FFFF00" ><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</b></font></font></a></td>
       -->
	   </tr>
	 </table>
	  
	  <?php aff_journeeSuppGS($i,  $bdd);
    
	include("../pub/pub25.php"); 
	echo "<hr />"."<hr />";
    echo "<br />"; 
  }
 }
}   
 else
 { 
  {
   require ("../connect/connexion2.php");
   if ($comite == "bg")
   {$tabLigue = array(171, 181, 201, 211, 221, 271);}
   elseif ($comite == "br")
   {$tabLigue = array(171, 181, 191, 192, 211, 271, 9212);}
   elseif ($comite == "ce")
   {$tabLigue = array(171, 191, 211, 221, 271, 9191);}
   elseif ($comite == "al")
   {$tabLigue = array(171, 181, 182, 211, 212, 271);}
 
   elseif ($comite == "fl")
   {$tabLigue = array(171, 181, 191, 201, 271, 9181);}
   elseif ($comite == "idf")
   {$tabLigue = array(171, 172, 181, 182, 191, 192, 201, 202, 211, 212, 213, 271, 272, 9181 ,9182);}
   elseif ($comite == "pr")
   {$tabLigue = array(171, 181, 192, 201, 211, 221, 271, 9181);}
   elseif ($comite == "pl")
   {$tabLigue = array(171, 191, 211, 271);}
   elseif ($comite == "n")
   {$tabLigue = array(171, 181, 191, 211, 271);}
   }

   foreach ($tabLigue as $champ)
    {
	 //  echo "<br/>";
	 //  echo "champ apres else :".$champ;
	  require ("../connect/connexion2.php");
	  divisionPlusPoule($comite, $champ, $bdd); 
     ?>
	 <table width="90%" border="1" align="center">
	  <tr> 
       <td class="titre"><?php echo $poule;?></td>
      </tr>
	 </table>
	 <br />
	  <div align="center">
	  <?php 
		
	 
	  AffichageLogos($champ, "php".$comite, true, $bdd);?></div>
		<?php	 
	 aff_journee($champ, $bdd);
	  clmnt($champ, true, $bdd);?>
	  
	  <table width="90%" border="" align="center">
	    <tr> 
         <td align="center" bgcolor="#FFFF00" class="calendrier"><a href="calendrier.php?champ=<?php echo $champ;?>&comite=<?php echo $comite;?>" target="_blank"><font color="#FF0000"><font size="4"><b>-- 
		     Calendrier complet --</b></font></font></a></td>
       </tr>
	 </table>
	  
	  <?php aff_journeeSupp($champ,  $bdd);
    
	 //include("../pub/pub25.php"); ?>
	
	
	 <hr /><hr />
     <br /> 
  
     <?php
	}
 }
?>

 
  <!--
  <a href="prono/prono.php">test</a>
  -->
  <br>
  <?php	
  include("infos_centre.php");
  echo "<br />"."<br />";
  require ("bas.php");
  echo "<hr />";
  include("../pub/pub_displayCarre.php");  
  ?>
   </div>
 </body>
</html>
