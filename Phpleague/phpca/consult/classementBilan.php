<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
//***********************************************************************/
// phpcaeague : gestionnaire de championnat                            */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpcaeague.univert.org                                       */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpcaeague.univert.org/forum             */
//                                                                      */
//***********************************************************************/

include ("avant.php");
require ("../config.php") ;
require ("fonctionsBilan.php");

ouverture ();

if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ();
   }

else
{
	$champ=$_GET['champ'];
	$nb_equipe = nb_equipes($champ, $idconnect);
	$nb_journees=($nb_equipe*2)-2;

	if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='1';}
	if (isset($_GET['fin'])) {$fin=$_GET['fin'];} else {$fin=($nb_equipe*2)-2;}
	if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type=GENERAL;}


	// MENU TYPES DE CLASSEMENT

?>

	<div align="center">
	<?php
 
	// liens permettant de consulter les résultats d'un club
	$lien="non";
	if (isset($type))
	{

    // RAPPEL DES PARAMETRES du CHAMPIONNAT
    $result=$idconnect->query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                         FROM phpca_parametres
                         WHERE id_champ='$champ'");
    $row=mysqli_fetch_array($result);

    $accession = $row['accession'];
    $barrage = $row['barrage'] + $accession;
    $estimation = $row['estimation'];
    $fiches_clubs = $row['fiches_clubs'];
    $id_equipe_fetiche=$row['id_equipe_fetiche'];
    
     $resultats=$idconnect->query("SELECT phpca_equipes.id FROM phpca_equipes, phpca_clubs
                  WHERE phpca_clubs.id=phpca_equipes.id_club 
                  AND id_champ='$champ'
                  AND phpca_clubs.nom='exempte'");
    //$resultats=mysql_query($requete) or die (mysql_error());
    
	$exempte=mysqli_num_rows($resultats);
    if ($exempte=='1') {$relegation = $nb_equipe - $row['relegation']-1;}
    else {$relegation = $nb_equipe - $row['relegation'];}
      

	$legende=CONSULT_CLMNT_MSG4.$debut.CONSULT_CLMNT_MSG5.$fin;


   $requete=$idconnect->query("SELECT DISTINCT * FROM phpca_clmnt_cache WHERE ID_CHAMP='$champ' ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE ASC, NOM");
   clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche, $idconnect);
  
    $result=$idconnect->query(" SELECT max(phpca_journees.numero) 
								FROM phpca_journees, phpca_matchs 
								WHERE phpca_journees.id=phpca_matchs.id_journee 
								AND buts_dom is not NULL 
								AND phpca_journees.id_champ='$champ'");
   
        while ($row=mysqli_fetch_array($result))
        {
        $numero=$row[0];
        }
   }
}

include ("apres.php");
?>
</body>
</html>
