<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
</head>


<?php 

if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-'; 

//echo $comite;


$bdcomiteClub="php".''.$comite.''."_clubs";

require ("../../connect1/connection2.php") ; 
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
		
 




?>
   <?php
if ($page=="HPHS1")
		{
		$nom1="Honneur";
		$nom2="Promotion Honneur";
		$nom3="1re Série";
		$division=170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me Série";
		$nom2="3me Série";
		$nom3="4me Série";
		$division=200;
		}
elseif ($page=="RRPHR1")
		{
		$nom1="Réserve";
		$nom2="Réserve Promotion";
		$nom3="Réserve 1re Série";
		$division=270;
		
		}		
?>

<br>
<br>
<div id="palmares" > Palmar&egrave;s 
        <?php 	echo $annee;?>
      </div>
<br>
<br><br>
 <?php 
	    
		$division=$division;
  		finale2019 ($comite, $division, $annee, $bdd); 
     
 	 	
       ?>

	<p class="division">  
			<?php echo $nom1; ?>
	</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001 ; ?>
	</p>

	 
<p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

	<p class="score2"> 
	  <?php  echo $A1002 ; ?>
	</p>

<p class="demiChamplogo"> 
	<img src="<?php echo $champLogo;  ?>" border="0" height="100" width="100">
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>

 <?php 
	    if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
  		finale2019 ($comite, $division, $annee, $bdd); 
       
 	 	
       ?>

<br><br><br><br><br>	
<p class="division"> <?php echo $nom2; ?></p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001 ; ?>
	</p>

 
<p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="score2"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="demiChamplogo"> 
	<img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100">
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>
<br><br><br><br><br>
<?php 
	    $division=$division+10;
  		finale2019 ($comite, $division, $annee, $bdd); 
     
 	 
       ?>
<p class="division"> 
  <?php echo $nom3; ?>
</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA1001 ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $A1001; ?>
	</p>

 
<p class="finale2"> 
  <?php  echo $clubA1002 ; ?>
</p>

<p class="score2"> 
  <?php  echo $A1002 ; ?>
</p>

<p class="demiChamplogo"> 
	<img src="<?php echo $champLogo;  ?>"border="0" height="100" width="100" >
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>
<br><br><br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

