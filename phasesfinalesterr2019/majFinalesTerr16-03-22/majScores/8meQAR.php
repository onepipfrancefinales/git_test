<html>
  <head>
<title>modification de donn�es en PHP :: partie2</title>
<link rel="stylesheet" type="text/css" href="../../maj.css">
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>

<?php 

 $page="score"; 
 $division=$_GET['division']; 
 $comite=$_GET['comite']; 
 $annee=$_GET['annee']; 
 $type=$_GET['type'];




require '../../../connect1/connection2.php';
 
require ("../../fonctionspfterrESDL2019.php"); 
huitieme2019 ($comite, $division, $annee, $bdd) ;


?>
<form name="insertion" action="saisieScore2.php?division=<?php echo $division ;?>&type=<?php echo $type ;?>&annee=<?php echo $annee ;?>&comite=<?php echo $comite ;?>" method="POST">


  <input type="hidden" name="division" value="<?php echo($division) ;?>">
 <header>
 <h1><?php echo "HUITIEME DE FINALE".''.$division.'('.$id.' )'.$annee; ?></h1>
      
    <h3>1</h3>
        <h2><?php   echo $clubA8001; ?></h2>
        <h2><?php	echo $clubA8002; ?></h2>
      <h4></h4>
	   		<input type="text" name="A8001" value="<?php echo $A8001 ;?>" size="3">
           	<input type="text" name="A8002" value="<?php echo $A8002 ;?>" size="3">
    <h3>2</h3>    
        <h2><?php	echo $clubA8003; ?></h2>
        <h2><?php	echo $clubA8004; ?></h2>
       <h4></h4>
	   		<input type="text" name="A8003" value="<?php echo $A8003 ;?>" size="3">
           	<input type="text" name="A8004" value="<?php echo $A8004 ;?>" size="3">
     <h3>3</h3>   
        <h2><?php	echo $clubA8005; ?></h2>
         <h2><?php	echo $clubA8006; ?></h2>
       <h4></h4>
	   		<input type="text" name="A8005" value="<?php echo $A8005 ;?>" size="3">
           	<input type="text" name="A8006" value="<?php echo $A8006 ;?>" size="3">
     <h3>4</h3>   
        <h2><?php	echo $clubA8007; ?></h2>
        <h2><?php	echo $clubA8008; ?></h2>
       <h4></h4>
	   		<input type="text" name="A8007" value="<?php echo $A8007;?>" size="3">
           	<input type="text" name="A8008" value="<?php echo $A8008 ;?>" size="3">
       
   <h3>5</h3>
         <h2><?php	echo $clubA8009; ?></h2>
         <h2><?php	echo $clubA8010; ?></h2>
        <h4></h4>
	    	<input type="text" name="A8009" value="<?php echo $A8009 ;?>" size="3">
           	<input type="text" name="A8010" value="<?php echo $A8010 ;?>" size="3">
       
      <h3>6</h3>
        <h2><?php	echo $clubA8011; ?></h2>
       <h2><?php	echo $clubA8012; ?></h2>
       <h4></h4>
	    	<input type="text" name="A8011" value="<?php echo $A8011 ;?>" size="3">
           	<input type="text" name="A8012" value="<?php echo $A8012 ;?>" size="3">
       
    <h3>7</h3>
     
        <h2><?php	echo $clubA8013; ?></h2>
       <h2><?php	echo $clubA8014; ?></h2>
	    <h4></h4>
      		<input type="text" name="A8013" value="<?php echo $A8013 ;?>" size="3">
           	<input type="text" name="A8014" value="<?php echo $A8014 ;?>" size="3">
      <h3>8</h3> 
       <h2><?php	echo $clubA8015; ?></h2>
       <h2><?php	echo $clubA8016; ?></h2>
       <h4></h4>
	   		<input type="text" name="A8015" value="<?php echo $A8015 ;?>" size="3">
           	<input type="text" name="A8016" value="<?php echo $A8016;?>" size="3">
	  
	  <p class="texte">
	  QUARTS DE FINALE
		</p>
    
  <h3>Aller 1</h3>
        <h2><?php	echo $clubA4001; ?></h2>
        <h2><?php	echo $clubA4002; ?></h2>
   		<h4></h4>
	    		<input type="text" name="A4001" value="<?php echo $A4001 ;?>" size="3">
           	 	<input type="text" name="A4002" value="<?php echo $A4002 ;?>" size="3">
    <h4></h4>
  	<input type="text" name="A40012" value="<?php echo $A4001 ;?>" size="3">
  	<input type="text" name="A40022" value="<?php echo $A4002 ;?>" size="3">
 <br>
  <h3>Aller 2</h3>  
         	<h2><?php	echo $clubA4003; ?></h2>
         	<h2><?php	echo $clubA4004; ?></h2>
            <h4></h4> 	
				
 
    <input type="text" name="A4003" value="<?php echo $A4003 ;?>" size="3">
    <input type="text" name="A4004" value="<?php echo $A4004 ;?>" size="3">
      <h4></h4>
    <input type="text" name="A40032" value="<?php echo $A4003 ;?>" size="3">
    <input type="text" name="A40042" value="<?php echo $A4004 ;?>" size="3">
  
  <p>&nbsp; </p>
  <h3>Aller 3</h3>
         	<h2><?php	echo $clubA4005; ?></h2>
        	<h2><?php	echo $clubA4006; ?></h2>
            <h4></h4>
				<input type="text" name="A4005" value="<?php echo $A4005 ;?>" size="3">
           	 	<input type="text" name="A4006" value="<?php echo $A4006 ;?>" size="3">
   <h4></h4>
  <input type="text" name="A40052" value="<?php echo $A4005 ;?>" size="3">
  <input type="text" name="A40062" value="<?php echo $A4006 ;?>" size="3">
 <br>

  <h3>Aller 4</h3>
         	<h2><?php	echo $clubA4007; ?></h2>
			<h2><?php	echo $clubA4008; ?></h2>
       		<h4></h4>		
	
    <input type="text" name="A4007" value="<?php echo $A4007 ;?>" size="3">
    <input type="text" name="A4008" value="<?php echo $A4008 ;?>" size="3">
     <h4></h4>
    <input type="text" name="A40072" value="<?php echo $A4007 ;?>" size="3">
    <input type="text" name="A40082" value="<?php echo $A4008 ;?>" size="3">
 
  <br>
  <hr />
  <h3>Retour 1</h3>
  <h2>    <?php	echo $clubA4001; ?>  </h2>
  <h2>     <?php	echo $clubA4002; ?>   
  </h2>
   <h4> </h4>
  <input type="text" name="A40013" value="<?php echo $A4001 ;?>" size="3">
  <input type="text" name="A40023" value="<?php echo $A4002 ;?>" size="3">
  <h4></h4>
  <input type="text" name="A400122" value="<?php echo $A4001 ;?>" size="3">
  <input type="text" name="A400222" value="<?php echo $A4002 ;?>" size="3">
  <br>
   <h3> Retour 2</h3>
  <h2>
    <?php	echo $clubA4003; ?>  </h2>
  <h2>     <?php	echo $clubA4004; ?>  
  </h2>
  <h4></h4>
  
    <input type="text" name="A40033" value="<?php echo $A4003 ;?>" size="3">
    <input type="text" name="A40043" value="<?php echo $A4004 ;?>" size="3">
      <h4></h4>
    <input type="text" name="A400322" value="<?php echo $A4003 ;?>" size="3">
    <input type="text" name="A400422" value="<?php echo $A4004 ;?>" size="3">
  <br>
 
  <h3>Retour 3</h3>
  <h2>
    <?php	echo $clubA4005; ?>
  </h2>
  <h2> 
    <?php	echo $clubA4006; ?>
  
  </h2>
  <h4></h4>
  <input type="text" name="A40053" value="<?php echo $A4005 ;?>" size="3">
  <input type="text" name="A40063" value="<?php echo $A4006 ;?>" size="3">
   <h4></h4>
  <input type="text" name="A400522" value="<?php echo $A4005 ;?>" size="3">
  <input type="text" name="A400622" value="<?php echo $A4006 ;?>" size="3">
 <br> <h3>
    Retour 4</h3>
  <h2>
    <?php	echo $clubA4007; ?>
  </h2>
  <h2> 
    <?php	echo $clubA4008; ?>
   
  </h2>
  <h4></h4>
   
    <input type="text" name="A40073" value="<?php echo $A4007 ;?>" size="3">
    <input type="text" name="A40083" value="<?php echo $A4008 ;?>" size="3">
    <h4></h4>
    <input type="text" name="A400722" value="<?php echo $A4007 ;?>" size="3">
    <input type="text" name="A400822" value="<?php echo $A4008 ;?>" size="3">
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  <p class="texte">
	  Demi finale
		</p>
  
			
			
			
			<h3>1</h3>
        <h2><?php	echo $clubA2001; ?></h2>
         <h2><?php	echo $clubA2002; ?></h2>
      <h4></h4>
	  		<input type="text" name="A2001" value="<?php echo $A2001 ;?>" size="3">
            <input type="text" name="A2002" value="<?php echo $A2002 ;?>" size="3">
	   <h3>2</h3>
       		<h2><?php echo $clubA2003; ?></h2>
       		<h2><?php echo $clubA2004; ?></h2>
       <h4></h4>
			<input type="text" name="A2003" value="<?php echo $A2003 ;?>" size="3">
            <input type="text" name="A2004" value="<?php echo $A2004 ;?>" size="3">

  	<p class="texte">
	  FINALE
		</p>
  
    <h3>1</h3>
     
        <h2><?php	echo $clubA1001; ?></h2>
      <h2><?php	echo $clubA1002; ?></h2>
      <h4></h4>
	   	<input type="text" name="A1001" value="<?php echo $A1001 ;?>" size="3">
   		<input type="text" name="A1002" value="<?php echo $A1002 ;?>" size="3">
    <footer>
        <input type="submit" value="modifier" name="submit">
     </footer>
  
    
</form>



<p>&nbsp;</p>
</body>
</html>
