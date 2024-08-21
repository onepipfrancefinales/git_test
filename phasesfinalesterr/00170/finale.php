<?php 
$annee=$_GET['variable_1'];
$comite=$_GET['comite'];
$page=$_GET['page'];
echo $page;

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

$anneemoins = $annee-1;
$anneeplus = $annee+1;
$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pfterr");

require ("../fonctionspfterr.php");

?>
<link rel="stylesheet" type="text/css" href="../champTerr.css">
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1011px; top: 7px"> 
 
 
  <?php  if ($comite=="pl" OR $comite=="mpy" OR $comite=="pr" OR $comite=="br" OR  $comite=="f1")
				require ("../../connect/connection3.php") ; 
else
				require ("../../connect/connection2.php") ; 
   ?>
</div>
<table >
  <tr > 
    <td class="pub"   > 
      <?php	include("../../pub7.php"); ?>
    </td>
    <td class="chevron" > 
      <?php $anneemoins = $annee-1;?>
      <?php $anneeplus = $annee+1;?>
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/170/pagehonneur.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/170/pagehonneur.php?page=<?php echo $page; ?>&comite=<?php echo $comite; ?>&variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
      <?php	include("../../pub8.php"); ?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" > 
      <? echo "Finales territoriales du comit&eacute".' '.$comiteNom.' '.$annee;?>
    </td>
  </tr>
</table>
<br><br>
<div id="palmares" > Palmarès 
        <?php 	echo $annee;?>
      </div>
<br>
<br><br>
 <?php 
	    $division=$division;
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>

	<p class="division">  
			<?php echo $nom1; ?>
	</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

	 <p class="finale2"> 
	  <?php  echo $clubB ; ?>
	</p>

	<p class="score2"> 
	  <?php  echo $scoreB ; ?>
	</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p>
<br><br><br><br><br>
 <?php 
	    if ($page=="RRPHR1") $division=$division+8910; else $division=$division+10;
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>

	
<p class="division"> <?php echo $nom2; ?></p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="score2"> 
  <?php  echo $scoreB ; ?>
</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p>
<br><br><br><br><br>
<?php 
	    $division=$division+10;
  		finaleA ($bdcomiteClub, $division, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $division, $annee, $bdcomiteAnnee);     
 	 	score ( $division, $annee, $bdcomiteAnnee)
       ?>
<p class="division"> 
  <?php echo $nom3; ?>
</p>
	
	<p class="finale1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="score1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="finale2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="score2"> 
  <?php  echo $scoreB ; ?>
</p>

<p class="champlogo">
<?php echo "<img src=\"$logo\">"; ?>
</p>
<p class="champnom">
<?php echo $champion; ?>
</p><br><br><br>
<hr />
<p>
	<?php include("../../pub1.php"); ?>
</p>

