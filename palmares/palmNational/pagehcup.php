<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="description" content="Présentation de la compétititon Juniors Danet(-19ans) et de tous les champions de France Danet; Palmar�s complet Juniors Danet.">
  <meta name="keywords" content="Juniors Danat,Juniors Danet,Danet,Championnat de France Juniors, Juniors, -de 19 ans,Champions de France de -19 ans">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Coupe d Europe</title>
  <link type="text/css" rel="stylesheet" href="palmares.css">
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="../../ligne1.css">
</head>

<body>
  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <?php include("../../images/page_image_al.php");   ?>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("../../01ligne.php");  ?>
      </td>
    </tr>

    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php");  ?>
      </td>

      <td class="centreDePage">

        <p>
          

            <script >
              <!--
              function MM_reloadPage(init) { //reloads the window if Nav4 resized
                if (init == true) with(navigator) {
                  if ((appName == "Netscape") && (parseInt(appVersion) == 4)) {
                    document.MM_pgW = innerWidth;
                    document.MM_pgH = innerHeight;
                    onresize = MM_reloadPage;
                  }
                }
                else if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) location.reload();
              }
              MM_reloadPage(true);
              // 
              -->
            </script>

            <p>
              <?php require("../../connect/connexion1.php");
              echo "<br><h2> <strong> Compétitions Européennes  <br></strong></h2>";
              echo "<h1> <strong> Coupe d Europe<br><br></strong></h1>";
              echo "<h1> <strong> Champions Cup  <br></strong></h1>";
              ?>
            
            <img src="../images/champion_cup.jpg" alt="champion cup" width="178" height="228">
            <p>
            <br>
              <?php
              $reponse = $bdd->query("SELECT * 
						FROM bdeurope 
						WHERE rang='11'and titre='Vainqueur' 
						ORDER BY saison DESC"); // Requ�te SQL

              // On fait une boucle pour lister tout ce que contient la table :
              while ($donnees =  $reponse->fetch()) {
              ?>
                <div class= "size4 style">
                 <?php echo $donnees['saison'] . ' ' . $donnees['champion'] . ' ' . $donnees['comite1']; ?>
                   </div> <br>
              <?php
              }

              ?>
              <?php
              require("../../connect/connexion1.php");
              ?>
            
            <?php echo "<h1> <strong> H Cup  <br></strong></h1>"; ?>

            <img src="../images/hcup.jpg" alt="H cup" width="180" height="231">
            <?php
            $reponse = $bdd->query("SELECT * 
						FROM bdeurope 
						WHERE division='H Cup' and rang='1'and titre='Vainqueur' 
						ORDER BY saison DESC");


            while ($donnees =  $reponse->fetch()) {
            ?>
               <div class= "size4 style">
                  <?php echo $donnees['saison'] . ' ' . $donnees['champion'] . ' ' . $donnees['comite1']; ?>
                  </div> <br>
            <?php
            }

            ?>
      </td>

      <td class="colonne">
        <?php include("../../00droite.php");  ?>
      </td>
    </tr>
  </table>


  <table class="marginAuto backgroundBlanc">
    <tr>
      <td>
        <?php include("../../comitebas.php"); ?>
      </td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td>
        <?php include("../../bas.php");  ?>
      </td>
    </tr>
  </table>

</body>



</html>