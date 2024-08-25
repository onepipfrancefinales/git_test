
<script language="javascript">
<!--

if (screen.width < 800)
location="https://francefinalesrugby.fr/smart/sommaire.php"; 
//else if (screen.width > 800)     
//location="https://francefinalesrugby.fr";
//-->
</script>


<?php
session_start();
require 'saison.php';
require 'consultation/fonctions.php';
require 'connect/connexion1.php';
require 'resultats/constantes.php';



?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="google-adsense-account" content="ca-pub-9177538664500260">
  <title>France Finales Rugby</title>
  <link rel="canonical" href="https://francefinalesrugby/index.fr ">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link type="text/css" rel="stylesheet" href="ligne1.css">
  <link type="text/css" rel="stylesheet" href="lienNoir.css">
  <link type="text/css" rel="stylesheet" href="formulaireDG.css">
  <meta name="description" content=" Résulats des compétitions Fédérales et régionales. Egalement disponible les phases finales Régionales et nationales. ">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">

</head>

<body>

  <table class="marginAuto">
    <tr>
      <td colspan="3">
        <img src="images/stade3.jpg" alt="france finales rugby" width="1250" height="150">
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <?php include("01ligne.php"); ?>
      </td>
    </tr>
    <tr class="colonne">
      <td colspan="3">

      </td>
    </tr>
    <tr>
      <td class="colonne">
        <?php include("01gauche.php"); ?>
      </td>
      <td class="backgroundBlanc">

        <br> <br>
        <?php include("championsAnnee2024.php");  ?>


        <br>

        <?php  require "resultats/tableauEffectifsClubs.php";  ?>
        <hr>
        <br>
        <br>
        <b>
          <div class="colorBlack style size5">Pyramide
            des divisions pour la depuis la <br>
            saison 2022-2023</div>
        </b>

        <img src="/images/pyramide-2022-2023.jpg" alt="pyramide des divisions" width="500" height="511">


        <br>
        <hr>
        <br>
        <br>
        <?php include("informations/majParSMS/infosMajClassement.php"); ?>
        </p>
        <!-- <p align="center"><a href="brennus_histoire/pageAccueil.php">test</a></p>-->

        <div align="center">
          <table width="557" border="0" align="center">
            <tr class="backgroundRouge">
              <td class="colorWhite size4 style" colspan="3">
                <b>  ACCEDER A L'APPLICATION</b>
              </td>
            </tr>
            <tr class="backgroundRouge">
              <td class="colorWhite size4 style" colspan="3">
                <b> SMARTPHONE </b>
              </td>
            </tr>
            <tr class="backgroundBlanc">
              <td colspan="3">&nbsp;</td>
            </tr>
            <!-- 
            <tr>
              <td colspan="3" class="backgroundBleu colorWhite size4 style">
                <b>
                  Installation de l'appli pour les
                  Appareils sous Android
                </b>

              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p>
                <div class="colorBlack size4">Télécharger l'application </br>

                  <b>
                   
                    <a href="https://play.google.com/store/apps/details?id=com.roro.rjere&amp;hl=fr" target="_blank">
                      France Finales Rugby App
                    </a></b> sur Google Play.

                </div>



                <p><a href="https://play.google.com/store/apps/details?id=com.roro.rjere&amp;hl=fr" target="_blank">
                    Aller sur Google play </a></p>
              </td>
              <td class="backgroundBlanc"><a href="https://play.google.com/store/apps/details?id=com.roro.rjere&amp;hl=fr" target="_blank"><img src="images/logo_google.jpg" alt="logo google" height="176" width="215"></a></td>
            </tr>
            -->
            <tr>
              <td colspan="3" class="backgroundBlanc"></td>
            </tr>
            <tr>
              <td colspan="3" class="backgroundBleu colorWhite size4 style"><b>
                  Installation d'un lien pour les smartphones
                
                </b></td>
            </tr>
            <tr>
              <td colspan="2" class="colorRed size5 backgroundBlanc"><a href="https://francefinalesrugby.fr/smart/sommaire.php" target="_blank"><b>
                    Lien à mettre dans vos favoris<br>


                  </b></a>
                <a href="https://francefinalesrugby.fr/smart/sommaire.php" target="_blank"><img src="../images/apple.png" alt="apple" height="183" width="184"></a>
              </td>
              <td class="colorTexte">
                <p>
                  Pour les utilisateurs de smartphones
                
                
                  ,<br>
                  Cliquer sur le lien ci-dessous et mettre
                  l'adresse de ce dernier en favori.
                </p>
                <p>
                  ou saisir l'adresse ci-dessous
                  et la mettre en favori sur votre smartphone.
                </p>

                <p>
                  https://francefinalesrugby.fr/smart/sommaire.php<br>
                </p>

              </td>
            </tr>
            <tr>
              <td colspan="3" class="backgroundBlanc"></td>
            </tr>
            <tr>
              <td colspan="3" class="backgroundBlanc">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td></td>
            </tr>
            <tr class="styleTitre">
              <td colspan="2">
                LES PALMARES
              </td>
              <td>
                LES RESULTATS ET <br> CLASSEMENTS
              </td>
            </tr>
            <tr>
              <td colspan="2" class="colorTexte">

                Retrouvez tous les palmarès
                <br>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td colspan="2" class="colorTexte">
                Par années <br>
                Par clubs <br>
                Par catégories<br>
                Par divisions<br>
                Par comité

              </td>
              <td class="colorTexte">

                <p>
                  Decouvrez tous les championnats et
                  classements des compétitions de rugby Français
                  ( du Top 14 à la 4me Série)
                </p>


                <div class="colorBlack size4">
                  <a href="resultats/page_pro.php"> Compétitions professionnels</a><br>
                  <a href="resultats/page_resultats.php">Compétitions Fédérales</a><br>
                  <a href="resultats/page_resultats.php">Compétitions régionales</a>
                </div>


              </td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td>

              </td>
            </tr>
            <tr>
              <td colspan="3"></td>
            </tr>
            <tr>
              <td colspan="3">
                <?php //include("pub/pub4.php");   
                ?>
              </td>
            </tr>
            <tr>
              <td colspan="3"></td>
            </tr>
          </table>

          <table width="558">
            <tr>
              <td width="274"></td>
              <td width="272"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr class="styleTitre">
              <td>

                LES FEMININES

              </td>
              <td>
                LES CLUB
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>

                <a href="http://francefinalesrugby.fr/feminine/page_elite1.php"> Championnats féminins </a>

              </td>
              <td rowspan="4" class="colortexte">
                <p>
                  Vous avez la possibilité de mettre
                  à jour ou d'insérer des informations concernant
                  vos clubs (Bureau, site internet, contact etc...) en passant
                  par le menu déroulant des comités, ou en inserant
                  le nom de votre club dans le formulaire "par club"
                  situé droite de la page
                </p>
                <p>
                  vous pourez également inserer des photos de votre club
                </p>
              </td>
            </tr>
            <tr>
              <td>
              </td>
            </tr>
            
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>

              </td>
              <td></td>
            </tr>
            <tr>
              <td class="styleTitre">

                LES VIDEOS

              </td>
              <td></td>
            </tr>
            <tr>
              <td>
                <a href="dossiers/video/pagevideo.php?choix=<?php echo "pla"; ?>"> Plaquages </a>
              </td>
              <td></td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/video/pagevideo.php?choix=<?php echo "ess"; ?>"> Essais </a>
              </td>
              <td>

              </td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/video/pagevideo.php?choix=<?php echo "bag"; ?>"> Bagarres </a>
              </td>
              <td class="styleTitre">
                PHASES FINALES
              </td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/video/pagevideo.php?choix=<?php echo "ins"; ?>"> Insolites </a>
              </td>
              <td>

                Régionales

              </td>
            </tr>
            <tr>
              <td><a href="https://francefinalesrugby.fr/dossiers/video/pagevideo.php?choix=<?php echo "cau"; ?>">
                  Causeries
                </a></td>
              <td>
                <a href="https://francefinalesrugby.fr/phases_finales/top14/pagetop14.php">
                  Champ de France
                </a>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="styleTitre">

                MOTS ET BONS MOTS

              </td>
              <td class="styleTitre">

                Avant Match et<br> 3me MI-TEMPS

              </td>
            </tr>
            <tr>
              <td></td>
              <td><b>
                  HISTOIRE
                </b></td>
            </tr>
            <tr>
              <td>

                <a href="https://francefinalesrugby.fr/dossiers/lexique/pageLexique.php?sommaire=1&lettre=0"> Lexique du rugby </a>

              </td>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/lexique/page_chansons.php"> Chansons paillardes </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/lexique/pageLexique.php?sommaire=2"> Expressions du rugby </a>
              </td>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/lexique/page_hymnes.php"> Hymnes </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/lexique/pageLexique.php?sommaire=4"> Expressions mediatiques </a>
              </td>
              <td></td>
            </tr>
            <tr>
              <td>
                <a href="https://francefinalesrugby.fr/dossiers/lexique/pageLexique.php?sommaire=3">
                  Phrases célèbres
                </a>
              </td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </table>


        </div>
      </td>
      <td class="colonne">
        <?php include("00droite.php"); ?>
      </td>
    </tr>
    <tr>
      <?php include("footer.php");  ?>
    </tr>
  </table>
  <footer> </footer>

</body>

</html>