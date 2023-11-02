<?php echo substr($chaine,0,2500); //ne prend que les 2500 premiers caractères ?> 



 <html>
<head>
<?php
$sigle=$_GET['variable_1'];


?>
<title> Champions territoriaux 
<?php echo $sigle; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
<body>
<div id="Layer1" style="position:absolute; width:1175px; height:560px; z-index:1; left: 40px; top: 267px"> 
  <table cellspacing="0" cellpadding="0" border="0" align="center">
    <tr> 
      <td width="98" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
      <td width="170" height="4" valign="top"></td>
    </tr>
    <tr> 
      <td width="98" height="32" valign="top"></td>
      <td width="1020" height="32" colspan="6" valign="top"> 
        <table width="100%" border="1" mm_noconvert="TRUE">
          <tr> 
            <td width="16%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>HONNEUR</b></font></div>
            </td>
            <td width="17%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>PROMOTION</b></font></div>
            </td>
            <td width="17%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>1er SERIE</b></font></div>
            </td>
            <td width="17%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>2me SERIE</b></font></div>
            </td>
            <td width="16%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>3me SERIE</b></font></div>
            </td>
            <td width="17%" bgcolor="#006699"> 
              <div align="center"><font color="#FFFFFF"><b>4me SERIE</b></font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

  $sigle=$_GET['variable_1'];

  
  $reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur'  and titre='Champion'  and rang2=1 and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" height="12" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['saison']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php
 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and rang2=1 and titre='Champion'  and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='promotion honneur' and rang2=1 and titre='Champion'  and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='1re Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie'  and titre='Champion' and rang2=1  and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie'  and titre='Champion' and rang2=1  and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr> 
      <td width="98" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
      <td width="170" height="30" valign="top"></td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#CCCCCC"> 
              <div align="center"> 
                <?php echo $donnees['saison']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bordercolor="#FFFFFF" bgcolor="#CCCCCC" height="9"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF" height="13"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='2me Serie'  and titre='Champion'and rang2=1  and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr> 
      <td width="98" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
      <td width="170" height="38" valign="top"></td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur'and rang2=1  and titre='Champion'  and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['saison']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1  and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 20,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#CCCCCC"> 
              <div align="center"> 
                <?php echo $donnees['saison']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bordercolor="#FFFFFF" bgcolor="#CCCCCC" height="9"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF" height="13"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='2me Serie'  and titre='Champion'and rang2=1  and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 30,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#CCCCCC" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle' and division='honneur'and rang2=1  and titre='Champion'  and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" height="12" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['saison']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='honneur'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='promotion honneur' and rang2=1 and titre='Champion' and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" bordercolor="#999999" align="center" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bordercolor="#FFFFFF" bgcolor="#FFFFFF" height="9"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='1re Serie'  and titre='Champion' and rang2=1  and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#999999" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF" height="13"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='2me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#999999" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='3me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
        <p align="center"> 
          <?php
require ("connection.php") ;
 ?>
          <?php

$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE comite1='$sigle'and division='4me Serie'  and titre='Champion' and rang2=1 and categorie='A' order by saison desc limit 40,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
          <strong> </strong> 
        <table width="100%" border="1" align="center" bordercolor="#999999" cellspacing="0" cellpadding="0" mm_noconvert="TRUE">
          <tr bgcolor="#FFFFFF"> 
            <td width="19%" bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
              <div align="center"> 
                <?php echo $donnees['champion']; ?>
              </div>
            </td>
          </tr>
        </table>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr> 
      <td width="98" height="42" valign="top">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="170" height="42" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr valign="middle"> 
      <td colspan="7" height="42"> 
        <div align="right"><a href="palm_terr3tableau.php" target="_blank">Palmar&eacute;s 
          territorial du comite $ avant 1980</a></div>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="Layer2" style="position: absolute; left: 258px; top: 59px; width: 758px; height: 53px; z-index: 1"> 
  <p align="center"><font size="7">Champions territoriaux du </font></p>
  <p align="center"><font size="5"><b><font size="7">
   
   <?php
require ("connection.php") ;
 ?>
   
    <?php

$reponse = mysql_query("SELECT * FROM bdcomite WHERE sigle='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
    <strong> 
    <?php echo "Comité"?>
    <?php echo $donnees['nom'];?>
    </strong> 
    <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
    </font></b></font>
</div>
<div id="Layer3" style="position:absolute; width:200px; height:220px; z-index:2; left: 51px; top: 9px"><font size="5"><b> 
 
 
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
mysql_close(); // Déconnexion de MySQL
?>
  </b></font></div>
<div id="Layer3" style="position:absolute; width:200px; height:220px; z-index:2; left: 1018px; top: 15px"><font size="5"><b> 
  
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
mysql_close(); // Déconnexion de MySQL
?>
  </b></font></div>
<p>&nbsp;</p>
</body>
</html>
