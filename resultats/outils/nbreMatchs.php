<?php
$Comite="mpy";
$phpComiteMatchs="php".''.$phpComite.''."_matchs";
$totalComite = "total".''.$comite;
// Connection � la base pour r�cuperer les identifiants (2 premiers chiffre) des comit�s


<?php //require ("../../connection5.php");?>





<html>


<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php //require ("../../connection3.php");?>
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion � MySQL
mysql_select_db("onepip-france-db3"); // S�lection de la base onepip
?>
<?php 
							
	$today = date('Y-m-j'); 					
	echo $today;
	echo "<br />";						
	$totalComite=mysql_query ( "	SELECT COUNT(id)
							FROM $phpComiteMatchs
							WHERE buts_dom IS NULL AND buts_ext IS NULL AND date_reelle < '$today' 
											 AND id_equipe_dom < '29400' AND id_equipe_ext < '29400' 
											 AND id_journee < '23000'");
							
	$totalComite=mysql_fetch_array($total);
	echo $totalComite[0];
								
?>							
</body>
</html>
