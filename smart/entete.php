<?php 
 require ("../../connect/connexion5.php");

 //Nom du comité

	$reponse = $bdd->query(" SELECT nomLigue
							 FROM comite
							 WHERE comite='$comite'");
	
										while ($row = $reponse->fetch() )
											{                 	
											$ligueToutesLettres=$row[0];
											}
								//echo $ligueToutesLettres;
								
//*************  Recherche de la Division  *********************
//$division3 = substr($division,3,6);

$reponse = $bdd->query("	SELECT division
								FROM divisions
								WHERE id= substr('$division' ,3,6)");
									while ($row = $reponse->fetch() )
											{                 	
											$nomDivision2=$row[0];
											}
							//	echo $nomDivision2;
																					
?>
<table class="width100PC borderWidth1">
  <tr> 
     <td width= "5%" class="h22" height="20"><a href="../sommaire.php"><img class="width27 height20" src="../../images/smart/flecheGauche.jpg" ></a></td>
	<td  class="h22  width95PC" height="20"> France Finales Rugby </td>
    </td>
  </tr>
  <tr> 
    <td colspan="2" colspan="2" height="2" 
      class="titre backgroundWhite"> Ligue  <?php echo $ligueToutesLettres ;?>
        <br>
        <?php echo $nomDivision2;?> <?php echo $annee;?>
        
    </td>
  </tr>
</table>

