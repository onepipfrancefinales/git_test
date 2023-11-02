<?php include("../saison.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php $comite="phpbe";?><?php $CMT="BE";?><?php $cmt="be";?><?php $comiteNom="Bretagne";?>
  <link type="text/css" rel="stylesheet" href="resultat.css">
  <link type="text/css" rel="stylesheet" href="../ligne1.css">
  <title>Championnats Territoriaux comit&eacute; <?php echo $comiteNom;?></title>
  <meta name="description"
 content=" R&eacute;sulats des comp&eacute;titions territoriales du comit&eacute; Armagnac Bigorre. Calendriers, r&eacute;sultats et statistiques de l'honneur � la 4me S&eacute;rie, &eacute;quipes II comprises. Egalement disponible les phases finales territoriales des ann&eacute;es pr&eacute;c&eacute;dentes et les palmares territoriaux des diff&eacute;erentes divisions du comit&eacute;. ">
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
 src="../images/banniere_haut/(BR).jpg" height="150"
 width="1100"></td>
    </tr>
    <tr>
      <td colspan="3">
      <div><?php include("../01ligne.php"); ?> </div>
      </td>
    </tr>
    <tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26">
      <div align="center"><?php include("../pub/pub1.php"); ?> </div>
      </td>
    </tr>
    <tr valign="middle">
      <td bgcolor="#006699" valign="top" width="225" height="1465"> 
        <p><?php include("../01gauche.php");?> </p>
      </td>
      <td bordercolor="#000000" bgcolor="#ffffff" width="650" height="1465" valign="top"> 
        <div align="center"> <br>
          <h1> Comp&eacute;titions R&eacute;gionales</h1>
          <h2> Ligue de Bretagne <br>
            <font face="Arial, Helvetica, sans-serif" size="3" color="#000000"><br>
            Le comit&eacute; territorial de Bretagne est devenu<br>
            la ligue de Bretagne en 2018.</font> </h2>
		  <br>
          <table border="3" bordercolor="#000000" cellpadding="0"
 cellspacing="0" width="550">
        <tbody>
          <tr>
              <td rowspan="2" bgcolor="#006699" valign="middle"
 width="303"> 
                <h4><a
 href="../phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=HPHS1&comite=br&annee=<?php echo $saison;?>&division=170"
 target="_blank">Phases finales territoriales</a></h4>
            </td>
              <td class="tabHautDroit"> <a
 href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Palmar&egrave;s territorial </a> </td>
          </tr>
          <tr>
              <td class="tabHautDroit"> <a
 href="../page_comite.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Acc&egrave;s aux infos du comit&eacute;</a></td>
          </tr>
          <tr class="fond" valign="middle">
            <td colspan="2">
            <h4><a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $saison;?>"
 target="_blank">Championnat de France</a></h4>
            </td>
          </tr>
        </tbody>
      </table>
       
            <?php include("sommaire.php"); ?>
            <?php include("../pub/pub4.php"); ?>
         
      <hr>
      <hr>
          <br>
          <?php require("comPerso.php"); ?>
          <br>
          <br>
      <h5>Honneur</h5>
      <table width="600">
        <tbody>
          <tr>
            <td>
            <h3>Equipe I </h3>
<?php $id=171 ; $height=360; ?><?php require ("maquette.php") ; ?> </td>
            <td>
            <h3>Equipe II</h3>
<?php $id=271 ; ?><?php require ("maquette.php") ; ?> </td>
          </tr>
        </tbody>
      </table>
          <?php include("../pub/pub4.php"); ?>
          <br>
            <br>
          
      <h5><a name="P"></a>Promotion honneur</h5>
      <p><?php $id=181 ; $height=350; ?><?php require ("maquetteUnique.php") ; ?>
      </p>
         
     <?php
		  // include("../pub/pub4.php"); 
		   include("comPerso2.php"); 
		  ?>
          <br><br>
          <h5><a name="1"></a> 1re S&eacute;rie</h5>
          <p>
            <?php $id=191 ; $height=330; ?>
            <?php require ("maquetteUnique.php") ; ?>
          </p>
      <?php
		  // include("../pub/pub4.php"); 
		   include("comPerso2.php"); 
		  ?>
          <br>
          <br>
          <h5><a name="2"></a>2me S&eacute;rie</h5>
<?php $id=201 ; $height=330; ?><?php require ("maquetteUnique.php") ; ?>
      <br>
          <?php include("../pub/pub4.php"); ?>
          <br>
          <br>
          <h5><a name="3"></a><a name="4"></a>3me/ 4me S&eacute;rie</h5>
         
          <?php $id=211 ; $height=390; ?>
          <?php require ("maquetteUnique.php") ; ?>
          <br>
          <?php include("../pub/pub4.php"); ?>
          <br>
            <br>
          
      <hr>
      <hr>
         
            <?php include("../pub/pub4.php"); ?>
            <?php include("sommaire.php"); ?>
        
      <table border="3" bordercolor="#000000" cellpadding="0"
 cellspacing="0" width="550">
        <tbody>
          <tr>
            <td rowspan="2" bgcolor="#006699" valign="middle"
 width="303">
            <h4><a
 href="../phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=HPHS1&comite=br&annee=<?php echo $saison;?>&division=170"
 target="_blank">Phases finales territoriales</a></h4>
            </td>
              <td class="tabHautDroit"> <a
 href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Palmar&egrave;s territorial </a> </td>
          </tr>
          <tr>
              <td class="tabHautDroit"> <a
 href="../page_comite.php?variable_1=(<?php echo $CMT;?>)"
 target="_blank">Acc&egrave;s aux infos du comite</a> </td>
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
      <p><?php include("../pub/pub_carre.php"); ?> </p>
          
        </div>
      </td>
      <td align="center" bgcolor="#006699" height="1465" valign="top"
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
            <td><?php include("../comitebas.php"); ?> </td>
          </tr>
          <tr>
            <td><?php include("../pub/pub1.php"); ?> </td>
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
<footer> 
<div id="9129-5">
<script src="//ads.themoneytizer.com/s/gen.js?type=5">
</script>
<script
 src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">
</script></div></footer>
</body>
</html>
