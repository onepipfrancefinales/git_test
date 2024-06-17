<!DOCTYPE html PUBLIC>
<html lang="fr">
<?php
session_start();
include("../saison.php");
include("../fichierConfig.php");
require '../connect/connexion6.php';
include("fonctions.php");

require '../Phpleague/phppro/consult/fonctions_matchs.php';
require '../Phpleague/phppro/lang/lang_fr.php';
$division = 150;
$comite = "phppro";
$CMT = "fed2";
$cmt = "fed2";
$comiteNom = "Fédérale 2 - Fédérale B";
?>


<head>
  <link rel="canonical" href="https://francefinalesrugby.fr/resultats/page_fed2.php/" />
  <meta charset="utf-8" />
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9177538664500260" crossorigin="anonymous"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!--
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G7CSSC3EPH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G7CSSC3EPH');
</script>
-->
  <meta charset="utf-8" />
  <link type="text/css" rel="stylesheet" href="../Phpleague/phppro/league.css" />
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats de France <?php echo $comiteNom; ?></title>
  <meta name="description" content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
  <table class="table">
    <tr>
      <td colspan="3"> <img src="../images/stade3.jpg" width="1250" height="150"></td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
   
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche">
        <p><?php include("../01gauche.php"); ?> </p>
      </td>

      <!-- Colonne centrale -->
      <td class="colonneCentrale">
      <br />
          <h1>CHAMPIONNAT DE FRANCE</h1>
          <h2 class="titre">Fédérale 2 - Fédérale B</h2>
          <br>
          <?php
          require 'liensDivers.php';
          include 'sommaires.php';  ?>
          <script >
            function ouvrirPopup(page, nom, options) {
              window.open(page, nom, options);
            }
          </script>
          <br >

          <table class="marginAuto width500">
            <tr>
              <td>
                <h4 class="bulleReparGeo">
                  <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed2.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">
                    <font color="#000000"> Répartition géographique des clubs de Fédérale 2</font>
                  </a>

                </h4>
                <h4 class="bulleReglement">
                  <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
                </h4>

              </td>
            </tr>
          </table>

          <?php

          echo "<hr>" . " <hr>";

          // require("comPerso.php"); 


          foreach ($tableauFed2 as $champ) {
            echo "  <br>" . "<br>";
            $numPoule = substr($champ, -1);
            echo "<a name=\"$numPoule\"></a>";
            echo "<h5>" . "Poule " . $numPoule;
            echo "<br>"; 
  

            echo "</h5>";
            echo  "<br>" . "<br>" . "<br>";
            $champReserve = 100;
            $champ2 = $champ + $champReserve;
            affichage($champ, $champ2, $comite, $bdd);
            journeesReportees($comite, $champ, $bdd);
            perequation($comite, $champ, $bdd);
            echo "<br>" . "<br>";
          };

          echo "<hr />" . " <hr />"; ?>

          <table class="marginAuto width500">
            <tr>
              <td>
                <h4 class="bulleReglement">
                  <a href="javascript:ouvrirPopup('reglements2023_2024.php?cmt=<?php echo $cmt; ?>','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=580, height=600, menubar=no')">Modalit&eacutes de qualification de la saison 2023-2024</a>
                </h4>
                <h4 class="bulleReparGeo">
                  <a href="javascript:ouvrirPopup('cartographie/2023_2024/carteFed2.bmp','','top=10, right=10,resizable=no, directories=no, statut=no, location=no, width=530, height=600, menubar=no')">
                    <font color="#000000"> Répartition géographique des clubs de Fédérale 2</font>
                  </a>
                </h4>
              </td>
            </tr>
          </table>

          <br />
          <?php
          include 'sommaires.php';
          require 'liensDivers.php';
          echo "<br>" . " <br>";
          //require '../pub/pub_displayCarre.php' ;
          ?>
       
      </td>
      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?></td>
    </tr>

  </table>
 
  <footer>
  <?php include("../footer.php"); ?>
  </footer>
</body>

</html>