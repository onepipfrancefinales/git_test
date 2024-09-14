<?php
require "../saison.php";
require "../fonctions.php";
require "fonctions.php";
$chaine = $_GET['champion'];
//$nouveauClub = $_GET['nouveauClub'];
if (isset($_GET['nouveauClub'])) {
  $nouveauClub = $_GET['nouveauClub'];
} else {
  $nouveauClub = 0;
}


//echo "chaine : ".$chaine; echo "<br/>";
//Evaluation de la variable chaine si numérique
if (is_int($chaine)) {

  //   echo " numerique"; echo "<br/>";
  $equipe = substr($chaine, 2, 5);
  $numLigue = substr($chaine, 0, 2);
  $id = substr($chaine, 2, 2);
}


//Evaluation de la variable chaine si textuelle
else {
  // echo " non numerique";echo "<br/>";

  //echo "chaine".$chaine;

  require '../connect/connexion1.php';


  rechercheParNomDeVille($chaine, $bdd);

  echo "nombre de clubs :" . $nbreDeClub;

  /*
  echo "donnee1 : ".$nbreDeClub;
  echo "donnee2 : ".$tabClubs[0];
  echo "donnee2 : ".$tabClubs[1];
  echo "donnee2 : ".$tabClubs[2];

*/






  infosclub($chaine, $bdd);
  $id_equipe = $id;
  $equipe = $numLigue . $code;
  $id = substr($id, 2, 2);
}

//echo $numLigue;;echo "<br/>";
//echo $equipe;echo "<br/>";
$smart = 0;
//$id = substr($chaine,2,2);
//echo $id;;echo "<br/>";
require '../connect/connexion1.php';

nomComite(0, $id, $bdd);
infosclub($chaine, $bdd);
nomLiguePalm($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($code, $bdd);
saisons($code, $annee, $bdd);

consultationEvolutionClub($equipe, $bdd);
fusionDeClubs2($equipe, $bdd);

//changementNom ($equipe, $width, $bdd);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="canonical" href="https://francefinalesrugby.fr/consultation/pageclub00.php?champion=<?php echo $chaine;?>" >
  <meta name="description" content="Présentation du club de <?php echo $nomLong; ?> (Bureau; Siège; Stade; Contacts; palmarès)">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe France Finales Rugby">
  <meta name="robots" content="All">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <link type="text/css" rel="stylesheet" href="pgclub00.css">
  <link type="text/css" rel="stylesheet" href="../lienNoir.css">
  <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
  <title> Présentation du club : <?php echo $nomLong; ?> </title>

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

<body>
  <table width="1250" class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3"><?php include("../01ligne.php"); ?></td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../01gauche.php"); ?>
      </td>
      <td class="centreDePage">
        <?php
        if ($nbreDeClub < 2) {

          if ($code > 0) {
            include("00clubs.php");
          } else {
            include("02clubs.php");
          }
        } else {

          include('modaleRecherche.php');
        }
        ?>
      </td>
      <td class="colonne">
        <?php include("../00droite.php"); ?>
      </td>
    </tr>
  </table>
  <table class="marginAuto" width="1100">
    <tr>
      <?php
    if ($nbreDeClub < 2) {
      ?>   
    <td class="backgroundWhite">
        <br> <br>
        <hr color="#FF0000" width="600">
        </hr>
        <h2 class="colorRed bold">
          Photos du club
        </h2>
        <iframe src="/00messagerie/<?php echo $sigleComite; ?>/?id=1&album=<?php echo $code; ?>" width="1000" height="400" scrolling="yes" frameborder="0"></iframe>

      </td>
      <?php
    }
    ?>
    </tr>
    <tr>
      <td>
        <?php include("../bas2.php");   ?>
      </td>
    </tr>
  </table>
</body>
<footer>
</footer>

</html>