<?php

//$page="equipe";

//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 

require '../../../connect/connexion1.php';
?>
<body bgcolor="#FFFFFF" text="#000000">
<form name="insertion" action="enregEquipes.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  			
 </font></b> 
<input type="hidden" name="division" value="<?php echo($division) ;?>">

<?php
if (substr ($type,1,2) == '32' or substr ($type,1,2) == '64')
{
 ?> 
 
 <!----------------- trente deuxième de finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>TRENTE-DEUXIEME DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>
 <?php 
 $debut= 3201; $fin = 3264; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=33;
	for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubs = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubs < $fin; 
		 $numeroMatch++                 ,  $i=$i+2      ,  $clubs=$clubs+2)
	{
	 ?>
	 <h3><?php echo $numeroMatch;?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
     <h2><?php echo ${"clubA".($clubs+1)}; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>"  value="<?php echo $tabClubs[$i];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[$i+1];?>">
	 <?php
	} 
}
elseif (substr ($type,3,2) == '16' OR substr ($type,3,2) == '32')
{
 ?>
 <!----------------- seizieme de finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>SEIZIEME DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header> 
 <?php 

 $debut= 1601; $fin = 1633; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=17;
	for ($numeroMatch = 1               ,  $i =1   		,  $clubs = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubs < $fin; 
		 $numeroMatch++                 ,  $i=$i+2      ,  $clubs = $clubs+2)
	{
	 ?>
	 <h3><?php echo $numeroMatch;?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
     <h2><?php echo ${"clubA".($clubs+1)}; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>"     value="<?php echo $tabClubs[$i];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[$i+1];?>">
	 <?php  
	} 
}
elseif (substr ($type,5,2) == '08' OR substr ($type,5,2) == '16')
{
?> 
  
 <!----------------- huitième de finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>HUITIEME DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>
 <?php
 $debut= 8001; $fin = 8017; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=9;
	for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubs = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubs < $fin; 
		 $numeroMatch++                 ,  $i=$i+2      ,  $clubs=$clubs+2)
	{
	 ?>
	 <h3><?php echo $numeroMatch;?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
     <h2><?php echo ${"clubA".($clubs+1)}; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>"  value="<?php echo $tabClubs[$i];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[$i+1];?>">
	 <?php
	} 
}
elseif (substr ($type,7,2) == '04' OR substr ($type,7,2) == '08')
{
 ?>	
 
 <!----------------- Quarts de finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>QUARTS DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>  
 <?php 
 $debut= 4001; $fin = 4009;$iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=5;
	for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubs = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubs < $fin; 
		 $numeroMatch++                 ,  $i = $i+2    ,  $clubs=$clubs+2)
	{	
	 ?>
	 <h3><?php echo $numeroMatch;?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
     <h2><?php echo ${"clubA".($clubs+1)}; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>"  value="<?php echo $tabClubs[$i];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[ $i+1];?>">
	 <?php
	}
}	
elseif (substr ($type,9,2) == '21' OR substr ($type,9,2) == '22' OR substr ($type,9,2) == '41' OR substr ($type,9,2) == '42')
{
 ?>
 
 <!----------------- Demi finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>DEMI DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>
 <?php

 $debut= 2001; $fin = 2005; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=3;
	for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubs = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubs < $fin; 
		 $numeroMatch++                 ,  $i=$i+2      ,  $clubs=$clubs+2)
	{
	 ?>
	 <h3><?php echo $numeroMatch;?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
     <h2><?php echo ${"clubA".($clubs+1)}; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>"  value="<?php echo $tabClubs[$i];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[$i+1];?>">	
	 <?php
	} 
}
elseif (substr ($type,10,1) == '1' OR substr ($type,10,1) == '2'  )
 {
 ?>
 
 <!-----------------  finale ----------------->
 <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header><h1>FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>
 <?php 
 $debut= 1001; $fin = 1003; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); 
	for (  $i = $iMin   ,  $clubs = $debut;
		   $i < $iMax   ,  $clubs < $fin; 
		   $i=$i+2      ,  $clubs=$clubs+2)
	{
	 ?> 
	 <h3><?php echo "1";?></h3>
	 <h2><?php echo ${"clubA".$clubs}; ?></h2>
	 <h2><?php echo $clubA1002; ?></h2>
     <h4></h4>
     <input type="text" name="<?php echo "clubA".$clubs;?>" value="<?php echo $tabClubs[1];?>">
	 <input type="text" name="<?php echo "clubA".($clubs+1);?>" value="<?php echo $tabClubs[2];?>">	
	 <?php	
	}
}
?>
  <footer><input type="submit" value="modifier" name="submit"></footer>
  <p class="lien"><a href="../accueilMAJ.php?annee=<?php echo $annee; ?>" target="_top">Retour</a></p>
</form>
						
			
			
			
		