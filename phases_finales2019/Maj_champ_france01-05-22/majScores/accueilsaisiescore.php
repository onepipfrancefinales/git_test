<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<?php
 
//if (isset ($_GET['AR'])) $AR = $_GET['AR']; else $AR = "non déclarée";
if (isset ($_GET['type'])) $type = $_GET['type']; else $type = "non d&eacute;clar&eacute;e";
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = " non d&eacute;clar&eacute;e";
if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "non d&eacute;clar&eacute;e";
if (isset ($_GET['phase'])) $phase = $_GET['phase']; else $phase = "non d&eacute;clar&eacute;e";

//echo "AR : ".$AR;echo "<br/>";
echo "type : ".$type;echo "<br/>";
echo "division : ".$division;echo "<br/>";
echo "annee : ".$annee;echo "<br/>";
echo "phase : ".$phase;echo "<br/>";
echo "type : ".$type;

require '../../../connect/connexion1.php';

$reponse = $bdd->query("SELECT type
						FROM bdpffrance
						WHERE 	id='$division' AND saison = '$annee'");
					
					while ($donnees = $reponse->fetch() )
						{ 
						$type = $donnees['type'];
						}
						

$adresse="/phases_finales2019/Maj_champ_france/majScores/accueilsaisiescore.php"
?>

<br>
<table border="0" height="66">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="18" align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Maj Champ de France <?php echo $annee;?> </font></b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="18" align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie des scores</font></b></font> </td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="middle" height="24" bgcolor="#000000" align="center"><b><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Saison</font></b></td>
    <td width="83%" valign="middle" height="24" align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"size="4"><b><?php echo $annee;?></font></b></td>
  </tr>
  <tr bgcolor="#006699"> 
    <td width="17%" valign="middle" height="5" bgcolor="#000000" align="center"><b><font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">Divisions</font></b></td>
    <td width="83%" valign="middle" height="5"> 
      <div align="center"><br>
        <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Choix division</option>
		  <option value=""><b>----------------</b></option>
          <option value=""><b>Barrages</b></option>
          <option value=""><b>----------------</b></option>
         
		  <option value="<?php echo $adresse;?>?division=7150&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Barrages F&eacute;d 2</b></option>
          <option value="<?php echo $adresse;?>?division=7160&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Barrages F&eacute;d 3</b></option>
		  <option value="<?php echo $adresse;?>?division=110&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Top 14</b></option>
          <option value="<?php echo $adresse;?>?division=120&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Pro D2</b></option>
          <option value="<?php echo $adresse;?>?division=115&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Barrage Top14 Pro D2 </b></option>
		  <option value="<?php echo $adresse;?>?division=130&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Nationale</b></option>
          <option value="<?php echo $adresse;?>?division=140&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale 1</b></option>
          <option value="<?php echo $adresse;?>?division=150&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale 2</b></option>
          <option value="<?php echo $adresse;?>?division=160&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale 3</b></option>
          <option value="<?php echo $adresse;?>?division=170&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Honneur</b></option>
          <option value="<?php echo $adresse;?>?division=180&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Promotion</b></option>
          <option value="<?php echo $adresse;?>?division=190&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>1re s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?division=200&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>2me s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?division=210&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>3me s&eacute;rie</b></option>
          <option value="<?php echo $adresse;?>?division=220&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>4me s&eacute;rie</b></option>
          <option value=""><b>----------------</b></option>
          <option value=""><b>F&eacute;minines</b></option>
          <option value=""><b>----------------</b></option>
          <option value="<?php echo $adresse;?>?division=280&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Elite 1 - Top 8</b></option>
          <option value="<?php echo $adresse;?>?division=285&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Elite 2</b></option>
          <option value="<?php echo $adresse;?>?division=290&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale 1</b></option>
          <option value="<?php echo $adresse;?>?division=295&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale 2</b></option>
          <option value=""><b>----------------</b></option>
          <option value=""><b>R&eacute;serves</b></option>
          <option value=""><b>----------------</b></option>
          <option value="<?php echo $adresse;?>?division=240&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Espoir F&eacute;d 1</b></option>
          <option value="<?php echo $adresse;?>?division=250&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>F&eacute;d&eacute;rale B</b></option>
          <option value="<?php echo $adresse;?>?division=260&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Excellence B</b></option>
          <option value="<?php echo $adresse;?>?division=270&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>R&eacute;serve</b></option>
		  <option value=""><b>----------------</b></option>
          <option value=""><b>Jeunes</b></option>
          <option value=""><b>----------------</b></option>
          <option value="<?php echo $adresse;?>?division=325&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Crabos</b></option>
          <option value="<?php echo $adresse;?>?division=330&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Balandrade</b></option>
          <option value="<?php echo $adresse;?>?division=360&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Alamercery</b></option>
          <option value="<?php echo $adresse;?>?division=365&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Gaudermen</b></option>
          <option value="<?php echo $adresse;?>?division=370&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>"><b>Teuliere</b></option>
       


	   </select>
        <br>
      </div>
    </td>
  </tr>
  <tr bgcolor="#006699" valign="middle"> 
    <td height="11" width="17%" bgcolor="#000000"> 
      <div align="center"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">Phase</font></b></div>
    </td>
    <td height="11" width="83%" valign="middle"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" color="#FFFFFF"><br>
        <select name="select" onChange="MM_jumpMenu('parent',this,0)" size="1">
          <option selected>Choix de la phase</option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=32"><b>32me de finale </b></option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=16"><b>16me de finale </b></option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=8"><b>8me de finale </b></option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=4"><b>Quarts de finale </b></option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=2"><b>Demi finale </b></option>
          <option value="<?php echo $adresse;?>?division=<?php echo $division; ?>&annee=<?php echo $annee; ?>&type=<?php echo $type; ?>&phase=1"><b>Finale 
          </b></option>
        </select>
        <br>
        </font></b></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="25" width="17%" align="center"><b>Ann&eacute;e</b></td>
    <td width="83%" valign="top" height="25" bgcolor="#000000"> 
      <div align="center"><font color="#FF0000"><b><font size="5" face="Arial, Helvetica, sans-serif"> 
        <?php echo $annee; ?>
        </font></b></font></div>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%" align="center">Division </td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"><div align="center"><?php echo $division; ?></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%" align="center">Type</td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF"><div align="center"><?php echo $type;?></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="17%" align="center">Phase</td>
    <td width="83%" valign="top" height="13" bgcolor="#0099FF" align="center"><?php echo $phase; ?></td>
  </tr>
  <tr> 
    <td valign="top" height="13" colspan="2" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="264" colspan="2"> 
      <div align="center"> 
        <p><b><font face="Arial, Helvetica, sans-serif">**Qualification d'office**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage 'Q', 
          saisir '999'<br>
          Affichage '-' , saisir '222'</font><font face="Arial, Helvetica, sans-serif"></font><b><font face="Arial, Helvetica, sans-serif"><br>
          </font></b></p>
        <p><b><font face="Arial, Helvetica, sans-serif">**Tir aux but:**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage Tab-', 
          saisir '555'</font></p>
        <p><b><font face="Arial, Helvetica, sans-serif">**Disqualification**<br>
          </font></b><font face="Arial, Helvetica, sans-serif">Affichage 'DQ,' 
          saisir '666'</font></p>
        <p><font face="Arial, Helvetica, sans-serif"><b>**Forfait **<br>
          </b>affichage 'F', saisir '777'<br>
          affichage '25', saisir '888'</font></p>
      </div>
    </td>
  </tr>
  <tr bgcolor="#000000"> 
    <td valign="top" height="13" colspan="2">&nbsp;</td>
  </tr>
</table>
<br>
<p>&nbsp; Qualification d'office (forfait, sanction, autres) Saisir (pts=99 et 
  score=99)pour le qualifier 0 pour l'autre<br>
  
<?php

if (isset($debut)) $debut=$debut; else $debut="";
if (isset($position)) $position=$position; else $position="";
if (isset($fin)) $fin=$fin; else $fin="";
if (isset($resultat)) $resultat=$resultat; else $resultat="";

require '../../../connect/connexion1.php';
require ("../../fonctionsChampFrance2019.php"); 
trenteDeuxieme2019 ($division, $annee, $bdd);

//require "recuperationScores.php";

//$bdpfAnnee = "bdpf".$annee."_2";

if ($phase == '1'){
	
$debut =1001;  $fin = 1003; $position = 9;
	if (substr($type,9,2) == "01"){	$resultat="01";		}
	elseif (substr($type,9,2) == "21"){	$resultat="21"; }
	elseif (substr($type,9,2) == "41"){	$resultat="41"; }
	elseif (substr($type,9,2) == "42"){	$resultat="42"; }

}
elseif ($phase == '2')
{$debut =2001; $fin = 2005; $position = 9; $resultat="21";$table = 'bdpffrance_2';}
elseif ($phase == '4')
{$debut =4001; $fin = 4009; $position = 7; $resultat="04";$table = 'bdpffrance_2';}
elseif ($phase == '8')
{$debut =8001; $fin = 8017; $position = 5; $resultat="08";$table = 'bdpffrance_2';}
elseif ($phase == '16')
{$debut =1601; $fin = 1633; $position = 3; $resultat="16";$table = 'bdpffrance_2';}
elseif ($phase == '32')
{$debut =3201;$fin = 3265;	$position = 1; $resultat="32"; $table = 'bdpffrance';;
//$bdpfAnnee ="bdpf".$annee;
}
require "../../../connect/connexion1.php";	
//echo "test : ".substr ($type,5,2);//echo "<br />";
//if (substr ($type,1,2) == "32" OR substr ($type,3,2) == "16" OR substr ($type,5,2) == '08' 
//OR substr ($type,7,2) == 04 OR substr ($type,9,2) == "02" OR substr ($type,9,2) == "01")


//echo "phase : ".$phase;echo "<br/>";
//echo "resultat : ".$resultat;echo "<br/>";
//echo "position : ".$position;echo "<br/>";
//echo "table : ".$table;echo "<br/>";



if ((substr($type,$position,2) == $resultat ) )
{
//***************  Récupération des résultats - Qualification sur une rencontre ****************************
									
$tabScores[]=array();
echo "ALLER SIMPLE***********";	echo "<br/>";	
echo "debut : ".$debut;echo "<br/>";
echo "fin : ".$fin;echo "<br/>";
echo "annee : ".$annee;echo "<br/>";
echo "division : ".$division;echo "<br/>";


for ($i=$debut; $i<$fin; $i++)
	{
	 $scores="A".$i;
	
	 $reponse = $bdd->query("
			SELECT  $scores
			FROM   $table
			WHERE  id = '$division'  AND saison = '$annee'");
											
	 while ($row = $reponse->fetch())
		{
		$tabScores[] = $row[0];
		}
	}
	echo $tabScores[1];
	
}
else
{
 
 //***************  Qualification sur un  match Aller-Retour ****************************
							
 //***************  Récupération des résultats ALLER - Scores ALLER  (Goalverage) *******
	echo "****aller retour*******";	echo "<br />";							
	echo "debut : ".$debut;echo "<br />";
	echo "fin :".$fin;echo "<br />";
	
	$tabScoresAller[]=array();
	
	for ($i=$debut; $i<$fin; $i++)
	{	
	 $scoresAller="A".$i;
		
	 $reponse = $bdd->query("
			SELECT  $scoresAller
			FROM   $table
			WHERE  id = '$division' AND saison = '$annee'");
									
	 while ($row = $reponse->fetch())
		{
		 $tabScoresAller[] = $row[0];
		}
	}
	$tabScoresAller[1];$tabScoresAller[2];$tabScoresAller[3];$tabScoresAller[4];
	
 //***************  Récupération des résultats ALLER - Points terrain ALLER  (Pts terrain) *******

	$division = $division +1;							
	$tabPtsAller[]=array();
	for ($i=$debut; $i<$fin; $i++)
	{ 
	 $PtsTerrainAller="A".$i;
	 
	 $reponse = $bdd->query("
			SELECT  $PtsTerrainAller
			FROM $table
			WHERE  id = '$division' AND saison = '$annee'" ) ;			
			  					
	 while ($row = $reponse->fetch())
		{
		 $tabPtsAller[] = $row[0];
		}	
	}
	
//***************  Récupération des résultats RETOUR - Points terrain RETOUR  (Pts terrain)   ****************************
							 
	 $division = $division +1;
	 $tabPtsRetour[]=array();
		 
	 
	for ($i=$debut; $i<$fin; $i++)
	{ 
	 $PtsTerrainRetour="A".$i;	
			
	 $reponse = $bdd->query("
			SELECT  $PtsTerrainRetour
			FROM $table
			WHERE id = '$division' AND saison = '$annee' " ) ;			
		
	 while ($row = $reponse->fetch())
		{
		 $tabPtsRetour[] = $row[0];
		}
	}
 //***************  Récupération des résultats RETOUR - Scores RETOUR  (Goalverage) ****************************

	 $division = $division +1;								
	 $tabScoresRetour[]=array();

	for ($i=$debut; $i<$fin; $i++)
	{
	$PtsScoresRetour="A".$i;	
		
	 $reponse = $bdd->query("
			SELECT  $PtsScoresRetour
    		FROM $table
			WHERE id = '$division' AND saison = '$annee'" ) ;			

	 while ($row = $reponse->fetch())
		{
		 $tabScoresRetour[] = $row[0];
		}		
	}
}
require "affichageScores.php";
?>
  
<p>&nbsp;
<p><a href="../accueilMAJ.php">Retour saisie clubs</a> 
</body>
</html>
