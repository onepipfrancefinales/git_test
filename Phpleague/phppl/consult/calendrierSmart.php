<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>F�d�rale 2</title>
</head>
<body>
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
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

include ("avant.php");

require ("../config.php") ;
require ("../consult/fonctions.php");



ouverture ();
ENTETE2 ();


if (!isset($_REQUEST['champ']))
{
    demande_champ ($idconnect);
}
else
{
$champ=$_REQUEST['champ'];

	
$reponse=$idconnect->query("SELECT id_equipe_fetiche, phppl_divisions.nom, phppl_saisons.annee, (phppl_saisons.annee)+1
                      FROM phppl_parametres, phppl_championnats, phppl_divisions, phppl_saisons 
                      WHERE id_champ='$champ'
                      AND phppl_championnats.id='$champ'
                      AND phppl_divisions.id=phppl_championnats.id_division
                      AND phppl_saisons.id=phppl_championnats.id_saison");

while ($row=mysqli_fetch_array($reponse))
  {
   $id_equipe_fetiche=$row['id_equipe_fetiche'];
   echo "<div align=\"center\"><h4>".$row[1]."  ".$row[2]."/".$row[3]."</h4></div>";
  }
  
  //$reponse->closeCursor();
$color=0;

$nb_equipe=nb_equipes($champ, $idconnect);

$reponse= $idconnect->query("SELECT phppl_clubs.nom, CLEXT.nom, phppl_matchs.buts_dom, phppl_matchs.buts_ext, phppl_matchs.id, phppl_matchs.date_reelle
             FROM phppl_clubs, phppl_clubs as CLEXT, phppl_matchs, phppl_journees, phppl_equipes, phppl_equipes as EXT 
             WHERE phppl_clubs.id=phppl_equipes.id_club 
             AND CLEXT.id=EXT.id_club
             AND phppl_equipes.id=phppl_matchs.id_equipe_dom 
             AND EXT.id=phppl_matchs.id_equipe_ext 
             AND phppl_matchs.id_journee=phppl_journees.id
             AND phppl_journees.id_champ='$champ'
             AND (CLEXT.nom='exempte' or phppl_clubs.nom='exempte')
             ORDER by phppl_journees.numero");
             
             
//$resultats2=mysql_query($requete2) or die (mysql_error());    
$i=0;
while ($row=mysqli_fetch_array($reponse))
  {
   $row2[0] = stripslashes($row2[0]);
   $row2[1] = stripslashes($row2[1]);
   $resultats_0[$i] = $row2[0];  $resultats_1[$i] = $row2[1];
   $i++;
  }
  //$reponse->closeCursor();
  
$reponse= $idconnect->query("SELECT phppl_journees.numero, phppl_journees.date_prevue, cldom.nom, clext.nom, phppl_matchs.buts_dom, phppl_matchs.buts_ext, dom.id, ext.id
        FROM phppl_journees, phppl_equipes as dom, phppl_equipes as ext, phppl_matchs, phppl_clubs as cldom, phppl_clubs as clext
        WHERE phppl_journees.id_champ='$champ'
        AND phppl_matchs.id_equipe_dom=dom.id
        AND phppl_matchs.id_equipe_ext=ext.id
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phppl_matchs.id_journee=phppl_journees.id
        AND cldom.nom!='exempte'
        AND clext.nom!='exempte'
        ORDER BY phppl_journees.numero");
        
//$result=mysql_query($query);

echo "<table width=\"100%\" align=\"center\"><tr><td>";
$journee_milieu=(nb_journees($champ, $idconnect)/1);
$journee=0;
$x=2;
$i=0;

while ($row=mysqli_fetch_array($reponse))
{
   $row[2] = stripslashes($row[2]);
   $row[3] = stripslashes($row[3]);

        if (($journee=="0"))
            { 
              $date = str_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
              ?>
<br><table class="tablephppl2" cellspacing="0" width="100%" align="center">
              
<tr class="trphppl3"><td colspan="3" align="center"><b>
              
<?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></td></tr>";
            }
        elseif (!($journee==$row[0]))
            {   
                echo "</table><br>";
                
                if ($journee==$journee_milieu) {echo "</td><td align=\"center\">";}
                $date = str_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
                ?>
                
<table class="tablephppl2" cellspacing="0" width="100%" align="center">
<tr class="trphppl3"><td colspan="3" align="center"><b>
<?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></td></tr>";
                $x=2;
            }


        $classe="ligne2";
        if (($color%2)==0) $classe="ligne1";
        
echo "<tr class=\"$classe\">";

        if ($row[6]==$id_equipe_fetiche) 
        {
          ?>
 <td class="cld1"><b><?php print $row[2]; ?></b></td>
          <?php
        }
        else
        {
          ?>
 <td class="cld1"><?php print $row[2]; ?></td>
          <?php
        }

        ?>
 <td align="center">
<?php echo $row[4]." - ".$row[5]."</td>";

        if ($row[7]==$id_equipe_fetiche)
        { 
          ?>
 <td class="cld2"><b>
<?php echo "$row[3]</b></td></tr>";
        }
else { echo "<td class=\"cld2\">".$row[3]."</td></tr>";  }

// $reponse->closeCursor();
 $idconnect =null;
        if ($x==($nb_equipe/2))
         {
           if (($color%2)==0) {$classe="ligne2";} else {$classe="ligne1";}
           if (isset($resultats_0[$i]) and $resultats_0[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_1[$i]</td></tr>";}
           if (isset($resultats_1[$i]) and $resultats_1[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_0[$i]</td></tr>";}
          $i++;
         }
        
        $color++;
        $journee=$row[0];
        $x++;
} 
    
echo "</table></td></tr></table>";
}

?>
<br />
        <p align="right">&nbsp;</p>
<?php

include ("apres.php");

?>
