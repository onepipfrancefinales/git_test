<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>F�d�rale 2</title>
</head>
<body>
<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

include ("avant.php");

require ("../config.php") ;
require ("../consult/fonctions.php");



ouverture ();
ENTETE2 ();


if (!isset($_REQUEST['champ']))
{
    demande_champ ();
}
else
{
$champ=$_REQUEST['champ'];


$result=(mysql_query("SELECT id_equipe_fetiche, phpab_divisions.nom, phpab_saisons.annee, (phpab_saisons.annee)+1
                      FROM phpab_parametres, phpab_championnats, phpab_divisions, phpab_saisons 
                      WHERE id_champ='$champ'
                      AND phpab_championnats.id='$champ'
                      AND phpab_divisions.id=phpab_championnats.id_division
                      AND phpab_saisons.id=phpab_championnats.id_saison"));

while ($row=mysql_fetch_array($result))
  {
   $id_equipe_fetiche=$row['id_equipe_fetiche'];
   echo "<div align=\"center\"><h4>".$row[1]."  ".$row[2]."/".$row[3]."</h4></div>";
  }
$color=0;

$nb_equipe=nb_equipes($champ);

$requete2="SELECT phpab_clubs.nom, CLEXT.nom, phpab_matchs.buts_dom, phpab_matchs.buts_ext, phpab_matchs.id, phpab_matchs.date_reelle
             FROM phpab_clubs, phpab_clubs as CLEXT, phpab_matchs, phpab_journees, phpab_equipes, phpab_equipes as EXT 
             WHERE phpab_clubs.id=phpab_equipes.id_club 
             AND CLEXT.id=EXT.id_club
             AND phpab_equipes.id=phpab_matchs.id_equipe_dom 
             AND EXT.id=phpab_matchs.id_equipe_ext 
             AND phpab_matchs.id_journee=phpab_journees.id
             AND phpab_journees.id_champ='$champ'
             AND (CLEXT.nom='exempte' or phpab_clubs.nom='exempte')
             ORDER by phpab_journees.numero";
             
             
$resultats2=mysql_query($requete2) or die (mysql_error());    
$i=0;
while ($row2=mysql_fetch_array($resultats2))
  {
   $row2[0] = stripslashes($row2[0]);
   $row2[1] = stripslashes($row2[1]);
   $resultats_0[$i] = $row2[0];  $resultats_1[$i] = $row2[1];
   $i++;
  }

$query="SELECT phpab_journees.numero, phpab_journees.date_prevue, cldom.nom, clext.nom, phpab_matchs.buts_dom, phpab_matchs.buts_ext, dom.id, ext.id
        FROM phpab_journees, phpab_equipes as dom, phpab_equipes as ext, phpab_matchs, phpab_clubs as cldom, phpab_clubs as clext
        WHERE phpab_journees.id_champ='$champ'
        AND phpab_matchs.id_equipe_dom=dom.id
        AND phpab_matchs.id_equipe_ext=ext.id
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phpab_matchs.id_journee=phpab_journees.id
        AND cldom.nom!='exempte'
        AND clext.nom!='exempte'
        ORDER BY phpab_journees.numero";
        
$result=mysql_query($query);

echo "<table width=\"100%\" align=\"center\"><tr><td>";
$journee_milieu=(nb_journees($champ)/2);
$journee=0;
$x=2;
$i=0;

while ($row=mysql_fetch_array($result))
{
   $row[2] = stripslashes($row[2]);
   $row[3] = stripslashes($row[3]);

        if (($journee=="0"))
            { 
              $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
              ?>
<br><table class="tablephpab2" cellspacing="0" width="100%" align="center">
              
<tr class="trphpab3"><td colspan="3" align="center"><b>
              
<?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></td></tr>";
            }
        elseif (!($journee==$row[0]))
            {   
                echo "</table><br>";
                
                if ($journee==$journee_milieu) {echo "</td><td align=\"center\">";}
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
                ?>
                
<table class="tablephpab2" cellspacing="0" width="100%" align="center">
<tr class="trphpab3"><td colspan="3" align="center"><b>
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
