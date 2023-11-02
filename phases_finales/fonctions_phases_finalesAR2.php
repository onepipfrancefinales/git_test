<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); 
mysql_select_db("onepip-france-db1"); 
?>

 
<?php //$annee=2016; ?> 
<?php// $annee2="2016_2";?>
<?php 
if ($id==140)
$division="Fédérale 1";
elseif ($id==150)
$division="Fédérale 2";
elseif ($id==160)
$division="Fédérale 3";


else
$division="Bug !!";
?>
<?php //E01

$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E01 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E01 and bdpf$annee.id=$id "; 
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);	
$clubA1601 = ($nom20.' '.$sigle);
?>
<?php //E02
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E02 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E02 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA1602 = ($nom20.' '.$sigle);
?>

<?php //E03
$requete = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E03 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E03 and bdpf$annee.id=$id"; // Requête SQL
 $result = mysql_query($requete) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA1603 = ($nom20.' '.$sigle);
?>

<?php //E04
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E04 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E04 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query) ;
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA1604 = ($nom20.' '.$sigle);
?>

<?php //E05
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E05 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E05 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3205 = ($nom20.' '.$sigle);
?>

<?php //E06
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E06 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E06 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3206 = ($nom20.' '.$sigle);
?>

<?php //E07
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E07 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E07 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3207 = ($nom20.' '.$sigle);
?>

<?php //E08
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E08 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E08 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3208 = ($nom20.' '.$sigle);
?>


<?php //E09
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E09 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E09 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3209 = ($nom20.' '.$sigle);
?>

<?php //E10
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E10 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E10 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3210 = ($nom20.' '.$sigle);
?>

<?php //E11
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E11 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E11 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3211 = ($nom20.' '.$sigle);
?>

<?php //E12
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E12 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E12 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3212 = ($nom20.' '.$sigle);
?>


<?php //E13
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E13 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E13 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3213 = ($nom20.' '.$sigle);
?>

<?php //E14
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E14 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E14 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3214 = ($nom20.' '.$sigle);
?>

<?php //E15
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E15 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E15 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3215 = ($nom20.' '.$sigle);
?>

<?php //E16
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E16 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E16 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3216 = ($nom20.' '.$sigle);
?>


<?php //E17
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E17 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E17 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3217 = ($nom20.' '.$sigle);
?>

<?php //E18
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E18 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E18 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3218 = ($nom20.' '.$sigle);
?>

<?php //E19
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E19 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E19 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,18);		
$clubA3219 = ($nom20.' '.$sigle);
?>

<?php //E20
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E20 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E20 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,18);		
$clubA3220 = ($nom20.' '.$sigle);
?>

<?php //E21
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E21 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E21 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3221 = ($nom20.' '.$sigle);
?>

<?php //E22
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E22 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E22 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3222 = ($nom20.' '.$sigle);
?>

<?php //E23
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E23 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E23 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3223 = ($nom20.' '.$sigle);
?>

<?php //E24
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E24 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E24 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3224 = ($nom20.' '.$sigle);
?>


<?php //E25
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E25 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E25 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3225 = ($nom20.' '.$sigle);
?>

<?php //E26
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E26 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E26 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3226 = ($nom20.' '.$sigle);
?>

<?php //E27
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E27 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E27 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3227 = ($nom20.' '.$sigle);
?>

<?php //E28
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E28 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E28 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3228= ($nom20.' '.$sigle);
?>

<?php //E29
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E29 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E29 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3229 = ($nom20.' '.$sigle);
?>

<?php //E30
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E30 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E30 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3230 = ($nom20.' '.$sigle);
?>

<?php //E31
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E31 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E31 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3231 = ($nom20.' '.$sigle);
?>

<?php //E32
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E32 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E32 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3232 = ($nom20.' '.$sigle);
?>

<?php //E33
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E33 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E33 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3233 = ($nom20.' '.$sigle);
?>

<?php //E34
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E34 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E34 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3234 = ($nom20.' '.$sigle);
?>

<?php //E35
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E35 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E35 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3235 = ($nom20.' '.$sigle);
?>

<?php //E36
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E36 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E36 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3236 = ($nom20.' '.$sigle);
?>

<?php //E37
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E37 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E37 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
	$nom20 = substr($nom,0,20);		
$clubA3237 = ($nom20.' '.$sigle);
?>

<?php //E38
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E38 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E38 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3238 = ($nom20.' '.$sigle);
?>

<?php //E39
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E39 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E39 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3239 = ($nom20.' '.$sigle);
?>

<?php //E40
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E40 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E40 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,17);		
$clubA3240 = ($nom20.' '.$sigle);
?>

<?php //E41
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E41 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E41 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3241 = ($nom20.' '.$sigle);
?>

<?php //E42
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E42 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E42 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3242 = ($nom20.' '.$sigle);
?>

<?php //E43
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E43 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E43 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3243 = ($nom20.' '.$sigle);
?>

<?php //E44
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E44 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E44 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3244 = ($nom20.' '.$sigle);
?>


<?php //E45
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E45 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E45 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3245 = ($nom20.' '.$sigle);
?>

<?php //E46
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E46 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E46 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3246 = ($nom20.' '.$sigle);
?>

<?php //E47
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E47 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E47 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3247 = ($nom20.' '.$sigle);
?>

<?php //E48
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E48 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E48 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3248 = ($nom20.' '.$sigle);
?>

<?php //E49
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E49 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E49 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3249 = ($nom20.' '.$sigle);
?>

<?php //E50
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E50 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E50 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3250 = ($nom20.' '.$sigle);
?>

<?php //E51
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E51 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E51 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3251 = ($nom20.' '.$sigle);
?>

<?php //E52
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E52 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E52 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3252 = ($nom20.' '.$sigle);
?>

<?php //E53
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E53 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E53 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3253 = ($nom20.' '.$sigle);
?>

<?php //E54
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E54 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E54 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3254 = ($nom20.' '.$sigle);
?>

<?php //E55
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E55 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E55 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3255 = ($nom20.' '.$sigle);
?>

<?php //E56
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E56 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E56 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3256 = ($nom20.' '.$sigle);
?>

<?php //E57
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E57 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E57 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3257 = ($nom20.' '.$sigle);
?>

<?php //E58
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E58 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E58 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3258 = ($nom20.' '.$sigle);
?>

<?php //E59
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E59 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E59 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3259 = ($nom20.' '.$sigle);
?>

<?php //E60
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E60 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E60 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3260 = ($nom20.' '.$sigle);
?>

<?php //E61
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E61 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E61 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3261 = ($nom20.' '.$sigle);
?>

<?php //E62
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E62 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E62 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3262 = ($nom20.' '.$sigle);
?>

<?php //E63
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E63 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E63 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3263 = ($nom20.' '.$sigle);
?>

<?php //E64
$query = "SELECT bdclubs.code, bdclubs.nom_1, bdclubs.siglecomite, bdpf$annee.E64 FROM bdclubs, bdpf$annee WHERE bdclubs.code=bdpf$annee.E64 and bdpf$annee.id=$id "; // Requête SQL
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$nom = $row[1];
	$sigle = $row[2];
	}
$nom20 = substr($nom,0,20);		
$clubA3264 = ($nom20.' '.$sigle);
?>


<?php
$query = "SELECT A3201, A3202, A3203, A3204, A3205, A3206, A3207, A3208,
				 A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
				 A3217, A3218, A3219, A3220, A3221, A3222, A3223, A3224,
				 A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232,
				  
				 A3233, A3234, A3235, A3236, A3237, A3238, A3239, A3240,
				 A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248,
				 
				 FROM bdpf2015 WHERE bdpf2015.id=130 "; 
 $result = mysql_query($query);
 	while ($row = mysql_fetch_array($result) )
	{ 
	$A3201 = $row[0];
	$A3202 = $row[1];
	$A3203 = $row[2];
	$A3204 = $row[3];
	$A3205 = $row[4];
	$A3206 = $row[5];
	$A3207 = $row[6];
	$A3208 = $row[7];
	$A3209 = $row[8];
	$A3210 = $row[9];
	$A3211 = $row[10];
	$A3212 = $row[11];
	$A3213 = $row[12];
	$A3214 = $row[13];
	$A3215 = $row[14];
	$A3216 = $row[15];
	$A3217 = $row[16];
	$A3218 = $row[17];
	$A3219 = $row[18];
	$A3220 = $row[19];
	$A3221 = $row[20];
	$A3222 = $row[21];
	$A3223 = $row[22];
	$A3224 = $row[23];
	$A3225 = $row[24];
	$A3226 = $row[25];
	$A3227 = $row[26];
	$A3228 = $row[27];
	$A3229 = $row[28];
	$A3230 = $row[29];
	$A3231 = $row[30];
	$A3232 = $row[31];
	$A3231 = $row[30];
	$A3232 = $row[31];
	
	$A3233 = $row[32];
	$A3234 = $row[33];
	$A3235 = $row[34];
	$A3236 = $row[35];
	$A3237 = $row[36];
	$A3238 = $row[37];
	$A3239 = $row[38];
	$A3240 = $row[39];
	$A3241 = $row[40];
	$A3242 = $row[41];
	$A3243 = $row[42];
	$A3244 = $row[43];
	$A3245 = $row[44];
	$A3246 = $row[45];
	$A3247 = $row[46];
	$A3248 = $row[47];
	
		
		}

?>


	

