<?php echo substr($chaine,0,2500); //ne prend que les 2500 premiers caractères ?> 



<html>
<head>
<?php
$sigle=$_GET['variable_1'];

?>
<link type="text/css" rel="stylesheet" href="ligne1.css"/>

<title> Champions territoriaux 
<?php echo $sigle; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

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
<body bgcolor="#000000">
<table cellspacing="0" cellpadding="0" border="0" align="center" width="1150">
  <tr> 
    <td colspan="8" height="105" valign="top"> 
      <div align="center"><font color="#FFFFFF"> 
        <?php
    
    include("page_image_al.php");
    ?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="8" height="32" valign="top"> 
      <div align="center"><font color="#FFFFFF"> 
        <?php
    
    include("01ligne.php");
    ?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="8" height="12" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" height="11" valign="top">&nbsp;</td>
    <td colspan="3" height="11" valign="top">&nbsp;</td>
    <td colspan="3" height="11" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2" height="96" valign="top"> 
      <div align="center"><font size="5"><b> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <strong> </strong> 
        <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>
        <?php
 }

?>
        </b></font></div>
    </td>
    <td colspan="4" height="128" valign="middle"> 
      <p align="center"><font size="7" color="#FFFFFF">Champions territoriaux 
        du</font></p>
      <p align="center"><font size="5" color="#FFFFFF"><b><font size="7"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <strong> 
        <?php echo "Comit&eacute;"?>
        <?php echo $donnees['nom'];?>
        </strong> 
        <?php
 }

?>
        </font></b></font> 
      <div align="right"><font size="5"></font></div>
    </td>
    <td colspan="2" height="96" valign="top"> 
      <div align="center"><font size="5"><b> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <strong> </strong> 
        <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/images/comites/$sigle.jpg\" border=\"0\" target=_top>");}
?>
        <?php
 }

?>
        </b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="8" height="32" valign="top"></td>
  </tr>
  <tr> 
    <td width="98" height="32" valign="top"></td>
    <td height="32" colspan="7" valign="top"> 
      <table width="100%" border="1" mm_noconvert="TRUE">
        <tr> 
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>HONNEUR</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>PROMOTION</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>1er SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>2me SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>3me SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>4me SERIE</b></font></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

  $sigle=$_GET['variable_1'];

  
  $reponse = mysql_query("SELECT saison 
						  FROM bdequipe1 
						  WHERE comite1='$sigle' and division='honneur'  and titre='Champion'  and rang2=1 and categorie='A' 
						  ORDER BY saison desc limit 0,10"); 

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="98" height="12" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='honneur' AND rang2=1 AND titre='Champion'  AND categorie='A' 
						ORDER BY saison desc limit 0,10"); 

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="177" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='promotion honneur' and rang2=1 and titre='Champion'  and categorie='A' 
						ORDER BY saison desc limit 0,10"); // Requête SQL

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" >
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='1re Serie'  and titre='Champion' and rang2=1 and categorie='A' 
						ORDER BY saison desc limit 0,10"); 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle'and division='2me Serie'  and titre='Champion' and rang2=1  and categorie='A' 
						ORDER BY saison desc limit 0,10"); 
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='3me Serie'  and titre='Champion' and rang2=1  and categorie='A' 
						ORDER BY saison desc limit 0,10"); 

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' 
						ORDER BY saison desc limit 0,10"); 

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
  </tr>
  <tr> 
    <td width="98" height="30" valign="top"><font color="#000000"></font></td>
    <td width="119" height="30" valign="top"><font color="#000000"></font></td>
    <td width="84" height="30" valign="top"><font color="#000000"></font></td>
    <td width="226" height="30" valign="top"><font color="#000000"></font></td>
    <td width="169" height="30" valign="top"><font color="#000000"></font></td>
    <td height="30" valign="top" colspan="2"><font color="#000000"></font></td>
    <td width="233" height="30" valign="top"><font color="#000000"></font></td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

$reponse = mysql_query("SELECT saison 
						FROM bdequipe1 
						WHERE comite1='$sigle'and division='honneur' and rang2=1 and titre='Champion' and categorie='A' 
						ORDER BY saison desc limit 10,10"); // Requête SQL

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="98" height="12" bordercolor="#FFFFFF" bgcolor="#CCCCCC"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='honneur' and rang2=1 and titre='Champion' and categorie='A' 
						ORDER BY saison desc limit 10,10");

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bordercolor="#FFFFFF" bgcolor="#CCCCCC" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1 and categorie='A' 
						ORDER BY saison desc limit 10,10"); 

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle' and division='2me Serie'  and titre='Champion'and rang2=1  and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' 
						ORDER BY saison desc limit 10,10"); 

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
  </tr>
  <tr> 
    <td width="98" height="38" valign="top"><font color="#000000"></font></td>
    <td width="119" height="38" valign="top"><font color="#000000"></font></td>
    <td width="84" height="38" valign="top"><font color="#000000"></font></td>
    <td width="226" height="38" valign="top"><font color="#000000"></font></td>
    <td width="169" height="38" valign="top"><font color="#000000"></font></td>
    <td height="38" valign="top" colspan="2"><font color="#000000"></font></td>
    <td width="233" height="38" valign="top"><font color="#000000"></font></td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT saison 
						FROM bdequipe1 
						WHERE comite1='$sigle' and division='honneur'and rang2=1  and titre='Champion'  and categorie='A' 
						ORDER BY saison desc limit 20,10"); 

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="98" height="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='honneur'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1  and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }

?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php

$reponse = mysql_query("SELECT champion FROM bdequipe1 WHERE comite1='$sigle'and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
  </tr>
  <tr valign="middle"> 
    <td colspan="8" height="42"> 
      <div align="right"> <font color="#000000"> 
        <?php
		echo "<a href=palm_terr3tableau.php?variable_1=$sigle target=_blank> Palm territorial du comite  </a>";
		?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF" valign="middle"> 
    <td colspan="8" height="100"> 
      <div align="center"><font color="#000000"><b> 
        <?php
    // On inclut le haut de la page
   // include("pub1.php");
    ?>
        </b></font></div>
    </td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top"> 
      <div align="center"><b><font size="6" color="#FFFFFF">Equipes r&eacute;serves</font></b></div>
    </td>
  </tr>
  <tr bgcolor="#000000"> 
    <td colspan="8" height="42" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td width="98" height="32" valign="top" bgcolor="#000000"></td>
    <td height="32" colspan="7" valign="top"> 
      <table width="100%" border="1" mm_noconvert="TRUE">
        <tr> 
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>HONNEUR</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>PROMOTION</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>1er SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>2me SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>3me SERIE</b></font></div>
          </td>
          <td width="170" bgcolor="#006699"> 
            <div align="center"><font color="#FFFFFF"><b>4me SERIE</b></font></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

  $sigle=$_GET['variable_1'];

  
  $reponse = mysql_query("SELECT * 
						  FROM bdequipe2 
						  WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion' and categorie='B' 
						  ORDER BY saison desc limit 0,10"); 

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" height="12" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='promotion honneur' and rang2='2'and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="97%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='1re Serie' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='2me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='3me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='4me Serie' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
  </tr>
  <tr bgcolor="#000000"> 
    <td width="98" height="21" valign="top"><font color="#000000"></font></td>
    <td width="119" height="21" valign="top"><font color="#000000"></font></td>
    <td width="84" height="21" valign="top"><font color="#000000"></font></td>
    <td width="226" height="21" valign="top"><font color="#000000"></font></td>
    <td width="169" height="21" valign="top"><font color="#000000"></font></td>
    <td height="21" valign="top" colspan="2"><font color="#000000"></font></td>
    <td width="233" height="21" valign="top"><font color="#000000"></font></td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#CCCCCC"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='promotion honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bordercolor="#FFFFFF" bgcolor="#CCCCCC" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='1re Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='2me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='3me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='4me Serie' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="170" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
  </tr>
  <tr bgcolor="#000000"> 
    <td width="98" height="16" valign="top"><font color="#000000"></font></td>
    <td width="119" height="16" valign="top"><font color="#000000"></font></td>
    <td width="84" height="16" valign="top"><font color="#000000"></font></td>
    <td width="226" height="16" valign="top"><font color="#000000"></font></td>
    <td width="169" height="16" valign="top"><font color="#000000"></font></td>
    <td height="16" valign="top" colspan="2"><font color="#000000"></font></td>
    <td width="233" height="16" valign="top"><font color="#000000"></font></td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['saison']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='honneur' and rang2=2 and titre='Champion' and categorie='B' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * 
						FROM bdequipe2 
						WHERE comite1='$sigle'and division='promotion honneur' and rang2='2' and titre='Champion' and categorie='B' 
						ORDER BY by saison desc limit 20,10"); 
								while ($donnees = mysql_fetch_array($reponse) )
								{ 
								?>
        </font> 
      <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
								 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * 
						FROM bdequipe2 
						WHERE comite1='$sigle'and division='1re Serie' and rang2='2' and titre='Champion'  and categorie='B' 
						ORDER BY saison desc limit 20,10"); 

 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='2me Serie' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='3me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='4me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        </font> 
      <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
        <tr bgcolor="#FFFFFF"> 
          <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
            <div align="center"> <font color="#000000"> 
              <?php echo $donnees['champion']; ?>
              </font></div>
          </td>
        </tr>
      </table>
      <font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="119" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="84" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="226" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="169" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="42" valign="top" bgcolor="#FFFFFF" colspan="2">&nbsp;</td>
    <td width="233" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="8" height="42" valign="top"> 
      <table width="100%" border="1" bordercolor="#006699">
        <tr> 
          <td> 
            <div align="center"><font color="#000000"> 
              <?php  include("comitebas.php");  ?>
              </font></div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><font color="#000000"> 
              <?php    include("pub1.php");    ?>
              </font></div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><font color="#FFFFFF"> 
              <?php    include("bas.php");   ?>
              </font></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div align="left"></div>
<p><?php require ("palmEquipe2.php"); ?></p>
</body>
</html>
