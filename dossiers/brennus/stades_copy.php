<p class="size5 styelArial bold center"><?php echo $countStades ;?> Enceintes sportives -<?php echo $countVilles ;?> villes<br></p>
<table width="917" class="borderWidth1 marginAuto" >
  <tr class="backgroundBlue colorWhite bold"> 
    <td class="center" width="230"> Stades </td>
    <td class="center" width="98"> Lieux </td>
    <td class="center" width="98"> Nombre de finales accueillies </td>
    <td class="center" width="157"> Editions </td>
    <td class="center" width="300"> Photos</td>
  </tr>
  
  <?php for ($i=0; $i< $countStades ; $i++) { ?>
  
  <tr class="borderWidth1"> 
    <td height="162" width="200" class="borderWidth1 marginAuto"><?php echo $nomStade[$i]."<br>".$com[$i]; ?> </td>
    <td height="162" width="98" class="borderWidth1 marginAuto"><?php echo $nomVille[$i]; ?></td>
    <td height="162" width="78" class="borderWidth1 marginAuto"> <?php countSaisonsStade($i+1, $bdd); echo $countSaisonsStade; ?> </td>
    <td height="162" width="200" class="borderWidth1 marginAuto"><?php listeSaisonsStade($i+1, $countSaisonStade, $bdd); ?></td>
    <td height="162" width="300" class="borderWidth1 marginAuto"><img src="images/stades/<?php echo $i+1;?>.jpg" width="300" height="150"></td>
  </tr>
 <?php
 }
 ?>
</table>

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