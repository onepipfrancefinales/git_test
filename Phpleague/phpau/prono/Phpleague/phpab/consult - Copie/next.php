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
        <body class=phpab>
<?php

if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom FROM phpab_divisions, phpab_championnats WHERE id_division=phpab_divisions.id and phpab_championnats.id='$champ'";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="SELECT * FROM phpab_parametres WHERE id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpab_clubs, phpab_equipes WHERE phpab_equipes.id='$id_equipe_fetiche' AND phpab_clubs.id=phpab_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=stripslashes($row[0]);

       }

$query="SELECT max(phpab_journees.numero) from phpab_journees, phpab_matchs where phpab_journees.id=phpab_matchs.id_journee and buts_dom is not NULL and phpab_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0]+1;
                                 
$query1="SELECT cldom.nom as cldom, clext.nom as clext, phpab_matchs.buts_dom, phpab_matchs.buts_ext , phpab_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, phpab_matchs.date_reelle
                FROM phpab_equipes as dom, phpab_equipes as ext, phpab_matchs, phpab_journees, phpab_clubs as cldom, phpab_clubs as clext
                WHERE phpab_matchs.id_equipe_dom=dom.id
                        AND phpab_matchs.id_equipe_ext=ext.id
                        AND phpab_journees.id_champ='$champ'
                        AND phpab_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpab_matchs.id_journee=phpab_journees.id
                        AND (phpab_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpab_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1);
         echo "<TABLE class=phpab cellspacing=\"0\" align=\"center\" >";
        $x=1;
        $legende="�me journ�e de $nom";
        
             while ($row=mysql_fetch_array($result))
             {
      $row[0] = stripslashes($row[0]);
      $row[1] = stripslashes($row[1]);

             $domproba= $row[2];
             $extproba= $row[3];


             if ($x==1)
                {
                //$date = ereg_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[4]);
                $date_reelle = $row[7];
                $minute = substr($date_reelle,14,2); // on r�cup�re la minute
                $heure = substr($date_reelle,11,2); // on r�cup�re l'heure
                $jour = substr($date_reelle,8,2); // on r�cup�re le jour
                $mois = substr($date_reelle,5,2); // puis le mois
                $annee = substr($date_reelle,0,4); // et l'annee
                echo "<TR class=phpab ><TH class=phpab colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$jour."/".$mois."/".$annee."".CONSULT_CLMNT_MSG5."".$heure."h".$minute."</b></th></tr>";
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
                        

                echo "<TR class=phpab bgcolor=$bgcolor width=\"100%\"><TD class=phpab align=\"right\" width=\"40%\"><a href=\"club.php?id_clubs=$row[5]&champ=$champ\">".$DebMarqueur1.$row[0].$FinMarqueur1."</a><TD class=phpab align=\"center\">".$domproba."<TD class=phpab align=center>-<TD class=phpab>".$extproba."<TD class=phpab align=\"left\" width=\"40%\"><a href=\"club.php?id_clubs=$row[6]&champ=$champ\">".$DebMarqueur2.$row[1].$FinMarqueur2."</a>";
                $x++;
             }

        echo "</table>";
 }                              }
?>
