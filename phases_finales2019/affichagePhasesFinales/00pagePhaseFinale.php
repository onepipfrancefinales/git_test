 <?php 
 $annee=$_GET['annee'];
 $division=$_GET['division'];
 ?>
<html>
  <head>
   <title>Championnat de France <?php echo $annee;?></title>
	<link rel="stylesheet" type="text/css" href="2.css">
  </head>

<body bgcolor="#EAECEB" text="#000000">


 <?php
 require '../../phases_finales2019/fonctionsChampFrance2019.php';  
 require '../../connect1/connection5.php';
 nomDivision($division);
  
 require '../../connect1/connection1.php';
 trenteDeuxieme2019 ($division, $annee, $bdd);
// echo "1001".$clubA1001;echo "<br />";
// echo "1002".$clubA1002;echo "<br />";
// echo "1001-".$A1001;echo "<br />";
// echo "1002-".$A1002;echo "<br />";
 championDeFrance ( $clubA1001, $clubA1002, $A1001, $A1002, $bdd);
// echo $champion;
 require 'hautindex.php';
 require 'bandeauNavigation.php';

	
if ($annee > 2020)
	{
	require 'saison+1.php';
	}
else
	{	
//echo $type;	
	
if ($type < 90000000000)
	{
//********   Pro TOP 14    *********	
	
	if ($division == '110')
			require "110_2019.php";

//********   Pro D2    *********	

	elseif ($division == '120')
			require "120_2019.php";

//********   Fed1    *********	
	
	elseif ($division == '140')
			require "0804AR.php";

	
	
	}
	
else
	{	
//********    trente deuxième    *********	
	if (substr($type,0,3)==932 or substr($type,0,3) ==964)
		{
		if (substr($type,0,3) == 964)
			{
			require ("3216meAR.php");
			}
		else
			{
			require "32me.php";
			}
		}
		
//********    seizième    *********

	elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
		{
		if (substr($type,3,2)== 32)
			require "1608meAR.php";
		else
			require "16me.php";
		}
//********    huitième    *********

	elseif(substr($type,5,2)== '08' or substr($type,5,2)== '16')
		{
		 if (substr($type,5,4)== 1604)
		 	require "8meAR.php";
		 elseif (substr($type,5,4)== 1608)
			require "8meQDAR.php";
		 else
			require "8me.php";
		}
		
//********   Quarts   *********		
	
	elseif(substr($type,7,2)== '04' or substr($type,7,2)== '08')
		{
		 if (substr($type,7,4)== '0804')
		 	require "0804AR.php";
		else
			require "quarts.php";
		
		}
		
//********   demi   *********			
	
	elseif(substr($type,9,2)== '02' or substr($type,9,2)== '04')
		{
		require "demi.php";
		}
	
//********   Suppression d'un championnat   *********			
	
	elseif(substr($type,0,2)== '99' )
		{
		require "plusDeChamp.php";
		}	
	
	
	}
}
	require 'bas.php';
	
	?>
	
</body>
</html>