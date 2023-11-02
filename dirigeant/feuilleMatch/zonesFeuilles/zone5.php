<?php
/*		
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
			
	if ($equipe == $equipeA OR $equipe == $equipeA -90000000)
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
*/
?>

<?php
/*
 $doubleBase = $_GET['doubleBase'];
 
 if ($doubleBase == 0)
 	{
	 $sql = "UPDATE $bdfeuilleA
         SET  responsable='$responsable'
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
			 SET  responsable='$responsable'
			 WHERE id = $code_match" ;
	 
	  		$requete = mysql_query( $sql )   ;
		
 
			require ("../../../$connectB.php");	
			$bdfeuilleA = "php".''.$comiteB.''."_feuilleA";
			$sql2 = "UPDATE $bdfeuilleA
			 SET  responsable='$responsable'
			 WHERE id = $code_match" ;
	 
			//$requete = mysql_query( $sql2 )   ;
 		}
		else
		{
			$terrain="ext";
			require ("../../../$connectB.php");	
			$bdfeuilleB = "php".''.$comiteB.''."_feuilleB";
		 	$sql = "UPDATE $bdfeuilleB
			 SET  responsable='$responsable'
			 WHERE id = $code_match" ;
	 
	  		$requete = mysql_query( $sql )   ;
		
 
			require ("../../../$connectA.php");	
			$bdfeuilleB = "php".''.$comiteA.''."_feuilleB";
			$sql2 = "UPDATE $bdfeuilleB
			 SET  responsable='$responsable'
			 WHERE id = $code_match" ;
 
    	//	$requete = mysql_query( $sql2 )   ;
 		}
 
 } 
  
*/  
 
?>

<table width="900" border="0">
  <tr>
    <td>
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">VISAS DES 
        REDACTION DE LA FEUILLE DE MATCH AVANT LE COUP D'ENVOI</font></b></div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr valign="middle" bordercolor="#000000"> 
    <td width="204" height="24"> 
      <div class="TailleGauche">Nom : <span class ="Taillebold">
			<?php	echo $nomResponsable;?></span>
       </div>
    </td>
    <td width="236" height="24"> 
      <div class="TailleGauche">Pr&eacute;nom : <span class ="Taillebold">
			<?php echo ucfirst(strtolower($prenomResponsable));?></span>
         </div>
    </td>
    <td width="210" height="24"> 
      <div class="TailleGauche">Nom:</div>
    </td>
    <td width="240" height="24"> 
      <div class="TailleGauche">Pr&eacute;nom</div>
    </td>
  </tr>
  <tr valign="middle" bordercolor="#000000"> 
    <td colspan="2" height="24"> 
      <div class="TailleGauche">Fonction : </div>
    </td>
    <td colspan="2" height="24"> 
      <div class="TailleGauche">Fonction : </div>
    </td>
  </tr>
  <tr valign="middle" bordercolor="#000000"> 
    <td width="204" height="24"> 
      <div class="TailleGauche">signature </div>
    </td>
    <td width="236" height="24"> 
      <div class="TailleGauche">N&deg;licence :    
		<?php  echo substr($licenceResponsable,0,4).' '.substr($licenceResponsable,4,2).' '.substr($licenceResponsable,6,1).' '.substr($licenceResponsable,-6);?>
	  </div>
    </td>
    <td width="210" height="24"> 
      <div class="TailleGauche">signature : </div>
    </td>
    <td width="240" height="24"> 
      <div class="TailleGauche">N&deg;licence : </div>
    </td>
  </tr>
</table>


