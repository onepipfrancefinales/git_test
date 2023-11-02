  <?php 


 // echo $division; echo "<br/>";
/***********Valeurs à modifier *****************/
 
  $matchMinimum = 1;
  $matchMaximum = 4;
  $NbreEquipeEngage = 8;
  $CodeEquipeMini= 4001;
  $codeEquipeMax= 4000 + $NbreEquipeEngage; 
  
 /**********************************************/ 
 

  
  require '../../connect/connexion1.php';
  

	date2019($division, $annee, $bdd);

 
	$tabCodeBarrage= array();
	$tabNomEquipes = array();
	$tabCobeLigue = array();
	$clubA="clubA";
	
	for ($i=1 ; $i<=$NbreEquipeEngage; $i++)
	{	 
	if ($i<10) 	$E="E0"; else 	$E="E";
	$equipes = $E.$i;
	//echo $equipes;
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
	
	traitementScores (4001, 4008);
 ?>
  <table width="90%" border="1" align="center">
    <tr> 
      <td class="titre"> Barrages <br /><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong><?php echo $D64ME; ?></strong></i></b></font></div></td>
    </tr>
  </table>
  <table width="90%" border="0" align="center">
  <tr> 
    <td colspan="2"><?php //echo $texteDivision;?></td>
  </tr>
  <tr> 
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA4001;?></td>
    <td class="coin4GA"><?php echo $A4001;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA4002;?></td>
    <td class="coin4GA"><?php echo $A4002;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA4003;?></td>
    <td class="coin5GA"><?php echo $A4003;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA4004;?></td>
    <td class="coin5GA"><?php echo $A4004;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA4005;?></td>
    <td class="coin4GA"><?php echo $A4005;?></td>
  </tr>
  <tr> 
    <td class="equipe4"><?php echo $clubA4006;?></td>
    <td class="coin4GA"><?php echo $A4006;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA4007;?></td>
    <td class="coin5GA"><?php echo $A4007;?></td>
  </tr>
  <tr> 
    <td class="equipe5"><?php echo $clubA4008;?></td>
    <td class="coin5GA"><?php echo $A4008;?></td>
  </tr>
  </table>
<br />