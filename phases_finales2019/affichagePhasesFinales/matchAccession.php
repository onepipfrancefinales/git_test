<?php 
echo "<br/>";
$annee=$_GET['annee'];
$division=$_GET['division'];

if ($division == 120) {
$division ="115";
$typeBarrage ="Barrage d'accession au Top 14";
}
else if ($division == 130) {
  $division ="125";
  $typeBarrage ="Barrage d'accession en Pro D2";
  }

 require '../../connect/connexion1.php';




 date2019($division, $annee, $bdd);
 accessMatch ($division, $annee, $bdd);


 // traitement des scores spéciaux
 if ($scoreDom == 555)
 $scoreDom = "Tab";
 if ($scoreExt == 555)
 $scoreExt = "Tab";
 
?>

<table width="1490" border="0">



<tr> 
    <td colspan="4"></td>
    <td width="83"></td>
    <td width="269"><?php echo $D1ME?></td>
    <td width="41"></td>
    <td width="85"></td>
    <td width="21"></td>
    <td width="245"></td>
    <td width="37"></td>
    <td width="118"></td>
  </tr>
 

	<td colspan="4"></td>
    <td width="83"></td>
    <td width="269" class="coin4"><?php echo $typeBarrage; ?></td>
    <td width="41"></td>
    <td width="85"></td>
    <td width="21"></td>
    <td width="245" class="coin4" ><?php echo $equipeDom; ?></td>
    <td width="37" class="coin4pts" ><?php echo $scoreDom; ?></td>
    <td width="118"></td>
  </tr>
  <tr> 
    <td colspan="4"></td>
    <td width="83"></td>
    <td width="269"></td>
    <td width="41"></td>
    <td width="85"></td>
    <td width="21"></td>
    <td width="245" class="coin4" ><?php echo $equipeExt; ?></td>
    <td width="37" class="coin4pts" ><?php echo $scoreExt; ?></td>
    <td width="118"></td>
  </tr>
  <tr> 
    <td colspan="4"></td>
    <td width="83"></td>
    <td width="269"></td>
    <td width="41"></td>
    <td width="85"></td>
    <td width="21"></td>
    <td width="245"></td>
    <td width="37"></td>
    <td width="118"></td>
  </tr>
  <tr> 
    <td colspan="4"></td>
    <td width="83"></td>
    <td width="269"></td>
    <td width="41"></td>
    <td width="85"></td>
    <td width="21"></td>
    <td width="245"></td>
    <td width="37"></td>
    <td width="118"></td>
  </tr>
  <tr> 
    <td colspan="12"  bgcolor="#FFCC66"></td>
  </tr>
</table>