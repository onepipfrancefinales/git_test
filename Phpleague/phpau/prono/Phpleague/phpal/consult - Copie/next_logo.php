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
?>
<link rel="stylesheet" type="text/css" href="../league.css">
<?php
require ("../config.php") ;
require ("fonctions.php");
ouverture ();

echo "<STYLE>";
require ("../league.css");
echo "</STYLE>";
?>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <body class=phpal>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phpal_divisions, phpal_championnats WHERE id_division=phpal_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="SELECT * FROM phpal_parametres WHERE id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpal_clubs, phpal_equipes where phpal_equipes.id='$id_equipe_fetiche' AND phpal_clubs.id=phpal_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=$row[0];
       }

$query="SELECT max(phpal_journees.numero) FROM phpal_journees, phpal_matchs where phpal_journees.id=phpal_matchs.id_journee and buts_dom is not NULL and phpal_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpal_equipes as dom, phpal_equipes as ext, phpal_matchs, phpal_journees, phpal_clubs as logodom, phpal_clubs as logoext
                WHERE phpal_matchs.id_equipe_dom=dom.id
                        AND phpal_matchs.id_equipe_ext=ext.id
                        AND phpal_journees.id_champ='$champ'
                        AND phpal_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpal_matchs.id_journee=phpal_journees.id
                        AND (phpal_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpal_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpal cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpal ><TH class=phpal colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                $bgcolor="#FFFFFF";

                echo "<TR class=phpal bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpal align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logodom]\" width=40 height=50></a>";
                echo "</td><TD class=phpal align=\"center\">".$domproba."</td><TD class=phpal>-</td><TD class=phpal>".$extproba."</td>";
                echo "<TD class=phpal align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logoext]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
echo "<br /><br />";
$query="SELECT max(phpal_journees.numero) FROM phpal_journees, phpal_matchs where phpal_journees.id=phpal_matchs.id_journee and buts_dom is not NULL and phpal_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url as logodom, logoext.url as logoext, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpal_equipes as dom, phpal_equipes as ext, phpal_matchs, phpal_journees, phpal_logo as logodom, phpal_logo as logoext
                WHERE phpal_matchs.id_equipe_dom=dom.id
                      AND phpal_matchs.id_equipe_ext=ext.id
                      AND phpal_journees.id_champ='$champ'
                      AND phpal_journees.numero='$numero'
                      AND dom.id_club=logodom.id_club
                      AND ext.id_club=logoext.id_club
                      AND phpal_matchs.id_journee=phpal_journees.id
                      AND (dom.id='$id_equipe_fetiche' OR ext.id='$id_equipe_fetiche')";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpal cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";

             while ($row=mysql_fetch_array($result))
             { echo "r";
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpal ><TH class=phpal colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phpal bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpal align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpal align=\"center\">".$domproba."</td><TD class=phpal>-</td><TD class=phpal>".$extproba."</td>";
                echo "<TD class=phpal align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              
?>
