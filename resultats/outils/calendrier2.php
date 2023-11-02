<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php

$dateDeLaCompet = $_POST['dateDeLaCompet'];
echo "Dimanche ".''.$dateDeLaCompet;
?>

  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db2"); // S&eacute;lection de la base onepip
?>


<?php 
echo	"<hr>".''."Comite Armagnac Bigorre";	
$comite="ab";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Alsace Lorraine";
$comite="al";
require ("fonctionCalendrier.php") ;


	
echo	"<hr>".''."Comite Auvergne";
$comite="au";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Bearn";
$comite="be";
require ("fonctionCalendrier.php") ;


 echo	"<hr>".''."Comite Bourgogne";
$comite="bg";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Cote D Argent";
$comite="ca";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Cote Basque Landes";
$comite="cbl";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Centre";
$comite="ce";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Flandres";
$comite="fl";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Ile de France";
$comite="idf";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Languedoc";
$comite="ld";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Limousin";
$comite="lm";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Alpes";
$comite="ap";
require ("fonctionCalendrier.php") ;


 echo	"<hr>".''."Comite Drome Ardeche";
$comite="da";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Lyonnais";
$comite="ly";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Normandie";
$comite="n";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Perigord Agenais";
$comite="pa";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Pays Catalan";
$comite="pc";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Poitou Charente";
$comite="pch";
require ("fonctionCalendrier.php") ;

 mysql_close(); ?>


<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db3"); // S&eacute;lection de la base onepip


echo	"<hr>".''."Competition Pro";
$comite="pro";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Competition Federale 1";
$comite="f1";
require ("fonctionCalendrier.php") ;


 echo	"<hr>".''."Competition Federale 2";
$comite="fed2";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Competition Federale 3(1 a 7)";
$comite="fed3NE";
require ("fonctionCalendrier.php") ;


 echo	"<hr>".''."Competition Federale 3 (8 a 14)";
$comite="fed3GS";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Bretagne";
$comite="br";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Pays de Loire";
$comite="pl";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Provence";
$comite="pr";
require ("fonctionCalendrier.php") ;


echo	"<hr>".''."Comite Midi Pyrenees";
$comite="mpy";
require ("fonctionCalendrier.php") ;

mysql_close(); 
 ?>
  

<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france_db4"); // S&eacute;lection de la base onepip

echo	"<hr>".''."Competitions Feminines";
$comite="fem";
require ("fonctionCalendrier.php") ;
 ?>
<?php mysql_close(); ?>
</body>
</html>