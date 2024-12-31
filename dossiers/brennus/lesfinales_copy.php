<?php

require "../../connect/connexion1.php";
/*
$id = array();
$edition = array();
$saison = array();
$nomDiv = array();
$dateMatch = array();
$champion = array();
$comite1 =  array();
$finaliste = array();
$comite2 = array();
$score1 =  array();
$score2 = array();
$scoreplus =  array();
$stade = array();
$ville = array();
$public = array();
$com = array();
*/

// nombre de lignes

/*
$reponse = $bdd->query("SELECT count(id) 
                        FROM brennus");
while ($row = $reponse->fetch()) {
  $nbreLigne = $row[0];
};
*/






/*
foreach ($tabVilles as $ville)
{
 //echo $ville; echo "<br>"; 
  //count  par Villes
$reponse = $bdd->query("SELECT count(ville)
FROM brennus
WHERE ville = '$ville'");


while ($row = $reponse->fetch()) {
$countParVille  = $row[0];
};

//echo $countVille;echo "<br>";
  
  
  echo $ville.$countParVille;
  echo "<br>";
}

*/


/*
$requete = $bdd->query("SELECT *
		                    FROM brennus 
		                   WHERE id < '$nbreLigne'
                       ORDER BY id DESC ");

while ($row = $requete->fetch()) {
  $id[]  = $row[0];
  $edition[]  = $row[1];
  $saison[] = $row[2];
  $nomDiv[] = $row[3];
  $dateMatch[] = $row[4];
  $champion[] = $row[5];
  $comite1[] = $row[6];
  $finaliste[] = $row[7];
  $comite2[] = $row[8];
  $score1[] = $row[9];
  $score2[] = $row[10];
  $scoreplus[] = $row[11];
  $stade[] = $row[12];
  $ville[] = $row[13];
  $public[] = $row[14];
  $com[] = $row[15];
}
*/
?>

<div style="margin-left:10%;margin-right:10% " class= "backgroundWhite">

<table width="70%" class="marginAuto" border="1">

  <tr bgcolor="#0099FF" bordercolor="#000000">
    <td colspan="8" height="88" class="center size7 bold colorWhite styleCursive">Les finales</td>
  </tr>
  <tr class="backgroundWhite" bordercolor="#000000">
    <td colspan="8" height="40">
    </td>
  </tr>
  <tr class="center bold styleCursive size3 colorWhite backgroundBlack">
    <td> Saisons </td>
    <td> Editions </td>
    <td> Date</td>
    <td> Champion</td>
    <td> Finalistes</td>
    <td> Scores</td>
    <td> Stades - Villes </td>
    <td> Affluence </td>
  </tr>
  <?php
// absence de championnat :  2020,1942,1941,1940,1919,1918,1917,1916,1915
$tabAnnee = array(2020, 1942, 1941, 1940, 1919, 1918, 1917, 1916, 1915);
 

for ($i = 0; $i < $nbreLigne - 1; $i++) {
    if (in_array($saison[$i], $tabAnnee)) {
  ?>
      <tr class="background666666 colorWhite">
        <td><?php echo $saison[$i]; ?> </td>

        <td colspan="7" class="center"> <?php echo $champion[$i]; ?> </td>
      </tr>
    <?php
    }
    // poule unique : 1896,1897,1898
    else if ($saison[$i] == '1896' or $saison[$i] == '1897' or $saison[$i] == '1898') {
      if ($saison[$i] % 2 == 0)
        echo "<tr class=\"backgroundCCCCCC\">";
      else
        echo "<tr class=\"backgroundWhite\">";
    ?>
      <td><?php echo $saison[$i]; ?> </td>
      <td><?php echo $edition[$i]; ?> </td>
      <td> <?php echo $dateMatch[$i]; ?> </td>
      <td class="center"> <?php echo $champion[$i] . ' ' . $comite1[$i]; ?> </td>
      <td colspan="4"> <?php echo "Poule unique"; ?> </td>
      </tr>
    <?php
    } else {
      if ($saison[$i] % 2 == 0)
        echo "<tr class=\"backgroundCCCCCC\">";
      else
        echo "<tr class=\"backgroundWhite\">";
    ?>
      <td><?php echo $saison[$i]; ?> </td>
      <td><?php echo $edition[$i]; ?> </td>
      <td> <?php echo $dateMatch[$i]; ?> </td>
      <td class="center"> <?php echo $champion[$i] . ' ' . $comite1[$i]; ?> </td>
      <td> <?php echo $finaliste[$i] . ' ' . $comite2[$i]; ?> </td>
      <td class="center"> <?php echo $score1[$i] . ' - ' . $score2[$i] . $scoreplus[$i]; ?> </td>
      <td> <?php echo $stade[$i] . "<br>" . $ville[$i]; ?> </td>
      <td> <?php echo $public[$i]; ?> </td>
      </tr>
  <?php
    }
  }
  ?>
</table>
</div>