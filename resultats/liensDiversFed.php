<?php 
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
    <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
      <h4><a
 href="https://francefinalesrugby.fr/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $saison;?>"
 target="_top"><font color="#FFFFFF">Phase finale du<br>
        championnat de France</font></a></h4>
    </td>
    <td class="bleuClair"> <a href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>">Palmar&egrave;s 
      <?php echo $equipe1;?>
      </a> </td>
  </tr>
  <tr bordercolor="#009966"> 
    <td class="bleuClair"> <a href="https://francefinalesrugby.fr/palmares/palmNational/pagePalmares.php?division=<?php echo $division+100; ?>">Palmar&egrave;s <?php echo $equipe2; ?></a> </td>
  </tr>
</table>

