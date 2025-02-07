 <!---- Corps de la page ---->

 <?php
  echo $page;
  if ($page == "actualites")
    require '../dossiers/actualites/actualites.php';
  else if ($page == "champions")
    require '../dossiers/champions/champions.php';
  else if ($page == "brennus")
    require '../dossiers/brennus/accueil.php';
  else if ($page == "divisions")
    require '../dossiers/divisions/evolutionsDivisions.php';
  else if ($page == "scores")
    require '../dossiers/scores/evolutionScores.php';
  else if ($page == "lexique") {
    require '../dossiers/lexique/sommaire.php';
    require '../dossiers/lexique/lexique.php';
  } else if ($page == "hymnes")
    require '../dossiers/hymnes/somHymnes.php';
  else if ($page == "videos") {
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
    require '../dossiers/accueil2.php'
  ?>