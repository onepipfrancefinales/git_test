
<?php
/*
$bdcomite=("php".''.$comite.''."_joueurs");
$bdfeuilleB=("php".''.$comite.''."_feuilleB");



	
	$reponse = $bdd->query("SELECT connectInvitee, comiteInvite
				FROM $bdfeuilleB 
				WHERE id=$code_match");
							//$result = mysql_query($requete) or die(mysql_error());
							while ($donnees = $reponse->fetch() )
							{    
							$connectEquipeInvitee ="$row[0]";
							$comiteEquipeInvitee ="$row[1]";
							}
//	echo $connectEquipeInvitee;						
//	echo $comiteEquipeInvitee;						
			
	if ($equipe == $equipeA)
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
			
		//	echo $connectA;
		//	echo $comiteA;
		//	echo $connectB;
		//	echo $comiteB;


// ******** Saisie des données collectées,  dans la base de données
if (isset ($_GET['doubleBase'])) $doubleBase = $_GET['doubleBase'];else $doubleBase = "";
 
 if ($doubleBase == 0)
		{
	
		 $sql = "UPDATE $bdfeuilleB
			  SET  responsable='$responsable'
			  WHERE id = $code_match ";
			  
		$requete = mysql_query( $sql );
	   
	  
	   
	   $req = $bdd->prepare("UPDATE $bdfeuilleB
							 SET 
							 responsable =:responsable,

							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'responsable' => $responsable,

							'code_match' => $code_match

						));		

	   
	   }
	   
	
 else
	 	{ 
	  
	  		if ($equipe==$equipeA)
			{
			$terrain = "dom";
			require ("../../../$connectA.php");	
			$bdfeuilleA = "php".''.$comiteA.''."_feuilleB";
			


			$sql = "UPDATE $bdfeuilleB
				 SET  responsable='$responsable'
				 WHERE id = $code_match" ;
		 
		  		$requete = mysql_query( $sql )   ;
			
			
			
			   $req = $bdd->prepare("UPDATE $bdfeuilleB
							 SET 
							 responsable =:responsable,

							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'responsable' => $responsable,

							'code_match' => $code_match

						));		
			
			
			
			
			}
			else
			{
			
			$terrain = "ext";
			require ("../../../$connectB.php");	
			
			
			$bdfeuilleB = "php".''.$comiteB.''."_feuilleB";
			
			
			
			 $sql = "UPDATE $bdfeuilleB
				 SET  responsable='$responsable'
				 WHERE id = $code_match" ;
		 
		  		$requete = mysql_query( $sql )   ;
			
			
			
			
			
			   $req = $bdd->prepare("UPDATE $bdfeuilleB
							 SET 
							 responsable =:responsable,

							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'responsable' => $responsable,

							'code_match' => $code_match

						));		
			
			
			
			}

}
*/
?>

<body bgcolor="#FFFFFF" text="#000000">
<table width="900" border="0">
  <tr>
    <td>
      <div align="center"><b><font face="Arial, Helvetica, sans-serif">VISAS DES 
        REDACTION DE LA FEUILLE DE MATCH AVANT LE COUP D'ENVOI</font></b></div>
    </td>
  </tr>
</table>
<table width="900" border="1" cellspacing="0" cellpadding="0">
  <tr bordercolor="#000000"> 
    <td width="208" height="24"> 
      <div class="TailleGauche"> Nom : </div>
    </td>
    <td width="156" height="24"> 
      <div class="TailleGauche"> Pr&eacute;nom </div>
    </td>
    <td width="182" height="24"> 
      <div class="TailleGauche"> Nom: <span class="Taillebold">
        <?php echo $nomResponsableB; ?>
        </span> </div>
    </td>
    <td width="219" height="24"> 
      <div class="TailleGauche"> Pr&eacute;nom : <span class="Taillebold">
        <?php  echo ucfirst(strtolower($prenomResponsableB));?></span>
      </div>
    </td>
  </tr>
  <tr bordercolor="#000000"> 
    <td colspan="2" height="24"> 
      <div class="TailleGauche"> Fonction : </div>
    </td>
    <td colspan="2" height="24"> 
      <div class="TailleGauche"> Fonction : </div>
    </td>
  </tr>
  <tr bordercolor="#000000"> 
    <td width="208" height="24"> 
      <div class="Taille"> signature : <br>
      </div>
    </td>
    <td width="156" height="24" valign="top"> 
      <div class="TailleGauche"> N&deg;licence : </div>
    </td>
    <td width="182" height="24" valign="top"> 
      <div class="TailleGauche"> signature : </div>
    </td>
    <td width="219" height="24" valign="top"> 
      <div class="TailleGauche"> N&deg;licence : 
       <?php echo substr($licenceResponsableB,0,4).' '.substr($licenceResponsableB,4,2).' '.substr($licenceResponsableB,6,1).' '.substr($licenceResponsableB,-6);?>
      </div>
    </td>
  </tr>
</table>
