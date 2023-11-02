
 <?php 

 require '../../phases_finales2019/fonctionsChampFrance2019.php';  
 require '../../connect/connexion5.php';
 nomDivision($division);
  
 require '../../connect/connexion1.php';
 //date2019($division, $annee, $bdd);
 trenteDeuxieme2019 (115, $annee, $bdd);
 //traitementScores (1001, 1002);
echo $annee;  echo "<br>";
echo $type;  echo "<br>";
echo $division; echo "<br>";
?>
<table width="90%"  border="1" align="center" height="59">
  <tr> 
    <td class="titre">Barrage d'Accession au Top 14<br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D0ME; ?></strong></i></b></font></div>
	</td>
  </tr>
</table>
<br />
<table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2"><?php //echo $D0ME;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1001;?></td>
    <td class="coin5pts"><?php echo $A1001;?></td>
  </tr>
  <tr> 
    <td class="coin5"><?php echo $clubA1002;?></td>
    <td class="coin5pts"><?php echo $A1002;?></td>
  </tr>
  <tr>
   <td colspan="2" height="25"></td>
  </tr>
</table>

