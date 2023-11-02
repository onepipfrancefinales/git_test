<?php include("../saison.php");?>
<?php include("../resultats/fonctions.php");?>
<?php $comite="phpfem";?> 
<?php $CMT="FEM";?> 
<?php $cmt="fem";?> 
 
        

<!DOCTYPE html>   
<head>
<meta name="description"
content="Résulats de toutes les compétitions Professionnelles. Calendriers, résultats et statistiques de l'honneur à la 4me Série, équipes II comprises. Egalement disponible les phases finales territoriales des années précédentes et les palmarès territoriaux des differentes divisions du comité.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="../../resultats/resultat.css"/>
<title>Championnat de France F&eacute;minin Elite</title>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<body>
<div align="center">
  <table width="1250" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="157">
       <img src="../../images/stade3.jpg" width="1250" height="150">
        </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php    include("ligne_fem.php");    ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="1267" bgcolor="#996699" align="center" valign="top"> 
        <br>
        <br>
        <?php    include("01gauche_fem.php");  ?>
      </td>
      <td bgcolor="#ffffff" text="#000000" link="#000000" vlink="#000000" alink="#000000" height="1267" valign="top" width="550"> 
        <div align="center"> 
          <p><br>
            <b><font size="6"><br>
            <font color="#000000">Championnats de France<br>
            </font></font></b></p>
          <p><font size="6" color="#000000"><b>Elites F&eacute;minins </b></font></p>
          <p>&nbsp; </p>
          <table width="468" border="3" cellspacing="0" bordercolor="#000000">
            <tr bordercolor="#006699" bgcolor="#006699"> 
              <td height="21" valign="top" align="center" width="227"> 
                <div align="center"><b><font color="#FFFFFF"><a href="../phases_finales/feminines/pagefeminines.php?variable_1=<?php echo $saison;?>" target="_top">Phase 
                  finale Top 8</a></font></b></div>
              </td>
              <td height="21" valign="top" align="center" colspan="2" width="227"> 
                <div align="center"><b><font color="#FFFFFF"> <a href="../palmares/palmNational/pagePalmares.php?division=280"  target="_top"> 
                  Palmar&egrave;s Elite 1</a></font></b></div>
              </td>
            </tr>
            <tr bordercolor="#006699" bgcolor="#006699"> 
              <td height="21" valign="top" colspan="2" align="center"><b><font color="#FFFFFF"><a href="../phases_finales/feminnines/pagefeminines.php?variable_1=<?php echo $saison;?>" target="_top">Phase 
                finale Elite 2</a></font></b> </td>
              <td height="21" valign="top" align="center"> 
                <div align="center"><font color="#FFFFFF"><b><a href="../palmares/palmNational/pagePalmares.php?division=285" target="_top">Palmar&egrave;s 
                  Elite 2</a></b></font></div>
              </td>
            </tr>
          </table>
          <table cellspacing="0" cellpadding="0" border="0" align="center" bordercolor="#000000" height="56" width="550">
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" colspan="3">&nbsp;</td>
            </tr>
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" colspan="3"> 
             
                  <?php    include("../../pub/pub4.php");   ?>
                 
              </td>
            </tr>
            <tr bordercolor="#000000"> 
              <td height="7" valign="top" colspan="3">&nbsp;</td>
            </tr>
            <tr bordercolor="#000000" bgcolor="#006699"> 
              <td height="7" valign="top" colspan="3">&nbsp;</td>
            </tr>
          </table>
          <br>
          <br>
          <h5> Elite 1 - Poule 1</h5>
          <?php $id = 281; AffichageLogos($id, $comite);?>
          <br />
          <br />
          <?php 
				  $height=480; 
				  $champ = $id ;  
				  require ("../resultats/maquette.php") ; 
				  require ("../resultats/journeeSuivante.php"); 
				 ?>
          <p>&nbsp;</p>
          <p> <br>
            <br>
          <h5> Elite 1 - Poule 2</h5>
          <?php $id = 282; AffichageLogos($id, $comite);?>
          <br>
          <?php 
		  $id=282 ; $height=350;
		  $champ = $id ;  
          require ("../resultats/maquette.php") ; 
		  require ("../resultats/journeeSuivante.php");  ?>
          <p>&nbsp;</p><p><br>
            <br>
            <br>
          <h5> Elite 1 - Poule 3<br></h5>
            <?php $id = 283; AffichageLogos($id, $comite);?>
          
          <?php 
		  $id=283 ; $height=350;
		  $champ = $id ;  
          require ("../resultats/maquette.php") ; 
		  require ("../resultats/journeeSuivante.php");  ?>
          <p><br>
            <br>
          <h5> Elite 1 - Poule 4<br></h5>
            <br>
            <?php $id = 284; AffichageLogos($id, $comite);?>
          
          <?php 
		  $id=284 ; $height=350;
		  $champ = $id ;  
          require ("../resultats/maquette.php") ; 
		  require ("../resultats/journeeSuivante.php");  ?>
          <p><br>
            <br>
            <br>
          <hr />
          <h5> Elite 2 - Challenge Armelle Auclair<br></h5>
            <br>
            <?php $id = 285; AffichageLogos($id, $comite);?>
          
          <?php 
			$id=285 ; $height=350; 
			$champ = $id ;  
            require ("../resultats/maquette.php") ; 
			require ("../resultats/journeeSuivante.php");
			 ?>
          <p> 
          <hr />
          <?php    include("../pub4.php");  ?>
          <table width="550" border="3" cellspacing="0" bordercolor="#000000">
            <tr bordercolor="#006699" bgcolor="#006699"> 
              <td height="21" valign="top" align="center" width="227"> 
                <div align="center"><b><font color="#FFFFFF"><a href="../phases_finales/feminines/pagefeminines.php?variable_1=<?php echo $saison;?>" target="_top">Phase 
                  finale Top 8</a></font></b></div>
              </td>
              <td height="21" valign="top" align="center" colspan="2" width="227"> 
                <div align="center"><b><font color="#FFFFFF"> <a href="../palmares/palmNational/pagePalmares.php?division=280" target="_top">Palmar&egrave;s 
                  Elite 1</a></font></b></div>
              </td>
            </tr>
            <tr bordercolor="#006699" bgcolor="#006699"> 
              <td height="21" valign="top" colspan="2" align="center"><b><font color="#FFFFFF"><a href="../phases_finales/feminnines/pagefeminines.php?variable_1=<?php echo $saison;?>" target="_top">Phase 
                finale Elite 2</a></font></b> </td>
              <td height="21" valign="top" align="center"> 
                <div align="center"><font color="#FFFFFF"><b><a href="../palmares/palmNational/pagePalmares.php?division=285" target="_top">Palmar&egrave;s 
                  Elite 2</a></b></font></div>
              </td>
            </tr>
          </table>
          <br>
          <?php include("../pub/pub_carre.php"); ?>
        </div>
      </td>
      <td height="1267" bgcolor="#996699" width="225" valign="top"> 
        <p> 
          <?php include("00droite_fem.php");  ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="1250" border="1" bordercolor="#006699">
            <tr> 
              <td>
                <div align="center"><font color="#000000"> 
                 <?php include("resultatsbas_fem.php"); ?>
                  </font></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="center"><font color="#000000">
                  <?php include("../pub/pub1.php"); ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000">
                  <?php include("../bas.php"); ?>
                  </font></div>
              </td>
            </tr>
          </table> 
        </div>
      </th>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
</body>

</html>
