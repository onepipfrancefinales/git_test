<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../maj.css">
</head>
<?php
$page="equipes";

if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
if (isset ($_GET['prefixe'])) $prefixe = $_GET['prefixe']; else $prefixe='-'; 
echo "type : ".$type; echo "<br />";
echo "division : ".$division;echo "<br />";
echo "annee : ".$annee;echo "<br />";

require '../../../connect/connexion1.php';
require ("../../fonctionsChampFrance2019.php"); 
trenteDeuxieme2019 ($division, $annee, $bdd);

?>

<body bgcolor="#FFFFFF" text="#000000">
<table width="352">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Maj Champ de France <?php echo $annee;?></font></b></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie des équipes</font></b></font></td>
  </tr>
  <tr> 
    <td width="37" bgcolor="#000000" align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">3</font></b></font></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixDivision.php");?></td>
  </tr>
</table>

<table width="354" border="0" height="188">
  <tr bgcolor="#006699"> 
    <td colspan="2" valign="top" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="22" width="26%" align="center"></td>
    <td width="74%" valign="top" height="-4" bgcolor="#0099FF"></td>
  </tr>
  <tr> 
    <td valign="top" height="17" width="26%" align="center">Base</td>
    <td width="74%" valign="top" height="17" bgcolor="#0099FF"></td>
  </tr>
  <tr> 
    <td valign="top" height="23" width="26%" align="center">Année</td>
    <td width="74%" valign="top" height="23" bgcolor="#000000" align="center"><b><font size="5" color="#FFFFFF"><?php echo $annee; ?></font></b></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%" align="center">Division2</td>
    <td width="74%" valign="top" height="13" bgcolor="#0099FF" align="center"><?php echo $division;?></td>
  </tr>
  <tr>
    <td valign="top" height="22" width="26%" align="center">Type</td>
    <td width="74%" valign="top" height="22" bgcolor="#0099FF" align="center"><?php echo $type; ?></td>
  </tr>
  <tr> 
    <td valign="top" height="40" width="26%"> 
      <div align="center"></div>
    </td>
    <td width="74%" valign="top" height="40" bgcolor="#0099FF" align="center"><br />
        <form name="form1" method="post" action="saisieEquipe.php?division=<?php echo $division; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>">
          <input type="submit" name="Submit" value="Valider">
        </form> 
    </td>
  </tr>
</table>

<?php

$tabClubs[]=array();
// Récupération des Equipes de 1 à 9 
// inscrites en base de données	
for ($i=01; $i<10; $i++)
	{
	 $clubs="E0".$i;
	
	 $reponse = $bdd->query("
			SELECT  $clubs
			FROM   bdpffrance
			WHERE  id = $division AND saison=$annee ");
									
	 while ($row = $reponse->fetch())
		{
		$tabClubs[] = $row[0];
		}
		
	//echo $tabClubs[1]; echo "<br/>";
	//echo $tabClubs[2]; echo "<br/>";
	}

	
// Récupération des Equipes de 10 à 64 
// inscrites en base de données	
	for ($i=10; $i<65; $i++)
	{
	 $clubs="E".$i;
	
	 $reponse = $bdd->query("
			SELECT  $clubs
			FROM   bdpffrance
			WHERE  id = $division AND saison=$annee");
									
	 while ($row = $reponse->fetch())
		{
		$tabClubs[] = $row[0];
		}
	}
	
//affichage des clubs 	
require "affichageClubs.php";

?>
					  

		

