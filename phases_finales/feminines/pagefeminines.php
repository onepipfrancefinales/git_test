<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France F�minines <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">
<?php
   
if ($annee==2015)
	{
    include("../hautindex2015.php");
    } 
else
	 include("../hautindex.php");
	?>
<?php
   
   include("bandeau_feminines.php");
    ?>
	
	
	
	
	
<?php 
if ($annee==2018 )
	{
	include("280_2018.php");
	}



elseif ($annee==2017 )
	{
	include("280_2017.php");
	}

elseif ($annee==2016 )
	{
	include("280_2016.php");
	} 

elseif ($annee==2015 )
	{
	include("feminines_2015.php");
	} 
elseif ($annee==2014 )
	{
	include("feminines_2014.php");
	} 
elseif ($annee==2013 )
	{
	include("feminines_2013.php");
	}
elseif ($annee==2012 )
	{
	include("feminines_2012.php");
	}
elseif ($annee==2011 )
	{
	include("feminines_2011.php");
	}
else
	{
	include("feminines_2010.php");
	}
  ?>
