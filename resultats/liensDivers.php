<?php
if ($cmt == "fem")
{
?>
<table align ="center" border="3" border color="#000000" cellpadding="0" cellspacing="0" width="550">
   <tr class="fond" >
    <td rowspan="3"  valign="middle" width="303"> 
      <h4><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $annee;?>"		target="_top"><font color="#FFFFFF">Phases finales <br /> Championnat de France</font></a></h4></td>
    <td class="tabHautDroit" height="25"><a href="/palmares/palmNational/pagePalmares.php?division=280" target="_top">Palmar&egrave;s Elite 1</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit" height="25"><a href="/palmares/palmNational/pagePalmares.php?division=285" target="_top">Palmar&egrave;s Elite2</a></td>
  </tr>
  <tr class="fond" valign="middle">     
	<td class="tabHautDroit" height="25"><a href="/palmares/palmNational/pagePalmares.php?division=290" target="_top">Palmar&egrave;s F&eacute;d&eacute;rale 1</a></td>
	</tr>
</table>	
<?php	
}
elseif ($cmt =="pro")
{
?>	
<table align ="center" border="3" border color="#000000" cellpadding="0" cellspacing="0" width="550">
   <tr class="fond" >
    <td   rowspan="3"  valign="middle" width="303"> 
      <h4><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=110&annee=<?php echo $finSaison;?>"
		target="_top"><font color="#FFFFFF">Phases finales <br /> Championnat de France</font></a></h4></td>
    <td class="tabHautDroit"> <a href="/palmares/palmNational/pagePalmares.php?division=110" target="_top">Palmar&egrave;s Top 14</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit" height="25"> <a href="/palmares/palmNational/pagePalmares.php?division=120" target="_top">Palmar&egrave;s Pro D2</a></td>
  </tr>
  <tr class="fond" valign="middle">     
	<td class="tabHautDroit" height="25"> <a href="/palmares/palmNational/pagePalmares.php?division=130" target="_top">Palmar&egrave;s Nationale</a></td>
	</tr>
</table>	
<?php	
}
elseif($cmt == "f1" OR $cmt == "fed2" OR $cmt == "fed3NE" OR $cmt == "fed3GS")
{
 
 if ($division == 140)
	{
	$equipe1 = "F&eacute;d&eacute;rale 1";
	$equipe2 = "Espoir";
	}
 elseif ($division == 150)
	{
	$equipe1 = "F&eacute;d&eacute;rale 2";
	$equipe2 = "F&eacute;d&eacute;rale B";
	}
 elseif ($division == 160)
	{
	$equipe1 = "F&eacute;d&eacute;rale 3";
	$equipe2 = "Excellence B";
	}
	?>

<table width="650" border="3" cellspacing="0" border color="#000000" align="center" cellpadding="0">
  <tr border color="#009966"> 
    <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" border color="#006699"> 
      <h4><a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $finSaison;?>"
 target="_top"><font color="#FFFFFF">Phase finale du<br>
        championnat de France</font></a></h4>
    </td>
    <td class="bleuClair"> <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>">Palmar&egrave;s 
      <?php echo $equipe1;?>
      </a> </td>
  </tr>
  <tr border color="#009966"> 
    <td class="bleuClair"> <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division+100; ?>">Palmar&egrave;s <?php echo $equipe2; ?></a> </td>
  </tr>
</table>	
<?php	
}
else
{
	$division = ($champLigue*10000) + 170;
?>
<table align ="center" border="3" border color="#000000" cellpadding="0" cellspacing="0" width="550">
   <tr class="fond" >
    <td   rowspan="2"  valign="middle" width="303"> 
      <h4><a href="/phasesfinalesterr/affichageFinalesTerr/pageAffichage.php?page=HPHS1&comite=<?php echo $cmt;?>&annee=<?php echo $finSaison;?>&division=<?php echo $division;?>"
		target="_top"><font color="#FFFFFF">Phases finales r&eacute;gionales</font></a></h4></td>
    <td class="tabHautDroit"> <a href="/palmares/palmTerritorial/tableauPalmReg.php?sigleLigue=<?php echo $sigleLigue;?>"
		target="_top">Palmar&egrave;s r&eacute;gional</a></td>
  </tr>
  <tr> 
    <td class="tabHautDroit" height="25"> <a href="../consultation/page_ligue.php?idLigue=<?php echo $champLigue;?>"
		target="_top">Acc&egrave;s aux infos de la ligue</a></td>
  </tr>
  <tr class="fond" valign="middle">     
	<td class="phasesFinales" colspan="2"> 
    <h4>  <a href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=170&annee=<?php echo $finSaison;?>"
		target="_top"><font color="#FFFFFF">Championnat de France</font></a><h4></td>
  </tr>
</table>	
<?php	
}
?>