<?php include("../saison.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php $comite="phpau";?><?php $CMT="AU";?><?php $cmt="au";?><?php $comiteNom="Auvergne";?>
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats Territoriaux comité &lt;?php echo $comiteNom;?&gt;</title>
  <meta name="description"
 content=" Résulats des compétitions territoriales du comité Armagnac Bigorre. Calendriers, résultats et statistiques de l'honneur � la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmares territoriaux des difféerentes divisions du comité. ">
  <meta name="classification" content="Sport,Rugby">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
</head>
<body>
<div align="center">
<table width="1100">
  <tbody>
    <tr>
      <td colspan="3"> <img
 src="../images/banniere_haut/(<?php echo $CMT;?>).jpg" height="150"
 width="1100"></td>
    </tr>
    <tr>
      <td colspan="3">
      <div><?php include("../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26">
      <div align="center"><?php include("pub12.php"); ?> </div>
      </td>
    </tr>
    <tr valign="middle">
      <td bgcolor="#006699" valign="top" width="225">
      <p><?php include("../01gauche.php");?> </p>
      </td>
      <td bordercolor="#000000" bgcolor="#ffffff" width="650">
      <div align="center"> <br>
      <h1> CHAMPIONNATS TERRITORIAUX </h1>
      <h2> Comité<?php echo $comiteNom; ?> </h2>
      <table border="3" bordercolor="#000000" cellpadding="0"
 cellspacing="0" width="550">
        <tbody>
          <tr>
            <td rowspan="2" bgcolor="#006699" valign="middle"
 width="303">
            <h4><a
 href="../phasesfinalesterr/<?php echo $cmt;?>/pagehonneur.php?variable_1=<?php echo $saison;?>"
 target="_blank">Phases finales territoriales</a></h4>
            </td>
            <td class="tabHautDroit"> <a
 href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Palmarès territorial </a> </td>
          </tr>
          <tr>
            <td class="tabHautDroit"> <a
 href="../page_comite.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Accès aux infos du comite</a> </td>
          </tr>
          <tr class="fond" valign="middle">
            <td colspan="2">
            <h4><a
 href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $saison;?>"
 target="_blank">Championnat de France</a></h4>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="tableau1">
        <tbody>
          <tr>
            <td class="tab3"> <a href="#H">Honneur</a> </td>
            <td class="tab3"> <a href="#P">Promotion</a> </td>
            <td class="tab3"> <a href="#1">1re Série</a> </td>
            <td class="tab3"> <a href="#2">2me Série</a> </td>
          </tr>
          <tr>
            <td class="tab3"> <a href="#3">3me Série</a> </td>
            <td class="tab3"> <a href="#4">4me Série </a> </td>
            <td class="tab3" colspan="2"> <a
 href="http://francefinalesrugby.franceserv.com/feminine/index_fem.php">Compétitions
féminines</a> </td>
          </tr>
        </tbody>
      </table>
      <p><?php include("../pub4.php");  ?> </p>
      <p> </p>
      <hr>
      <hr><?php require("comPerso.php"); ?> <br>
      <h5>Honneur</h5>
      <table width="600">
        <tbody>
          <tr>
            <td>
            <h3>Equipe I </h3>
<?php $id=171 ; $height=450; ?><?php require ("maquette.php") ; ?> </td>
            <td>
            <h3>Equipe II</h3>
<?php $id=271 ; ?><?php require ("maquette.php") ; ?> </td>
          </tr>
        </tbody>
      </table>
      <table width="515">
        <tbody>
          <tr>
            <td width="220">
            <h6> <a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id - 100;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos </a> </h6>
            <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id -100;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
            </td>
            <td width="178">&nbsp;</td>
            <td width="220">
            <h6><a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?> " target="_blank"
 title="Différents Classements et évolutions des Equipes réserves">Plus
d'infos </a></h6>
            <h6><a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a> </h6>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <p> </p>
      <p> <big
 style="font-weight: bold; background-color: rgb(255, 255, 102);"><a
 href="http://francefinalesrugby.franceserv.com/pageOutil.php"><small
 style="color: rgb(0, 0, 0);"><big>Consulter
le dispositif proposé pour obtenir des résultats<br>
et un classement dès la fin des rencontre</big>s<br>
      <br>
      </small></a></big><a
 href="http://francefinalesrugby.franceserv.com/pageOutil.php"></a></p>
      <p
 style="font-weight: bold; font-family: Arial; color: rgb(255, 0, 0);"
 class="MsoNormal">Pour<span style=""> </span>les plus
impliqués d’entres <span style="">&nbsp;</span>vous, possibilité de
prendre en charge <br>
les résultats et les classements d’une poule (résultats,
bonus…). <br>
Renseignement au 06.82.24.70.57</p>
      <p> </p>
      <h5><a name="P"></a><a name="1"></a>Promotion Honneur</h5>
      <table width="600">
        <tbody>
          <tr>
            <td>
            <h3>Equipe I</h3>
<?php $id=181 ; $height=410; ?><?php require ("maquette.php") ; ?> </td>
            <td>
            <h3>Equipe II</h3>
<?php $id=9181 ; ?><?php require ("maquette.php") ; ?> </td>
          </tr>
        </tbody>
      </table>
      <table width="515">
        <tbody>
          <tr>
            <td width="219">
            <h6> <a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id - 9000;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos</a></h6>
            <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id - 9000;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
            </td>
            <td width="73"> </td>
            <td width="209">
            <h6> <a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?>" target="_blank"
 title="Différents Classements et évolutions des Equipes réserves">Plus
d'infos </a></h6>
            <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a> </h6>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
<?php include("../pub4.php");  ?> <br>
      <br>
      <h5><a name="P"></a><a name="1"></a>1re Série </h5>
      <br>
      <table width="600">
        <tbody>
          <tr>
            <td>
            <h3>Equipe I </h3>
<?php $id=191 ; $height=420; ?><?php require ("maquette.php") ; ?> </td>
            <td>
            <h3>Equipe II </h3>
<?php $id=9191 ; ?><?php require ("maquette.php") ; ?> </td>
          </tr>
        </tbody>
      </table>
      <table width="515">
        <tbody>
          <tr>
            <td width="219">
            <h6> <a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id - 9000;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos</a></h6>
            <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id - 9000;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
            </td>
            <td width="73"> </td>
            <td width="209">
            <h6> <a
 href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?>" target="_blank"
 title="Différents Classements et évolutions des Equipes réserves">Plus
d'infos </a></h6>
            <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a> </h6>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <p> <big
 style="font-weight: bold; background-color: rgb(255, 255, 102);"><a
 href="http://francefinalesrugby.franceserv.com/pageOutil.php"><small
 style="color: rgb(0, 0, 0);"><big>Consulter
le dispositif proposé pour obtenir des résultats<br>
et un classement dès la fin des rencontre</big>s<br>
      <br>
      </small></a></big><a
 href="http://francefinalesrugby.franceserv.com/pageOutil.php"></a></p>
      <p
 style="font-weight: bold; font-family: Arial; color: rgb(255, 0, 0);"
 class="MsoNormal">Pour<span style=""> </span>les plus
impliqués d’entres <span style="">&nbsp;</span>vous, possibilité de
prendre en charge <br>
les résultats et les classements d’une poule (résultats,
bonus…). <br>
Renseignement au 06.82.24.70.57</p>
      <br>
      <h5><a name="2"></a>2me Série</h5>
      <p><?php $id=201 ; $height=390; ?><?php require ("maquetteUnique.php") ; ?> </p>
      <h6> <a href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos </a></h6>
      <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id ;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
      <br>
<?php include("../pub4.php");?> <br>
      <h5><a name="3"></a>3me Série</h5>
<?php $id=211 ; $height=330; ?><?php require ("maquetteUnique.php") ; ?> <br>
      <br>
      <h6> <a href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos </a></h6>
      <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
      <br>
      <h5><a name="4"></a> 4me Série</h5>
<?php $id=221 ; $height=350; ?><?php require ("maquetteUnique.php") ; ?> <br>
      <br>
      <h6> <a href="<?php echo $CMT;?>/171.php?id=<?php echo $id;?>"
 target="_blank"
 title="Différents Classements et évolutions des Equipes unes">Plus
d'infos </a></h6>
      <h6> <a
 href="<?php echo $CMT;?>/calendrier.php?id=<?php echo $id;?>"
 target="_blank"
 title="Résultats et calendrier complet de la compétition">Calendrier
complet</a></h6>
      <br>
      <hr>
      <hr>
      <p><?php include("../pub4.php"); ?> </p>
      <table class="tableau1">
        <tbody>
          <tr>
            <td class="tab3"> <a href="#H">Honneur</a> </td>
            <td class="tab3"> <a href="#P">Promotion</a> </td>
            <td class="tab3"> <a href="#1">1re Série</a> </td>
            <td class="tab3"> <a href="#2">2me Série</a> </td>
          </tr>
          <tr>
            <td class="tab3"> <a href="#3">3me Série</a> </td>
            <td class="tab3"> <a href="#4">4me Série </a> </td>
            <td class="tab3" colspan="2"> <a
 href="http://francefinalesrugby.franceserv.com/feminine/index_fem.php">Compétitions
féminines</a> </td>
          </tr>
        </tbody>
      </table>
      <table border="3" bordercolor="#000000" cellpadding="0"
 cellspacing="0" width="550">
        <tbody>
          <tr>
            <td rowspan="2" bgcolor="#006699" valign="middle"
 width="303">
            <h4><a
 href="../phasesfinalesterr/<?php echo $cmt;?>/pagehonneur.php?variable_1=<?php echo $saison;?>"
 target="_blank">Phases finales territoriales</a></h4>
            </td>
            <td class="tabHautDroit"> <a
 href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Palmarès territorial </a> </td>
          </tr>
          <tr>
            <td class="tabHautDroit"> <a
 href="../page_comite.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Accès aux infos du comite</a> </td>
          </tr>
          <tr class="fond" valign="middle">
            <td colspan="2">
            <h4><a
 href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $saison;?>"
 target="_blank">Championnat de France</a></h4>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <p><?php include("../pub_carre.php"); ?> </p>
      <br>
      <p><?php //include("pageFem.php"); ?> </p>
      <br>
      </div>
      </td>
      <td align="center" bgcolor="#006699" height="1819" valign="top"
 width="225">
      <p><?php include("../00droite.php"); ?> </p>
      </td>
    </tr>
    <tr>
      <th colspan="3" bgcolor="#ffffff" height="77" valign="top">
      <div align="center">
      <table border="1" bordercolor="#006699" width="100%">
        <tbody>
          <tr>
            <td><?php include("../comitebas.php");    ?> </td>
          </tr>
          <tr>
            <td><?php include("../pub1.php");  ?> </td>
          </tr>
          <tr>
            <td><?php include("../bas.php"); ?> </td>
          </tr>
        </tbody>
      </table>
      </div>
      </th>
    </tr>
  </tbody>
</table>
</div>
<footer> </footer>
<div id="9129-5">
<script src="//ads.themoneytizer.com/s/gen.js?type=5">
			</script>
<script
 src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">
			</script></div>
</body>
</html>
