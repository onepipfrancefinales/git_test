<?php 
$sigle = $_GET['variable_1'];

 
require ("../connect1/connection1.php") ; 
$reponse = $bdd->query("SELECT nom
						FROM bdcomite 
						WHERE sigle='$sigle' "); 
								while ($donnees = $reponse->fetch() )
									{ 
									$nomComite = $donnees['nom'];
									}

if (isset($_POST['champion'])) $champion = $_POST['champion'];else$champion=""; //
// On fait une boucle pour lister tout ce que contient la table :

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

$reponse =$bdd->query("SELECT * 
						FROM bdclubs 
						WHERE code='$chaine'or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); 
While ($donnees = $reponse->fetch() )
{ 
 
$coordonnees = array (
        "$chaine" => $donnees['nom_1']);

	foreach($coordonnees as $cle => $element)
	{
     '' . $cle . ' vaut ' . $element . '<br />';
	}

	$coordonnees = array (
        "$chaine" => $donnees['code']);

	foreach($coordonnees as $cle1 => $element1)
	{
     '' . $cle1 . ' vaut ' . $element1 . '<br />';
	}
 $id= $element1;
 }


$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE code='$chaine' or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'");  
								While ($donnees = $reponse->fetch() )
										 { 
										 $titre = $donnees['sigle'];
										 }
 
?>

<html>
<head>
<title>Tous les clubs du comit&eacute;  <?php echo $nomComite;?></title>
<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<body text="#000000" link="#000000" vlink="#000000" alink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1250" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="1100" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td height="151"> 
              <div align="center">
                <?php   include("../images/page_image_al.php");  ?>
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3">
        <?php    include("../01ligne.php");  ?>
        </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
		          <?php  include("../01gauche.php");   ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p>
            <?php include("logoclubs.php"); ?>
           </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php   include("../00droite.php");?>
        </p>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td colspan="3" height="81" align="center" valign="top"> 
        <table width="100%" border="1" bordercolor="#006699">
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php    include("../comitebas.php");    ?>
                </font></div>
            </td>
          </tr>
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php    include("../pub/pub1.php");    ?>
                </font></div>
            </td>
          </tr>
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php    include("../bas.php");   ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
 