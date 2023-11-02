   <?php 
  // echo $division;echo "<br/>";
 
  
  
require '../../connect/connexion1.php';
trenteDeuxieme2019 ($division, $annee, $bdd); 
date2019($division, $annee, $bdd);
nomDivision($division); 
	

 $reponse = $bdd->query("SELECT type
						FROM bdpffrance
						WHERE id = '$division' and saison = '$annee' "); 
		while ($row = $reponse->fetch() )
			{ 
			$type = $row[0];
			}
//echo "type : ".$type;
//echo "<br />";	
	
	
	
if (substr($type,1,2) != 0)
	$nombreMaxEquipe = 64;
elseif (substr($type,3,2) != 0)
	$nombreMaxEquipe = 32;
elseif (substr($type,5,2) != 0)
	$nombreMaxEquipe = 16;
elseif (substr($type,7,2) != 0)
	$nombreMaxEquipe = 8;
elseif (substr($type,9,2) != 0)
	$nombreMaxEquipe = 4;

$nombreEquipe= substr($type,9,2);

//echo "nombre d'équipe max :".$nombreMaxEquipe;echo "<br />";
//echo "nombre d'équipe : ".$nombreEquipe;echo "<br />";		
//cho "test : ".$clubA1601;	 echo "<br />";
	
traitementScores (3201, 3264);	 
traitementScores (1601, 1632);
traitementScores (8001, 8016);	
traitementScores (4001, 4008);	
 
 
constructionTableau( $nombreEquipe, $division, $annee) ;
/*
echo "nombreEquipe".$nombreEquipe; echo "<br />";
echo "i_min : ".$i_min; echo "<br />";
echo "i_max : ".$i_max; echo "<br />";
echo "j_min : ".$j_min; echo "<br />";
echo "j_max : ".$j_max; echo "<br />";
echo "num_matchs : ".$num_max; echo "<br />";
*/
 
 ?>

  <table width="90%" border="1" align="center">
    <tr> 
      <td class="titre"> Barrages <br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong>
	  <?php echo $D64ME; ?></strong></i></b></font></div></td>
    </tr>
  </table>
  <table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2"><br/></td>
  </tr>
  
<?php  
for ($num = 1, $i=$i_min, $j= $i + 1; $num <= $num_max, $i <= $i_max , $j < $j_max ; $num=$num+2, $i = $i+4, $j=$j+4)
 // for ($num = 1, $i=1601; $num <= 16, $i <= 1632 ; $num=$num+2, $i = $i+4, $j = $j+4)
{
?>
<tr>
	<!--<td rowspan="2" width="6" class="numero"><?php echo $num;?></td>-->
	
    <td class="equipe4"><?php echo ${"clubA".$i}.$i;?></td>
      <td class="coin4GA"><?php	echo ${"A".$i};?></td>
  </tr>
 <tr>
    <td class="equipe4"> <?php echo ${"clubA".($j)}.($i+1);?></td>
   	<td class="coin4GA"><?php echo ${"A".($j)};?> </td>
  </tr>
  <tr>
  <td class="equipe5"><?php echo ${"clubA".($i+2)};?></td>
      <td class="coin5GA"><?php echo ${"A".($i+2)};?></td>
  </tr>
 <tr>
    <td class="equipe5"> <?php echo ${"clubA".($j+2)};?></td>
   	<td class="coin5GA"><?php echo ${"A".($j+2)};?> </td>
  </tr>
 <tr>
    <td ></br></td>
  </tr>
  <?php
 
}
?>
 </table >
<br />