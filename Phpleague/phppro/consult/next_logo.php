<?php
//***********************************************************************/
// phpproeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpproeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpproeague.univert.org/forum               */
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
        <body class=phppro>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phppro_divisions, phppro_championnats WHERE id_division=phppro_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="SELECT * FROM phppro_parametres WHERE id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phppro_clubs, phppro_equipes where phppro_equipes.id='$id_equipe_fetiche' AND phppro_clubs.id=phppro_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=$row[0];
       }

$query="SELECT max(phppro_journees.numero) FROM phppro_journees, phppro_matchs where phppro_journees.id=phppro_matchs.id_journee and buts_dom is not NULL and phppro_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phppro_matchs.buts_dom, phppro_matchs.buts_ext, phppro_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppro_equipes as dom, phppro_equipes as ext, phppro_matchs, phppro_journees, phppro_clubs as logodom, phppro_clubs as logoext
                WHERE phppro_matchs.id_equipe_dom=dom.id
                        AND phppro_matchs.id_equipe_ext=ext.id
                        AND phppro_journees.id_champ='$champ'
                        AND phppro_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phppro_matchs.id_journee=phppro_journees.id
                        AND (phppro_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phppro_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phppro cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppro ><TH class=phppro colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                $bgcolor="#FFFFFF";

                echo "<TR class=phppro bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppro align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logodom]\" width=40 height=50></a>";
                echo "</td><TD class=phppro align=\"center\">".$domproba."</td><TD class=phppro>-</td><TD class=phppro>".$extproba."</td>";
                echo "<TD class=phppro align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[logoext]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
echo "<br /><br />";
$query="SELECT max(phppro_journees.numero) FROM phppro_journees, phppro_matchs where phppro_journees.id=phppro_matchs.id_journee and buts_dom is not NULL and phppro_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url as logodom, logoext.url as logoext, phppro_matchs.buts_dom, phppro_matchs.buts_ext, phppro_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phppro_equipes as dom, phppro_equipes as ext, phppro_matchs, phppro_journees, phppro_logo as logodom, phppro_logo as logoext
                WHERE phppro_matchs.id_equipe_dom=dom.id
                      AND phppro_matchs.id_equipe_ext=ext.id
                      AND phppro_journees.id_champ='$champ'
                      AND phppro_journees.numero='$numero'
                      AND dom.id_club=logodom.id_club
                      AND ext.id_club=logoext.id_club
                      AND phppro_matchs.id_journee=phppro_journees.id
                      AND (dom.id='$id_equipe_fetiche' OR ext.id='$id_equipe_fetiche')";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phppro cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";

             while ($row=mysql_fetch_array($result))
             { echo "r";
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phppro ><TH class=phppro colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phppro bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phppro align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phppro align=\"center\">".$domproba."</td><TD class=phppro>-</td><TD class=phppro>".$extproba."</td>";
                echo "<TD class=phppro align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              
?>
