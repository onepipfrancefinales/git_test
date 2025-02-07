<?php
include("../../saison.php");
if (isset($_GET['mode'])) $mode  = $_GET['mode'];
?>
<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <meta name="description"
    content="Le site non officiel du Comit� Midi Pyr�n�es de rugby : Histoire, clubs, calendrier des matches, comp�titions, r�sultats, la Coupe du Monde � Toulouse, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
  <meta name="keywords"
    content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
    <link type="text/css" rel="stylesheet" href="../../lienNoir.css" />
    <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
    <link type="text/css" rel="stylesheet" href="../dossiers.css">
    <link type="text/css" rel="stylesheet" href="../../smart/10.css">


  <title>Actualités FFR</title>
</head>
    <body>
   <table class="marginAuto width1250">
    <tr>
      <td colspan="3">
        <?php include ("../../images/page_image_al.php"); ?>
          </td>
          </tr>
          <tr>
          <td colspan="3">
          <?php  include("../../01ligne.php"); ?>
          </td>
          </tr>
          <tr>
          <td class="colonneDroiteGauche backgroundBlue">";
          <?php include("../../01gauche.php"); ?>
          </td>
          <td class="colonneCentrale backgroundWhite">";
  
          <table class="width98PC\" border="1">";
          <tr> 
          <td class ="h22 width5PC"><a href="../accueil2.php\"><img src="../../images/smart/flecheGauche.jpg" width="27" height="20" alt="fléche retour"></a></td>";
          <td class ="h22 width95PC">France Finales Rugby</td>";
          </tr>
          <tr>
          <td colspan="2" class ="h12">Tout sur le rugby</td>";
          </tr>
          </table>
        

      

      


      <hr>
      <?php require("actualites.php"); ?>

   
      </td>
      <td class="colonneDroiteGauche backgroundBlue">";
      <?php      include("../../00droite.php"); ?>
            </td>
            </tr>
  
        
  

  </table>
  
</body>

<?php require "../footer.php" ;?>
</html>