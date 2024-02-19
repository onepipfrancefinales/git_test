<?php
//***********************************************************************/
// phppleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phppleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public Licensde as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
//$idconnect=@mysqli_connect('sql.franceserv.fr','onepip-france','lavelan09','onepip-france-db3');	  

//echo "numero :".$numero;echo "<br />";
if (empty($numero)) {

  $resultats = $idconnect->query("  SELECT max(phppl_journees.numero) 
								  from phppl_journees, phppl_matchs 
								  where phppl_journees.id=phppl_matchs.id_journee 
								  and buts_dom is not NULL 
								  and phppl_journees.id_champ='$champ'");

 

while ($row = mysqli_fetch_array($resultats)) {
    $numero = $row[0];
  }
  if ($numero == "") {
    $numero = "1";
  }
}
if (empty($numero)) {
  $numero = 1;
}

echo "numero : ".$numero; echo "<br />";
echo "championnat : ".$champ; echo "<br />";
$journee = $champ*100 + $numero;
echo "journée : ".$journee;echo "<br />";



$resultats = $idconnect->query("  SELECT COUNT(*)
								  from phppl_matchs 
								  where id_journee = '$journee'");

while($row= mysqli_fetch_array($resultats))
     {
$nbreMatchParJournee[] = $row[0];
	 }

$nbreDeMatchs = $nbreMatchParJournee[0];
//$int = (int)$nbr;
$nbreDeMatchs = (int)$nbreDeMatchs;
var_dump($nbreDeMatchs);
echo "nbre de matchs : ".$nbreDeMatchs; echo "<br />";

/***********************************/

for ($i = 0; $i < 7 ; $i++) {

//echo "date FR : ".$date_reelle[$i];echo "<br />";

$dateJM[$i] = explode("/", $date_reelle[$i]);

//  TRAITEMENT 1
//jour
$date_jour[$i]= $dateJM[$i][0];
// echo "jour : ".$date_jour[$i];echo "<br />";

//mois
$date_mois[$i]= $dateJM[$i][1];
//  echo "mois : ". $date_mois[$i];echo "<br />";

//annee + heure
$date_annee_heure [$i]= $dateJM[$i][2];
//echo  "annee + heure : ".$date_annee_heure[$i];echo "<br />";

//  TRAITEMENT 2

$dateAHMS[$i]  =  explode(" ", $date_annee_heure[$i]); 

// annee
$date_annee[$i]= $dateAHMS[$i][0];
//echo "annee : ". $date_annee[$i];echo "<br />";

// heure
$date_heure[$i]= $dateAHMS[$i][1];
//echo "heures : ". $date_heure[$i];echo "<br />";

echo "<br />";


  $dateUSA[$i] = $date_annee[$i] . '-' . $date_mois[$i] . '-' . $date_jour[$i] . ' ' . $date_heure[$i];
//echo $dateUSA[$i];echo "<br />";

  if (!(($butd[$i] == '') or ($butv[$i] == ''))) {
   // echo "Etape 1";echo "<br />";
    mysqli_query($idconnect, ("UPDATE phppl_matchs  
    SET buts_dom='$butd[$i]',     buts_ext='$butv[$i]', date_reelle='$dateUSA[$i]'
    WHERE id='$matchs_id[$i]'"));
 
} elseif (($butv[$i] == '') or ($butd[$i] == '')) {
   // echo "Etape 2 : absences des scores" . "<br />"; echo "<br />";

    mysqli_query($idconnect, ("UPDATE phppl_matchs 
					SET buts_dom = NULL, buts_ext = NULL,  date_reelle='$dateUSA[$i]'
          WHERE id ='$matchs_id[$i]' "));
  }
}
?>

<table class=phppl width="80%">
  <tr>
    <td class=phppl2 align="center" colspan="3">
      <?php echo ADMIN_RESULTS_TITRE . " ";
      affich_champ($champ, $idconnect); ?>
    </td>
  </tr>
  <tr>
    <td align="center">
      <?php journees($champ, $numero, $action, $idconnect); ?><br /><br />
    </td>
  </tr>
  <tr>
    <td>
      <table align=center cellspacing="0" width="100%">
        <form method="post" action="">
          <?php resultats($champ, $numero, $idconnect); ?>
        </form>
    </td>
  </tr>
</table>
<br /><br />