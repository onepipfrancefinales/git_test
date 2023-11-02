<html>
  <head>
<title>modification de données en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../maj.css">
</head>

<body>
<?php $page="score"; ?>
<?php $division=$_GET['division']; ?>
<?php $comite=$_GET['comite']; ?>

<?php $annee=$_GET['annee']; ?>
<?php $type=$_GET['type'];?>

<?php  
require ("../../fonctionspfterrESDL2019.php"); 

?>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  
  <?php

require ("../../../connect/connection2.php");
 
   $reponse = mysql_query( " SELECT clubA2001, clubA2002, clubA2003, clubA2004
    					     FROM $phpbd_pfterr_e
									  WHERE  annee=$annee AND division =$division" ) ;
 										 while ($donnees = mysql_fetch_array($reponse) )
												{ 		
												$clubA2001 = $donnees['clubA2001']; 	
												$clubA2002 = $donnees['clubA2002']; 
												$clubA2003 = $donnees['clubA2003']; 
												$clubA2004 = $donnees['clubA2003']; 
												}
												 
												
$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs 
						  WHERE  id=$clubA2001 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA2001 = $donnees['nom']; 	
										}							
												
	$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA2002 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA2002 = $donnees['nom']; 	
										}	
										
										$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA2003 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA2003 = $donnees['nom']; 	
										}	
										
										$reponse = mysql_query( " SELECT nom
    					  FROM $phpcomite_clubs
						  WHERE  id=$clubA2004 " ) ;
 								while ($donnees = mysql_fetch_array($reponse) )
										{ 		
										$clubA2004 = $donnees['nom']; 	
										}
  

//***************  Scores  ****************************
												 
								
							$phpbd_pfterr="php".''.$phpbd_pfterr;					
												
												
			$requete = mysql_query( "SELECT division , A2001, A2002, A2003, A2004,
													   A1001, A1002
    					   			  FROM $phpbd_pfterr_r
									  WHERE  annee=$annee AND division =$division" ) ;			
												
 

  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

  <input type="hidden" name="division" value="<?php echo($division) ;?>">

<header>
 <h1>QUARTS DE FINALE  <?php echo $division; ?> (  <?php echo $id; ?>  )    <?php echo $annee; ?>
      </h1> 
    </header>  
	   
	<h3>1</h3> 
		  <h2><?php	echo $clubA8001; ?> </h2>     
          <h2><?php	echo $clubA8002; ?></h2>
          <h4></h4> 
		  <input type="text" name="A8001" value="<?php echo($result->A8001) ;?>" size="3">
         <input type="text" name="A8003" value="<?php echo($result->A8003) ;?>" size="3">
    
	<h3>1</h3>  
        <h2><?php	echo $clubA8003; ?></h2>
        <h2>  <?php	echo $clubA8004; ?></h2>
       <h4></h4> 
	    <input type="text" name="A80013" value="<?php echo($result->A8001) ;?>" size="3">
        <input type="text" name="A8004" value="<?php echo($result->A8004) ;?>" size="3">
    
	<h3>1</h3>  
       <h2> <?php	echo $clubA8005; ?></h2>
       <h2> <?php	echo $clubA8006; ?></h2>
        
		<h4></h4> 
		<input type="text" name="A8005" value="<?php echo($result->A8005) ;?>" size="3">
        <input type="text" name="A8006" value="<?php echo($result->A8006) ;?>" size="3">
     
	 <h3>1</h3>
	    
        <h2><?php	echo $clubA8007; ?></h2>
        <h2> <?php	echo $clubA8008; ?></h2>
      <h4></h4> 
	    <input type="text" name="A8007" value="<?php echo($result->A8007) ;?>" size="3">
        <input type="text" name="A8008" value="<?php echo($result->A8008) ;?>" size="3">
    
	<h3>1</h3>   
        <h2><?php	echo $clubA4001; ?></h2>
        <h2> <?php	echo $clubA4002; ?></h2>
       <h4></h4> 
	    <input type="text" name="A4001" value="<?php echo($result->A4001) ;?>" size="3">
        <input type="text" name="A40015" value="<?php echo($result->A4001) ;?>" size="3">
       
     <h3>2</h3>
	   <h2> <?php	echo $clubA4003; ?></h2>
       <h2> <?php	echo $clubA4004; ?></h2>
       <h4></h4> 
	    <input type="text" name="A40012" value="<?php echo($result->A4001) ;?>" size="3">
        <input type="text" name="A40016" value="<?php echo($result->A4001) ;?>" size="3">
      
      <h3>3</h3> 
	   <h2> <?php	echo $clubA4005; ?></h2>
       <h2> <?php	echo $clubA4006; ?></h2>
       <h4></h4> 
	    <input type="text" name="A40013" value="<?php echo($result->A4001) ;?>" size="3">
        <input type="text" name="A40017" value="<?php echo($result->A4001) ;?>" size="3">
       
     <h3>4</h3> 
       <h2> <?php	echo $clubA4007; ?></h2>
       <h2><?php	echo $clubA4008; ?></h2>
       <h4></h4> 
        <input type="text" name="A40014" value="<?php echo($result->A4001) ;?>" size="3">
        <input type="text" name="A40018" value="<?php echo($result->A4001) ;?>" size="3">
    <p class="texte">
    DEMI
	</p>
     <h3>1</h3> 
       <h2> <?php	echo $clubA2001; ?></h2>
       <h2> <?php	echo $clubA2002; ?></h2>
       <h4></h4> 
	    <input type="text" name="A2001" value="<?php echo($result->A2001) ;?>" size="3">
        <input type="text" name="A2002" value="<?php echo($result->A2002) ;?>" size="3">
      
	  <h3>2</h3>
        <h2> <?php	echo $clubA2003; ?></h2>
        <h2><?php	echo $clubA2004; ?></h2>
        <h4></h4> 
	    <input type="text" name="A2003" value="<?php echo($result->A2003) ;?>" size="3">
        <input type="text" name="A2004" value="<?php echo($result->A2004) ;?>" size="3">
     <p class="texte">  
	   FINALE
	   </p>
   <h3>1</h3>
        <h2> <?php	echo $clubA1001; ?></h2>
        <h2> <?php	echo $clubA1002; ?></h2>
        <h4></h4> 
		<input type="text" name="A1001" value="<?php echo($result->A1001) ;?>" size="3">
        <input type="text" name="A1002" value="<?php echo($result->A1002) ;?>" size="3">
       <footer> 
        <input type="submit" value="modifier" name="submit">
      </footer> 
     
</form>




</body>
</html>
