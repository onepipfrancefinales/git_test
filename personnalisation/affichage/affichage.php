
<font face="Arial, Helvetica, sans-serif" align="left"  color="#000000" size="4">
<?php echo "Bienvenue".' '.$_SESSION['login'];?>
 </font>
<table align="center" border="0" width="500"> 
<tbody><tr>
<td class="bienvenue" colspan="2"> 
<font face="Arial, Helvetica, sans-serif"> <font color="#666666" size="2"><i>(Pour r&eacute;aliser
votre selection cliquez sur Modifier)</i></font></font>
</td>
</tr> <tr> <td class="user" width="242">
<a href="../admin/pageChoix.php?comiteA=phppro#zone2">Modifier ma s&eacute;lection</a>
</td> 
<td class="user" width="248">
<a href="../admin/logout.php">D&eacute;connection</a>
</td>
</tr></tbody></table><br>
<br>
<?php 
global $numero; 
for ($nbreDeChoix=1; $nbreDeChoix < 6 ; $nbreDeChoix++)
	{ $numero= $nbreDeChoix; 
		// echo "choix n ".''.$numero;
		$comiteA= "comite".''.$numero;
		 $divisionA= "division".''.$numero;
		 $typeA= "type".''.$numero;
		 $tailleA="taille".''.$numero; ?>
		 
<?php $id=$_SESSION['id']; 
include ("../../connection5.php");
$query = " SELECT p.$comiteA, p.$divisionA, p.$typeA, c.nom, d.division, p.$tailleA 
			FROM personnel p 
			INNER JOIN comite c ON c.phpcomite = p.$comiteA 
			INNER JOIN divisions d ON d.id = p.$divisionA 
			WHERE p.id=$id "; 
				$result = mysql_query($query); 
				while ($row = mysql_fetch_array($result))
					{ 
					$comite= $row[0]; 
					$id= $row[1];
					$type=$row[2]; 
					$comiteEntier=$row[3];
					$division=$row[4];
					$taille= $row[5];; 
					
					
		// prise en compte des competition de federales		
					//if ($id <120)
					//	$taille=$taille-500;
					// elseif ($id <140)
					//	$taille=$taille-300;
						if ($id == 280)
						$taille=450;
						elseif ($id == 285)
						$taille=350;
						elseif ($id == 286)
						$taille=350;
						
						elseif ($id <160)
						$taille=470;
						
						
						
						elseif ($id <170)
						$taille=450;
				
				
					//	echo "-comite= ".''.$comite; 
					//	echo "-id= ".''.$id; 
					//	echo "-type= ".''.$type; 
					//	echo "-comite= ".''.$comiteEntier; 
					//	echo "-division= ".''.$division; 
					//	echo "-taille==== ".''.$taille; 
?>
						
	<?php //************** affichage du championnat R�serve ou non ************************* 
						if ($type==2) 
							{ 
							require ("typeDouble.php"); 
							} 
						else
							{
								require ("typeSimple.php"); 
							} 
					}
		} 
		
mysql_close();
?> 
</body></html>