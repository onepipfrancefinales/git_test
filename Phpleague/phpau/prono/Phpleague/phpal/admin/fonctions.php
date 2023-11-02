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


function affich_championnats ($champ, $action, $idconnect)
{
  $resultats=$idconnect->query("SELECT phpal_championnats.id, phpal_divisions.nom, phpal_saisons.annee 
            FROM phpal_championnats, phpal_divisions, phpal_saisons 
            WHERE phpal_championnats.id_division=phpal_divisions.id
            AND phpal_championnats.id_saison=phpal_saisons.id 
			ORDER BY id, nom");

  $i=0;
    while ($row = mysqli_fetch_array($resultats))
      {
        $saison=$row[2]+1;
        $gras_fin="</b>";

        for($i=1;$i<=9;$i++)
        {
          //echo "sg";
          $gras = "gras_$i";
          $$gras="</b>";
        }

        if ($action=="equipes" and $champ=="$row[0]"){$gras_1="<b>";}
        elseif ($action=="dates" and $champ==$row[0]){$gras_2="<b>";}
        elseif ($action=="matchs" and $champ==$row[0]){$gras_3="<b>";}
        elseif ($action=="parametres" and $champ==$row[0]){$gras_4="<b>";}
        elseif ($action=="resultats" and $champ==$row[0]){$gras_5="<b>";}
        elseif ($action=="generer" and $champ==$row[0]){$gras_7="<b>";}
        

        if ($champ=="$row[0]") {$class="phpal7";}
        elseif (($i%2)==0) {$class="phpal3";}
        else {$class="phpal4";}

        echo "<tr>";
        echo "<td class='$class'>$row[0]</td>";
        echo "<td class='$class'>$row[1]</td>";
        echo "<td class='$class'>$row[2]/$saison</td>";
        echo "<td class='$class' align=\"right\" width=\"75%\">";

       // echo " $gras_1<a href=\"?page=championnat&action=equipes&champ=$row[0]\">[".EQUIPE."]</a>$gras_fin";
       // echo " $gras_2<a href=\"?page=championnat&action=dates&champ=$row[0]\">[".DATE."]</a>$gras_fin";
       // echo " $gras_3<a href=\"?page=championnat&action=matchs&champ=$row[0]\">[".MATCH."]$gras_fin</a>";
        echo " $gras_4<a href=\"?page=championnat&action=parametres&champ=$row[0]\">[".PARAMETRE."]$gras_fin</a>";
        echo " $gras_5<a href=\"?page=championnat&action=resultats&champ=$row[0]\">[".RESULT."]$gras_fin</a>";
        echo " $gras_7<a href=\"?page=championnat&action=generer&champ=$row[0]\">[".GENERER."]$gras_fin</a>";
        echo "</tr>";
        $i++;
      }
}

function affich_championnatsMAJ ($champ, $action, $idconnect)
{
  $resultats=$idconnect->query("SELECT id
								FROM phpal_championnats 
								WHERE id='$champ' ");
  $i=0;
    while ($row = mysqli_fetch_array($resultats))
      {
        //$saison=$row[2]+1;
        $gras_fin="</b>";

        for($i=1;$i<=9;$i++)
        {
          $gras = "gras_$i";
          $gras="</b>";
        }

        if ($action=="equipes" and $champ=="$row[0]"){$gras_1="<b>";}
        elseif ($action=="dates" and $champ==$row[0]){$gras_2="<b>";}
        elseif ($action=="matchs" and $champ==$row[0]){$gras_3="<b>";}
        elseif ($action=="parametres" and $champ==$row[0]){$gras_4="<b>";}
        elseif ($action=="resultats" and $champ==$row[0]){$gras_5="<b>";}
       // elseif ($action=="generer" and $champ==$row[0]){$gras_7="<b>";}
        

        if ($champ=="$row[0]") {$class="phpal7";}
        elseif (($i%2)==0) {$class="phpal3";}
        else {$class="phpal4";}

        echo "<tr>";
       // echo "<td class='$class'>$row[0]</td>";
       // echo "<td class='$class'>$row[1]</td>";
       // echo "<td class='$class'>$row[2]/$saison</td>";
        echo "<td class='$class' align=\"center\" width=\"50%\">";

       // echo " $gras_1<a href=\"?page=championnat&action=equipes&champ=$row[0]\">[".EQUIPE."]</a>$gras_fin";
       //echo " $gras_2<a href=\"?page=championnat&action=dates&champ=$row[0]\">[".DATE."]</a>$gras_fin";
       // echo " $gras_3<a href=\"?page=championnat&action=matchs&champ=$row[0]\">[".MATCH."]$gras_fin</a>";
        //echo " $gras_4<a href=\"?page=championnat&action=parametres&champ=$row[0]\">[".PARAMETRE."]$gras_fin</a>";
       // echo " $gras_5<a href=\"?page=championnat&action=resultats&champ=$row[0]\">[".RESULT."]$gras_fin</a>";
		echo " <b><a href=\"index6.php?page=championnat&action=generer&champ=$champ\">[".GENERER."]</b></a>";
		echo "</tr>";
       // $i++;
      }
	  
}


function affich_gr_championnats ($gr_champ, $action, $idconnect)
{
   $resultats=$idconnect->query("  SELECT DISTINCT id, nom 
								   FROM phpal_gr_championnats 
								   ORDER by id desc");

  $i=0;
    while ($row = mysqli_fetch_array($resultats))
      {
        $gras_fin="</b>";

        for($i=1;$i<=8;$i++)
        {
          $gras = "gras_$i";
          $$gras="</b>";
        }

        if ($action=="editer" and $gr_champ=="$row[0]"){$gras_1="<b>";}

        if ($gr_champ=="$row[0]") {$class="phpal7";}
        elseif (($i%2)==0) {$class="phpal3";}
        else {$class="phpal4";}

        echo "<tr>";
        echo "<td class='$class'>$row[0]</td>";
        echo "<td class='$class'>$row[1]</td>";
        echo "<td class='$class' align=\"right\" width=\"75%\">";

        echo " $gras_1<a href=\"?page=groupes_championnats&action=editer&gr_champ=$row[0]\">[".EDITER."]</a>$gras_fin";
        echo " $gras_2<a href=\"?page=groupes_championnats&action=generer&gr_champ=$row[0]\">[".ADMIN_GR_CHAMP_GENERER."]</a>$gras_fin";
        echo " $gras_8<a href=\"?page=groupes_championnats&action=supp&gr_champ=$row[0]\">[".ADMIN_RENS_8."]$gras_fin</a></td>";

        echo "</tr>";
        $i++;
      }
}



function affich_champ ($champ, $idconnect)
{
  $resultats=$idconnect->query("SELECT phpal_divisions.nom, phpal_saisons.annee 
              FROM phpal_championnats, phpal_divisions, phpal_saisons
              WHERE phpal_championnats.id_division=phpal_divisions.id 
              AND phpal_championnats.id_saison=phpal_saisons.id 
              AND phpal_championnats.id='$champ' ORDER by annee desc");

    while ($row = mysqli_fetch_array($resultats))
      {
        $saison=$row[1]+1;
        echo "$row[0] $row[1]/$saison";
      }
}

function affich_gr_champ ($gr_champ, $idconnect)
{	
  $resultats=$idconnect->query("  SELECT nom 
								  FROM phpal_gr_championnats 
								  WHERE id='$gr_champ'");
   
    $row = mysqli_fetch_array($resultats);
    
        echo "$row[0]";
}

function divisions_menu ($idconnect)
{
  $result=$idconnect->query(" SELECT phpal_divisions.id, phpal_divisions.nom 
							  FROM phpal_divisions 
							  ORDER by nom");

echo "<select name=division>";
echo "<option></option>";
while($row = mysqli_fetch_array($result))
                {
                echo ("<option value=\"$row[0]\">$row[1]\n");
                echo ("</option>\n");
                }
echo "</select>";
}

function saisons_menu($idconnect)
{
  $result=$idconnect->query(" SELECT phpal_saisons.id, phpal_saisons.annee 
							  FROM phpal_saisons 
							  ORDER by annee");

echo "<select name=saison>";
echo "<option></option>";
while($row = mysqli_fetch_array($result))
                {
                $saison1=$row[1]+1;
                echo ("<option value=\"$row[0]\">$row[1]/$saison1\n");
                echo ("</option>\n");
                }
echo "</select>";
}

function clubs_menu($idconnect)
{    
  $result=$idconnect->query(" SELECT phpal_clubs.id, phpal_clubs.nom 
							  FROM phpal_clubs 
							  ORDER by nom");
  
    echo "<select name=\"club[]\" multiple size=\"8\">";
      while($row = mysqli_fetch_array($result))
      {
        $row[1] = stripslashes($row[1]);
        echo ("<option value=\"$row[0]\">$row[1]\n");
        echo ("</option>\n");
      }
echo "</select>";
}

function champ_menu($idconnect)
{
  $result=$idconnect->query(" SELECT phpal_championnats.id, phpal_divisions.nom, phpal_saisons.annee, (phpal_saisons.annee)+1 
							  FROM phpal_championnats, phpal_divisions, phpal_saisons 
							  WHERE phpal_divisions.id=phpal_championnats.id_division 
							  AND phpal_saisons.id=phpal_championnats.id_saison 
							  ORDER by annee desc, phpal_divisions.nom");
   
    echo "<select name=\"champ[]\" multiple size=\"8\">";
      while($row = mysqli_fetch_array($result))
      {
        echo ("<option value=\"$row[0]\">$row[1] $row[2]/$row[3]\n");
        echo ("</option>\n");
      }
echo "</select>";
}

function equipes_menu($champ, $idconnect)
{
  $result=$idconnect->query(" SELECT phpal_equipes.id, phpal_clubs.nom 
							  FROM phpal_clubs, phpal_equipes 
							  WHERE id_champ='$champ' 
							  AND phpal_clubs.id=phpal_equipes.id_club 
							  ORDER by nom");
    
    echo "<select name=\"club[]\" multiple size=\"8\">";
      while($row = mysqli_fetch_array($result))
      {
        $row[1] = stripslashes($row[1]);
        echo ("<option value=\"$row[0]\">$row[1]\n");
        echo ("</option>\n");
      }
echo "</select>";
}

function champ_gr_menu($gr_champ, $idconnect)
{
   echo "<select name=\"champ[]\" multiple size=\"8\">";	
  
  $result=$idconnect->query(" SELECT id_champ 
							  FROM phpal_gr_championnats 
							  WHERE id = '$gr_champ'");
    
    while ($row=mysqli_fetch_array($result))
    {
         $result2 = "SELECT phpal_championnats.id, phpal_divisions.nom, phpal_saisons.annee, (phpal_saisons.annee)+1 
					 FROM phpal_championnats, phpal_divisions, phpal_saisons 
					 WHERE phpal_divisions.id=phpal_championnats.id_division 
					 AND phpal_saisons.id=phpal_championnats.id_saison 
					 AND phpal_championnats.id='$row[0]'  
					 ORDER by annee desc, phpal_divisions.nom";
         while($row2 = mysqli_fetch_array($result2))
         {
            echo ("<option value=\"$row2[0]\">$row2[1] $row2[2]/$row2[3]\n");
            echo ("</option>\n");
         }
    }
  echo "</select>";
}

function journees ($champ, $numero, $action, $idconnect)
{
  $resultats=$idconnect->query("  SELECT numero, id 
								  FROM phpal_journees 
								  WHERE id_champ='$champ' 
								  ORDER BY numero");

  while ($row=mysqli_fetch_array($resultats))
     {
       if ($numero==$row[0]) {echo "<b><a href=\"?page=championnat&action=$action&champ=$champ&id_journee=$row[1]&numero=$row[0]\">$row[0]</a></b> ";}
       else {echo "<a href=\"?page=championnat&action=$action&id_journee=$row[1]&champ=$champ&numero=$row[0]\">$row[0]</a> ";}
     }
}

function format_date_fr($date){
  list($annee,$mois,$jour) = explode("-",substr($date,0,10));
  list($heure,$minute,$seconde) = explode(":",substr($date,11,7));
  return $jour."/".$mois."/".$annee." ".$heure.":".$minute;
}

function resultats ($champ, $numero, $idconnect)
{ 
  $resultats=$idconnect->query("SELECT phpal_clubs.nom, CLEXT.nom, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_matchs.id, phpal_matchs.date_reelle
            FROM phpal_clubs, phpal_clubs as CLEXT, phpal_matchs, phpal_journees, phpal_equipes, phpal_equipes as EXT
            WHERE phpal_clubs.id=phpal_equipes.id_club
                  AND CLEXT.id=EXT.id_club
                  AND phpal_equipes.id=phpal_matchs.id_equipe_dom
                  AND EXT.id=phpal_matchs.id_equipe_ext
                  AND phpal_matchs.id_journee=phpal_journees.id
                  AND phpal_journees.numero='$numero'
                  AND phpal_journees.id_champ='$champ'
                  AND CLEXT.nom!='exempte'
                  AND phpal_clubs.nom!='exempte'
                  ORDER BY date_reelle asc");

  $i=0;
  while ($row=mysqli_fetch_array($resultats))
  {
    $row[0] = stripslashes($row[0]);
    $row[1] = stripslashes($row[1]);
    if (($i%2)==0) {$class="phpal3";}
    else {$class="phpal4";}
    $date_fr=format_date_fr($row[5]);
    echo "<tr><td class=$class>$row[0]";
    echo "<td class=$class><input type=\"text\" size=\"3\" name=\"butd[]\" value=\"$row[2]\"></td>";
    echo "<td class=$class><input type=\"text\" size=\"3\" name=\"butv[]\" value=\"$row[3]\">";
    echo "<input type=\"hidden\" name=\"matchs_id[]\" value=\"$row[4]\"></td>";
    echo "<td class=$class>$row[1]</td>";
    echo "<td class=$class><input type=\"text\" size=\"16\" name=\"date_reelle[]\" value=\"$date_fr\" maxlength=\"16\"></td>";
    $matchs_id[]=$row[4];
    $i++;
  }
	
  
  $resultats3=$idconnect->query(" SELECT phpal_clubs.nom, CLEXT.nom, phpal_matchs.buts_dom, phpal_matchs.buts_ext, phpal_matchs.id, phpal_matchs.date_reelle 
								  FROM phpal_clubs, phpal_clubs as CLEXT, phpal_matchs, phpal_journees, phpal_equipes, phpal_equipes as EXT 
								  WHERE phpal_clubs.id=phpal_equipes.id_club 
								  AND CLEXT.id=EXT.id_club 
								  AND phpal_equipes.id=phpal_matchs.id_equipe_dom 
								  AND EXT.id=phpal_matchs.id_equipe_ext 
								  AND phpal_matchs.id_journee=phpal_journees.id 
								  AND phpal_journees.numero='$numero' 
								  AND phpal_journees.id_champ='$champ' 
								  AND (CLEXT.nom='exempte' or phpal_clubs.nom='exempte')");
 

  while ($row3=mysqli_fetch_array($resultats3))
  {
    $row3[0] = stripslashes($row3[0]);
    $row3[1] = stripslashes($row3[1]);
    if (($i%2)==0) {$class="phpal3";}
    else {$class="phpal4";}
    if ($row3[0]=='exempte') {echo "<tr><td colspan=6  class=$class>".ADMIN_RESULTS_1." : $row3[1]</td></tr>";}
    if ($row3[1]=='exempte') {echo "<tr><td colspan=6  class=$class>".ADMIN_RESULTS_1." : $row3[0]</td></tr>";}
  }


  echo "</tr><td colspan=\"5\" align=\"center\">";
  echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";

  $numero=$numero+1;
  echo "<input type=\"hidden\" name=\"numero\" value=\"$numero\">";
  echo "<input type=\"hidden\" name=\"action\" value=\"resultats\">";
  echo "<input type=\"hidden\" name=\"action2\" value=\"1\">";
  $button=ENVOI;
  echo "<input type=\"submit\" value=$button>";
  echo "</td></tr></table>";

}

function nb_equipes($id_champ, $idconnect)
{
  $result=$idconnect->query(" SELECT id 
							  FROM phpal_equipes 
							  WHERE id_champ='$id_champ'");

//if (!$result) die mysql_error();
$nb_equipes=mysqli_num_rows( $result );
return("$nb_equipes");
}

function format_date_us($date){
    list($jour,$mois,$annee) = explode("/",substr($date,0,10));
    list($heure,$minute) = explode(":",substr($date,10,22));

  $seconde="00";
  return $annee."-".$mois."-".$jour." ".$heure.":".$minute.":".$seconde;
}

function date_us_vers_fr($dateUS) // $dateUS=AAAA-MM-JJ
{
//$elementsdate=chunk_split($dateUS , 2 , "-");
$elementsdate=explode("-",$dateUS);
$jour=$elementsdate[2];
$mois= $elementsdate[1];
$annee=$elementsdate[0];
return $dateFR=$jour.$mois.$annee;
}

function date_fr_vers_us($dateFR)
{
if ($dateFR)
{
$elementsdate=chunk_split($dateFR , 2 , "-");
$elementsdate=explode("-",$elementsdate);

$annee=$elementsdate[2].$elementsdate[3];
$mois=$elementsdate[1];
$jour=$elementsdate[0];
$dateUS=$annee."-".$mois."-".$jour;
return $dateUS;
}
else return "00000000";
}

function nom_club($id_equipe, $idconnect)
{
  $result=$idconnect->query(" SELECT nom 
							  FROM phpal_clubs, phpal_equipes 
							  WHERE phpal_clubs.id=phpal_equipes.id_club 
							  and phpal_equipes.id='$id_equipe'");
  
  $row=mysqli_fetch_array( $result );
  $nom_club=stripslashes($row[0]);
  return("$nom_club");
}

function nb_journees($id_champ, $idconnect)
{
  $result=$idconnect->query(" SELECT id 
							  FROM phpal_equipes 
							  WHERE id_champ='$id_champ'");
  $nb_equipes=mysqli_num_rows( $result );
  $nb_journees=((($nb_equipes)*2)-2) ;
  return("$nb_journees");
}

function nb_matchs ($numero, $champ, $idconnect)
{
  $result=$idconnect->query("select * 
							 from phpal_matchs, phpal_journees 
							 where phpal_matchs.id_journee=phpal_journees.id 
							 and phpal_journees.numero=$numero 
							 and phpal_journees.id_champ=$champ");
  $nb_matchs=mysqli_num_rows( $result );
  return("$nb_matchs");
}

// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache, $idconnect)
{
  $nb_requete=0;
  if($cache=="1")
  { mysqli_query($idconnect,("DELETE FROM phpal_clmnt_cache WHERE ID_CHAMP='$champ'")) or die (mysqli_error($idconnect));}
  else
  { mysqli_query($idconnect,("DELETE FROM phpal_clmnt")) or die (mysqli_error($idconnect));}
          $nb_requete++;

          if (!$fin){$fin=(nb_equipes($champ)*2)-2;}
          if (!$debut){$debut=1;}

// SELECTION DES PARAMETRES
	 
  $result=$idconnect->query("SELECT pts_victoire, pts_nul, pts_defaite 
							 FROM phpal_parametres 
							 WHERE id_champ='$champ'");
	$nb_requete++;
	
      while ($row=mysqli_fetch_array($result) )
      {
      $pts_victoire=$row['pts_victoire'];
      $pts_nul=$row['pts_nul'];
      $pts_defaite=$row['pts_defaite'];
      }
// RESULTATS domicile :
// victoires domicile
  
  $dom=$idconnect->query("SELECT dom.id, count(dom.id), phpal_clubs.nom, sum(buts_dom), sum(buts_ext) 
						  FROM phpal_equipes as dom, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
						  WHERE dom.id_champ='$champ'
						  AND dom.id_club=phpal_clubs.id
						  AND dom.id=phpal_matchs.id_equipe_dom
						  AND buts_dom > buts_ext
						  AND phpal_championnats.id=phpal_journees.id_champ
						  AND phpal_journees.id=phpal_matchs.id_journee
						  AND phpal_journees.numero>='$debut'
						  AND phpal_journees.numero<='$fin'
						  GROUP by phpal_clubs.nom ");
      $nb_requete++;
	  
     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['GDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     
//	 echo "Victoires domiciles : ";echo "--";
//	 echo "nbre : ".$clmnt[$row[2]]['GDOM']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSDOMPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSDOMCONTRE'];echo "<br />";
	 }

// Defaites domicile
	
  $dom=$idconnect->query("SELECT dom.id, count(dom.id), phpal_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpal_equipes as dom, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpal_clubs.id
      AND dom.id=phpal_matchs.id_equipe_dom
      AND buts_dom < buts_ext
      AND phpal_championnats.id=phpal_journees.id_champ
      AND phpal_journees.id=phpal_matchs.id_journee
      AND phpal_journees.numero>='$debut'
      AND phpal_journees.numero<='$fin'
      GROUP by phpal_clubs.nom ");
	  
	  $nb_requete++;


     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['PDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     
//	 echo "Defaites domiciles : ";
//	 echo "nbre : ".$clmnt[$row[2]]['PDOM']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSDOMPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSDOMCONTRE'];echo "<br />";
	 }
	 
	 
// Nuls domicile
	 
  $dom=$idconnect->query("SELECT dom.id, count(dom.id), phpal_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpal_equipes as dom, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
	WHERE dom.id_champ='$champ'
      AND dom.id_club=phpal_clubs.id
      AND dom.id=phpal_matchs.id_equipe_dom
      AND buts_dom = buts_ext
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpal_championnats.id=phpal_journees.id_champ
      AND phpal_journees.id=phpal_matchs.id_journee
      AND phpal_journees.numero>='$debut'
      AND phpal_journees.numero<='$fin'
      GROUP by phpal_clubs.nom ");

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['NDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     
	 
//	 echo "Nuls domiciles : ";
//	 echo "nbre : ".$clmnt[$row[2]]['NDOM']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSDOMPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSDOMCONTRE'];echo "<br />";
	 
	 
	 }
	 	 
  $result=$idconnect->query("SELECT phpal_clubs.nom 
							 FROM phpal_clubs, phpal_equipes, phpal_championnats
							 WHERE phpal_equipes.id_champ=phpal_championnats.id
							 AND phpal_championnats.id='$champ'
							 AND phpal_equipes.id_club=phpal_clubs.id");

//$result=mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));

// while($row= mysqli_fetch_array($result))
//     { $equipe= $row[0];
	 
//	 echo $equipe;echo "<br />";
//	 }
	

       
// RESULTATS EXTERIEURS :
// victoires exterieur	
  
  $dom=$idconnect->query("SELECT ext.id, count(ext.id), phpal_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpal_equipes as ext, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpal_clubs.id
      AND ext.id=phpal_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpal_championnats.id=phpal_journees.id_champ
      AND phpal_journees.id=phpal_matchs.id_journee
      AND phpal_journees.numero>='$debut'
      AND phpal_journees.numero<='$fin'
      GROUP by phpal_clubs.nom ");

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
   
//	 echo "victoires exterieures : ";
//	 echo "nbre : ".$clmnt[$row[2]]['GEXT']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSEXTPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSEXTCONTRE'];echo "<br />";

	}
	 
	  
// Defaites exterieur	
  
  $dom=$idconnect->query("SELECT ext.id, count(ext.id), phpal_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpal_equipes as ext, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
		WHERE ext.id_champ='$champ'
      AND ext.id_club=phpal_clubs.id
      AND ext.id=phpal_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpal_championnats.id=phpal_journees.id_champ
      AND phpal_journees.id=phpal_matchs.id_journee
      AND phpal_journees.numero>='$debut'
      AND phpal_journees.numero<='$fin'
      GROUP by phpal_clubs.nom ");
                    
      While($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['PEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
     
//	 echo "Defaites exterieures : ";
//	 echo "nbre : ".$clmnt[$row[2]]['PEXT']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSEXTPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSEXTCONTRE'];echo "<br />";

	 }
  
  $dom=$idconnect->query("SELECT ext.id, count(ext.id), phpal_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpal_equipes as ext, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
	  WHERE ext.id_champ='$champ'
      AND ext.id_club=phpal_clubs.id
      AND ext.id=phpal_matchs.id_equipe_ext
      AND buts_ext = buts_dom
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpal_championnats.id=phpal_journees.id_champ
      AND phpal_journees.id=phpal_matchs.id_journee
      AND phpal_journees.numero>='$debut'
      AND phpal_journees.numero<='$fin'
      GROUP by phpal_clubs.nom ");

      while($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['NEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
    
//	 echo "Nuls exterieurs : ";
//	 echo "nbre : ".$clmnt[$row[2]]['NEXT']; echo "--";
//	 echo "pts pour : ".$clmnt[$row[2]]['BUTSEXTPOUR'];echo "--";
//	 echo "pts contre : ".$clmnt[$row[2]]['BUTSEXTCONTRE'];echo "<br />";

	}
	                 
// TABLEAU DE CLASSEMENT
	
  $result=$idconnect->query("SELECT phpal_clubs.nom, phpal_equipes.penalite, phpal_equipes.id
							 FROM phpal_clubs, phpal_equipes, phpal_championnats
							 WHERE phpal_equipes.id_champ=phpal_championnats.id
							 AND phpal_championnats.id='$champ'
							 AND phpal_equipes.id_club=phpal_clubs.id");

//$result=mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
/*
 while($row= mysqli_fetch_array($result))
    { 
     $equipe= $row[0];$penalite= $row[1];$equipeId= $row[2];
	 echo $equipe.' '.$penalite.' '.$equipeId;echo "<br />";
	}
*/
//mysqlY_query("LOCK TABLE phpal_clmnt WRITE, phpal_equipes WRITE, phpal_clubs WRITE") or die (mysql_error());
/*
    if (mysqli_num_rows($result)==0)
    {
	   // $idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
		$result=$idconnect->query("SELECT phpal_clubs.nom, phpal_equipes.id 
            FROM phpal_clubs, phpal_equipes, phpal_championnats
            WHERE phpal_equipes.id_champ=phpal_championnats.id
            AND phpal_championnats.id='$champ'
            AND phpal_equipes.id_club=phpal_clubs.id");

		$result=mysqli_query($query) or die (mysqli_error());
    }
*/
    while($row = mysqli_fetch_array($result))
    {
		$NOM=$row['nom'];
		$ID_EQUIPE=$row['id'];
		$ID_CHAMP= $champ;
		$DOMJOUES=$clmnt[$NOM]['GDOM']+$clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
		$EXTJOUES=$clmnt[$NOM]['GEXT']+$clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
		$JOUES=$EXTJOUES + $DOMJOUES;
		$DOMPOINTS=(($clmnt[$NOM]['GDOM'])*$pts_victoire) + (($clmnt[$NOM]['NDOM'])*$pts_nul) + (($clmnt[$NOM]['PDOM'])*$pts_defaite);
		$EXTPOINTS=(($clmnt[$NOM]['GEXT'])*$pts_victoire) + (($clmnt[$NOM]['NEXT'])*$pts_nul) + (($clmnt[$NOM]['PEXT'])*$pts_defaite);
		$POINTS= $DOMPOINTS+ $EXTPOINTS + $row['penalite'];
		if (isset ($G))$G=($clmnt[$NOM]['GEXT'])+($clmnt[$NOM]['GDOM']);else $G=0;
		if (isset ($N))$N=($clmnt[$NOM]['NEXT'])+($clmnt[$NOM]['NDOM']);else $N=0;
		if (isset ($P))$P=$clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];else $P=0;
		if (isset ($clmnt[$NOM]['GDOM']))$DOMG=($clmnt[$NOM]['GDOM']);else $DOMG=0;
		if (isset ($clmnt[$NOM]['NDOM']))$DOMN=($clmnt[$NOM]['NDOM']);else $DOMN=0;
		if (isset ($clmnt[$NOM]['PDOM']))$DOMP=($clmnt[$NOM]['PDOM']);else $DOMP=0;
		if (isset ($clmnt[$NOM]['GEXT']))$EXTG=($clmnt[$NOM]['GEXT']);else $EXTG=0;
		if (isset ($clmnt[$NOM]['NEXT']))$EXTN=($clmnt[$NOM]['NEXT']);else $EXTN=0;
		if (isset ($clmnt[$NOM]['PEXT']))$EXTP=($clmnt[$NOM]['PEXT']);else $EXTP=0;
		$BUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'] + $clmnt[$NOM]['BUTSDOMPOUR'];
		$DOMBUTSPOUR=$clmnt[$NOM]['BUTSDOMPOUR'];
		$EXTBUTSPOUR=$clmnt[$NOM]['BUTSEXTPOUR'];
		$BUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] + $clmnt[$NOM]['BUTSDOMCONTRE'];
		$DOMBUTSCONTRE= $clmnt[$NOM]['BUTSDOMCONTRE'];
		$EXTBUTSCONTRE=$clmnt[$NOM]['BUTSEXTCONTRE'] ;
		$DIFF=$BUTSPOUR - $BUTSCONTRE;
		$DOMDIFF=$DOMBUTSPOUR-$DOMBUTSCONTRE;
		$EXTDIFF=$EXTBUTSPOUR - $EXTBUTSCONTRE;
		$PEN = $row['penalite'];
		$NOM=addslashes($row['nom']);
	
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db2;charset=utf8', 'root', '');
//  $bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db2;charset=utf8', 'onepip-france', 'lavelan09');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if($cache=="1")
{
$req = $bdd->prepare('INSERT INTO phpal_clmnt_cache(NOM, POINTS, JOUES, G, N, P, BUTSPOUR, BUTSCONTRE, DIFF, PEN, DOMPOINTS, DOMJOUES, DOMG, DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE, ID_CHAMP) 
									  VALUES(:NOM,:POINTS,:JOUES,:G,:N,:P,:BUTSPOUR,:BUTSCONTRE,:DIFF,:PEN,:DOMPOINTS,:DOMJOUES,:DOMG,:DOMN,:DOMP,:DOMBUTSPOUR,:DOMBUTSCONTRE,:DOMDIFF,:EXTPOINTS,:EXTJOUES,:EXTG,:EXTN,:EXTP,:EXTBUTSPOUR,:EXTBUTSCONTRE,:EXTDIFF,:ID_EQUIPE,:ID_CHAMP)');
$req->execute(array(
	'NOM' => $NOM, 
	'POINTS' => $POINTS, 
	'JOUES' => $JOUES, 
	'G' => $G, 
	'N' => $N, 
	'P' => $P, 
	'BUTSPOUR' => $BUTSPOUR,
	'BUTSCONTRE' => $BUTSCONTRE, 
	'DIFF' => $DIFF, 
	'PEN' => $PEN, 
	'DOMPOINTS' => $DOMPOINTS, 
	'DOMJOUES' => $DOMJOUES, 
	'DOMG' => $DOMG, 
	'DOMN' => $DOMN, 
	'DOMP' => $DOMP, 
	'DOMBUTSPOUR' => $DOMBUTSPOUR, 
	'DOMBUTSCONTRE' => $DOMBUTSCONTRE, 
	'DOMDIFF' => $DOMDIFF, 
	'EXTPOINTS' => $EXTPOINTS, 
	'EXTJOUES' => $EXTJOUES, 
	'EXTG' => $EXTG, 
	'EXTN' => $EXTN, 
	'EXTP' => $EXTP, 
	'EXTBUTSPOUR' => $EXTBUTSPOUR, 
	'EXTBUTSCONTRE' => $EXTBUTSCONTRE, 
	'EXTDIFF' => $EXTDIFF, 
	'ID_EQUIPE' => $ID_EQUIPE, 
	'ID_CHAMP' => $ID_CHAMP
	
	));
//echo $NOM.' '.$POINTS.' '.$JOUES.' '.$G.' '.$N.' '.$P.' '.$BUTSPOUR.' '.$BUTSCONTRE.' '.$DIFF.' '.$PEN;
//echo $DOMPOINTS.' '.$DOMJOUES.' '.$DOMG.' '.$DOMN.' '.$DOMP.' '.$DOMBUTSPOUR.' '.$DOMBUTSCONTRE.' '.$DOMDIFF;
//echo $EXTPOINTS.' '.$EXTJOUES.' '.$EXTG.' '.$EXTN.' '.$EXTP.' '.$EXTBUTSPOUR.' '.$EXTBUTSCONTRE.' '.$EXTDIFF;
//echo " ".$ID_EQUIPE.' '.$ID_CHAMP;
//echo "<br />";
}
else
{
$req = $bdd->prepare('INSERT INTO phpal_clmnt(NOM, POINTS, JOUES, G, N, P, BUTSPOUR, BUTSCONTRE, DIFF, PEN, DOMPOINTS, DOMJOUES, DOMG, DOMN, DOMP, DOMBUTSPOUR, DOMBUTSCONTRE, DOMDIFF, EXTPOINTS, EXTJOUES, EXTG, EXTN, EXTP, EXTBUTSPOUR, EXTBUTSCONTRE, EXTDIFF, ID_EQUIPE, ID_CHAMP) 
									  VALUES(:NOM,:POINTS,:JOUES,:G,:N,:P,:BUTSPOUR,:BUTSCONTRE,:DIFF,:PEN,:DOMPOINTS,:DOMJOUES,:DOMG,:DOMN,:DOMP,:DOMBUTSPOUR,:DOMBUTSCONTRE,:DOMDIFF,:EXTPOINTS,:EXTJOUES,:EXTG,:EXTN,:EXTP,:EXTBUTSPOUR,:EXTBUTSCONTRE,:EXTDIFF,:ID_EQUIPE,:ID_CHAMP)');
$req->execute(array(
	'NOM' => $NOM, 
	'POINTS' => $POINTS, 
	'JOUES' => $JOUES, 
	'G' => $G, 
	'N' => $N, 
	'P' => $P, 
	'BUTSPOUR' => $BUTSPOUR,
	'BUTSCONTRE' => $BUTSCONTRE, 
	'DIFF' => $DIFF, 
	'PEN' => $PEN, 
	'DOMPOINTS' => $DOMPOINTS, 
	'DOMJOUES' => $DOMJOUES, 
	'DOMG' => $DOMG, 
	'DOMN' => $DOMN, 
	'DOMP' => $DOMP, 
	'DOMBUTSPOUR' => $DOMBUTSPOUR, 
	'DOMBUTSCONTRE' => $DOMBUTSCONTRE, 
	'DOMDIFF' => $DOMDIFF, 
	'EXTPOINTS' => $EXTPOINTS, 
	'EXTJOUES' => $EXTJOUES, 
	'EXTG' => $EXTG, 
	'EXTN' => $EXTN, 
	'EXTP' => $EXTP, 
	'EXTBUTSPOUR' => $EXTBUTSPOUR, 
	'EXTBUTSCONTRE' => $EXTBUTSCONTRE, 
	'EXTDIFF' => $EXTDIFF, 
	'ID_EQUIPE' => $ID_EQUIPE, 
	'ID_CHAMP' => $ID_CHAMP
	
	));
//echo $NOM.' '.$POINTS.' '.$JOUES.' '.$G.' '.$N.' '.$P.' '.$BUTSPOUR.' '.$BUTSCONTRE.' '.$DIFF.' '.$PEN;
//echo $DOMPOINTS.' '.$DOMJOUES.' '.$DOMG.' '.$DOMN.' '.$DOMP.' '.$DOMBUTSPOUR.' '.$DOMBUTSCONTRE.' '.$DOMDIFF;
//echo $EXTPOINTS.' '.$EXTJOUES.' '.$EXTG.' '.$EXTN.' '.$EXTP.' '.$EXTBUTSPOUR.' '.$EXTBUTSCONTRE.' '.$EXTDIFF;
//echo " ".$ID_EQUIPE.' '.$ID_CHAMP;
//echo "<br />";
}




/*
     $question="INSERT INTO ";
	
     if($cache=="1"){$question.="phpal_clmnt_cache ";}
     else{$question.="phpal_clmnt ";}
            
     $question.="SET NOM='$NOM',
			  ID_EQUIPE='$row[id]',
			  ID_CHAMP='$champ',
			  POINTS='$POINTS',
			  DOMPOINTS='$DOMPOINTS',
			  EXTPOINTS='$EXTPOINTS',
			  JOUES= '$JOUES',
			  DOMJOUES= '$DOMJOUES',
			  EXTJOUES= '$EXTJOUES',
			  G='$G',
			  DOMG='$DOMG',
			  EXTG='$EXTG',
			  N='$N',
			  DOMN='$DOMN',
			  EXTN='$EXTN',
			  P='$P',
			  DOMP='$DOMP',
			  EXTP='$EXTP',
			  BUTSPOUR='$BUTSPOUR',
			  DOMBUTSPOUR='$DOMBUTSPOUR',
			  EXTBUTSPOUR='$EXTBUTSPOUR',
			  BUTSCONTRE='$BUTSCONTRE',
			  DOMBUTSCONTRE='$DOMBUTSCONTRE',
			  EXTBUTSCONTRE='$EXTBUTSCONTRE',
			  DIFF='$DIFF',
			  DOMDIFF='$DOMDIFF',
			  EXTDIFF='$EXTDIFF',
			  PEN='$PEN'";
*/		  
//          $result2=mysqli_query($idconnect, $question) or die(mysqli_error($idconnect));
   
   }
// echo "cache fin : ".$cache;  
if($cache=="1")
{$requete="DELETE FROM phpal_clmnt_cache WHERE nom='exempte'" or die (mysql_error($idconnect));}
else
{$requete="DELETE FROM phpal_clmnt WHERE nom='exempte'" or die (mysql_error($idconnect));}

$resultat=mysqli_query($idconnect,$requete) or die (mysqli_error($idconnect));
//mysql_query("UNLOCK TABLES") or die (mysql_error());


//echo "fin";//echo "<br />"; 
}

// Nombres de renseignement dans cette classe � partir de l'id_classe  (utilis� dans phpal_classe.php)
function nb_classe($data, $idconnect)
{
  $result=$idconnect->query("SELECT id FROM phpal_rens WHERE id_classe='$data'");
//if (!$result) die mysql_error();
  $nb_classe=mysqli_num_rows( $result );
  return("$nb_classe");
}

// Nombres de classes enregistr�es (ulilis� dans phpal_classe.php)
function nb_classe2($idconnect)
{	
  $result=$idconnect->query("SELECT * FROM phpal_classe");
//if (!$result) die mysql_error();
  $nb_classe2=mysqli_num_rows( $result );
  return("$nb_classe2");
}

// Nombres de renseignements class�s (utilis� dans admin/rens.php)
function nb_rens($idconnect)
{
  $result=$idconnect->query("SELECT id FROM phpal_rens where id_classe>'0'");
  $nb_rens=mysqli_num_rows( $result );
  return("$nb_rens");
}

// Nombres de renseignements enregistr�s (utilis� dans rens.php)
function nb_rens2($idconnect)
{	
  $result=$idconnect->query("SELECT * FROM phpal_rens");
  $nb_rens2=mysqli_num_rows( $result );
  return("$nb_rens2");
}

// id du renseignement � partir du nom du rens (utilis� dans rens.php)
function rens2($rens, $idconnect)
{
  $result=$idconnect->query("select id, nom from phpal_rens where nom='$rens'");
//if (!$result) die mysql_error();
  $row=mysqli_fetch_array($result);
  $rens2=$row[0];
  return("$rens2");
}

// Affichage des renseignements (utilis� dans gestequipes.php
function aff_rens ($id_classe, $id_clubs, $idconnect)
  {
  $result=$idconnect->query("SELECT phpal_donnee.id, phpal_donnee.nom, id_rens, id_clubs, phpal_rens.id, phpal_rens.nom, phpal_rens.id_classe, phpal_clubs.id, etat, phpal_donnee.url, phpal_rens.url
							 FROM phpal_donnee, phpal_rens, phpal_clubs
							 WHERE id_clubs='$id_clubs'
							 AND id_clubs=phpal_clubs.id
							 AND id_rens=phpal_rens.id
							 AND id_classe='$id_classe'
							 AND etat='1' 
							 order by rang");

  $nb_rens=mysqli_num_rows($result);

         if ($nb_rens=="0"){echo "<center>".ADMIN_EQUIPE_8."</center>";}

         while($row = mysqli_fetch_array($result))
         {
          $donnee_nom=stripslashes($row[1]);
          $rens_nom=stripslashes($row[5]);

           if (empty ($row[9]) and empty ($row[10])){echo "<b>$rens_nom :</b> $donnee_nom <br />";}
           elseif (empty ($row[9])){echo "<b><a href=\"$row[10]\">$rens_nom</a> :</b> $donnee_nom<br />";}
           elseif (empty ($row[10])){echo "<b>$rens_nom :</b> <a href=\"$row[9]\">$donnee_nom</a><br />";}
           else {echo "<b><a href=\"$row[10]\">$rens_nom</a> :</b> <a href=\"$row[9]\">$donnee_nom</a><br />";}
         }
  }

function VerifSession ($user_pseudo,$user_mdp, $idconnect)
{	
  $user_pseudo= "onepip";
  $user_mdp ="lavelan";
  if ($user_pseudo and $user_mdp)
  {
        $result=$idconnect->query(" SELECT mot_de_passe, id_prono 
									FROM phpal_membres 
									WHERE pseudo='onepip' 
									and admin='1'");
        
        $row = mysqli_fetch_array($result);
        
        if ($row["mot_de_passe"] == $user_mdp)
		{
		  $a=1;
		}
        else 
		{
		  $a=0;
		}
                                            
	//session_start();
  }
  else 
  {
	  $a=1;
  }
  return ("$a");
}
