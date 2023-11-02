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

if ($action2=="1")
 {
  $resultats=$idconnect->query("  SELECT id_champ 
								  FROM phpab_parametres 
								  WHERE id_champ='$champ'");


 $row=mysqli_fetch_array($resultats);
 $nb_resultats=mysqli_num_rows($resultats);

 if ($nb_resultats>0)
   {
   //M�j des param�tres
    mysqli_query ($idconnect,(" UPDATE phpab_parametres 
								SET pts_victoire='$pts_victoire', pts_nul='$pts_nul', pts_defaite='$pts_defaite', accession='$accession', barrage='$barrage', relegation='$relegation', id_equipe_fetiche='$id_equipe_fetiche', fiches_clubs='$fiches_clubs', estimation='$estimation' 
								WHERE id_champ='$champ'")) ;
   }
   else
   {
    // Insertion des param�tres dans la bdd
   // $requete="INSERT INTO phpab_parametres (id_champ, pts_victoire, pts_nul, pts_defaite, accession, barrage, relegation,id_equipe_fetiche, fiches_clubs, estimation) 
	//VALUES ('$champ', '$pts_victoire', '$pts_nul', '$pts_defaite', '$accession', '$barrage', '$relegation', '$id_equipe_fetiche', '$fiches_clubs', '$estimation')";
 //   $resultats = mysqli_query ($requete);
 //   if (!$resultats) ;
    }  
 }

if ($malus)
 {
  $y=nb_equipes($champ, $idconnect);
  $x=0;

  while($x<$y)
   {
	mysqli_query($idconnect, (" UPDATE phpab_equipes 
								SET penalite = '$malus[$x]'  
								WHERE id = '$id_equipe[$x]'")) ;
    $x++;
   }
 }
 
 if ($pts_admin)
 {
  $y=nb_equipes($champ, $idconnect);
  $x=0;

  while($x<$y)
   {
    mysqli_query($idconnect, (" UPDATE phpab_equipes 
								SET pts_admin = '$pts_admin[$x]'  , jour_pere = '$jour_pere[$x]'
								WHERE id = '$id_equipe[$x]'")) ;
    $x++;
   }
 } 
?>

<table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="3"><?php echo ADMIN_PARAM_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
            </tr>
            <tr>
              <td>
<table align=center cellspacing="0" width="100%">

<?php
//pamametres ($champ);
// $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $resultats=$idconnect->query("SELECT * FROM phpab_parametres WHERE id_champ='$champ'");
//$resultats = mysql_query ($requete);
$existant=mysqli_fetch_array($resultats);

echo "<tr>";
echo "<td class=phpab3><form method=\"post\" action=\"\">";

//points pour la victoire
echo ADMIN_PARAM_MSG2;
echo "<td class=phpab3>";
echo "<input type=\"text\" name=\"pts_victoire\" value=\"$existant[pts_victoire]\" size=3 maxlength=3>";

// points pour un nul
echo "<tr><td class=phpab4>";
echo ADMIN_PARAM_MSG3;
echo "<td class=phpab4>";
echo "<input type=\"text\" name=\"pts_nul\"  value=\"$existant[pts_nul]\" size=3 maxlength=3>";

// points pour une d�faite
echo "<tr><td class=phpab3>";
echo ADMIN_PARAM_MSG4;
echo " <td class=phpab3>";
echo "<input type=\"text\" name=\"pts_defaite\"  value=\"$existant[pts_defaite]\" size=3 maxlength=3>";

// Nombre d'�quipe pour l'accession directe
echo "<tr><td  class=phpab4>";
echo ADMIN_PARAM_MSG5;
echo " <td class=phpab4>";
echo "<input type=\"text\" name=\"accession\"  value=\"$existant[accession]\" size=3 maxlength=3>";

// Nombre d'�quipe pour des l'accession en barrages
echo "<tr><td class=phpab3>";
echo ADMIN_PARAM_MSG6;
echo " <td class=phpab3>";
echo "<input type=\"text\" name=\"barrage\"  value=\"$existant[barrage]\" size=3 maxlength=3>";

// Nombre d'�quipe pour la descente
echo "<tr><td class=phpab4>";
echo ADMIN_PARAM_MSG7;
echo " <td class=phpab4>";
echo "<input type=\"text\" name=\"relegation\"  value=\"$existant[relegation]\" size=3 maxlength=3>";

// Equipe � suivre plus particuli�rement
// $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
 /* 
  $resultats=$idconnect->query("SELECT phpab_clubs.nom, phpab_equipes.id FROM phpab_equipes, phpab_clubs WHERE phpab_equipes.id_champ='$champ' AND phpab_clubs.id=phpab_equipes.id_club ORDER by nom");

  //$resultats = mysqli_query ($requete);
echo "<tr><td class=phpab3>";
echo ADMIN_PARAM_MSG8;
echo " <td class=phpab3>";
echo "<select name=\"id_equipe_fetiche\">";
echo "<option value=\"0\"></option>";

  while ($row=mysqli_fetch_array($resultats))
   {
    $row[0] = stripslashes($row[0]);
    if (isset($existant["id_equipe_fetiche"]))
     {
       if ($row[1]==$existant[id_equipe_fetiche]) echo "<option value=\"$row[1]\" selected >$row[0]</option>";
       else { echo "<option value=\"$row[1]\">$row[0]</option>";}
     }
    else { echo "<option value=\"$row[1]\">$row[0]</option>";}
   }
   
echo "</select>";

// Activer fiches clubs ?
echo "<tr><td class=phpab4>";
echo ADMIN_TAPVERT_MSG4;
echo " <td class=phpab4>";

  if ($existant['fiches_clubs']=="1"){$checked1="checked"; $checked2="";}
  if ($existant['fiches_clubs']=="0"){$checked1=""; $checked2="checked";}
  else {$checked1="checked"; $checked2="";}

echo "<input type=\"radio\" value=\"1\" $checked1 name=\"fiches_clubs\">".ADMIN_RENS_17." <input type=\"radio\" value=\"0\" $checked2 name=\"fiches_clubs\">".ADMIN_RENS_18." ";
*/
// Activer estimations dans la page classement ?
echo "<tr><td class=phpab3>";
echo ADMIN_TAPVERT_MSG6;
echo " <td class=phpab3>";

  if ($existant['estimation']=="1"){$checked1="checked"; $checked2="";}
  if ($existant['estimation']=="0"){$checked1=""; $checked2="checked";}

echo "<input type=\"radio\" value=\"1\" $checked1 name=\"estimation\">".ADMIN_RENS_17." <input type=\"radio\" value=\"0\" $checked2 name=\"estimation\">".ADMIN_RENS_18." ";


echo "</tr><tr><input type=\"hidden\" name=\"action2\" value=\"1\"><input type=\"hidden\" name=\"champ\" value=\"$champ\"><td colspan=2 align=\"center\"><input type=\"submit\" value=".ENVOI.">";
echo "</form>";
echo "</table></td></tr>";
echo "</table>"; 

?>

<br /><br />



              


<table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="3"><?php echo ADMIN_TAPVERT_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
            </tr>
            <tr>
              <td><?php echo ADMIN_TAPVERT_MSG1; echo "<br />";echo ADMIN_TAPVERT_MSG3;
              
 // $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT id FROM phpab_equipes WHERE phpab_equipes.id_champ='$champ'");



//BONUS MALUS

echo "<form method=\"post\" action=\"\">";
// $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT DISTINCT phpab_clubs.nom, phpab_equipes.id, penalite FROM phpab_clubs, phpab_equipes WHERE phpab_equipes.id_champ='$champ' AND phpab_clubs.id=phpab_equipes.id_club ORDER BY phpab_clubs.nom");
//$result=mysql_query($query) or die(mysql_error());
while($row=mysqli_fetch_array($result))
   {
   $row[0] = stripslashes($row[0]);
   echo "<INPUT TYPE=\"TEXT\" name=\"malus[]\" value=\"$row[2]\" size=\"4\">";
   echo "<INPUT TYPE=\"HIDDEN\"  name=\"id_equipe[]\" value=\"$row[1]\">";
   echo "$row[0]<br />";
   }
echo "<INPUT TYPE=\"HIDDEN\"  name=\"champ\" value=\"$champ\">";
echo "<INPUT TYPE=\"HIDDEN\"  name=\"page\" value=\"championnat\">";
echo "<INPUT TYPE=\"HIDDEN\"  name=\"action\" value=\"parametres\">";
$button=ENVOI;
echo "<input type=\"submit\" value=$button></form><br />";

              ?>
              
              </td>
            </tr>
</table><br /><br />

<!-- tableau points admin p�r�quation autres-->

<table class=phpab width="80%">
  <tr>
    <td class=phpab2 align="center" colspan="4"><?php echo "Points administratifs "; affich_champ ($champ, $idconnect); ?></td>
  </tr>
  <tr>
    <td><?php 
	
	echo ADMIN_TAPVERT_MSG1; echo "<br />";echo ADMIN_TAPVERT_MSG3;

	$result=$idconnect->query(" SELECT id 
								FROM phpab_equipes 
								WHERE phpab_equipes.id_champ='$champ'");

	echo "<form method=\"post\" action=\"\">";
	
	$result=$idconnect->query("	SELECT DISTINCT phpab_clubs.nom, phpab_equipes.id, phpab_equipes.pts_admin, phpab_equipes.jour_pere  
								FROM phpab_clubs, phpab_equipes 
								WHERE phpab_equipes.id_champ='$champ' 
								AND phpab_clubs.id=phpab_equipes.id_club 
								ORDER BY phpab_clubs.nom");

	while($row=mysqli_fetch_array($result))
		{
		$row[0] = stripslashes($row[0]);
		echo "<INPUT TYPE=\"TEXT\" name=\"pts_admin[]\" value=\"$row[2]\" size=\"4\">";
		echo "<INPUT TYPE=\"HIDDEN\"  name=\"id_equipe[]\" value=\"$row[1]\">";
		echo "<INPUT TYPE=\"TEXT\"  name=\"jour_pere[]\" value=\"$row[3]\">";
		echo "$row[0]<br />";
		
		}

	echo "<INPUT TYPE=\"HIDDEN\"  name=\"champ\" value=\"$champ\">";
	echo "<INPUT TYPE=\"HIDDEN\"  name=\"page\" value=\"championnat\">";
	echo "<INPUT TYPE=\"HIDDEN\"  name=\"action\" value=\"parametres\">";
	
	$button=ENVOI;
	echo "<input type=\"submit\" value=$button></form><br />"; ?>   
	
    </td>
  </tr>
</table>

<br /><br />
