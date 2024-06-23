<?php require("../saison.php");

require("../saison.php");
require("../consultation/fonctions.php");
require("../connect/connexion1.php");

$tabLigue =   array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22);

foreach ($tabLigue as $idLigue) {
  if ($idLigue == 10)
    $sigleLigue = "ara";
  elseif ($idLigue == 11)
    $sigleLigue = "bre";
  elseif ($idLigue == 12)
    $sigleLigue = "bfc";
  elseif ($idLigue == 13)
    $sigleLigue = "cvl";
  elseif ($idLigue == 14)
    $sigleLigue = "cor";
  elseif ($idLigue == 15)
    $sigleLigue = "ges";
  elseif ($idLigue == 16)
    $sigleLigue = "hdf";
  elseif ($idLigue == 17)
    $sigleLigue = "idf";
  elseif ($idLigue == 18)
    $sigleLigue = "nor";
  elseif ($idLigue == 19)
    $sigleLigue = "naq";
  elseif ($idLigue == 20)
    $sigleLigue = "occ";
  elseif ($idLigue == 21)
    $sigleLigue = "pdl";
  elseif ($idLigue == 22)
    $sigleLigue = "pca";

  //echo $sigleLigue."PRO";echo "<br>";

  structureLigue($idLigue, $bdd);
  ${$sigleLigue . "PRO1"} = ($d110);
  ${$sigleLigue . "PRO2"} = ($d120);
  ${$sigleLigue . "NAT1"} = ($d130);
  ${$sigleLigue . "NAT2"} = ($d135);
  ${$sigleLigue . "FED1"} = ($d140);
  ${$sigleLigue . "FED2"} = ($d150);
  ${$sigleLigue . "FED3"} = ($d160);
  ${$sigleLigue . "REG1"} = ($d171);
  ${$sigleLigue . "REG2"} = ($d181);
  ${$sigleLigue . "REG3"} = ($d191);
  //$araFEM = ($d281 + $d285+ $d291 + $d301);
  ${"clubs" . $sigleLigue} = ${$sigleLigue . "PRO1"} + ${$sigleLigue . "PRO2"} + ${$sigleLigue . "FED1"} + ${$sigleLigue . "FED2"} + ${$sigleLigue . "FED3"} +  ${$sigleLigue . "REG1"} + ${$sigleLigue . "REG2"} + ${$sigleLigue . "REG3"};
}

$pro1 = $araPRO1 + $brePRO1 + $bfcPRO1 + $cvlPRO1 + $corPRO1 + $gesPRO1 + $hdfPRO1 + $idfPRO1 + $norPRO1 + $naqPRO1 + $occPRO1 + $pdlPRO1 + $pcaPRO1;
$pro2 = $araPRO2 + $brePRO2 + $bfcPRO2 + $cvlPRO2 + $corPRO2 + $gesPRO2 + $hdfPRO2 + $idfPRO2 + $norPRO2 + $naqPRO2 + $occPRO2 + $pdlPRO2 + $pcaPRO2;
$nat1 = $araNAT1 + $breNAT1 + $bfcNAT1 + $cvlNAT1 + $corNAT1 + $gesNAT1 + $hdfNAT1 + $idfNAT1 + $norNAT1 + $naqNAT1 + $occNAT1 + $pdlNAT1 + $pcaNAT1;
$nat2 = $araNAT2 + $breNAT2 + $bfcNAT2 + $cvlNAT2 + $corNAT2 + $gesNAT2 + $hdfNAT2 + $idfNAT2 + $norNAT2 + $naqNAT2 + $occNAT2 + $pdlNAT2 + $pcaNAT2;
$fed1 = $araFED1 + $breFED1 + $bfcFED1 + $cvlFED1 + $corFED1 + $gesFED1 + $hdfFED1 + $idfFED1 + $norFED1 + $naqFED1 + $occFED1 + $pdlFED1 + $pcaFED1;
$fed2 = $araFED2 + $breFED2 + $bfcFED2 + $cvlFED2 + $corFED2 + $gesFED2 + $hdfFED2 + $idfFED2 + $norFED2 + $naqFED2 + $occFED2 + $pdlFED2 + $pcaFED2;
$fed3 = $araFED3 + $breFED3 + $bfcFED3 + $cvlFED3 + $corFED3 + $gesFED3 + $hdfFED3 + $idfFED3 + $norFED3 + $naqFED3 + $occFED3 + $pdlFED3 + $pcaFED3;
$reg1 = $araREG1 + $breREG1 + $bfcREG1 + $cvlREG1 + $corREG1 + $gesREG1 + $hdfREG1 + $idfREG1 + $norREG1 + $naqREG1 + $occREG1 + $pdlREG1 + $pcaREG1;
$reg2 = $araREG2 + $breREG2 + $bfcREG2 + $cvlREG2 + $corREG2 + $gesREG2 + $hdfREG2 + $idfREG2 + $norREG2 + $naqREG2 + $occREG2 + $pdlREG2 + $pcaREG2;
$reg3 = $araREG3 + $breREG3 + $bfcREG3 + $cvlREG3 + $corREG3 + $gesREG3 + $hdfREG3 + $idfREG3 + $norREG3 + $naqREG3 + $occREG3 + $pdlREG3 + $pcaREG3;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="description" content="Tout sur le comité territorial <?php echo $titre; ?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmares territoriaux et l'ensemble des clubs composant le comité avec un lien pour acceder aux différents clubs.">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Francaise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">


  <title>Comités territoriaux </title>
</head>


<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php");   ?>
      </td>
    </tr>

    <tr>
      <td class="colonne">
        <?php include("../01gauche.php");  ?>
      </td>
      <td class="centreDePage">
        <H1 class="style">RESULTATS & CLASSEMENTS
          <br>
          <?php echo $debutSaison; ?> - <?php echo $finSaison; ?>
        </h1>
        <p>&nbsp;</p>

        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b> Compétitions fédérales</b>
        </p>
        <p>&nbsp;</p>

        <p class="terr3  marginAuto">Top 14 - Pro D2 <br>
          <a href="page_pro.php">poule unique (<?php echo ($pro1 + $pro2) . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Nationale<br>
          <a href="page_pro.php">poule unique (<?php echo $nat1 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Nationale 2 <br>
          <a href="page_pro.php">2 poules de 12 (<?php echo $nat2 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Fédérale 1 - Nationale B <br>
          <a href="page_fed1.php">4 poules de 12 (<?php echo $fed1 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto">Fédérale 2 - F&eacute;d&eacute;rale B <br>
          <a href="page_fed2.php">8 poules de 12 (<?php echo $fed2 . " clubs"; ?>)</a>
        </p>
        <br>
        <p class="terr3 marginAuto"> Fédérale 3 - Excellence B <br>
          <a href="page_fed3NE.php">18 poules de 10 (<?php echo $fed3 . " clubs"; ?>)</a>
        </p>
        <br><br>

        <br>
        <br>
        <br>
        <br>

        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b>Compétitions féminines </b>
        </p>
        <p>&nbsp;</p>
        <p class="terr4 marginAuto">Elite 1 - Elite 2<br>
          <a href="../feminine/page_elite1.php">(23 clubs)</a>
        </p>
        <br>
        <p class="terr4 marginAuto">Fédérale 1<br>
          <a href="../feminine/page_federale.php">(32 clubs)</a>
        </p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="backgroundBlack marginAuto size6 colorWhite width550">
          <b>Compétitions régionales</b>
        </p>
        <p></p>

        <?php structureLigue(10, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE AUVERGNE RHONE ALPES (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>
          <a href="page_ara_reg1.php?lien=17"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(11, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE BOURGOGNE et FRANCHE COMTE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>
          <a href="page_bfc.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(12, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE BRETAGNE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>
          <a href="page_bre.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(13, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE CENTRE VAL DE LOIRE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_cvl.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(14, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE CORSE (<?php " clubs"; ?>)<br>

          <a href="page_cor.php">Aucune compétition proposée</a>
        </p>
        <br>
        <?php structureLigue(15, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE GRAND EST (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_ges.php"> Régionale 1(<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2(<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(16, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE HAUTS DE FRANCE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_hdf.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>

        <?php require '../pub/pub_displayCarre.php'; ?>
        <br>
        <br>
        <?php structureLigue(17, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE ILE DE FRANCE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_idf.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(18, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE NORMANDIE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_nor.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2(<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(19, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE NOUVELLE AQUITAINE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_naq_reg1.php?lien=17"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(20, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE OCCITANIE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_occ_reg1.php?lien=17"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(21, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE PAYS DE LA LOIRE (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_pdl.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>
        <br>
        <?php structureLigue(22, $bdd); ?>
        <p class="terr2 marginAuto">LIGUE PROVENCE ALPES COTE D'AZUR (<?php echo $d170+$d180+$d190 . " clubs"; ?>)<br>

          <a href="page_pca.php"> Régionale 1 (<?php if ($d170 > 0) echo $d170; ?>) - Régionale 2 (<?php if ($d180 > 0) echo $d180; ?>) - Régionale 3 (<?php if ($d190 > 0) echo $d190; ?>) </a>
        </p>

        <br>
        <br>

        <?php

        //   include("../pub/pub4.php");
        ?>
        <br>
        <br>

      </td>
      <td class="colonne">
        <?php include("../00droite.php");  ?>
      </td>
    </tr>
  </table>



  <?php include("../comitebas.php"); ?>

  <?php include("../bas.php"); ?>


</body>

</html>