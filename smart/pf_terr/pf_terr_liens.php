<?php if ($annee>2022){
?>
<table width="95%" border="0" align="center" >
  <tr> 
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0170';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 1</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 2</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0190';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Régionale 3</a></td>
    </tr>
<tr> 	
	<td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0270';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Réserve Rég 1 </a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'9180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">Réserve Rég 2</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0220';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>"> - </a></td>
  </tr>
  
</table>
<?php
}
else
{
	?>
<table width="95%" border="0" align="center" >
  <tr> 
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0170';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">H</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">PH</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0190';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">1S</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0200';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">2S</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0210';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">3S</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0220';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">4S</a></td>
  </tr>
  <tr> 
    <td class="coin8"><font size="1">R&eacute;serve</font></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'0270';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">H</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'9180';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">PH</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'9190';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">1S</a></td>
    <td class="coin8"><a href="../pf_terr/phase_finale.php?division=<?php echo substr($division,0,2).'9200';?>&annee=<?php echo $annee; ?>&bddComite=<?php echo $bddComite;?>&comite=<?php echo $comite;?>">2S</a></td>
    <td class="coin8"><font size="2">-</font></div>  
  </tr>
</table>

<?php
}
?>