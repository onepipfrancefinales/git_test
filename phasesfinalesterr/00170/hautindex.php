 <?php
 $comiteMaj=strtoupper($comite);
 $comiteMaj="(".''.$comiteMaj.''.")";
 ?>
<table >
  <tr > 
    <td class="vide"> <a href="http://francefinalesrugby.franceserv.com" target="_top">Accueil</a> 
    </td>
    <td class="entete" colspan="6" > PHASES FINALES TERRITORIALES COMITE 
      <?php echo strtoupper($comiteNom);?>
      <?php echo $saison;?>
    </td>
    <td class="vide"> <a href="mailto:francefinalesrugby@free.fr" >Contact</a> 
    </td>
  </tr>
  <tr > 
    <td class="equipeItitre"> Equipe I </td>
    <td class="equipeI" > <a href="pagehonneur.php?page=HPHS1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">Honneur</a> 
    </td>
    <td class="equipeI" > <a href="pagehonneur.php?page=HPHS1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">Promotion</a> 
    </td>
    <td class="equipeI" >
	 	<a href="pagehonneur.php?page=HPHS1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">1ére  Série</a> </td>
    <td class="equipeI" > 
		<a href="pagehonneur.php?page=S2S3S4&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">2i&egrave;meSérie</a> 
    </td>
    <td class="equipeI" >
		<a href="pagehonneur.php?page=S2S3S4&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">3i&egrave;meSérie</a> 
    </td>
    <td class="vide" colspan="2" > 
		<a href="http://francefinalesrugby.franceserv.com/palm_terr2tableau.php?variable_1=<?php echo $comiteMaj; ?>" target="_blank">Palmar&egrave;s territorial</a> </td>
 	 </tr>
  <tr > 
    <td class="equipeIItitre"   > Réserve </td>
    <td class="equipeII"  >
	 	<a href="pagehonneur.php?page=RRPHR1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">Réserve</a> 
    </td>
    <td class="equipeII"  > 
		<a href="pagehonneur.php?page=RRPHR1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">Promotion</a> 
    </td>
    <td class="equipeII" >
	 <a href="pagehonneur.php?page=RRPHR1&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">1re Série</a> </td>
    <td class="equipeII"  > 
      <div id="equipeII" ></div>
    </td>
    <td class="equipeI"  > 
	<a href="pagehonneur.php?page=S2S3S4&comite=<?php echo $comite;?>&variable_1=<?php echo $annee;?>" target="_top">4i&egrave;meSérie</a> 
    </td>
    <td  class="france" colspan="2" > 
	<a href="http://francefinalesrugby.franceserv.com/phases_finales/honneur/pagehonneur.php?variable_1=<?php echo $annee;?>" target="_blank">Championnat 
      de France</a> </td>
  </tr>
</table>
