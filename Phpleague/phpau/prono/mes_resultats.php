<?php
//***********************************************************************/
// phpaueague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpaueague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpaueague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>

  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
    <tr>
      <td width="100%">
          <table border="0" cellpadding="2" cellspacing="0" width="90%" class="prono" align="center">
            <tr>
              <td width="16%">

<div class="blanc"><b>Type</b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo CONSULT_CLUB_1; ?></b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo PRONO_RESULTATS_POINTS; ?></b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo PRONO_CLASSEMENT_PARTICIPATIONS; ?></b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo PRONO_RESULTATS_MOY; ?></b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo PRONO_RESULTATS_REUSSITE; ?></b></div></td>
              <td width="12%"><div class="blanc"><b><?php echo PRONO_RESULTATS_PROGR; ?></b></div></td>
            </tr>

<?php
//G�n�ral
 //$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
$result=$idconnect->query("
		SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact, AVG(points)
		FROM phpau_clmnt_pronos, phpau_membres, phpau_gr_championnats
		WHERE type='general' 
		AND phpau_membres.id=phpau_clmnt_pronos.id_membre 
		AND phpau_gr_championnats.id='$gr_champ' 
		AND phpau_clmnt_pronos.id_champ='$gr_champ' 
		AND phpau_membres.id_prono='$user_id'
		GROUP BY participation
		ORDER by points 
		DESC, participation 
		DESC, phpau_membres.pseudo");
//$result=mysql_query($query) or die ("probleme " .mysql_error());
 $moyenne_generale=0;  

while ($row=mysqli_fetch_array($result))
{
 if ($user_id==$row["id_prono"] and $row["participation"]!==0)
   {
     $moyenne_generale= $row["points"]/$row["participation"];
     $reussite=$row["points"]/(($row["pts_prono_participation"]+$row["pts_prono_exact"])*$row["participation"])*100;
     echo "<tr><td><div class=\"blanc\"><b>G�n�ral</b></div></td>";
     echo "<td><div class=\"blanc\">";
     affiche_clmnt_general ($user_id, $gr_champ, $idconnect);
     echo "</div></td>";
     echo "<td><div class=\"blanc\">$row[0]</div></td>";
     echo "<td><div class=\"blanc\">$row[1]</div></td>";
     echo "<td><div class=\"blanc\">";printf ("%.2f",$moyenne_generale); echo "</div></td>";
     echo "<td><div class=\"blanc\">";printf ("%.1f",$reussite);  echo "%</div></td>";
     echo "<td><div class=\"blanc\"></div></td></tr>";

   }
}

// Mensuel en cours
$result=$idconnect->query("SELECT points, participation, id_prono, pts_prono_participation, pts_prono_exact
FROM phpau_clmnt_pronos, phpau_membres, phpau_gr_championnats
WHERE type='mensuel_en_cours' AND phpau_membres.id=phpau_clmnt_pronos.id_membre and phpau_gr_championnats.id='$gr_champ' and phpau_clmnt_pronos.id_champ='$gr_champ' and phpau_membres.id_prono='$user_id'
ORDER by points desc, participation desc, phpau_membres.pseudo");
//$result=mysql_query($query) or die ("probleme " .mysql_error());
 $non_classe=0;
while ($row=mysqli_fetch_array($result))
{
 if ($user_id==$row[2] and $row[1]!==0 and $moyenne_generale!==0 and !empty($moyenne_generale))
   {
   $non_classe="1";
   if (!$row[1]=="0") {$moyenne=$row[0]/$row[1];}
   else {$moyenne=0;}

   $progression=$moyenne/$moyenne_generale*100;
   
   if (!(($row[3]+$row[4])*$row[1])=="0") {$reussite=$row[0]/(($row[3]+$row[4])*$row[1])*100;}
   else {$reussite=0;}
   
   echo "<tr><td><div class=\"blanc\"><b>Mensuel</b></div></td>";
   echo "<td><div class=\"blanc\">";
   affiche_clmnt_mensuel_en_cours ($user_id, $gr_champ, $idconnect);
   echo "</div></td>";
   echo "<td><div class=\"blanc\">$row[0]</div></td>";
   echo "<td><div class=\"blanc\">$row[1]</div></td>";
   echo "<td><div class=\"blanc\">";printf ("%.2f",$moyenne);  echo "</div></td>";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$reussite);  echo "%</div></td>";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$progression);  echo "%</div></td></tr>";
   }

  elseif ($non_classe!="1") {echo "<tr><td colspan=7 align=center><div class=\"blanc\">Non Class�</div></td></tr>";$non_classe="1";}


}

// Mensuel 30 derniers jours
$result=$idconnect->query("SELECT points, participation, id_prono, pts_prono_participation,pts_prono_exact
FROM phpau_clmnt_pronos, phpau_membres, phpau_gr_championnats
WHERE type='mensuel_30_jours' AND phpau_membres.id=phpau_clmnt_pronos.id_membre and phpau_gr_championnats.id='$gr_champ' and phpau_membres.id_prono='$user_id'
ORDER by points desc, participation desc, phpau_membres.pseudo");
//$result=mysql_query($query) or die ("probleme " .mysql_error());

while ($row=mysqli_fetch_array($result))
{
 if ($user_id==$row[2] and $row[1]!==0 and $moyenne_generale!==0 and !empty($moyenne_generale))
   {
   $moyenne=$row[0]/$row[1];
   $progression=$moyenne/$moyenne_generale*100;

      if (!(($row[3]+$row[4])*$row[1])=="0") {$reussite=$row[0]/(($row[3]+$row[4])*$row[1])*100;}
   else {$reussite=0;}


   echo "<tr><td><div class=\"blanc\"><b>30 derniers jours</b></div></td>\n";
   echo "<td><div class=\"blanc\">\n";
   affiche_clmnt_mensuel_30_jours ($user_id, $gr_champ, $idconnect);
   echo "</div></td>";
   echo "<td><div class=\"blanc\">$row[0]</div></td>\n";
   echo "<td><div class=\"blanc\">$row[1]</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.2f",$moyenne);  echo "</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$reussite);  echo "%</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$progression);  echo "%</div></td></tr>\n";
   }

}

// Hebdo
$result=$idconnect->query("SELECT points, participation, id_prono, pts_prono_participation,pts_prono_exact
FROM phpau_clmnt_pronos, phpau_membres, phpau_gr_championnats
WHERE type='hebdo' AND phpau_membres.id=phpau_clmnt_pronos.id_membre and phpau_gr_championnats.id='$gr_champ' and phpau_membres.id_prono='$user_id'
ORDER by points desc, participation desc, phpau_membres.pseudo");
//$result=mysql_query($query) or die ("probleme " .mysql_error());

while ($row=mysqli_fetch_array($result))
{ 
 if ($user_id==$row[2] and $row[1]!==0 and $moyenne_generale!==0 and !empty($moyenne_generale))
   {
   if (!$row[1]=="0") {$moyenne=$row[0]/$row[1];}
   else $moyenne=0;
   $progression=$moyenne/$moyenne_generale*100;

   if (!(($row[3]+$row[4])*$row[1])=="0") {$reussite=$row[0]/(($row[3]+$row[4])*$row[1])*100;}
   else {$reussite=0;}

   echo "<tr><td><div class=\"blanc\"><b>Hebdo</b></div></td>\n";
   echo "<td><div class=\"blanc\">\n";
   affiche_clmnt_mensuel_hebdo ($user_id, $gr_champ, $idconnect);
   echo "</div></td>\n";
   echo "<td><div class=\"blanc\">$row[0]</div></td>\n";
   echo "<td><div class=\"blanc\">$row[1]</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.2f",$moyenne); echo "</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$reussite);  echo "%</div></td>\n";
   echo "<td><div class=\"blanc\">";printf ("%.1f",$progression);  echo "%</div></td></tr>\n";
   }
   

}  


echo "</table></td></tr></table>";

?>
