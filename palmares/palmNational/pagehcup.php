<html>
<head>
<meta name="description"
content="Présentation de la compétititon Juniors Danet(-19ans) et de tous les champions de France Danet; Palmarès complet Juniors Danet.">
<meta name="keywords"
content="Juniors Danat,Juniors Danet,Danet,Championnat de France Juniors, Juniors, -de 19 ans,Champions de France de -19 ans">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Coupe d Europe</title>
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
</head>
<body bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="100%" border="2" bordercolor="#000000">
          <tr> 
            <td> 
              <div align="center"><font color="#FFFFFF"> 
                <?php
    // On inclut le haut de la page
    include("../../images/page_image_al.php");
    ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      <td height="24" colspan="3"><font color="#FFFFFF">
        <?php
    // On inclut le haut de la page
    include("../../01ligne.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="24" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
        <?php
    // On inclut le haut de la page
    include("../resultats/pub12.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("../../01gauche.php");
    ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p><font color="#000000"> 
            
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>

          <p> 
            <?php
require ("../../connect1/connection1.php") ;
 ?>
            <?php


 
 
 echo "<BR/><h2><p> <strong> Comp&eacute;titions Europ&eacute;ennes  <BR/></strong></p></h2>";
echo "<h1><p> <strong> Coupe d Europe<BR/><BR/></strong></p></h1>";


echo "<h1><p> <strong> Champions Cup  <BR/></strong></p></h1>";
 ?>
          </p>
          <p><img src="../images/champion_cup.jpg" width="178" height="228"></p>
<p> 
  <?php
$reponse =$bdd->query("SELECT * 
						FROM bdeurope 
						WHERE rang='11'and titre='Vainqueur' 
						ORDER BY saison DESC"); // Requête SQL
 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees =  $reponse->fetch()  )
{ 
?>
<font face="Arial, Helvetica, sans-serif"><font size="3"> 
  <?php echo $donnees['saison']; ?>
  <?php echo $donnees['champion'];  ?>
  <?php echo $donnees['comite1']; ?>
 </font></font>  <br/><br/>
  <?php
 }
//mysql_close(); // Déconnexion de MySQL
?>
  <?php
require ("../../connect1/connection1.php") ;
 ?>
</p>
<?php echo "<h1><p> <strong> H Cup  <BR/></strong></p></h1>
";?>
<p>&nbsp;</p>
          <p><img src="../images/hcup.jpg" width="180" height="231"></p>
<?php
$reponse = $bdd->query("SELECT * 
						FROM bdeurope 
						WHERE division='H Cup' and rang='1'and titre='Vainqueur' 
						ORDER BY saison DESC"); // Requête SQL
 

								while ($donnees =  $reponse->fetch()  )
								{ 
								?>
								<font face="Arial, Helvetica, sans-serif"><font size="3"> 
								  <?php echo $donnees['saison']; ?>
								  <?php echo $donnees['champion'];  ?>
								  <?php echo $donnees['comite1']; ?>
								  
								</font></font>  <br/><br/>
								<?php
								 }
//mysql_close(); // Déconnexion de MySQL
?>
<p>&nbsp;</p>
<p>
  <?php
    // On inclut le haut de la page
    include("../../pub/pub_carre.php");
    ?>
</p>

            </font>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("../../00droite.php");
    ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("../../comitebas.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><font color="#000000">
                <?php
    // On inclut le haut de la page
    include("../../bas.php");
    ?>
                </font></td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
<footer>
<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
</script></div>
</footer>
</body>
</html>
