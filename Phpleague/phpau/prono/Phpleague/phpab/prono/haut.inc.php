<?php
require ("fonctions.php");
require("../config.php");

ouverture ();

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db2');	

if (!isset($gr_champ) or empty($gr_champ))
   {
    $resultat=$idconnect->query("SELECT phpab_gr_championnats.id 
								 FROM phpab_gr_championnats 
								 WHERE phpab_gr_championnats.activ_prono='1' 
								 ORDER by id desc");
    //$resultat=mysql_query ($requete) or die ("probleme " .mysql_error());
    $row= mysqli_fetch_array($resultat);
     
    $gr_champ=$row[0];     
   }
?>
