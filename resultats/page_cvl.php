<?php
session_start();
include("../saison.php");
//$message = "Arr&ecirc;t des comp&eacute;titions &agrave; l'occasion de la 6me journ&eacute;e du 01 Novembre";
//require '../connect/connexion2.php';
require '../connect/connexion6.php';
require '../Phpleague/phppl/consult/fonctions_matchs.php';
require '../Phpleague/phppl/lang/lang_fr.php';
include("fonctions.php");
require "constantes.php";
$champLigue = 13;
$sigleLigue = "(CVL)";
$comite = "phppl";
$CMT = "CE";
$cmt = "ce";
$comiteNom = "du Centre"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
<link rel= "canonical" href= "https://francefinalesrugby.fr/resultats/page_cvl.php/" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppl/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>
    <?php echo $champReg; ?> Centre Val de loire
  </title>
  <meta name="description"
    content=" Actualités des compétitions régionales de la ligue Centre Val de Loire. (résultats, classements, stats, calendriers, palmarès etc...) ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <script language="JavaScript">
    function ouvrirPopup(page, nom, options) {
      window.open(page, nom, options);
    }
  </script>
  <!--
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260"
     crossorigin="anonymous"></script>
  -->
</head>

<body>
  <table width="1250" align="center">
    <tr>
      <td colspan="3"><img src="../images/banniere_haut/(<?php echo $CMT; ?>).jpg" height="150" width="1250"></td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php"); ?>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26">
        <table width="1200" border="0" align="center">
          <tr>
            <td>
              <?php include("../pub/pub_displayHorizontal.php"); ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle">
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <p>
          <?php include("../01gauche.php"); ?>
        </p>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
        <div align="center"><br />
          <h1> Compétitions Régionales</h1>
          <h2 class="titre">
            <?php echo $ligueCVL; ?>
          </h2>
          <h2 class="commentaire">Le comitéé territorial du Centre est devenu<br>
            la
            <?php echo $ligueCVL; ?> en 2018.
          </h2>


          <?php
          include("liensDivers.php");
          include("sommaires.php");

          echo "<hr />" . " <hr />";
          //require("comPerso.php"); 
          /*
           echo "  <h5><a name=\"H\"></a>$FED3</h5>";  
             $champ = 130161; $champ2 = 130261;
           affichage($champ, $champ2, $comite, $bdd);  
           journeesReportees($comite, $champ, $bdd); 
              */
          echo "  <h5><a name=\"R1\"></a>" . $REG1 . "<br/>
	 <font face=\"Arial, Helvetica, sans-serif\" size=\"2\">(Ex honneur/ promotion honneur)</font></h5>";
          $champ = 130171;
          $champ2 = 130271;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          //require '../pub/pub_displayH_550.php' ;
          
          echo "<h5><a name=\"R2\"></a>" . $REG2 . "<br />
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXHPH . "</font> <br><br></h5>";
          $champ = 130181;
          $champ2 = 0;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          echo "<h5><a name=\"R3\"></a>" . $REG3. " - " . $P1 . " <br />
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS1S2 . "</font> <br><br></h5>";
          $champ = 130191;
          $champ2 = 0;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);


          echo "<h5><a name=\"R3\"></a>" . $REG3. " - " .$P2 . "<br />
	 <font size=\"2\" face=\"Arial, Helvetica, sans-serif\">" . $EXS3S4 . "</font> <br><br></h5>";
          $champ = 130192;
          $champ2 = 0;
          affichage($champ, $champ2, $comite, $bdd);
          journeesReportees($comite, $champ, $bdd);
          perequation($comite, $champ, $bdd);

          // require '../pub/pub_displayHorizontal.php';
          
          echo "<hr />" . " <hr />";

          include("sommaires.php");
          include("liensDivers.php");

          //require '../pub/pub_displayH_550.php' ;?>

        </div>

      </td>
      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <p>
          <?php include("../00droite.php"); ?>
        </p>
      </td>
    </tr>
  </table>
  <?php include("piedDePage.php"); ?>
  <footer>

  </footer>
</body>

</html>