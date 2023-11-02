


<?php// $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php/// $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>

<?php
/*
	 //require ("../../../$connect.php");	
	$requete = "SELECT connectInvitee, comiteInvite
				FROM $bdfeuilleA 
				WHERE id=$code_match";
							$result = mysql_query($requete) or die(mysql_error());
							while($row = mysql_fetch_array($result))
							{    
							$connectEquipeInvitee ="$row[0]";
							$comiteEquipeInvitee ="$row[1]";
							}
//	echo $connectEquipeInvitee;						
//	echo $comiteEquipeInvitee;						
			
	if ($equipe == $equipeA or $equipe == $equipeA - 90000000 )
			{
			$connectA = $connect;
			$comiteA = $comite;
			$connectB = $connectEquipeInvitee;
			$comiteB = $comiteEquipeInvitee;
			}
		else
			{
			$connectB = $connect;
			$comiteB = $comite;
			$connectA = $connectEquipeInvitee;
			$comiteA = $comiteEquipeInvitee;
			}
			
			//echo $connectA;
			//echo $comiteA;
			//echo $connectB;
			//echo $comiteB;

 $doubleBase = $_GET['doubleBase'];
 
 if ($doubleBase == 0)
 	{
	 $sql = "UPDATE $bdfeuilleA
         SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
		 WHERE id = $code_match" ;
 
  	//exécution de la requête SQL:
  	$requete = mysql_query( $sql ) ;
 	}
 else
	 { 
	if ($equipe==$equipeA)
		{
			$terrain="dom";
			require ("../../../$connectA.php");	
			$bdfeuilleA = "php".''.$comiteA.''."_feuilleA";
		 	$sql = "UPDATE $bdfeuilleA
			 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
			 WHERE id = $code_match" ;
	 
	  		$requete = mysql_query( $sql )   ;
		
 
			require ("../../../$connectB.php");	
			$bdfeuilleA = "php".''.$comiteB.''."_feuilleA";
			$sql2 = "UPDATE $bdfeuilleA
			 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
			 WHERE id = $code_match" ;
	 
			//$requete = mysql_query( $sql2 )   ;
 		}
		else
		{
			$terrain="ext";
			require ("../../../$connectB.php");	
			$bdfeuilleB = "php".''.$comiteB.''."_feuilleB";
		 	$sql = "UPDATE $bdfeuilleB
			 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
			 WHERE id = $code_match" ;
	 
	  		$requete = mysql_query( $sql )   ;
		
 
			require ("../../../$connectA.php");	
			$bdfeuilleB = "php".''.$comiteA.''."_feuilleB";
			$sql2 = "UPDATE $bdfeuilleB
			 SET  entraineur='$entraineur',entraineur2='$entraineur2',soigneur='$soigneur',adjoint='$adjoint',medecin='$medecin',prepa='$prepa'
			 WHERE id = $code_match" ;
 
    	//	$requete = mysql_query( $sql2 )   ;
 		}
 
 } 
  
  
 */
?>


<table width="900" border="1" cellspacing="0">
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td width="99"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">A</font></b></div>
    </td>
    <td width="197"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="133" bgcolor="#CCCCCC"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
    <td width="103"> 
      <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">B</font></b></div>
    </td>
    <td width="218"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
        <font size="1">(lettres capitales)<font size="2"> et Pr&eacute;nom</font></font></font></b></div>
    </td>
    <td width="124" bgcolor="#CCCCCC"> 
      <div align="center"><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
        licence</font></b></div>
    </td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td rowspan="2" height="48" width="99"> 
      <div id="Taille">Entraineur(s)</div>
    </td>
    <td width="197" height="23"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur.' '.ucfirst(strtolower($prenomEntraineur));?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="23"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur,0,4).' '.substr($licenceEntraineur,4,2).' '.substr($licenceEntraineur,6,1).' '.substr($licenceEntraineur,-6);?>
      </div>
    </td>
    <td rowspan="2" height="48" width="103"> 
      <div id="Taille"> Entraineur(s)</div>
    </td>
    <td width="218" height="23">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="23">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td width="197" height="24"> 
      <div class="Taillebold"> 
        <?php   echo $nomEntraineur2.' '.ucfirst(strtolower($prenomEntraineur2));?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceEntraineur2,0,4).' '.substr($licenceEntraineur2,4,2).' '.substr($licenceEntraineur2,6,1).' '.substr($licenceEntraineur2,-6);?>
      </div>
    </td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td width="99" height="24"> 
      <div id="Taille">Soigneur</div>
    </td>
    <td width="197" height="24"> 
      <div class="Taillebold"> 
        <?php   echo $nomSoigneur.' '.ucfirst(strtolower($prenomSoigneur));?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceSoigneur,0,4).' '.substr($licenceSoigneur,4,2).' '.substr($licenceSoigneur,6,1).' '.substr($licenceSoigneur,-6);?>
      </div>
    </td>
    <td width="103" height="24"> 
      <div id="Taille"> Soigneur </div>
    </td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td width="99" height="24"> 
      <div id="Taille"> Adjoint terrain </div>
    </td>
    <td width="197" height="24"> 
      <div class="Taillebold"> 
        <?php   echo $nomAdjoint.' '.ucfirst(strtolower($prenomAdjoint));?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="24"> 
      <div class="Taille"> 
        <?php  echo substr($licenceAdjoint,0,4).' '.substr($licenceAdjoint,4,2).' '.substr($licenceAdjoint,6,1).' '.substr($licenceAdjoint,-6);?>
      </div>
    </td>
    <td width="103" height="24"> 
      <div id="Taille"> Adjoint terrain</div>
    </td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td width="99" height="5"> 
      <div id="Taille"> M&eacute;decin* </div>
    </td>
    <td width="197" height="5"> 
      <div class="Taillebold"> 
        <?php echo $nomMedecin.' '.ucfirst(strtolower($prenomMedecin)); ?>
      </div>
    </td>
    <td width="133" bgcolor="#CCCCCC" height="5"> 
      <div class="Taille"> 
        <?php  echo substr($licenceMedecin,0,4).' '.substr($licenceMedecin,4,2).' '.substr($licenceMedecin,6,1).' '.substr($licenceMedecin,-6);?>
      </div>
    </td>
    <td width="103" height="5"> 
      <div id="Taille"> M&eacute;decin </div>
    </td>
    <td width="218" height="5">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="5">&nbsp;</td>
  </tr>
</table>
<table width="900" border="0" cellspacing="0">
  <tr valign="middle" align="center" bordercolor="#000000">
    <td height="24" valign="top"><font size="2">* En cas de non-pr&eacute;sence 
      physique d'un m&eacute;decin, porter les coordonn&eacute;es t&eacute;l&eacute;phoniques 
      du m&eacute;decin de garde : .......................................................</font></td>
  </tr>
  <tr valign="middle" align="center" bordercolor="#000000"> 
    <td height="24"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="#000000" size="3">PREPARAREUR 
      PHYSIQUE (1DF, 2DF, 3DF, Top 8, Armelle Auclair uniquement)</font></b></font></td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0">
  <tr valign="middle" align="center" bordercolor="#000000"> 
    	<td width="99" height="24">
			<div id="Taille"> 
				Equipe  A 
			</div>
		</td>
    <td width="193" height="24"> 
      <div class="Taillebold"> 
        <?php echo $nomPrepa.' '.ucfirst(strtolower($prenomPrepa)); ?>
      </div>
    </td>
    <td width="137" bgcolor="#CCCCCC" height="24"> 
      <div class="Taille"> 
			<?php echo substr($licencePrepa,0,4).' '.substr($licencePrepa,4,2).' '.substr($licencePrepa,6,1).' '.substr($licencePrepa,-6);?>
      </div>
    </td>
    <td width="103" height="24">
		<div id="Taille"> 
			Equipe B 
		</div>
	</td>
    <td width="218" height="24">&nbsp;</td>
    <td width="124" bgcolor="#CCCCCC" height="24">&nbsp;</td>
  </tr>
</table>

