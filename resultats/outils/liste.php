<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<p align="center"><font size="7"><b><font color="#FF0000">- - B</font><font size="7"><b><font color="#FF0000">ase 
  de Donn&eacute;es n&deg;</font></b></font><font color="#FF0000">2 - - <br>

  </font></b></font></p>
<p align="center">&nbsp;</p>
<p align="center"><b><font color="#000000" size="7">
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip

$comite="ab";
require ("fonctionListe.php") ;
 
$comite="al";
require ("fonctionListe.php") ;

$comite="au";
require ("fonctionListe.php") ;
 
$comite="be";
require ("fonctionListe.php") ;
 
$comite="bg";
require ("fonctionListe.php") ;
 
$comite="ca";
require ("fonctionListe.php") ;
 
$comite="cbl";
require ("fonctionListe.php") ;
 
$comite="ce";
require ("fonctionListe.php") ;
 
$comite="fl";
require ("fonctionListe.php") ;
 
$comite="idf";
require ("fonctionListe.php") ;
 
$comite="ld";
require ("fonctionListe.php") ;

$comite="lm";
require ("fonctionListe.php") ;
 
$comite="ap";
require ("fonctionListe.php") ;
 
$comite="da";
require ("fonctionListe.php") ;
 
$comite="ly";
require ("fonctionListe.php") ;
 
$comite="n";
require ("fonctionListe.php") ;
 
$comite="pa";
require ("fonctionListe.php") ;
 
$comite="pc";
require ("fonctionListe.php") ;

$comite="pch";
require ("fonctionListe.php") ;
 ?>
<?php mysql_close(); ?>

<p align="center"><font size="7"><b><font color="#FF0000">- - B</font><font size="7"><b><font color="#FF0000">ase 
  de Donn&eacute;es n&deg;</font></b></font><font color="#FF0000">3 - - <br>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip

$comite="pro";
require ("fonctionListe.php") ;
 
$comite="f1";
require ("fonctionListe.php") ;

$comite="fed2";
require ("fonctionListe.php") ;
 
$comite="fed3NE";
require ("fonctionListe.php") ;;
 
$comite="fed3GS";
require ("fonctionListe.php") ;
 
$comite="br";
require ("fonctionListe.php") ;

$comite="pl";
require ("fonctionListe.php") ;
 
$comite="pr";
require ("fonctionListe.php") ;
 
$comite="mpy";
require ("fonctionListe.php") ;
 ?>
  
<p align="center"><font size="7"><b><font color="#FF0000">- - Base 
  de Donn&eacute;es n&deg; 4 - -</font></b></font> <br>

  </p> 
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db4"); // S&eacute;lection de la base onepip


$comite="fem";
require ("fonctionListe.php") ;
 
 mysql_close(); 
 ?>
</body>
</html>