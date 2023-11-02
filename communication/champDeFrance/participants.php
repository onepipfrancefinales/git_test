<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
require '../../connect/connection1.php';
require '../../phases_finales2019/fonctionsChampFrance2019.php';
//$division =170;
$annee = 2019;

/*
for ($division=160; $division< 210; $division=$division+10)
{
require '../../connect/connection1.php';
trenteDeuxieme2019 ($division, $annee);
echo $division;
	echo "<br />";
	for ($i=3201; $i< 3233; $i++)
	{
	
	echo ${"clubA".($i)};
	echo "<br />";
	}
echo "<br />";	
echo "<br />";
}

*/ 

//----------  trente deuxième  ----------
require '../../connect/connection1.php';
$division = 370;
trenteDeuxieme2019 ($division, $annee);
echo $division;
	echo "<br />";
	for ($i=3201; $i< 3265; $i++)
	{
	echo ${"clubA".($i)};
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";
//----------  seizième  ----------

	for ($i=1601; $i< 1633; $i++)
	{
	echo ${"clubA".($i)};
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";
	
//----------  huitième  ----------
	for ($i=8001; $i< 8017; $i++)
	{
	echo ${"clubA".($i)};
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";
	
//----------  quarts ----------
	for ($i=4001; $i< 4009; $i++)
	{
	echo ${"clubA".($i)};
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";
	
//----------  demi ----------
	for ($i=2001; $i< 2005; $i++)
	{
	echo ${"clubA".($i)};
	echo "<br />";
	}
	echo "-----------";
	echo "-----------";
	echo "<br />";




?>

<?php 
echo "Elimine en 32me de finale";echo "<br />";

//if ($clubA3201 == $clubA1601)  echo $clubA3202; else echo $clubA3201;echo "<br />";
//if ($clubA3203 == $clubA1602)  echo $clubA3204; else echo $clubA3203;echo "<br />";
//if ($clubA3205 == $clubA1603)  echo $clubA3206; else echo $clubA3205;echo "<br />";


for( $i=3201 , $j=1601 , $k= 3202 ;$i < 3265, $j<1633, $k < 3266 ; $i = $i+2 , $j++ , $k=$k+2)
	{
	if ( ${"clubA".($i)} ==  ${"clubA".($j)} )   echo  ${"clubA".($k)}  ;else  echo ${"clubA".($i)}; echo "<br />";     
	}
echo "-----------";
echo "<br />";


if ($A1601 + $A1602 + $A1603 + $A1604 > 0)
{

echo "Elimine en 16me de finale";echo "<br />";

//if ($clubA1601 == $clubA8001)  echo $clubA1602; else echo $clubA1601;echo "<br />";
//if ($clubA1603 == $clubA8002)  echo $clubA1604; else echo $clubA1603;echo "<br />";
//if ($clubA1605 == $clubA8003)  echo $clubA1606; else echo $clubA1605;echo "<br />";

for( $i=1601 , $j=8001 , $k= 1602 ;$i < 1633, $j<8017, $k < 1634 ; $i = $i+2 , $j++ , $k=$k+2)
	{
	if ( ${"clubA".($i)} ==  ${"clubA".($j)} )   echo  ${"clubA".($k)}  ;else  echo ${"clubA".($i)}; echo "<br />";     
	}
}
else
{
	echo "Equipes toujours en course en seizième";
 	echo "<br />";
	
 	for ($i = 1601; $i < 1633; $i++)
 	{
 	echo ${"clubA".($i)};
 	echo "<br />";
 	}

}
	
	
echo "-----------";
echo "<br />";
if ( $A8001 + $A8002 + $A8003 + $A8004 > 0)
{

	echo "Elimine en 8me de finale";
	echo "<br />";
	echo "-----------";
	echo "<br />";

	for ($i =8001 , $j=4001 , $k= 8002 ;$i < 8017, $j<4008, $k < 8018 ; $i = $i+2 , $j++ , $k=$k+2)
		{
		if ( ${"clubA".($i)} ==  ${"clubA".($j)} )   echo  ${"clubA".($k)}  ;else  echo ${"clubA".($i)}; echo "<br />";     
		}
}
else
{
	echo "Equipes toujours en course en huitieme";
 	echo "<br />";
	
 	for ($i = 8001; $i < 8017; $i++)
 	{
 	echo ${"clubA".($i)};
 	echo "<br />";
 	}

}




?>
</body>
</html>
