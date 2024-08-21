 <?php
 
 if (isset ($comiteNom)) $comiteNom = $comiteNom; else $comiteNom='-';
 if (isset ($ligueNom)) $ligueNom = $ligueNom; else $ligueNom='-';
 
 
 $comiteMaj=strtoupper($comite);
 $comiteMaj="(".''.$comiteMaj.''.")";
 ?> 
  <table>
    <tr > 
    <td class="vide"> <a href="/index.php" target="_top">Accueil</a> 
    </td>
    <td class="entete" colspan="6" > 
	<?php if ($annee < 2019 ) 
		{
		$organisation="PHASES FINALES TERRITORIALES COMITE";
		$comiteNom=$comiteNom;
		}
		else
		{
		$organisation="PHASES FINALES REGIONALES LIGUE";
		$comiteNom=$ligueNom;
		}
		?>
		<?php echo $organisation;?>
      <?php echo strtoupper($comiteNom);?>
      <?php echo $annee;?>
    </td>
    <td class="vide"> <a href="mailto:francefinalesrugby@free.fr" >Contact</a> 
    </td>
  </tr>
  <tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI" > 
		<a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=170" target="_top">Honneur</a> 
    </td>
    <td class="equipeI" > 
		<a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=180" target="_top">Promotion</a> 
    </td>
    <td class="equipeI" >
	 	<a href="pageAffichage.php?page=HPHS1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=190" target="_top">1ére  Série</a> </td>
    <td class="equipeI" > <a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=200" target="_top">2ièmeSérie</a>ee</td>
    <td class="equipeI" >
		<a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=210" target="_top">3ièmeSérie</a> 
    </td>
    <td class="vide" colspan="2" > <a href="/palmares/palmTerritorial/tableauPalmTerr.php?variable_1=<?php echo $comiteMaj; ?>" target="_top">Palmarès 
      territorial</a> </td>
 	 </tr>
  <tr > 
    <td class="equipeIItitre"   > Réserve </td>
    <td class="equipeII"  >
	 	<a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=270" target="_top">Réserve</a> 
    </td>
    <td class="equipeII"  > 
		<a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=9180" target="_top">Promotion</a> 
    </td>
    <td class="equipeII" >
	 <a href="pageAffichage.php?page=RRPHR1&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=9190" target="_top">1re Série</a> </td>
    <td class="equipeII"  > 
      
    </td>
    <td class="equipeI"  > 
	<a href="pageAffichage.php?page=S2S3S4&comite=<?php echo $comite;?>&annee=<?php echo $annee;?>&division=220" target="_top">4ièmeSérie</a> 
    </td>
    <td  class="france" colspan="2" > 
	<a href="/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $annee;?>" target="_blank">Championnat 
      de France</a> </td>
  </tr>
</table>
