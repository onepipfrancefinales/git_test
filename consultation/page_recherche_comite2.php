<?php
require("../connect/connexion1.php");

//if (isset ($chaine)) $chaine=$chaine; else $chaine ="";
$chaine = $_GET['variable_1'];

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'");
while ($donnees = $reponse->fetch()) {

  $coordonnees = array(
    "$chaine" => $donnees['nom_1']
  );

  foreach ($coordonnees as $cle => $element) {
    '' . $cle . ' vaut ' . $element . '<br />';
  }
  $coordonnees = array(
    "$chaine" => $donnees['code']
  );

  foreach ($coordonnees as $cle1 => $element1) {
    '' . $cle1 . ' vaut ' . $element1 . '<br />';
  }
  $id = $element1;
}

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requ�te SQL 
while ($donnees = $reponse->fetch()) {
  $titre = $donnees['sigle'];
}
?>

<html>
<head>
  <title>Tous les clubs du comit&eacute; <?php echo $sigle; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content=" <?php echo $titre; ?> : Pr�sentation du club (Bureau; Si�ge; Stade; Contacts); les grandes du dates du club; les palmar�s; les r�sultats du clubs au cours des derni�res saisons et un album photos d�di� au club. ">
  <meta name="keywords" content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
</head>






<body text="#000000" link="#000000" vlink="#000000" alink="#000000" bgcolor="#000000">
  <div align="center">
    <table width="1000" height="639">
      <tr valign="middle" align="center" bordercolor="#FFFFFF">
        <td colspan="3" height="74">
          <table width="1250" border="1" bordercolor="#000000" height="150">
            <tr>
              <td height="151">
               
                  
                    <?php include("../images/page_image_al.php");  ?>
                 
                
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr valign="middle" align="center" bgcolor="#000000">
        <td height="24" colspan="3">
        
            <?php include("../01ligne.php");  ?>
          
        </td>
      </tr>
      <tr valign="middle" align="center" bgcolor="#000000">
        <td width="225" height="505" bgcolor="#006699" align="center" valign="top">


          <?php include("../01gauche.php"); ?>

        </td>
        <td bgcolor="#FFFFFF" height="505" valign="top" width="650">
          <?php include("logoclubs2.php");  ?>
        </td>
        <td height="505" bgcolor="#006699" width="225" valign="top">
          <p>
            <?php include("../00droite.php"); ?>
          </p>
        </td>
      </tr>
      <tr valign="middle" align="center" bgcolor="#FFFFFF">
        <td colspan="3" height="81" align="center" valign="top">

          <table width="100%" border="1" bordercolor="#006699">
            <tr>
              <td>
                <?php include("../comitebas.php");  ?>
              </td>
            </tr>
            <tr>
              <td>
                <?php include("../pub/pub1.php");  ?>
              </td>
            </tr>
            <tr>
              <td>
                <?php include("../bas.php");  ?>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

  </div>


</html>