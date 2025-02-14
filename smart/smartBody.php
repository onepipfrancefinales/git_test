 <!---- Corps de la page ---->

 <?php
  /*
echo "smartBody"; echo "<br>";
echo "page ".$page; echo "<br>";
echo "pays ".$pays; echo "<br>";
echo "mode ".$mode; echo "<br>";
*/



  switch ($page) {

    case "actualites":
      require '../dossiers/actualites/actualites.php';
      break;
    case "champions":
      require '../dossiers/champions/champions.php';
      break;
    case "palmaresRegions":
      require 'palmares/regions.php';
      break;
    case "brennus":
      require '../dossiers/brennus/accueil.php';
      break;
    case "divisions":
      require '../dossiers/divisions/evolutionsDivisions.php';
      break;
    case "scores":
      require '../dossiers/scores/evolutionScores.php';
      break;
    case "lexique": {
        require '../dossiers/lexique/sommaire.php';
        require '../dossiers/lexique/lexique.php';
      }
      break;
    case "hymnes": 
        require '../dossiers/hymnes/somHymnes.php';
        break;
    case "videos": {
        include("../dossiers/video/rugbyAmateur/V2.php");
        include("../dossiers/video/rugbyAmateur/V3.php");
        include("../dossiers/video/rugbyAmateur/V4.php");
        include("../dossiers/video/rugbyAmateur/V5.php");
        include("../dossiers/video/rugbyAmateur/V6.php");
        include("../dossiers/video/rugbyAmateur/V7.php");
        include("../dossiers/video/rugbyAmateur/V8.php");
      }
      break;
    case "chansons":
      require '../dossiers/chansons/chansons.php';
      break;
  
  }

  /*

  if ($page == "actualites")
    require '../dossiers/actualites/actualites.php';
  else if ($page == "champions")

    require '../dossiers/champions/champions.php';
  else if ($page == "palmaresRegions")
    require 'palmares/regions.php';
  else if ($page == "brennus")
    require '../dossiers/brennus/accueil.php';
  else if ($page == "divisions")
    require '../dossiers/divisions/evolutionsDivisions.php';
  else if ($page == "scores")
    require '../dossiers/scores/evolutionScores.php';
  else if ($page == "lexique") {
    require '../dossiers/lexique/sommaire.php';
    require '../dossiers/lexique/lexique.php';
  } else if ($page == "hymnes") {
    require '../dossiers/hymnes/somHymnes.php';
  } else if ($page == "videos") {
    include("../dossiers/video/rugbyAmateur/V2.php");
    include("../dossiers/video/rugbyAmateur/V3.php");
    include("../dossiers/video/rugbyAmateur/V4.php");
    include("../dossiers/video/rugbyAmateur/V5.php");
    include("../dossiers/video/rugbyAmateur/V6.php");
    include("../dossiers/video/rugbyAmateur/V7.php");
    include("../dossiers/video/rugbyAmateur/V8.php");
  } else if ($page == "chansons")
    require '../dossiers/chansons/chansons.php';

  else
    require 'smartAccueil.php'
  */
  ?>