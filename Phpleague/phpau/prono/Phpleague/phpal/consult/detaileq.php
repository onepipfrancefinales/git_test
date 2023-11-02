<html>
<head>
<title>Championnat territorial des Pyr�n�es</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
ENTETE2 ();

if (!isset($_REQUEST['champ']))
   {
       demande_champ ();
   }


// Choix du club
elseif (!isset($_REQUEST['id_equipe']))
{
$champ = $_REQUEST['champ'];

echo "<div align=\"center\"><font size=\"3\">".DETAILEQ_TITRE."</font><br /><br />";

demande_equipe($champ);
echo "</div>";
}

else
{
$champ = $_REQUEST['champ'];
$id_equipe = $_REQUEST['id_equipe'];

$query="SELECT id FROM phpal_equipes WHERE id_champ='$champ' AND id='$id_equipe'";
$result = mysql_query($query);
while ($row=mysql_fetch_array($result))
    {
    $id_equipe=$row[0];
    }
$query="SELECT phpal_clubs.nom FROM phpal_clubs, phpal_equipes WHERE phpal_equipes.id='$id_equipe' AND phpal_equipes.id_club=phpal_clubs.id";
$result = mysql_query($query);
while ($row=mysql_fetch_array($result))
    {
    $club = stripslashes($row[0]);

    }
$color=0;
$query="SELECT phpal_divisions.nom, phpal_saisons.annee, (phpal_saisons.annee)+1 
        FROM phpal_championnats, phpal_divisions, phpal_saisons 
        WHERE phpal_championnats.id='$champ' 
        AND phpal_divisions.id=phpal_championnats.id_division 
        AND phpal_saisons.id=phpal_championnats.id_saison";
$result = mysql_query($query);
    while ($row=mysql_fetch_array($result))
    {
          echo "<div align=\"center\"><h5>";
          echo $row[0];
          echo "  ";
          echo $row[1];
          echo "/";
          echo $row[2];
          echo "</h5></div>";
    }
echo "<div align=\"center\"><b>[ <font class=\"victoire\">".VICTOIRE."</font> | <font class=\"nul\">".NUL."</font> | <font class=\"defaite\">".DEFAITE."</font> ]</b></div><br />";
echo "<table class=\"tablephpal2\" align=\"center\" cellspacing=\"0\"  width=\"100%\">";
$query1="SELECT phpal_journees.numero, cldom.nom, clext.nom, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_matchs.date_reelle, phpal_matchs.id
        FROM phpal_equipes as dom, phpal_equipes as ext, phpal_matchs, phpal_journees, phpal_clubs as cldom  , phpal_clubs as clext
        WHERE phpal_matchs.id_equipe_dom=dom.id
        AND phpal_matchs.id_equipe_ext=ext.id
        AND (phpal_matchs.id_equipe_ext='$id_equipe'
        OR phpal_matchs.id_equipe_dom='$id_equipe')
        AND phpal_journees.id_champ='$champ'
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phpal_matchs.id_journee=phpal_journees.id
        ORDER BY phpal_journees.numero";
$result=mysql_query($query1);

echo "<tr class=\"trphpal3\"><td align=\"center\"><b>".JOURNEE."</b></td><td width=\"5%\"></td><td width=\"30%\" ><b>".DATE."</b></td><td colspan=\"5\"></td></tr>";
        while ($row=mysql_fetch_array($result))
        {
      $row[1] = stripslashes($row[1]);
      $row[2] = stripslashes($row[2]);
	
	 if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}

	 $color+=1;
         echo "<tr class=\"$classe\">\n";
         echo "<td align=\"center\"><b>$row[0]</b></td>\n";
         echo "<td></td>";
         echo "<td>";

                $minute = substr($row[5],14,2); // on r�cup�re la minute
                $heure = substr($row[5],11,2); // on r�cup�re l'heure
                $jour = substr($row[5],8,2); // on r�cup�re le jour
                $mois = substr($row[5],5,2); // puis le mois
                $annee = substr($row[5],0,4); // et l'annee



               setlocale(LC_TIME, 'fr_FR.utf8','fra');
                $t= mktime($heure,$minute,0,$mois,$jour,$annee);
                echo strftime("%A %d %B ",$t);
              //  echo strftime("- %Hh%M",$t);

                                
         echo "</td>";

                if ($row[1]=='exempte' or $row[2]=='exempte'){echo "<td align=\"right\">".ADMIN_RESULTS_1."</td><td colspan=\"5\"></td>";}
                else
                {

                echo "<td align=\"right\">";
                if ($row[3]<>'' and $row[1]==$club)
                {
                  if ($row[3]>$row[4]) echo "<font class=\"victoire\">";
                  if ($row[3]<$row[4]) echo "<font class=\"defaite\">";
                  if ($row[3]==$row[4]) echo "<font class=\"nul\">";
                  echo "<b>"; 
                }
                echo $row[1];
                
                if ($row[3]<>'' and $row[1]==$club) {echo "</b></font>";}
                
                echo "</td>";
                echo "<td align=\"center\"><a href=\"#\" onclick=\"window.open('match.php?id_match=$row[6]','Fichematch','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">$row[3] - $row[4]</a>";
                echo "</td><td align=\"left\">";
                if ($row[4]<>'' and $row[2]==$club)
                {
                 if ($row[3]<$row[4]) echo "<font class=\"victoire\">";
                 if ($row[3]>$row[4]) echo "<font class=\"defaite\">";
                 if ($row[3]==$row[4]) echo "<font class=\"nul\">";
                 echo "<b>"; 
                }
                
                echo $row[2];
                if ($row[4]<>'' and $row[2]==$club) {echo "</b></font>";}
                echo "</td></tr>";
                }
        }
echo "</table><br />";
if (isset($_SERVER["HTTP_REFERER"])) {$referer=$_SERVER["HTTP_REFERER"];} else {$referer="classement.php?champ=$champ&amp;type=G�n�ral";}
echo "<div align=\"center\"><a href=\"$referer\"><b>".RETOUR."</b></a></div><br />";
}
?>
<br />
<p align="right"><font face="Verdana" size="1"></font></p>
<?php
 include ("apres.php");
?>
