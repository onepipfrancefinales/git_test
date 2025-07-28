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
?>
<table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="3"><?php echo ADMIN_GRAPH_TITRE." "; affich_gr_champ ($gr_champ, $idconnect); ?></td>
            </tr>
            <tr>
            <td align="center">
<?php
include ("tps1.php3");

mysql_query("DELETE FROM phpab_clmnt_pronos WHERE id_champ='$gr_champ'") or die (mysql_error());
$query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations FROM phpab_membres, phpab_pronostics
WHERE id_champ='$gr_champ' AND id_membre=phpab_membres.id
GROUP by pseudo
ORDER by total, participations";

$result=mysql_query ($query);
while ($row=mysql_fetch_array($result))
{
$row[1]=addslashes($row[1]);
mysql_query("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'general')") or die (mysql_error());
}

$query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
FROM phpab_membres, phpab_pronostics, phpab_matchs
WHERE id_champ='$gr_champ'
AND id_membre=phpab_membres.id
AND phpab_matchs.id=id_match
AND MONTH (date_reelle) = MONTH (NOW())
AND YEAR (date_reelle) = YEAR (NOW())
GROUP by pseudo
ORDER by total, participations";

$result=mysql_query ($query) or die ("probleme " .mysql_error());
while ($row=mysql_fetch_array($result))
{
$row[1]=addslashes($row[1]);
mysql_query("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") or die (mysql_error());
}

$query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
FROM phpab_membres, phpab_pronostics, phpab_matchs
WHERE id_champ='$gr_champ'
AND id_membre=phpab_membres.id
AND phpab_matchs.id=id_match
AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
GROUP by pseudo
ORDER by total, participations";

$result=mysql_query ($query) or die ("probleme " .mysql_error());
while ($row=mysql_fetch_array($result))
{
$row[1]=addslashes($row[1]);
mysql_query("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')") or die (mysql_error());
}

$query="SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
FROM phpab_membres, phpab_pronostics, phpab_matchs
WHERE id_champ='$gr_champ'
AND id_membre=phpab_membres.id
AND phpab_matchs.id=id_match
AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
GROUP by pseudo
ORDER by total, participations";

$result=mysql_query ($query) or die ("probleme " .mysql_error());
while ($row=mysql_fetch_array($result))
{
$row[1]=addslashes($row[1]);
mysql_query("INSERT INTO phpab_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) values ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')") or die (mysql_error());
}

echo ADMIN_GRAPH_PRONO; include ("tps2.php3");

?>
</td></tr></table>
