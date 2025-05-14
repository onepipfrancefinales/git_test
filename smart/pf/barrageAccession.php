<?php
if ($division == 120) {
trenteDeuxieme2019(115, $annee, $bdd);
$typeDivision = "Top 14";
}
else {
trenteDeuxieme2019(125, $annee, $bdd);
$typeDivision = "Nationale";
}

if ($A1001 + $A1002 == 0)
$clubA1001 ="Finaliste  " .$typeDivision;
else
$clubA1002 ="Dernier de " .$typeDivision;

if ($A1001 + $A1002 > 0 & $A1001 > $A1002)
$messageInfo = $clubA1001 ." accéde ". $typeDivision . "<br>" .
               $clubA1002  ." retrogradé en  ". $typeDivision;  

else 
$messageInfo = $clubA1002 ." maintenu en ". $typeDivision . "<br>" .
               $clubA1002  ." retrogradé en  ". $typeDivision;  


?>
<table width="90%" class="borderDouble" >
  <tr>
    <td class="titre"><?php echo "Barrage d'accession ". $typeDivision; ?><br />
    <span class="center size2 styleArial italic"><?php echo $D0ME; ?></span>
    </td>
  </tr>
</table>
<br />
<table width="90%" class="borderNone">
  <tr>
    <td colspan="2"><?php //echo $D0ME;
                    ?></td>
  </tr>
  <tr>
    <td class="coin5"><?php echo $clubA1001; ?></td>
    <td class="coin5pts"><?php echo $A1001; ?></td>
  </tr>
  <tr>
    <td class="coin5"><?php echo $clubA1002; ?></td>
    <td class="coin5pts"><?php echo $A1002; ?></td>
  </tr>
  <tr>
    <td colspan="2" height="25"></td>
  </tr>
</table>
<?php



if ($A1001 + $A1002 > 0 & $A1001 > $A1002)
$messageInfo = $clubA1001 ." accéde ". $typeDivision;
else 
$messageInfo =  $clubA1002 ." est maintenu en ". $typeDivision;



echo "<div class=\"center\">". $messageInfo . "</div>";

?>
