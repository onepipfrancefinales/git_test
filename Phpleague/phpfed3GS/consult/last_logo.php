<?php
//***********************************************************************/
// phpfed3GSeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3GSeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3GSeague.univert.org/forum               */
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
        <body class=phpfed3GS>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom FROM phpfed3GS_divisions, phpfed3GS_championnats where id_division=phpfed3GS_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="select * FROM phpfed3GS_parametres where id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpfed3GS_clubs, phpfed3GS_equipes WHERE phpfed3GS_equipes.id='$id_equipe_fetiche' AND phpfed3GS_clubs.id=phpfed3GS_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche= stripslashes($row[0]);

       }

$query="SELECT max(phpfed3GS_journees.numero) FROM phpfed3GS_journees, phpfed3GS_matchs where phpfed3GS_journees.id=phpfed3GS_matchs.id_journee and buts_dom is not NULL and phpfed3GS_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpfed3GS_equipes as dom, phpfed3GS_equipes as ext, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs as logodom, phpfed3GS_clubs as logoext
                WHERE phpfed3GS_matchs.id_equipe_dom=dom.id
                        AND phpfed3GS_matchs.id_equipe_ext=ext.id
                        AND phpfed3GS_journees.id_champ='$champ'
                        AND phpfed3GS_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpfed3GS_matchs.id_journee=phpfed3GS_journees.id
                        AND (phpfed3GS_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpfed3GS_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die ("probleme " .mysql_error());
         echo "<TABLE class=phpfed3GS cellspacing=\"0\" align=\"center\" >";
        $legende="�me journ�e de $nom";

             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];

                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpfed3GS><TH class=phpfed3GS colspan=5 text-align=\"center\"><b>". $numero."".$legende." le ".$date."</b></th></tr>";
                


                $bgcolor="#FFFFFF";

                
                echo "<TR class=phpfed3GS bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpfed3GS align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpfed3GS align=\"center\">".$domproba."</td><TD class=phpfed3GS>-</td><TD class=phpfed3GS>".$extproba."</td>";
                echo "<TD class=phpfed3GS align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";
             }
        echo "</table>";
                               }
echo "<br /><br />";
$query="SELECT max(phpfed3GS_journees.numero) from phpfed3GS_journees, phpfed3GS_matchs where phpfed3GS_journees.id=phpfed3GS_matchs.id_journee and buts_dom is not NULL and phpfed3GS_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT logodom.url_logo as logodom, logoext.url_logo as logoext, phpfed3GS_matchs.buts_dom, phpfed3GS_matchs.buts_ext, phpfed3GS_journees.date_prevue, logodom.id as logoiddom, logoext.id as logoidext
                FROM phpfed3GS_equipes as dom, phpfed3GS_equipes as ext, phpfed3GS_matchs, phpfed3GS_journees, phpfed3GS_clubs as logodom, phpfed3GS_clubs as logoext
                WHERE phpfed3GS_matchs.id_equipe_dom=dom.id
                        AND phpfed3GS_matchs.id_equipe_ext=ext.id
                        AND phpfed3GS_journees.id_champ='$champ'
                        AND phpfed3GS_journees.numero='$numero'
                        AND dom.id_club=logodom.id
                        AND ext.id_club=logoext.id
                        AND phpfed3GS_matchs.id_journee=phpfed3GS_journees.id
                        AND (phpfed3GS_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpfed3GS_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1) or die (mysql_error()) ;
         echo "<TABLE class=phpfed3GS cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                $date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                echo "<TR class=phpfed3GS ><TH class=phpfed3GS colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$date."</b></th></tr>";
                }
                
                if ($row[0]==$equipe_fetiche )
                {
                $DebMarqueur1 = "<b>";
                $FinMarqueur1 = "</b>";
                }
                        
                else
                {
                $DebMarqueur1 = "";
                $FinMarqueur1 = "";
                }
                
                if ($row[1]==$equipe_fetiche )
                {
                $DebMarqueur2 = "<b>";
                $FinMarqueur2 = "</b>";
                }

                else
                {
                $DebMarqueur2 = "";
                $FinMarqueur2 = "";
                }

                $bgcolor="#FFFFFF";
                        

                echo "<TR class=phpfed3GS bgcolor=$bgcolor width=\"100%\">";
                echo "<TD class=phpfed3GS align=\"right\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[0]\" width=40 height=50></a>";
                echo "</td><TD class=phpfed3GS align=\"center\">".$domproba."</td><TD class=phpfed3GS>-</td><TD class=phpfed3GS>".$extproba."</td>";
                echo "<TD class=phpfed3GS align=\"left\" width=\"41%\">";
                echo "<a href=\"club.php?id_clubs=$row[5]&champ=$champ\"><img border=0 src=\"$row[1]\" width=40 height=50></a>";
                echo "</td></tr>";                
                $x++;
             }

        echo "</table>";
 }                              }
?>
