<p class="size5 styelArial bold center"><?php echo $countStades ;?> Enceintes sportives -</font> 
<font color="#000000" size="5" face="Arial, Helvetica, sans-serif"><?php echo $countVilles ;?> 
  villes</font></b><br>
</p>
<table width="917" border="1">
  <tr bgcolor="#0066CC"> 
    <td class="center" width="230"> Stades </td>
    <td class="center" width="98"> Lieux </td>
    <td class="center" width="98"> Nombre de finales accueillies </td>
    <td class="center" width="157"> Editions </td>
    <td class="center" width="300"> Photos</td>
  </tr>
  
  <?php for ($i=0; $i< $countStades ; $i++) { ?>
  
  <tr> 
    <td height="162" width="200"><?php echo $nomStade[$i]."<br>".$com[$i]; ?>
    </td>
    <td height="162" width="98"><?php echo $nomVille[$i]; ?></td>
    <td height="162" width="78"> 
    <?php countSaisonsStade($i+1, $bdd); echo $countSaisonsStade; ?>
    </td>
    <td height="162" width="200"><?php listeSaisonsStade($i+1, $countSaisonStade, $bdd); ?></td>
    <td height="162" width="300"><img src="images/stades/<?php echo $i+1;?>.jpg" width="300" height="150"></td>
  </tr>
 <?php
 }
 ?>
</table>

<br><br>

<!--------------------------------------->

<table width="970" border="1">

  <tr bgcolor="#0066CC"> 
    <td height="41" width="200">Villes</td>
    <td height="41" width="169"> Nombre de finales accueillies </td>
    <td height="41" width="369">Editions</td>
    <td height="41" width="300">Stades</td>
  </tr>
  <?php for ($i=0; $i< $countVilles ; $i++) { ?>
  <tr> 
    <td><?php echo $listeVilles[$i];?></td>
    <td><?php finalesParVille($listeVilles[$i], $bdd);?></td>
    <td><?php //echo $listeVilles[$i];?></td>
    <td> <?php countStadesParVille($listeVilles[$i], $bdd);stadesParVille($listeVilles[$i], $countStadesParVille, $bdd);?></td>
  </tr>
  <?php
 }
 ?>
</table>

<br><br>