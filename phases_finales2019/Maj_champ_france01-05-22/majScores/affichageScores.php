<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="../maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php 
$division=$_GET['division']; 
$annee=$_GET['annee']; 
$type=$_GET['type'];
$phase=$_GET['phase']; 
 
if ( isset ($_GET['type'])) $type=$_GET['type']; else $type="non d�clar�e";
if ( isset ($id)) $ide=$id; else $id="non d�clar�e";?>

<form name="insertion" action="enregScores.php?phase=<?php echo $phase; ?>&division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>" method="POST">

<?php
if ($phase == 32){
	if (substr ($type,1,2) == "32" ){
	 ?>
	 <!----------------- trente deuxi�me de finale ----------------->	  
   
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">
	 <header><h1>TRENTE-DEUXIEME DE FINALE<?php echo '('.$division.') '.$annee; ?></h1></header>
  	 
	 <?php 
	 $debut= 3201; $fin = 3265; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=33;
	 for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
		  $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
		  $numeroMatch++                 ,  $i=$i+2      ,  $clubsScores=$clubsScores+2)
		{
		 ?>
		 <h3><?php echo $numeroMatch;?></h3>
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
         <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
         <h4></h4>
         <input type="text" name="<?php echo "A".$clubsScores;?>"     value="<?php echo $tabScores[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScores[$i+1];?>">
	     <?php
		} 
	}
else{
	 ?>	
	 <!----------------- trente deuxi�me de finale  (AR)----------------->

	 <header> <h1> TRENTE-DEUXIEME DE FINALE  (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 <!--- Phase Aller --->
	 <?php
	 $phase = "Aller";
	 $debut= 3201; $fin = 3265; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=32;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>			
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores."Pts";?>" 	value="<?php echo $tabPtsAller[$i] ;?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsAller[$i+1] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores ;?>"  value="<?php echo $tabScoresAller[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScoresAller[$i+1];?>">
		 <?php
		}
		
	 // --- Phase Retour --->
	 echo "<hr />";
	 $phase = "Retour";
	 $debut= 3201; $fin = 3265; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=32;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>	
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsRetour[$i+1] ;?>" >
		 <input type="text" name="<?php echo "R".$clubsScores."Pts";?>"     value="<?php echo $tabPtsRetour[$i] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1);?>" value="<?php  echo $tabScoresRetour[$i+1] ;?>">
		 <input type="text" name="<?php echo "R".$clubsScores;?>"   value="<?php echo $tabScoresRetour[$i] ;?>">
		 <?php
		}
	}	
}

elseif ($phase == 16){
	if (substr ($type,3,2) == "16" ){
	 ?>
	 <!----------------- Seizi�me de finale ----------------->	

	 <input type="hidden" name="division" value="<?php echo($division) ;?>">
	 <header><h1>SEIZIEME DE FINALE <?php echo '('.$division.') '.$annee; ?></h1></header>
		   
	 <?php 
	 $debut= 1601; $fin = 1633; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=17;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2      ,  $clubsScores=$clubsScores+2)
		{
		 ?>
		 <h3><?php echo $numeroMatch;?></h3>
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>
		 <input type="text" name="<?php echo "A".$clubsScores;?>"     value="<?php echo $tabScores[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScores[$i+1];?>">
		 <?php
		}
	}
	else{
		?>
		
	  <!----------------- Seizi�me de finale (AR)----------------->

	 <header> <h1> SEIZIEME DE FINALE  (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 <!--- Phase Aller --->
	 <?php
	 $phase = "Aller";
	 $debut= 1601; $fin = 1633; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=17;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>			
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores."Pts";?>" 	value="<?php echo $tabPtsAller[$i] ;?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsAller[$i+1] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores ;?>"   value="<?php echo $tabScoresAller[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>"  value="<?php echo $tabScoresAller[$i+1];?>">
		 <?php
		}
		
	 // --- Phase Retour --->
	 echo "<hr />";
	 $phase = "Retour";
	 $debut= 1601; $fin = 1633; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=17;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>	
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsRetour[$i+1] ;?>" >
		 <input type="text" name="<?php echo "R".$clubsScores."Pts";?>"     value="<?php echo $tabPtsRetour[$i] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1);?>" value="<?php  echo $tabScoresRetour[$i+1] ;?>">
		 <input type="text" name="<?php echo "R".$clubsScores;?>"   value="<?php echo $tabScoresRetour[$i] ;?>">
		 <?php
		}
	}	
}
elseif ($phase == 8){
	if (substr ($type,5,2) == "08" ){
	 ?>
	 <!----------------- Huiti�me de finale ----------------->
	  
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">
	 <header><h1>HUITIEME DE FINALE <?php echo "(".$division.") ".$annee; ?></h1></header>
	 
	 <?php 
	 $debut= 8001; $fin = 8017; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=9;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i=$i+2      ,  $clubsScores=$clubsScores+2)
		{
		 ?>
		 <h3><?php echo $numeroMatch;?></h3>
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>
		 <input type="text" name="<?php echo "A".$clubsScores;?>"     value="<?php echo $tabScores[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScores[$i+1];?>">
		 <?php
		} 
	}
	else{
	?>
	  <!----------------- Huiti�me de finale (AR)----------------->

	 <header> <h1> HUITIEME DE FINALE  (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 <!--- Phase Aller --->
	 <?php
	// $tabScoresAller[1];$tabScoresAller[2];$tabScoresAller[3];$tabScoresAller[4];
	 $phase = "Aller";
	 $debut= 8001; $fin = 8017; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -2, 2); $numeroMatchMax=9;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>			
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores."Pts";?>" 	value="<?php echo $tabPtsAller[$i] ;?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsAller[$i+1] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores ;?>"  value="<?php echo $tabScoresAller[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScoresAller[$i+1];?>">
		 <?php
		}
		
	 // --- Phase Retour --->
	 echo "<hr />";
	 $phase = "Retour";
	 $debut= 8001; $fin = 8017; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=9;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>	
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsRetour[$i+1] ;?>" >
		 <input type="text" name="<?php echo "R".$clubsScores."Pts";?>"     value="<?php echo $tabPtsRetour[$i] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1);?>" value="<?php  echo $tabScoresRetour[$i+1] ;?>">
		 <input type="text" name="<?php echo "R".$clubsScores;?>"   value="<?php echo $tabScoresRetour[$i] ;?>">
		 <?php
		}
	}
}
elseif ($phase == 4){
	if (substr ($type,7,2) == "04"){
	 ?>
	  <!----------------- Quarts de finale ----------------->

	 <header> <h1> QUARTS DE FINALE <?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">      
	
	 <?php
	 $debut= 4001; $fin = 4009; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=5;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{
		 ?>
		 <h3><?php echo $numeroMatch;?></h3>
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>
		 <input type="text" name="<?php echo "A".$clubsScores;?>"     value="<?php echo $tabScores[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScores[$i+1];?>">
		 <?php
		}
	}
	else{
	  ?>
	  <!----------------- Quarts de finale (AR)----------------->

	 <header> <h1> QUARTS DE FINALE (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 <!--- Phase Aller --->
	 <?php
	 $phase = "Aller";
	 $debut= 4001; $fin = 4009; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=5;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>			
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores."Pts";?>" 	value="<?php echo $tabPtsAller[$i] ;?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsAller[$i+1] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores ;?>"     value="<?php echo $tabScoresAller[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>"  value="<?php echo $tabScoresAller[$i+1];?>">
		 <?php
		}
		
	 // --- Phase Retour --->
	 echo "<hr />";
	 $phase = "Retour";
	 $debut= 4001; $fin = 4009; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=5;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>	
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsRetour[$i+1] ;?>" >
		 <input type="text" name="<?php echo "R".$clubsScores."Pts";?>"     value="<?php echo $tabPtsRetour[$i] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1);?>" value="<?php  echo $tabScoresRetour[$i+1] ;?>">
		 <input type="text" name="<?php echo "R".$clubsScores;?>"     value="<?php echo $tabScoresRetour[$i] ;?>">
		 <?php
		}
	}
}
elseif ($phase == 2)
{
	if (substr ($type,9,2) == '21' or  substr ($type,9,2) == '02'){
 ?>
<!----------------- Demis de finale ----------------->

 <header><h1>DEMI FINALE <?php echo "( ".$division." ) ".$annee; ?></h1></header>     
 <input type="hidden" name="division" value="<?php echo($division) ;?>"> 	

<?php
$debut= 2001; $fin = 2005; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=3;
	for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
		 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
		 $numeroMatch++                 ,  $i=$i+2      ,  $clubsScores=$clubsScores+2)
	{
	 ?>
	
	 <h3><?php echo $numeroMatch;?></h3>
		   <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
           <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
           <h4></h4>
        <input type="text" name="<?php echo "A".$clubsScores;?>"     value="<?php echo $tabScores[$i];?>">
		<input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScores[$i+1];?>">
	
	 <?php
	}
}
else{
	?>
  <!----------------- Demi finale (AR)----------------->

	 <header> <h1> DEMI FINALE (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 <!--- Phase Aller --->
	 <?php
	 $phase = "Aller";
	 $debut= 2001; $fin = 2005; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=2;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>			
		 <h2><?php echo ${"clubA".$clubsScores}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores."Pts";?>" 	value="<?php echo $tabPtsAller[$i] ;?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsAller[$i+1] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "A".$clubsScores ;?>"    value="<?php echo $tabScoresAller[$i];?>">
		 <input type="text" name="<?php echo "A".($clubsScores+1);?>" value="<?php echo $tabScoresAller[$i+1];?>">
		 <?php
		}
		
	 // --- Phase Retour --->
	 echo "<hr />";
	 $phase = "Retour";
	 $debut= 2001; $fin = 2005; $iMin= substr($debut, -1 , 1); $iMax= substr($fin, -1, 1); $numeroMatchMax=3;
		for ($numeroMatch = 1               ,  $i = $iMin   ,  $clubsScores = $debut;
			 $numeroMatch < $numeroMatchMax ,  $i < $iMax   ,  $clubsScores < $fin; 
			 $numeroMatch++                 ,  $i = $i+2    ,  $clubsScores=$clubsScores+2)
		{		
		 ?>
		 <h3><?php echo $phase." ".$numeroMatch;?></h3>	
		 <h2><?php echo ${"clubA".($clubsScores+1)}; ?></h2>
		 <h2><?php echo ${"clubA".($clubsScores)}; ?></h2>
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1)."Pts";?>" value="<?php echo $tabPtsRetour[$i+1] ;?>" >
		 <input type="text" name="<?php echo "R".$clubsScores."Pts";?>"     value="<?php echo $tabPtsRetour[$i] ;?>">
		 <h4></h4>  
		 <input type="text" name="<?php echo "R".($clubsScores+1);?>" value="<?php  echo $tabScoresRetour[$i+1] ;?>">
		 <input type="text" name="<?php echo "R".$clubsScores;?>"     value="<?php echo $tabScoresRetour[$i] ;?>">
		 <?php
		}	
	}
}
elseif ($phase == 1){
	if (substr ($type,9,2) == '21' or substr ($type,10,9) == '01'){
	 ?>
	 <!----------------- Finale ----------------->
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">
	 <header><h1>FINALE  <?php echo "( ".$division." ) ".$annee; ?></h1><header>
		
	 <h3>1</h3>
	 <h2><?php echo $clubA1001; ?></h2><h2><?php echo $clubA1002; ?></h2>
	 <h4></h4>
	 <input type="text" name="A1001" value="<?php echo $tabScores[1] ;?>" size="3">
	 <input type="text" name="A1002" value="<?php echo $tabScores[2] ;?>" size="3">
	 <?php
	}
else{
?>
  <!----------------- Finale (AR)----------------->

	 <header> <h1> FINALE (AR)<?php echo "(".$division.") ".$annee; ?></h1></header>
	 <input type="hidden" name="division" value="<?php echo($division) ;?>">    
	 
	 <!--- Phase Aller --->
	 <h3>Aller</h3>
		<h2><?php echo $clubA1001; ?></h2><h2><?php echo $clubA1002; ?></h2>
		 <input type="text" name="<?php echo "A1001Pts";?>" value="<?php echo $tabPtsAller[1] ;?>">
		 <input type="text" name="<?php echo "A1002Pts";?>" value="<?php echo $tabPtsAller[2] ;?>">
		<h4></h4>
		<input type="text" name="A1001" value="<?php echo $tabScores[1] ;?>" size="3">
		<input type="text" name="A1002" value="<?php echo $tabScores[2] ;?>" size="3">
	
	 <!--- Phase Retour --->
	  <hr />
	  <h3>Retour</h3>
	<h2><?php echo $clubA1002; ?></h2><h2><?php echo $clubA1001; ?></h2>
		 <input type="text" name="<?php echo "R1002Pts";?>" value="<?php echo $tabPtsRetour[2] ;?>">
		 <input type="text" name="<?php echo "R1001Pts";?>" value="<?php echo $tabPtsRetour[1] ;?>">
		<h4></h4>
		<input type="text" name="R1002" value="<?php echo $tabScoresRetour[2] ;?>" size="3">
		<input type="text" name="R1001" value="<?php echo $tabScoresRetour[1] ;?>" size="3">
		 <?php
	}
}
?>
 <footer><input type="submit" value="modifier" name="submit"></footer>
  
      <a href="../accueilMAJ.php"><b>Retour accueil</b></a>
  
</form>



<p>&nbsp;</p>
</body>
</html>
