 <?php $annee=$_GET['annee'];?>
 
 <?php $division=$_GET['division'];?>
 
 
 
 
 <html>
<head>
<title>Championnat de France  <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
<link rel="stylesheet" type="text/css" href="AA2.css">  
<link type="text/css" rel="stylesheet" href="../10.css">
</head>

<body bgcolor="#EAECEB" text="#000000">


 <?php
//mysql_connect("127.0.0.1", "root", ""); 
//mysql_select_db("onepip-france-db1"); 
//require '../../connect/connection1.php';
require ("../../phases_finales2019/fonctionsChampFrance2019.php");  
nomDivision($division);
trenteDeuxieme2019 ($division, $annee);


	include("entete.php");
	require 'liensdiv.php';
	echo "<br/>";
	if (substr($type,0,3)==932 or substr($type,0,3) ==964)
		{
		if (substr($type,0,3) == 964)
			require '32meAR.php';
		else
			require '32me.php';
		}
//seizième
	elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
		{
		if (substr($type,3,2)== 32)
			require '16meAR.php';
		else
			require '16me.php';
		}
	elseif(substr($type,5,2)== 8 or substr($type,5,2)== 16)
		{
		if (substr($type,5,2)== 16)
			require '8meAR.php';
		else
			require '8me.php';
		}
	elseif(substr($type,7,2)== 4 or substr($type,7,2)== 8)
		{
		if (substr($type,7,2)== 8)
			require 'quartsAR.php';
		else
			require 'quarts.php';
			require 'demi.php';
			require 'finale.php';
		}
	elseif(substr($type,9,2)== '02' or substr($type,9,2)== '04')
		{
		if (substr($type,9,2)== '04')
			require 'demiAR.php';
		else
			require 'demi.php';
			require 'finale.php';
			
		}
	elseif(substr($type,9,2)== '01' or substr($type,9,2)== '11')
		{
		if (substr($type,9,2)== '11')
			require 'finaleAR.php';
		else
			require 'finale.php';
		}
	
	require 'champion.php';
	
	require '../bas.php';
	
	?>
	
</body>
</html>