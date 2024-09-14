<?php


require '../consultation/fonctions.php';


require '../connect/connexion1.php';
  rechercheParNomDeVille($chaine, $bdd);
  echo "donnee1 : ".$nbreDeClub;
  echo "donnee2 : ".$tabClubs[0];
  echo "donnee2 : ".$tabClubs[1];
  echo "donnee2 : ".$tabClubs[2];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="canonical" href="https://francefinalesrugby.fr/dirigeant/pageDirigeant.php" >
  <meta name="description" content="Tout sur le comité territorial <?php echo $titre; ?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
  <meta name="keywords" content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta charset="utf-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../resultats/resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Espace Dirigeants </title>

</head>
<body>




  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php");  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../01ligne.php"); ?>
      </td>
    </tr>
    <tr>
      <!-- Colonne de gauche -->
      <td class="colonneDroiteGauche" >
        <?php include("../01gauche.php"); ?>
      </td>
        <!-- Colonne centrale -->
      <td class="colonneCentrale" >
        <?php include("dirigeant.php");   ?>
      </td>

      <!-- Colonne de droite -->
      <td class="colonneDroiteGauche">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  
  </table>
</body>
  <footer>
  <?php include("../footer.php"); ?>
  </footer>
</html>