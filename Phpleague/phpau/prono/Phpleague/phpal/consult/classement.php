<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>F�d�rale 2</title>
</head>
<body>
<?php
//***********************************************************************/
// phpaleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpaleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpaleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

include ("avant.php");
require ("../config.php") ;
require ("../consult/fonctions.php");

ouverture ();

if (!isset($_GET['champ']))
   {
    $value=GENERAL;
    demande_champ ();
  }

else
{
$champ=$_GET['champ'];
$nb_equipe = nb_equipes($champ);
$nb_journees=($nb_equipe*2)-2;

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='1';}
if (isset($_GET['fin'])) {$fin=$_GET['fin'];} else {$fin=($nb_equipe*2)-2;}
if (isset($_GET['type'])) {$type=$_GET['type'];} else {$type=GENERAL;}


if (isset($type))
		{
   		$result=mysql_query("SELECT accession, barrage, estimation, relegation, id_equipe_fetiche, fiches_clubs
                        FROM phpal_parametres
                        WHERE id_champ='$champ'");
   		$row=mysql_fetch_array($result);
 
       
      
if ($debut=="1" and $fin==$nb_journees)
			{
  
		   
		    	$query="SELECT max(phpal_journees.numero) FROM phpal_journees, phpal_matchs WHERE  phpal_journees.id=phpal_matchs.id_journee and buts_dom is not NULL and phpal_journees.id_champ='$champ'";
               		 $result=mysql_query($query) or die (mysql_error());
      			 		while ($row=mysql_fetch_array($result))
        		 		{
						$numero=$row[0];
						}
   
    		if (!empty($numero)) {aff_journee($champ, $numero, CONSULT_CLMNT_MSG6, 0, $fiches_clubs, $id_equipe_fetiche);}
    
   //ligne 65 et 66 ajout�es
    							else
	 							{aff_journee($champ, $numero+1, CONSULT_CLMNT_MSG62, 0, $fiches_clubs, $id_equipe_fetiche);}
   			}
   		 }
	
   }

?>

<?php
include ("apres.php");
?>
