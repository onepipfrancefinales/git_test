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
<html>
<head>
<title>Fiches clubs</title>
<link rel= "stylesheet" type= "text/css" href="../league.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php



if (isset($_POST['urllogo'])) {$urllogo=$_POST['urllogo'];} else {$urllogo='';}
if (isset($_POST['nom'])) {$nom=$_POST['nom'];} else {$nom='';}
if (isset($_POST['etat'])) {$etat=$_POST['etat'];} else {$etat='';}
if (isset($_POST['url'])) {$url=$_POST['url'];} else {$url='';}
if (isset($_POST['idd'])) {$idd=$_POST['idd'];} else {$idd='';}

if(!isset($_POST['id']))
{
       $result=mysql_query("SELECT id, nom FROM phpal_clubs ORDER BY nom");
       echo "<form method=\"post\" action=\"\">";
       echo "<h3>".ADMIN_GESTEQUIPE_2."</h3>";
       echo "<select name=\"id\">";
       echo "<option value=\"0\"> </option>";

            while($row = mysql_fetch_array($result))
            {
               $row[1] = stripslashes($row[1]);
	       echo (" <option value=\"$row[0]\">$row[1]");
               echo ("</option>\n");
            }

       echo "</select>";
       $button=ENVOI;
       echo "<input type=\"submit\" value=$button>";
       echo "<input type=\"hidden\" name=\"page\" value=\"fiches_clubs\">";
       echo "<input type=\"hidden\" name=\"action\" value=\"gest\">";
       echo "</form>";
      
}



elseif ($go<>"1")
{
       // On met a jour la bd
       //$query= "SELECT * FROM phpal_logo WHERE id_club='$id'";
       //$result = mysql_query ($query);
       //$nb=mysql_num_rows($result);

       // Si pas d'URL logo renseign�e, on l'ins�re
       //if ($nb=='0')
       //{
         //mysql_query ("INSERT INTO phpal_logo (id_club) VALUES ('$id')") or die ("probleme " .mysql_error());
         //mysql_query ("UPDATE phpal_clubs SET url_logo = '$pts'  WHERE id = '$id_equipe'") or die ("probleme " .mysql_error());

         //}

       $query2= "SELECT * FROM phpal_donnee WHERE id_clubs='$id'";
       $result2 = mysql_query ($query2);
       $nb2=mysql_num_rows($result2);
       $nb_rens=nb_rens2($idconnect);

       // Si pas de donn�e pour les renseignements, on les cr�e
       if ($nb2!=$nb_rens)
       {
         mysql_query ("DELETE FROM phpal_donnee WHERE id_clubs=$id");
         $query="SELECT id FROM phpal_rens";
         $result=mysql_query($query);
         while($row=mysql_fetch_array($result))
         {
         mysql_query ("INSERT INTO phpal_donnee (id_clubs, id_rens) VALUES ('$id', '$row[0]')") or die ("probleme " .mysql_error());
         }
         }
       
       echo "<h3>";
       $query="SELECT id, nom FROM phpal_clubs WHERE id='$id'";
       $result = mysql_query ($query);

               While($row = mysql_fetch_array($result))
               {
                 $row[1] = stripslashes($row[1]);
                 echo "<h3 align=\"center\">";
		 echo ADMIN_GESTEQUIPE_1." ";
		 echo $row[1];
               }

       echo "</h3><br /><br />";
       echo "<table class=tablephpal2 border=\"0\" cellpadding=\"2\" cellspacing=\"0\" valign=\"bottom\" align=\"center\" width=\"90%\"><form method=\"post\" action=\"\">";
       echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";
       echo "<input type=\"hidden\" name=\"page\" value=\"fiches_clubs\">";
       echo "<input type=\"hidden\" name=\"action\" value=\"gest\">";
       $query="SELECT phpal_clubs.id, url_logo FROM phpal_clubs WHERE phpal_clubs.id='$id'";
       $result = mysql_query ($query) or die(mysql_error());;

               While($row = mysql_fetch_array($result))
               {
                          echo "<tr class=phpal3>
                          <td align=\"left\"><b>Classe</b></td>
                          <td align=\"left\"><b>".ADMIN_GESTEQUIPE_3."</b></td>
                          <td align=\"left\"><b>".ADMIN_GESTEQUIPE_4."</b></td>
                          <td align=\"left\"><b>".ADMIN_EQUIPE_5."</b></td>
                          <td align=\"left\"><b>".ADMIN_EQUIPE_6."</b></td></tr>";
                          echo "<tr class=phpal2><td></td><td align=\"left\">".ADMIN_EQUIPE_7."</td>";
                          echo "<td align=\"left\"><input type=\"text\" name=\"urllogo\" value=\"$row[1]\" size=25 maxlength=200><td></td><td></td></td></tr>";
               }

        $query2="SELECT phpal_classe.nom, phpal_classe.id FROM phpal_classe order by rang";
        $result2 = mysql_query ($query2);
                          $i=0;
                 while($row2 = mysql_fetch_array($result2))
                 {
                             $query="SELECT phpal_rens.nom, phpal_donnee.nom, phpal_donnee.id, phpal_donnee.etat, phpal_donnee.url, phpal_classe.nom
                             FROM phpal_rens, phpal_classe, phpal_clubs, phpal_donnee
                             WHERE phpal_clubs.id='$id'
                                   AND id_clubs='$id'
                                   AND id_classe='$row2[1]'
                                   AND id_classe=phpal_classe.id
                                   AND phpal_rens.id=id_rens
                             ORDER by phpal_rens.rang";
                             $result=mysql_query ($query) or die (mysql_error());
                                     
                                     While($row=mysql_fetch_array($result))
                                     {         
                                                $donnee_nom=stripslashes($row[1]);
                                                $rens_nom=stripslashes($row[0]);
                                                echo "<tr><td><b>$row[5]</b></td>";
                                                echo "<td>$rens_nom : </td>";
                                                echo "<td><input type=\"text\" name=\"nom[]\" value=\"$donnee_nom\" size=25></td>";
                                                echo "<td><input type=\"text\" name=\"url[]\" value=\"$row[4]\" size=25></td>";
                                                echo "<td><center>";
                                                if ($row[3]=="1") {echo "<input type=\"checkbox\" name=\"etat_$i\" value=\"1\" checked>";}
                                                else {echo "<input type=\"checkbox\" name=\"etat_$i\" value=\"1\">";}
                                                echo "</center></td>";
                                                echo "<input type=\"hidden\" name=\"idd[]\" value=\"$row[2]\" size=40 maxlength=99>";
                                                echo "</tr>";
                                                $i++;
                                                
                                     }

                 }

         echo "<tr><td colspan=\"8\"><br /><input type=\"hidden\" name=\"go\" value=\"1\">
         <center><input type=\"submit\" value=".ENVOI."></td></tr></table>";
         echo "<br /><br />";
         $query="SELECT url_logo FROM phpal_clubs WHERE id='$id'";
         $result = mysql_query($query);

                 while($row = mysql_fetch_array($result))
                 {
                            echo "<center><img src=\"$row[0]\"><br /><br /><br /><br />";
                 }
                 
         $query="SELECT phpal_classe.nom, phpal_classe.id FROM phpal_classe order by rang";
         $result = mysql_query ($query);

                 while($row = mysql_fetch_array($result))
                 {
                            echo "<table class=tablephpal2 cellspacing=\"0\" align=center width=\"90%\">";
                            echo "<tr class=phpal3><td><b><font color=\"#FFFFFF\">$row[0]</font></b></td></tr>";
                            $id_classe=$row[1];
                            echo "<td><table cellspacing=\"0\"><tr><td><font face=\"arial\" size=\"2\">";
                            $aff_rens=aff_rens ($id_classe, $id);
                            echo "$aff_rens</font>";
                            echo "</tr></td>";
                            echo "</table></td></table><br /><br />";
                 }

         echo "<table class=tablephpal2 cellspacing=\"0\" align=center width=\"90%\"><tr class=phpal3><td><b><font color=\"#FFFFFF\">".CONSULT_CLUB_3."</font></b></td></tr>";
         $query="SELECT annee, phpal_divisions.nom, phpal_championnats.id, phpal_equipes.id
         FROM phpal_saisons, phpal_championnats, phpal_divisions, phpal_clubs, phpal_equipes
         WHERE phpal_equipes.id_champ=phpal_championnats.id
               AND id_division=phpal_divisions.id
               AND phpal_clubs.id=id_club
               AND phpal_equipes.id_club='$id'
               AND phpal_saisons.id=phpal_championnats.id_saison order by annee desc";
         $result = mysql_query($query);
         
                 while($row = mysql_fetch_array($result))
                 {
        echo "<tr><td></td></tr>";
        echo "<tr class=\"trphpal2\"><td align=\"center\">$row[0]/". ($row[0]+1)." ($row[1])</td></tr>";
        echo "<tr><td align=\"center\"><a href=\"../consult/classement.php?champ=$row[2]&amp;type=G%E9n%E9ral\">".CONSULT_CLUB_1."</a> - <a href=\"../consult/detaileq.php?champ=$row[2]&amp;id_equipe=$row[3]\">".CONSULT_CLUB_2."</a> - <a href=\"#\" onclick=\"window.open('../consult/graph.php?equipe=$row[3]','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".CONSULT_CLUB_4."</a><br /><br /></td></tr>\n";
                }
         echo"</table><br /><br />";
}

elseif ($go=="1")
{       $nb_rens=nb_rens2($idconnect);
    for ($i="0"; $i < $nb_rens; $i++)
    {
      $nom_etat="etat_$i";
      if (isset($_POST[$nom_etat])) {$etat[$i]=1;}
      else {$etat[$i]=0;}
    }

    reset ($url);
    reset ($nom);
    reset ($etat);
    reset ($idd);
	 while ( list ($cle, $val)= each ($url) and list ($cle, $val1)= each ($nom) and list ($cle, $val2)= each ($etat) and list ($cle, $val3)= each ($idd))
         {
         $val_1=addslashes($val1);
         mysql_query ("UPDATE phpal_clubs SET url_logo='$urllogo' WHERE id='$id'") or die ("probleme " .mysql_error());
         mysql_query ("UPDATE phpal_donnee SET nom='$val_1', etat='$val2', url='$val' WHERE id='$val3'") or die ("probleme " .mysql_error());
         }
     echo "<font color=\"#008000\">".ADMIN_CLASSE_2."</font>";
     echo "</form>" ;

}

?>
</body>
</html>
