<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>

<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>

<body>

<?php 


 $division=$_GET['division']; 
 $comite=$_GET['comite']; 
 $annee=$_GET['annee']; 
 $type=$_GET['type'];
echo  $division; echo "<br />";
echo $annee;echo "<br />";
echo $type;echo "<br />";
 


require '../../../connect1/connection2.php';


require ("../../fonctionspfterrESDL2019.php");   
huitiemeAR2019 ($comite, $division, $annee, $bdd) ;


?>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">
  
 
 <header>
  <input type="hidden" name="division" value="<?php echo($division) ;?>">
   <h1><?php echo "HUITIEME DE FINALE AR ".''.$division.'('.$id.')'.$annee; ?></h1>
        
  
 
        
     </header>  
       
<h3>Aller 1</h3>
		
		<h2> <?php	echo $clubA8001; ?></h2>
        <h2> <?php	echo $clubA8002; ?></h2>
      <h4></h4>    
		<input type="text" name="A8001" value="<?php echo($A8001) ;?>" size="3" placeholder="Points terrain">
        <input type="text" name="A8002" value="<?php echo($A8002) ;?>" size="3"placeholder="Points terrain">
      <h4></h4>  
        <input type="text" name="A1601" value="<?php echo($A1601) ;?>" size="3" placeholder="Goal Average">
        <input type="text" name="A1602" value="<?php echo($A1602) ;?>" size="3" placeholder="Goal Average">
       
    
<h3>Aller 2</h3>	
	     	<h2> <?php echo $clubA8003; ?></h2>
		  	<h2> <?php echo $clubA8004; ?></h2>
       <h4></h4>     
          	<input type="text" name="A8003" value="<?php echo($A8003) ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A8004" value="<?php echo($A8004) ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
       	 	<input type="text" name="A1603" value="<?php echo($A1603) ;?>" size="3" placeholder="Goal Average">
        	<input type="text" name="A1604" value="<?php echo($A1604) ;?>" size="3" placeholder="Goal Average">
<h3>Aller 3</h3>      
       		<h2> <?php	echo $clubA8005; ?></h2>
        	<h2><?php	echo $clubA8006; ?></h2>
         <h4></h4> 	
			<input type="text" name="A8005" value="<?php echo($A8005) ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A8006" value="<?php echo($A8006) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A1605" value="<?php echo($A1605) ;?>" size="3" placeholder="Goal Average">	
        	<input type="text" name="A1606" value="<?php echo($A1606) ;?>" size="3" placeholder="Goal Average">
       
 <h3>Aller 4</h3>     
	  		 <h2> <?php	echo $clubA8007; ?></h2>
        	<h2><?php	echo $clubA8008; ?></h2>
        <h4></h4> 
			<input type="text" name="A8007" value="<?php echo($A8007) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="A8008" value="<?php echo($A8008) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A1607" value="<?php echo($A1607) ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="A1608" value="<?php echo($A1608) ;?>" size="3" placeholder="Goal Average">
 
 <h3>Aller 5</h3>     
      
       		<h2> <?php	echo $clubA8009; ?></h2>
         	<h2> <?php	echo $clubA8010; ?></h2>
         <h4></h4> 
			<input type="text" name="A8009" value="<?php echo($A8009) ;?>" size="3" placeholder="Points terrain">
			<input type="text" name="A8010" value="<?php echo($A8010) ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
        	<input type="text" name="A1609" value="<?php echo($A1609) ;?>" size="3" placeholder="Goal Average">
			<input type="text" name="A1610" value="<?php echo($A1610) ;?>" size="3" placeholder="Goal Average">
       
 <h3>Aller 6</h3>    
      		<h2>  <?php	echo $clubA8011; ?></h2>
       		<h2> <?php	echo $clubA8012; ?></h2>
        <h4></h4> 
			<input type="text" name="A8011" value="<?php echo($A8011) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="A8012" value="<?php echo($A8012) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
    	    <input type="text" name="A1611" value="<?php echo($A1611) ;?>" size="3" placeholder="Goal Average">		
     	    <input type="text" name="A1612" value="<?php echo($A1612) ;?>" size="3" placeholder="Goal Average">

 <h3>Aller 7</h3>     
       		<h2> <?php	echo $clubA8013; ?></h2>
      		<h2> <?php	echo $clubA8014; ?></h2>
        <h4></h4> 
			<input type="text" name="A8013" value="<?php echo($A8013) ;?>" size="3" placeholder="Points terrain">
	       	<input type="text" name="A8014" value="<?php echo($A8014) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="A1613" value="<?php echo($A1613) ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="A1614" value="<?php echo($A1614) ;?>" size="3" placeholder="Goal Average">
       
   
  <h3>Aller 8</h3>    
      		<h2>  <?php	echo $clubA8015; ?></h2>
         	<h2> <?php	echo $clubA8016; ?></h2>
        <h4></h4>  
			<input type="text" name="A8015" value="<?php echo($A8015) ;?>" size="3" placeholder="Points terrain">
        	<input type="text" name="A8016" value="<?php echo($A8016) ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
     	   	<input type="text" name="A1615" value="<?php echo($A1615) ;?>" size="3" placeholder="Goal Average">
        	<input type="text" name="A1616" value="<?php echo($A1616) ;?>" size="3" placeholder="Goal Average">
    <hr />  
	
	

	
<br />	
	  
<h3>Retour 1</h3>	  
	  
       		<h2>  <?php	echo $clubA8002; ?></h2>
        	<h2>  <?php	echo $clubA8001; ?></h2> 
     <h4></h4>     	
			<input type="text" name="R8002" value="<?php echo($R8002) ;?>" size="3" placeholder="Points terrain">		
    	    <input type="text" name="R8001" value="<?php echo($R8001) ;?>" size="3" placeholder="Points terrain">
	<h4></h4> 
	        <input type="text" name="R1602" value="<?php echo($R1602) ;?>" size="3" placeholder="Goal Average">
      		<input type="text" name="R1601" value="<?php echo($R1601) ;?>" size="3" placeholder="Goal Average">

<h3>Retour 2</h3>   
       		<h2> <?php	echo $clubA8004; ?></h2>
        	<h2>  <?php	echo $clubA8003; ?></h2>
        <h4></h4> 	
			<input type="text" name="R8004" value="<?php echo($R8004) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R8003" value="<?php echo($R8003) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R1604" value="<?php echo($R1604) ;?>" size="3" placeholder="Goal Average">		
       		<input type="text" name="R1603" value="<?php echo($R1603) ;?>" size="3" placeholder="Goal Average">
     
  <h3>Retour 3</h3>
     		<h2>  <?php	echo $clubA8006; ?></h2>
        	<h2>  <?php	echo $clubA8005; ?></h2>
		 <h4></h4> 	
        	<input type="text" name="R8006" value="<?php echo($R8006) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R8005" value="<?php echo($R8005) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R1606" value="<?php echo($R1606) ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R1605" value="<?php echo($R1605) ;?>" size="3" placeholder="Goal Average">
 
  <h3>Retour 4</h3>     
      		<h2>  <?php	echo $clubA8008; ?></h2>
     		 <h2> <?php	echo $clubA8007; ?></h2>
       <h4></h4> 	
			<input type="text" name="R8008" value="<?php echo($R8008) ;?>" size="3" placeholder="Points terrain">	
        	<input type="text" name="R8007" value="<?php echo($R8007) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 	
        	<input type="text" name="R1608" value="<?php echo($R1608) ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R1607" value="<?php echo($R1607) ;?>" size="3" placeholder="Goal Average">

 <h3>Retour 5</h3>       
       		<h2> <?php	echo $clubA8010; ?></h2>
         	<h2>  <?php	echo $clubA8009; ?></h2>
        <h4></h4> 	
		   <input type="text" name="R8010" value="<?php echo($R8010) ;?>" size="3" placeholder="Points terrain">	
 	       <input type="text" name="R8009" value="<?php echo($R8009) ;?>" size="3" placeholder="Points terrain">
        <h4></h4> 
        	<input type="text" name="R1610" value="<?php echo($R1610) ;?>" size="3" placeholder="Goal Average">
           	<input type="text" name="R1609" value="<?php echo($R1609) ;?>" size="3" placeholder="Goal Average">
  
  
  <h3>Retour 6</h3>      
      		<h2>  <?php	echo $clubA8012; ?></h2>
        	<h2>  <?php	echo $clubA8011; ?></h2>
       <h4></h4>  	
			<input type="text" name="R8012" value="<?php echo($R8012) ;?>" size="3" placeholder="Points terrain">
	        <input type="text" name="R8011" value="<?php echo($R8011) ;?>" size="3" placeholder="Points terrain">
         <h4></h4>  
     	   	<input type="text" name="R1612" value="<?php echo($R1612) ;?>" size="3" placeholder="Goal Average">
	        <input type="text" name="R1611" value="<?php echo($R1611) ;?>" size="3" placeholder="Goal Average">
    
  
  <h3>Retour 7</h3>  
       		<h2> <?php	echo $clubA8014; ?></h2>
       		<h2>  <?php	echo $clubA8013; ?></h2>
       <h4></h4> 
        	<input type="text" name="R8014" value="<?php echo($R8014) ;?>" size="3" placeholder="Points terrain">
 	       	<input type="text" name="R8013" value="<?php echo($R8013) ;?>" size="3" placeholder="Points terrain">     
		<h4></h4> 
        	<input type="text" name="R1614" value="<?php echo($R1614) ;?>" size="3" placeholder="Goal Average">	   
        	<input type="text" name="R1613" value="<?php echo($R1613) ;?>" size="3" placeholder="Goal Average">
 
 
 <h3>Retour 8</h3>     
      		<h2>  <?php	echo $clubA8016; ?></h2>
        	<h2>  <?php	echo $clubA8015; ?></h2> 
       <h4></h4>  
			<input type="text" name="R8016" value="<?php echo($R8016) ;?>" size="3" placeholder="Points terrain">	
        	<input type="text" name="R8015" value="<?php echo($R8015) ;?>" size="3" placeholder="Points terrain">
       <h4></h4> 
       		 <input type="text" name="R1616" value="<?php echo($R1616) ;?>" size="3" placeholder="Goal Average">
       		 <input type="text" name="R1615" value="<?php echo($R1615) ;?>" size="3" placeholder="Goal Average">
    
   <p class="texte">
   QUARTS DE FINALE
	</p>
      
	 <h3>1</h3> 
	   <h2> <?php	echo $clubA4001; ?></h2>
       <h2>  <?php	echo $clubA4002; ?></h2>
	 <h4></h4>    
        <input type="text" name="A4001" value="<?php echo($A4001) ;?>" size="3">
        <input type="text" name="A4002" value="<?php echo($A4002) ;?>" size="3">
      
	  <h3>2</h3>   
     	<h2>   <?php	echo $clubA4003; ?></h2>
       	<h2> <?php	echo $clubA4004; ?></h2> 
      <h4></h4>   
	    <input type="text" name="A4003" value="<?php echo($A4003) ;?>" size="3">
        <input type="text" name="A4004" value="<?php echo($A4004) ;?>" size="3">
      
	 	<h3>3</h3>   
      	<h2>  <?php	echo $clubA4005; ?></h2>
         <h2> <?php	echo $clubA4006; ?></h2>
        <h4></h4>  
		<input type="text" name="A4005" value="<?php echo($A4005) ;?>" size="3">
        <input type="text" name="A4006" value="<?php echo($A4006) ;?>" size="3">
       
	     <h3>4</h3>
       		<h2> <?php	echo $clubA4007; ?></h2>
          <h2> <?php	echo $clubA4008; ?></h2>
        <h4></h4> 
	   
	    <input type="text" name="A4007" value="<?php echo($A4007) ;?>" size="3">
        <input type="text" name="A4008" value="<?php echo($A4008) ;?>" size="3">
      
	  
	  
	   <p class="texte">
    DEMI FINALE
	</p>
      
	   <h3>1</h3>
	   <h2> <?php	echo $clubA2001; ?></h2>
        
		<h2> <?php	echo $clubA2002; ?></h2>
        <h4></h4> 
		<input type="text" name="A2001" value="<?php echo($A2001) ;?>" size="3">
        <input type="text" name="A2002" value="<?php echo($A2002) ;?>" size="3">
		
        <h3>2</h3> 
       <h2> <?php	echo $clubA2003; ?></h2>
        <h2> <?php	echo $clubA2004; ?></h2>
        <h4></h4>  
        <input type="text" name="A2003" value="<?php echo($A2003) ;?>" size="3">
        <input type="text" name="A2004" value="<?php echo($A2004) ;?>" size="3">
   
  <p class="texte">
    FINALE
	</p>
     
	  <h3>1</h3>
	  <h2> <?php	echo $clubA1001; ?></h2>
       <h2><?php	echo $clubA1002; ?></h2>
      <h4></h4>   
	    <input type="text" name="A1001" value="<?php echo($A1001) ;?>" size="3">
        <input type="text" name="A1002" value="<?php echo($A1002) ;?>" size="3">
  
  
  <footer>
        <input type="submit" value="modifier" name="submit">
		</footer>
    
</form>



<p>&nbsp;</p>
</body>
</html>
