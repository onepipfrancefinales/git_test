<p class="size5 styelArial bold center"><?php echo $countVilles ;?> villes<br></p>


<br><br>

<!--------------------------------------->

<table width="970" class="borderWidth1 marginAuto">
  <tr class="backgroundBlue   colorWhite bold"> 
    <td height="41" width="200" class="borderWidth1">Villes</td>
    <td height="41" width="169" class="borderWidth1"> Nombre de finales accueillies </td>
    <td height="41" width="369" class="borderWidth1">Editions</td>
    <td height="41" width="300" class="borderWidth1">Stades</td>
  </tr>
  <?php for ($i=0; $i< $countVilles ; $i++) { ?>
  <tr> 
    <td class="borderWidth1"><?php echo $listeVilles[$i];?></td>
    <td class="borderWidth1"><?php finalesParVille($listeVilles[$i], $bdd);?></td>
    <td class="borderWidth1"><?php //echo $listeVilles[$i];?></td>
    <td class="borderWidth1"> <?php countStadesParVille($listeVilles[$i], $bdd);stadesParVille($listeVilles[$i], $countStadesParVille, $bdd);?></td>
  </tr>
  <?php
 }
 ?>
</table>

<br><br>