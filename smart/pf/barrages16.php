   <?php 
 //  echo $division;echo "<br/>";
/***********Valeurs à modifier *****************/
 
  $matchMinimum = 1;
  $matchMaximum = 16;
  $NbreEquipeEngage = 32;
  $CodeEquipeMini= 1601;
  $codeEquipeMax= 1600 + $NbreEquipeEngage;
  
 /**********************************************/ 
 
  
  
  require '../../connect/connexion1.php';
  
//date2019($division, $annee, $bdd);
 
	$tabCodeBarrage= array();
	$tabNomEquipes = array();
	$tabCobeLigue = array();
	$clubA="clubA";
	
	for ($i=1 ; $i<=$NbreEquipeEngage; $i++)
	{	 
	if ($i<10) 	$E="E0"; else 	$E="E";
	$equipes = $E.$i;
	//echo $equipes."<br/>";;
	$reponse = $bdd->query("	
				SELECT bdclubs.id, bdclubs.nom_1,ligue
				FROM bdclubs, bdpffrance
				WHERE bdclubs.id=bdpffrance.$equipes
				AND bdpffrance.id= '$division' AND bdpffrance.saison = '$annee'"); 
										
	 while ($row = $reponse->fetch() )
		{ 
		$tabCodeBarrage[] = $row[0];
		$tabNomEquipes[] = $row[1];
		$tabCobeLigue[] = $row[2];
		}
		
	}
	// Code ligue en literal
	
	$tabNomLigue = array();
	for ($i=0 ; $i<=$NbreEquipeEngage-1; $i++)
	{
	 $reponse = $bdd->query("	
					SELECT sigle 
					FROM bdligue 
					WHERE id='$tabCobeLigue[$i]'"); 
										
		 while ($row = $reponse->fetch())
			{  $tabNomLigue[] = $row[0];}	
	}
	
	for ($i=0, $j=$CodeEquipeMini ; $i<=$NbreEquipeEngage-1, $j<= $codeEquipeMax; $i++, $j++)
	{
	if ($tabNomLigue[$i] != "-")
	${$clubA.($j)} = $tabNomEquipes[$i]." (".$tabNomLigue[$i].")";
	else
	${$clubA.($j)} = $tabNomEquipes[$i];
	//echo ${$clubA.($j)};
	//echo  "(".$tabNomLigue[$i].")";
	//echo "<br/>";
	} 
	
	
	/***************************************/
	/**                                   **/
	/**    récuperation des scores        **/
	/**                                   **/
	/***************************************/
	$tabScores = array();
	
	for ($i=$CodeEquipeMini ; $i<= $codeEquipeMax; $i++){	
	 $scores = "A".''.$i;
	// echo $scores; echo "<br/>";
	 $reponse = $bdd->query("SELECT $scores
							 FROM bdpffrance_2
							 WHERE  id='$division' AND saison='$annee'"); 
		
	while ($row = $reponse->fetch() ){ 
			$tabScores[] = $row[0];
		}
	
	}
	$A ="A";
	for ($i=$CodeEquipeMini, $j=0; $i<=$codeEquipeMax, $j<= $NbreEquipeEngage-1; $i++, $j++)
	{
	
	${$A.($i)} = $tabScores[$j];
	//echo ${$A.($i)};
	//echo "<br/>";
	} 
	
	  
//traitementScores (1601, 1632);
	
	
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
for ($num = 1, $i=1601, $j= 1603; $num <= 16, $i <= 1632 , $j <1633 ; $num=$num+2, $i = $i+4, $j=$j+4)
 // for ($num = 1, $i=1601; $num <= 16, $i <= 1632 ; $num=$num+2, $i = $i+4, $j = $j+4)
{
?>
<tr>
	<!--<td rowspan="2" width="6" class="numero"><?php echo $num;?></td>-->
	
    <td class="equipe4"><?php echo ${"clubA".$i}.$i;?></td>
      <td class="coin4GA"><?php	echo ${"A".$i};?></td>
  </tr>
 <tr>
    <td class="equipe4"> <?php echo ${"clubA".($i+1)}.($i+1);?></td>
   	<td class="coin4GA"><?php echo ${"A".($i+1)};?> </td>
  </tr>
  <tr>
  <td class="equipe5"><?php echo ${"clubA".$j}.$j;?></td>
      <td class="coin5GA"><?php	echo ${"A".$j};?></td>
  </tr>
 <tr>
    <td class="equipe5"> <?php echo ${"clubA".($j+1)}.($j+1);?></td>
   	<td class="coin5GA"><?php echo ${"A".($j+1)};?> </td>
  </tr>
 <tr>
    <td ></br></td>
  </tr>
  <?php
 
}
?>
  
  
  
  
  
  
  
  <tr> 
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1601;?></td>
    <td class="coin4GA"><?php echo $A1601;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1602;?></td>
    <td class="coin4GA"><?php echo $A1602;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1603;?></td>
    <td class="coin5GA"><?php echo $A1603;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1604;?></td>
    <td class="coin5GA"><?php echo $A1604;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1605;?></td>
    <td class="coin4GA"><?php echo $A1605;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1606;?></td>
    <td class="coin4GA"><?php echo $A1606;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1607;?></td>
    <td class="coin5GA"><?php echo $A1607;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1608;?></td>
    <td class="coin5GA"><?php echo $A1608;?></td>
  </tr>
  </table>
 
 <p align="center"><?php	include ("../../pub/pub20.php");?></p>
  
  <table width="90%" border="0" align="center">
  <tr> 
    <td class="equipe4"><?php echo $clubA1609;?></td>
    <td class="coin4GA"><?php echo $A1609;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1610;?></td>
    <td class="coin4GA"><?php echo $A1610;?></td>
  </tr>
   <tr> 
    <td class="equipe5"><?php echo $clubA1611;?></td>
    <td class="coin5GA"><?php echo $A1611;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1612;?> </td>
    <td class="coin5GA"><?php echo $A1612;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1613;?></td>
    <td class="coin4GA"><?php echo $A1613;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1614;?></td>
    <td class="coin4GA"><?php echo $A1614;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1615;?></td>
    <td class="coin5GA"><?php echo $A1615;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1616;?></td>
    <td class="coin5GA"><?php echo $A1616;?></td>
  </tr>
  </table >
  
  <p align="center"><?php	include ("../../pub/pub20.php");?></p>
  
    <table width="90%" border="0" align="center">
   <tr> 
    <td class="equipe5"><?php echo $clubA1617;?></td>
    <td class="coin5GA"><?php echo $A1617;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1618;?> </td>
    <td class="coin5GA"><?php echo $A1618;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1619;?></td>
    <td class="coin4GA"><?php echo $A1619;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1620;?></td>
    <td class="coin4GA"><?php echo $A1620;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1621;?></td>
    <td class="coin5GA"><?php echo $A1621;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1622;?></td>
    <td class="coin5GA"><?php echo $A1622;?></td>
  </tr>
  </table >
  
  <p align="center"><?php	include ("../../pub/pub20.php");?></p>
  
    <table width="90%" border="0" align="center">
   <tr> 
    <td class="equipe5"><?php echo $clubA1623;?></td>
    <td class="coin5GA"><?php echo $A1623;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1624;?> </td>
    <td class="coin5GA"><?php echo $A1624;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1625;?></td>
    <td class="coin4GA"><?php echo $A1625;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1626;?></td>
    <td class="coin4GA"><?php echo $A1626;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1627;?></td>
    <td class="coin5GA"><?php echo $A1627;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1628;?></td>
    <td class="coin5GA"><?php echo $A1628;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1629;?></td>
    <td class="coin4GA"><?php echo $A1629;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA1630;?></td>
    <td class="coin4GA"><?php echo $A1630;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1631;?></td>
    <td class="coin5GA"><?php echo $A1631;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA1632;?></td>
    <td class="coin5GA"><?php echo $A1632;?></td>
  </tr>

 
 </table >
  

<br />