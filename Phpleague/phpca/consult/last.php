<?php
//***********************************************************************/
// phpcaeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpcaeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpcaeague.univert.org/forum               */
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


if (!isset($_REQUEST['champ']))
       {
         demande_champ ();
       }
else
{
$champ = $_REQUEST['champ'];
// Nom du champ
$query2="SELECT nom from phpca_divisions, phpca_championnats where id_division=phpca_divisions.id";
$result2=(mysql_query($query2));
while ($row=mysql_fetch_array($result2))
       {
       $nom=$row[0];
       }

// SELECTION DES PARAMETRES
$query="select * from phpca_parametres where id_champ='$champ' ";
$result=(mysql_query($query));
while ($row=mysql_fetch_array($result))
       {
       $id_equipe_fetiche=$row['id_equipe_fetiche'];
       }

// NOM de EQUIPE FAVORITE a partir de son id
$result=(mysql_query("SELECT nom FROM phpca_clubs, phpca_equipes WHERE phpca_equipes.id='$id_equipe_fetiche' AND phpca_clubs.id=phpca_equipes.id_club"));
while ($row=mysql_fetch_array($result))
       {
       $equipe_fetiche=stripslashes($row[0]);
       }

$query="SELECT max(phpca_journees.numero) from phpca_journees, phpca_matchs where phpca_journees.id=phpca_matchs.id_journee and buts_dom is not NULL and phpca_journees.id_champ='$champ' and (id_equipe_ext='$id_equipe_fetiche' or id_equipe_dom='$id_equipe_fetiche')";
                      $result=mysql_query($query);

                               while ($row=mysql_fetch_array($result))
                               { $numero=$row[0];
                                 
$query1="SELECT cldom.nom as cldom, clext.nom as clext, phpca_matchs.buts_dom, phpca_matchs.buts_ext , phpca_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, phpca_matchs.date_reelle
                FROM phpca_equipes as dom, phpca_equipes as ext, phpca_matchs, phpca_journees, phpca_clubs as cldom, phpca_clubs as clext
                WHERE phpca_matchs.id_equipe_dom=dom.id
                        AND phpca_matchs.id_equipe_ext=ext.id
                        AND phpca_journees.id_champ='$champ'
                        AND phpca_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpca_matchs.id_journee=phpca_journees.id
                        AND (phpca_matchs.id_equipe_ext='$id_equipe_fetiche'
                        OR phpca_matchs.id_equipe_dom='$id_equipe_fetiche' )";
        $result=mysql_query($query1);
         echo "<TABLE cellspacing=\"0\" align=\"center\" width=\"50%\">";
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
                echo "<TR ><TH colspan=5 text-align=\"center\"><b> ". $numero."".$legende." le ".$jour."/".$mois."/".$annee."".CONSULT_CLMNT_MSG5."".$heure."h".$minute."</b></th></tr>";
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
                
                $bgcolor="FFFFFF";

                echo "<TR bgcolor=$bgcolor width=\"100%\"><TD class=phpca align=\"center\" width=\"40%\"><a href=\"club.php?id_clubs=$row[5]&champ=$champ\">".$DebMarqueur1.$row[0].$FinMarqueur1."</a><TD class=phpca align=\"center\">".$domproba."<TD class=phpca align=\"center\">-<TD>".$extproba."<TD align=\"center\" width=\"40%\"><a href=\"club.php?id_clubs=$row[6]&champ=$champ\">".$DebMarqueur2.$row[1].$FinMarqueur2."</a>";
                $x++;
             }
        echo "</table>";
                               }
echo "<br /><br />";
}
?>
