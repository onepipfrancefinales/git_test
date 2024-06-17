<?php
require("../saison.php");
require("../fonctions.php");
$chaine = $_GET['champion'];


//echo "chaine : ".$chaine; echo "<br/>";
//Evaluation de la variable chaine si numérique
if (is_int($chaine)) {

 //   echo " numerique"; echo "<br/>";
  $equipe = substr($chaine, 2, 5);
  $numLigue = substr($chaine, 0, 2);
  $id = substr($chaine, 2, 2);
 // echo $id;
}


//Evaluation de la variable chaine si textuelle
else {
 // echo " non numerique";echo "<br/>";
  require '../connect/connexion1.php';
  infosclub($chaine, $bdd);
  $equipe = $numLigue . $code;
  $id = substr($id, 2, 2);
 // echo $id;
}

//echo $numLigue;;echo "<br/>";
//echo $equipe;echo "<br/>";
$smart = 0;
//$id = substr($chaine,2,2);
//echo $id;;echo "<br/>";
require '../connect/connexion1.php';

nomComite(0, $id, $bdd);
infosclub($chaine, $bdd);
nomLigue($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code, $annee, $bdd);


//echo "nomComite : ".$nomComite;
?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="description" content=" <?php echo $titre; ?> : Présentation du club (Bureau; Si�ge; Stade; Contacts); les grandes du dates du club; les palmar�s; les r�sultats du clubs au cours des derni�res saisons et un album photos d�di� au club..">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="pgclub00.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <title> fiche club </title>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-21215219-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>

<body >
    <table width="1250"  class="marginAuto">
      <tr>
        <td colspan="3">
          <?php include("../images/page_image_al.php"); ?>
        </td>
      </tr>
      <tr >
        <td colspan="3"><?php include("../01ligne.php"); ?></td>
      </tr>
      <tr >
        <td class="colonne">
          <?php include("../01gauche.php"); ?>
        </td>
        <td class="centreDePage">
          <?php
          if ($code > 0) {
            include("00clubs.php");
          } else {
            include("02clubs.php");
          }
          ?>
        </td>
        <td class="colonne">
          <?php include("../00droite.php"); ?>
        </td>
      </tr>
    </table>
    <table width="1100" align="center">
      <tr valign="top" align="center">
        <td bgcolor="#006699" valign="middle" align="center" height="15">
          <b>
            <font color="#FFFFFF" size="+2">

              <?php //echo $comite; 
              ?>


            </font>
          </b>
        </td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">
          <p align="center">
            <?php // echo $id; //echo $sigleComite; 
            ?>
          </p>
          <p align="center">
            <font color="#FF0000">____________________________________________________</font>
          </p>
          <div align="center">
            <p>
              <font color="#FF0000"><b>
                  <font size="+2">Photos du club</font>
                </b></font>
            </p>
            <?php //$sigleComite ="(MPY)";//$id =29076;
            ?>
            <iframe src="/00messagerie/<?php echo $sigleComite; ?>/?id=1&album=<?php echo $code; ?>" width="1000" height="400" scrolling="yes" frameborder="0"></iframe>
          </div>
        </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>
          <div align="center">
            <font color="#000000"><b>
                <?php include("../bas2.php");   ?>
              </b></font>
          </div>
        </td>
      </tr>
    </table>
</body>
</html>