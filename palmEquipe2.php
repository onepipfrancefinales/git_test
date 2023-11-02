<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="914" border="0" cellspacing="0" align="center">
  <tr> 
    <td width="103">&nbsp;</td>
    <td width="192" bgcolor="#006699"> 
      <div align="center"><font color="#FFFFFF"><b>HONNEUR</b></font></div>
    </td>
    <td width="190" bgcolor="#006699"> 
      <div align="center"><font color="#FFFFFF"><b>PROMOTION</b></font></div>
    </td>
    <td width="195" bgcolor="#006699"> 
      <div align="center"><font color="#FFFFFF"><b>1er SERIE</b></font></div>
    </td>
    <td width="224" bgcolor="#006699"> 
      <div align="center"><font color="#FFFFFF"><b>2me SERIE</b></font></div>
    </td>
  </tr>
  <tr> 
    <td width="103"><font color="#000000"> 
      <?php
require ("connection.php") ;
 ?>
      <?php

  $sigle=$_GET['variable_1'];

  
  $reponse = mysql_query("SELECT saison
						  FROM bdequipe2 
						  WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion' and categorie='B' 
						  ORDER BY saison desc limit 0,10"); 

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="192"><font color="#000000"> 
      <?php
require ("connection.php") ;
 ?>
      <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe2 WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <?php echo $donnees['champion']; ?>  </font></td>
    <td width="190"><font color="#000000"> 
      <?php
}
 ?>
      <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='promotion honneur' and rang2='2'and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="195"><font color="#000000"> 
      <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe2 WHERE comite1='$sigle' and division='1re Serie' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="224"><font color="#000000"> 
      <?php

 
$reponse = mysql_query("SELECT champion FROM bdequipe2 WHERE comite1='$sigle'and division='2me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 0,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF" bordercolor="#FFFFFF"> 
    <td width="103"> 
      <?php echo $donnees['saison']; 
      
 }

?>
    </td>
    <td width="192"><font color="#000000"> 
    
      </font></td>
    <td width="190"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
    <td width="195"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
    <td width="224"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
  </tr>
  <tr> 
    <td width="103"><font color="#000000"> </font></td>
    <td width="192"><font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="190"><font color="#000000"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
      </font></td>
    <td width="195"><font color="#000000">
      <?php
 }

?>
      </font></td>
    <td width="224"><font color="#000000">
      <?php
 }

?>
      </font></td>
  </tr>
  <tr bgcolor="#000000"> 
    <td width="103">&nbsp;</td>
    <td width="192">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="195">&nbsp;</td>
    <td width="224">&nbsp;</td>
  </tr>
  <tr> 
    <td width="103"><font color="#000000"> 
      <?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="192"><font color="#000000"> 
      <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="190"><font color="#000000"> 
      <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='promotion honneur' and rang2='2' and titre='Champion' and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="195"><font color="#000000"> 
      <?php

$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle'and division='1re Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
    <td width="224"><font color="#000000"> 
      <?php

 
$reponse = mysql_query("SELECT * FROM bdequipe2 WHERE comite1='$sigle' and division='2me Serie' and rang2='2' and titre='Champion'  and categorie='B' order by saison desc limit 10,10"); // Requête SQL

 
// On fait une boucle pour lister tout ce que contient la table :
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="103"><font color="#000000"> 
      <?php echo $donnees['saison']; ?>
      </font></td>
    <td width="192"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
    <td width="190"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
    <td width="195"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
    <td width="224"><font color="#000000"> 
      <?php echo $donnees['champion']; ?>
      </font></td>
  </tr>
  <tr> 
    <td width="103"><font color="#000000">
      <?php
 }

?>
      </font></td>
    <td width="192"><font color="#000000">
      <?php
 }

?>
      </font></td>
    <td width="190"><font color="#000000">
      <?php
 }

?>
      </font></td>
    <td width="195"><font color="#000000">
      <?php
 }

?>
      </font></td>
    <td width="224"><font color="#000000">
      <?php
 }

?>
      </font></td>
  </tr>
  <tr bgcolor="#000000"> 
    <td width="103">&nbsp;</td>
    <td width="192">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="195">&nbsp;</td>
    <td width="224">&nbsp;</td>
  </tr>
  <tr> 
    <td width="98" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
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

?>
      </font></td>
    <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
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

?>
      </font></td>
    <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
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

?>
      </font></td>
    <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
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

?>
      </font></td>
    <td width="170" height="42" valign="top" bgcolor="#FFFFFF"> 
      <p align="center"> <font color="#000000"> 
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
  </tr>
  <tr> 
    <td width="103">&nbsp;</td>
    <td width="192">&nbsp;</td>
    <td width="190">&nbsp;</td>
    <td width="195">&nbsp;</td>
    <td width="224">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p></body>
</html>
