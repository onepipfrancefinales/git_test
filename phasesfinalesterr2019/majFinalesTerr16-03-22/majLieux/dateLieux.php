<html>
  <head>
<title>modification de données en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="../maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php $page="score"; 
 $division=$_GET['division']; 
 $comite=$_GET['comite']; 
 $annee=$_GET['annee'];
// $type=$_GET['type'];
?>

 <?php
  echo " division :".$division; 
  echo "- comite : ".$comite;  
  echo "- annee : ".$annee; 
  ?>
	
	
<?php  
$bdcomite_pfterr_e = $comite.''."_pfterr_e";
require '../../../connect1/connection2.php';
$bdcomiteClub =$comite.''."_clubs";

require ("../../fonctionspfterrESDL2019.php"); 
huitieme2019 ($comite, $division, $annee, $bdd) ;
afficheLieux ( $division, $annee, $comite, $bdd) ;
?>

<form name="insertion" action="saisieLieux2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
   

  
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
    <header>
	 
 
       
	   <hr />
  <h2>Huiti&egrave;me : Date 
    <input type="text" name="D8000" value="<?php echo $D8000 ;?>" size="30">
    <font size="2">(<font face="Arial, Helvetica, sans-serif">ex : 25 Mai 2019)</font></font></h2>
        
        <h4><?php	echo "1. ".$clubA8001.' - '.$clubA8002; ?></h4> 
        
      
		<input type="text" name="L8001" value="<?php echo $L8001 ;?>" size="30">
         <hr />
		
		<h4><?php echo "2. ".$clubA8003.' - '.$clubA8004; ?></h4> 
		Lieu : 
  <input type="text" name="L8003" value="<?php echo $L8003 ;?>" size="30">
      <hr />
   
       <h4><?php	echo "3. ".$clubA8005.' - '.$clubA8006; ?></h4> 
       Lieu :
<input type="text" name="L8005" value="<?php echo $L8005 ;?>" size="30">        
         <hr />

		<h4><?php	echo $clubA8007.' - '.$clubA8008; ?></h4> 
		Lieu :
<input type="text" name="L8007" value="<?php echo $L8007 ;?>" size="30">
      	<hr />
	 
        <h4><?php	echo "5. ".$clubA8009.' - '.$clubA8010; ?></h4> 
		Lieu :
<input type="text" name="L8009" value="<?php echo $L8009 ;?>" size="30">

 		<hr />
	
		<h4><?php echo "6. ".$clubA8011.' - '.$clubA8012; ?></h4> 
		Lieu :
<input type="text" name="L8011" value="<?php echo $L8011 ;?>" size="30">
   		<hr />      
   
	    <h4><?php echo "7. ".$clubA8013.' - '.$clubA8014; ?></h4> 
        Lieu :
<input type="text" name="L8013" value="<?php echo $L8013 ;?>" size="30">
	 	<hr />	
		
		 <h4><?php echo "8. ".$clubA8015.' - '.$clubA8016; ?></h4> 
        Lieu :
<input type="text" name="L8015" value="<?php echo $L8011 ;?>" size="30">
        <hr />
  <h2>Quarts : Date
    <input type="text" name="D4000" value="<?php echo $D4000 ;?>" size="30">
    <font size="2">(<font face="Arial, Helvetica, sans-serif">ex : 25 Mai 2019)</font></font></h2>
   
        <h4><?php	echo "1. ".$clubA4001.' - '.$clubA4002; ?></h4>
		Lieu :
<input type="text" name="L4001" value="<?php echo $L4001 ;?>" size="25">
		 <hr />
		
		<h4><?php echo "2. ".$clubA4003.' - '.$clubA4004; ?></h4>
        Lieu :
<input type="text" name="L4003" value="<?php echo $L4003 ;?>" size="30">
     <hr />
	 
	    <h4><?php echo "3. ".$clubA4005.' - '.$clubA4006; ?></h4>
		<input type="text" name="L4005" value="<?php echo $L4005 ;?>" size="30">

		<h4><?php	echo "4. ".$clubA4007.' - '.$clubA4008; ?></h4>  
		Lieu :
<input type="text" name="L4007" value="<?php echo $L4007 ;?>" size="30">
  <h2>Demi : Date 
    <input type="text" name="D2000" value="<?php echo($D2000) ;?>" size="30">
    <font size="2">(<font face="Arial, Helvetica, sans-serif">ex : 25 Mai 2019)</font></font></h2>
       
	    <h3><?php	echo $clubA2001.' - '.$clubA2002; ?></h3> 
	    Lieu :
<input type="text" name="L2001" value="<?php echo $L2001 ;?>" size="30">
       
	    
		 
		<h4><?php	echo $clubA2003.' - '.$clubA2004; ?></h4> 
	    Lieu :
<input type="text" name="L2003" value="<?php echo $L2003 ;?>" size="30">
  <h2>Finale : Date 
    <input type="text" name="D1000" value="<?php echo $D1000 ;?>" size="30">
    <font size="2">(<font face="Arial, Helvetica, sans-serif">ex : 25 Mai 2019)</font></font></h2>
   
   	<h4><?php	echo $clubA1001.' - '.$clubA1002; ?></h4> 
	    Lieu :
<input type="text" name="L1001" value="<?php echo $L1001 ;?>" size="30">
  <br>
  <br>
  <section> <footer> 
  <input type="submit" value="modifier" name="submit">
      </footer>
	  
     <a href="../accueilMAJ.php">Retour accueil</a>
   
</form>




</body>
</html>
