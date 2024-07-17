<!DOCTYPE html PUBLIC>
<html lang="fr">

<head>
  <meta name="description" content="Pr�sentation de la comp�tititon Juniors Danet(-19ans) et de tous les champions de France Danet; Palmar�s complet Juniors Danet.">
  <meta name="keywords" content="Juniors Danat,Juniors Danet,Danet,Championnat de France Juniors, Juniors, -de 19 ans,Champions de France de -19 ans">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title>Challenge Européen</title>
  <link type="text/css" rel="stylesheet" href="../../ligne1.css" />
  <link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
  <link type="text/css" rel="stylesheet" href="palmares.css" />

<body>

  <table align="center" width="1250">
    <tr valign="middle" align="center" bordercolor="#FFFFFF">
      <td colspan="3" height="74">
        <?php include("../../images/page_image_al.php"); ?>
      </td>
    </tr>
    <tr>
      <td height="24" colspan="3">
        <?php include("../../01ligne.php");  ?>
      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("../../01gauche.php"); ?>
      </td>
      <td class="centreDePage">

        <p>
          <font color="#000000">
            
            <p>
              <?php
              require("../../connect/connexion1.php");
              echo "<BR/><h2><p> <strong> Compétitions Européennes  <BR/></strong></p></h2>";
              echo "<h1><p> <strong> Challenge Européen<BR/><BR/></strong></p></h1>";
              echo "<h1><p> <strong> Challenge Cup  <BR/></strong></p></h1>";
              ?>
            </p>
            <p><img src="../images/challenge_cup.jpg" width="178" height="228"></p>
            <p>
              <?php
              $reponse = $bdd->query("SELECT * FROM bdeurope 
                WHERE rang='21'and titre='Vainqueur' 
              ORDER BY saison DESC");

              // On fait une boucle pour lister tout ce que contient la table :
              while ($donnees = $reponse->fetch()) {
              ?>
                <font face="Arial, Helvetica, sans-serif">
                  <font size="3">
                    <?php echo $donnees['saison'] . ' ' . $donnees['champion'] . ' ' . $donnees['comite1']; ?>
                  </font>
                </font> <br />
                <br />
              <?php
              }

              ?>
            </p>
            <?php echo "<h1><p> <strong> Amlin Cup  <BR/></strong></p></h1>"; ?>
            <p> <img src="../images/amlincup.jpg" width="179" height="248"><br />
              <?php
              $reponse = $bdd->query("SELECT * FROM bdeurope 
WHERE division='Amlin Cup' and rang='2'and titre='vainqueur' 
ORDER BY saison DESC");

              // On fait une boucle pour lister tout ce que contient la table :
              while ($donnees = $reponse->fetch()) {
              ?>
                <font face="Arial, Helvetica, sans-serif">
                  <font size="3">
                    <?php echo $donnees['saison'] . ' ' . $donnees['champion'] . ' ' . $donnees['comite1']; ?>
                  </font>
                </font> <br /><br />
              <?php
              }

              ?>
            </p>

            <p>
              <?php include("../../pub/pub_carre.php"); ?>
            </p>
      </td>
      <td class="colonne">
        <?php include("../../00droite.php"); ?>
      </td>
    </tr>
    <tr bordercolor="#000000">
    <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30">
 
        <table width="100%" border="1" bordercolor="#006699">
          <tr>
            <td>

              <?php include("../../comitebas.php");  ?>

            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <?php include("../../bas.php");  ?>
            </td>
          </tr>
        </table>
    </tr>
  </table>
</body>

<footer>
    <!--
  <div id="9129-5">
    <script src="//ads.themoneytizer.com/s/gen.js?type=5">
    </script>
    <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5">
    </script>
  </div>
     -->
</footer>
</html>