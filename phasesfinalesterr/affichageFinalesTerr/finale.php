<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<title>Finales territoriales</title>
</head>

<?php 
 
if (isset ($_GET['id'])) $id = $_GET['id']; else $id='-'; 
if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='Erreur, pas de comite'; 




 require ("../fonctionspfterrESDL.php");


$bdcomiteClub=$comite.''."_clubs";
$bdcomite_pfterr_e = $comite.''."_pfterr_e";
$bdcomite_pfterr_r = $comite.''."_pfterr_r";

//echo $bdcomite_pfterr_e;

//$bdcomiteClub=($comite.''."_clubs");
//$bdcomiteAnnee=($comite.''."_pfterr");





?>
   <?php
if ($page=="HPHS1")
		{
		$nom1="Honneur";
		$nom2="Promotion Honneur";
		$nom3="1re S&eacute;rie";
		$division=170;
		}
elseif ($page=="S2S3S4")
		{
		$nom1="2me S&eacute;rie";
		$nom2="3me S&eacute;rie";
		$nom3="4me S&eacute;rie";
		$division=200;
		}
elseif ($page=="RRPHR1")
		{
		$nom1="R&eacute;serve";
		$nom2="R&eacute;serve Promotion";
		$nom3="R&eacute;serve 1re S&eacute;rie";
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
  		finale ($bdcomiteClub, $division, $annee, $bdd); 
     
 	 	
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

<p class="champlogo"> 
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>

 <?php 
	    if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
  		finale ($bdcomiteClub, $division, $annee, $bdd); 
       
 	 	
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

<p class="champlogo"> 
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>
<br><br><br><br><br>
<?php 
	    $division=$division+10;
  		finale ($bdcomiteClub, $division, $annee, $bdd); 
     
 	 
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

<p class="champlogo"> 
  <?php logo ($bdcomiteClub, $champion, $bdd); ?>
</p>
<p class="champnom"> 
  <?php echo $champion; ?>
</p>
<br><br><br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

