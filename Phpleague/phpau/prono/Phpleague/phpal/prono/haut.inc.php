<?php
require ("fonctions.php");
require("../config.php");

ouverture ();
if (!isset($gr_champ) or empty($gr_champ))
   {
    $requete="SELECT phpal_gr_championnats.id FROM phpal_gr_championnats WHERE phpal_gr_championnats.activ_prono='1' ORDER by id desc";
    $resultat=mysql_query ($requete) or die ("probleme " .mysql_error());
    $row= mysql_fetch_array($resultat);
     
    $gr_champ=$row[0];     
   }
?>
