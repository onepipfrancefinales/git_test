
<?php
$bdcomiteClub=("php".''.$comite.''."_clubs");
$bdcomiteAnnee=("php".''.$comite.''."_pf".''.$annee);
?>
<?php require ("../fonctionspf.php");?>
<?php require ("../connect2.php") ; ?>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"> 
  <?php  include("../../pub2.php"); ?>
</div>
<table >
  <tr > 
    <td class="pub"   > 
      <?php	include("../../pub7.php"); ?>
    </td>
    <td class="chevron" > 
      <?php $anneemoins = $annee-1;?>
      <?php $anneeplus = $annee+1;?>
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $comite; ?>/page2serie.php?variable_1=<?php echo $anneemoins;?>" target="_top" title="Phases finales de la saison <?php echo $anneemoins; ?>">&lt;&lt;</a>nne 
      <a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/<?php echo $comite; ?>/page2serie.php?variable_1=<?php echo $anneeplus;?>" target="_top" title="Phases finales de la saison <?php echo $anneeplus; ?>">&gt;&gt;</a> 
    </td>
    <td class="pub" > 
           <?php	include("../../pub8.php"); ?>
    </td>
  </tr>
  <tr > 
    <td class="ligneComite" colspan="3" >
      <? echo "Finales territoriales du comité  $comiteNom $annee";?>
    </td>
  </tr>
</table>
<br />
<div id="palmares2" > Palmarès 
  <?php 	echo $annee;?>
</div>

<?php $id='200';
		demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
       	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
		scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
<p class="divisionDemi"> 2me série</p>
	
	<p class="demi1"> 
	  <?php  echo $clubA ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php  echo $scoreA ; ?>
	</p>

 <p class="demi2"> 
  <?php  echo $clubB ; ?>
</p>

<p class="demiScore2"> 
  <?php  echo $scoreB ; ?>
</p
><p class="demi5"> 
  <?php  echo $finaliste1 ; ?>
</p>


<p class="demiScore5"> 
  <?php  echo $A1001; ?>
</p>

<p class="demiChamplogo"> 
	<?php echo "<img src=\"$demiChampLogo\">"; ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3"> 
  <?php  echo $clubC ; ?>
</p>

<p class="demiScore3"> 
  <?php  echo $scoreC ; ?>
</p>



<p class="demi6"> 
  <?php  echo $finaliste2 ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $A1002 ; ?>
</p>




<p class="demi4"> 
  <?php  echo $clubD ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo $scoreD ; ?>
</p>





<?php $id='210';

		finaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);     
 	 	score ( $id, $annee, $bdcomiteAnnee)


	//	demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
    //   	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//	scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
<p class="divisionDemi"> 3me série</p>
	
	<p class="demi1"> 
	  <?php   echo "-" ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php   echo "-" ; ?>
	</p>

 <p class="demi2"> 
  <?php   echo "-" ; ?>
</p>

<p class="demiScore2"> 
  <?php   echo "-" ; ?>
</p
><p class="demi5"> 
  <?php  echo $clubA ; ?>
</p>


<p class="demiScore5"> 
  <?php  echo $scoreA; ?>
</p>

<p class="demiChamplogo"> 
	<?php echo "<img src=\"$logo\">"; ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3"> 
  <?php  echo "-" ; ?>
</p>

<p class="demiScore3"> 
  <?php   echo "-" ; ?>
</p>



<p class="demi6"> 
  <?php  echo $clubB ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $scoreB ; ?>
</p>




<p class="demi4"> 
  <?php   echo "-" ; ?>
</p>

<p class="demiScore4"> 
  <?php   echo "-" ; ?>
</p>




<?php $id='220';

		finaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee); 
   		finaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);     
 	 	score ( $id, $annee, $bdcomiteAnnee)



	//	demiFinaleA ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
    //   	demiFinaleB ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//   	demiFinaleC ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//   	demiFinaleD ($bdcomiteClub, $id, $annee, $bdcomiteAnnee);
	//	scoreDemi ( $id, $annee, $bdcomiteAnnee)
		
		?>
<p class="divisionDemi"> 4me série</p>
	
	<p class="demi1"> 
	  <?php  echo "-" ; ?>
	</p>
	
	<p class="demiScore1"> 
	  <?php   echo "-"; ?>
	</p>

 <p class="demi2"> 
  <?php   echo "-" ; ?>
</p>

<p class="demiScore2"> 
  <?php   echo "-" ; ?>
</p
><p class="demi5"> 
  <?php  echo $clubA ; ?>
</p>


<p class="demiScore5"> 
  <?php  echo $scoreA; ?>
</p>

<p class="demiChamplogo"> 
	<?php echo "<img src=\"$logo\">"; ?>
</p>

<p class="demiChampnom"> 
  <?php  echo $champion;   ?>
</p>

<p class="demi3"> 
  <?php  echo "-" ; ?>
</p>

<p class="demiScore3"> 
  <?php   echo "-" ; ?>
</p>



<p class="demi6"> 
  <?php  echo $clubB ; ?>
</p>

<p class="demiScore6"> 
  <?php  echo $scoreB ; ?>
</p>




<p class="demi4"> 
  <?php   echo "-" ; ?>
</p>

<p class="demiScore4"> 
  <?php  echo "-" ; ?>
</p>


<hr />
<?php	include("../../pub1.php"); ?>

