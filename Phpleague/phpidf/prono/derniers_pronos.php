<?php
//***********************************************************************/
// phpidfeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpidfeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpidfeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/

if (isset($_GET['debut'])) {$debut=$_GET['debut'];} else {$debut='';}

if (empty ($debut) or $debut=="0") $debut=0; $apres=1;
$fin = $debut+10;
if ($debut=="0") {$suiv="?page=pronos&amp;gr_champ=$gr_champ";}
else {$debut1=($debut-"10"); $suiv="?page=derniers_pronos&amp;debut=$debut1&amp;gr_champ=$gr_champ"; }

include ("derniers_pronos.htm");


$result=$idconnect->query("SELECT phpidf_clubs.nom, CLEXT.nom, phpidf_matchs.buts_dom, phpidf_matchs.buts_ext, phpidf_matchs.id, phpidf_matchs.date_reelle, phpidf_journees.numero, pts_prono_exact, pts_prono_participation
FROM phpidf_clubs, phpidf_clubs as CLEXT, phpidf_matchs, phpidf_journees, phpidf_equipes, phpidf_equipes as EXT, phpidf_gr_championnats
WHERE phpidf_clubs.id=phpidf_equipes.id_club
AND CLEXT.id=EXT.id_club 
AND phpidf_equipes.id=phpidf_matchs.id_equipe_dom
AND EXT.id=phpidf_matchs.id_equipe_ext
AND phpidf_matchs.id_journee=phpidf_journees.id
AND phpidf_journees.id_champ=phpidf_gr_championnats.id_champ
AND phpidf_gr_championnats.id='$gr_champ'
AND phpidf_matchs.buts_dom is not null
AND phpidf_matchs.buts_ext is not null
AND phpidf_clubs.nom!='exempte'
AND CLEXT.nom!='exempte'
ORDER by phpidf_matchs.date_reelle desc, phpidf_clubs.nom desc
LIMIT $debut, $fin ");
$i=0;
//$result=mysql_query($query);
if (mysqli_num_rows( $result )=="0") {echo "<tr><td colspan=6 align=center><div class=\"blanc\">Journ�e Inexistante</div></td></tr>";}
while ($row=mysqli_fetch_array($result) and $i<10)
  {
$clubs_nom = stripslashes($row[0]);
$clubs_nom1 = stripslashes($row[1]);
$result2=$idconnect->query( "SELECT pronostic 
							FROM phpidf_pronostics, phpidf_membres 
							WHERE phpidf_pronostics.id_match='$row[4]' 
							AND phpidf_membres.id=phpidf_pronostics.id_membre 
							AND phpidf_membres.id_prono='$user_id'");
//$result2=mysql_query($query2) or die ("probleme " .mysql_error());
$nb_pronos= mysqli_num_rows($result2);

if ($nb_pronos == "0") {$prono="0";}
{
  while ($row2=mysqli_fetch_array($result2))
  {
    $prono=$row2["0"];
    if ($row2["0"] == ""){$prono="0";}
  }
}
  $date=format_date_fr_red($row[5]);
  echo"<tr><td><div class=\"blanc\">$row[6]</div></td>";
  echo "<td><div class=\"blanc\">$date</div></td>";
  echo "<td align=\"right\"><div class=\"blanc\">$clubs_nom</div></td>";
    
  echo "<td>";
  echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"50\"><tr><td>";
  if ($prono==1)
	{ 
	 ?>
             <img src="barre.gif" border="no" alt="">
             <img src="N.gif" border="no" alt="">
             <img src="2.gif"  border="no" alt="">
	 <?php
	}
  if ($prono=="N")
	{  
	?>
             <img src="1.gif" border="no" alt="">
             <img src="barre.gif" border="no" alt="">
             <img src="2.gif"  border="no" alt="">
	<?php
	}
	
  if ($prono=="2")
	{  
	?>
             <img src="1.gif" border="no" alt="">
             <img src="N.gif" border="no" alt="">
             <img src="barre.gif"  border="no" alt="">
	<?php
	}
  if ($prono=="0")
	{  
	 ?>
             <img src="1.gif" border="no" alt="">
             <img src="N.gif" border="no" alt="">
             <img src="2.gif"  border="no" alt="">
	 <?php
	}
  
  echo "</td>\n</tr>\n</table>\n</td>\n";
  $pronos_exact=$row['pts_prono_exact']+$row['pts_prono_participation'];

  echo "<td><div class=\"blanc\">$clubs_nom1</div></td>";
  echo "<td align=\"center\"><div class=\"blanc\">$row[2]-$row[3]</div></td>";
  echo "<td align=\"center\">";
  if ($row[2]>$row[3] and $prono==1){echo "<img src=\"c_1.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($row[2]==$row[3] and $prono=="N"){echo "<img src=\"c_1.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($row[2]<$row[3] and $prono=="2"){echo "<img src=\"c_1.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$pronos_exact</div>";}
  elseif ($prono=='0'){echo "</td><td align=\"center\"><div class=\"blanc\">0</div>";}
  else {echo "<img src=\"c_0.gif\" alt=\"\"></td><td align=\"center\"><div class=\"blanc\">$row[pts_prono_participation]</div>";}
  echo "</td>";
  echo "</tr>";
  $i++;
}  



echo "</table></td></tr></table>";


?>
