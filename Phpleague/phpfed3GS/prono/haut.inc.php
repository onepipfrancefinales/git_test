<?php
require ("fonctions.php");
require("../config.php");

ouverture ();
if (!isset($gr_champ) or empty($gr_champ))
   {
    $resultat=$idconnect->query("SELECT phpfed3GS_gr_championnats.id 
								 FROM phpfed3GS_gr_championnats 
								 WHERE phpfed3GS_gr_championnats.activ_prono='1' 
								 ORDER by id desc");
   // $resultat=mysql_query ($requete) or die ("probleme " .mysql_error());
    $row= mysqli_fetch_array($resultat);
     
    $gr_champ=$row[0];     
   }
?>
