<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="/phases_finales2019/Maj_champ_france/maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>


<?php if ( isset ($_GET['ligue'])) $ligue=$_GET['ligue']; else $type="non déclarée";
echo $ligue;
?>

<form name="insertion" action="validCodeFFR.php?ligue=<?php echo $ligue ;?>" method="POST">
   
  <?php
  
 
 						
//***************  Scores  ****************************
			require '../../connect/connection1.php';								 
			
			
			$requete = mysql_query( "SELECT H, PH, S1, S2,	S3, S4, ResH, ResPH, ResS1, ResS2
    					   			  FROM accesFFR
									  WHERE  sigle = '$ligue'" ) ;			

					  if( $result = mysql_fetch_object( $requete ) )
							  {
							 
							  }
			
mysql_close(); 
?>		
	
  
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
    <header>
	 
	 
	 
  <h1>&nbsp;</h1>
       

  	 <h2>Honneur </h2>
 	 <input type="text" name="H" value="<?php echo($result->H) ;?>" size="3">
    
	

    <h2>Promotion</h2>   
    <input type="text" name="PH" value="<?php echo($result->PH) ;?>" size="3">
    
	
	     
    <h2>1re serie</h2>
	<input type="text" name="S1" value="<?php echo($result->S1) ;?>" size="3">
 
   
   
  	 <h2>2me serie </h2>
 	 <input type="text" name="S2" value="<?php echo($result->S2) ;?>" size="3">
    
	

    <h2>3me serie</h2>   
    <input type="text" name="S3" value="<?php echo($result->S3) ;?>" size="3">
    
	
	    
    <h2>4me serie</h2>
	<input type="text" name="S4" value="<?php echo($result->S4) ;?>" size="3">
  
    
    <h2>Res Honneur</h2>
	<input type="text" name="ResH" value="<?php echo($result->ResH) ;?>" size="3">
 

  	 <h2>Res Promotion </h2>
 	 <input type="text" name="ResPH" value="<?php echo($result->ResPH) ;?>" size="3">
    
	
 
    <h2>1re serie</h2>   
    <input type="text" name="ResS1" value="<?php echo($result->ResS1) ;?>" size="3">
    
	
	   
    <h2>2me serie</h2>
	<input type="text" name="ResS2" value="<?php echo($result->ResS2) ;?>" size="3">
  
	
        <section>
	   <footer>
        <input type="submit" value="modifier" name="submit">
      </footer>
	  

   
</form>




</body>
</html>
