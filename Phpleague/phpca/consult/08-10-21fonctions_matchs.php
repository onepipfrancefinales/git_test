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

function ENTETE2()
{
 ?>


      </td>
    </tr>
  </table>
</div>
<br />
<?php
}


// nombres de journees d un championnat

function nb_journees($id_champ, $idconnect)
         {
        global $nb_journees;
$result=$idconnect->query("SELECT id FROM phpca_equipes WHERE id_champ='$id_champ'");
         //$result=mysql_query($query);
         $nb_equipes=mysqli_num_rows( $result );
         $nb_journees=((($nb_equipes)*2)-2) ;
        // return("$nb_journees");
        
echo "nbre de journee : ".$nb_journees;
}

function nbre_journees($id_champ, $bdd)
{
 global $nbre_journees;
 $result=$bdd->query("SELECT COUNT(*) 
					  FROM phpca_equipes 
					  WHERE id_champ='$id_champ'");
       
 $nb_equipes=$result->fetch();
 $nbre_journees=((($nb_equipes[0])*2)-2) ;        
}

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {	 
 $res=$idconnect->query("SELECT id 
						 FROM phpca_equipes 
						 WHERE id_champ='$id_champ'");
		   
		 $nb_equipes=mysqli_num_rows($res);
         return("$nb_equipes");	
		// echo "nombre d'equipes : ".$nb_equipes;		 
        // $query="SELECT id FROM phpca_equipes WHERE id_champ='$id_champ'";
        // $result=mysql_query($query);
        // $nb_equipes=mysql_num_rows( $result );
        // return("$nb_equipes");

		}

function aff_journee($champ, $bdd)
{
 $legende="Journ&eacute;e N&deg;";
 $color=0;
 
 if (isset ($journee)) $journee = $journee; else $journee =($champ*100)+01;
 
 $res3=$bdd->query("SELECT phpca_matchs.id_journee
					FROM phpca_journees, phpca_matchs 
					WHERE phpca_journees.id = phpca_matchs.id_journee 
					AND phpca_matchs.buts_dom is not NULL 
					AND phpca_matchs.buts_ext is not NULL
					AND phpca_journees.id_champ = '$champ'
					ORDER BY phpca_matchs.id_journee asc");
    
 while ($row=$res3->fetch())
  {
   $journee=$row[0];
  }		
//  echo "journee : ".$journee;echo "</br>";

 $numero=substr($journee,-2);
 //echo $numero;
 // echo "</br>";
 $result=$bdd->query("SELECT cldom.nom as cldom, clext.nom as clext, phpca_matchs.buts_dom, phpca_matchs.buts_ext,
                        phpca_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpca_matchs.id as id_match
                FROM phpca_equipes as dom, phpca_equipes as ext, phpca_matchs, phpca_journees,
                     phpca_clubs as cldom, phpca_clubs as clext
                WHERE phpca_matchs.id_equipe_dom=dom.id
                        AND phpca_matchs.id_equipe_ext=ext.id
                        AND phpca_journees.id_champ='$champ'
                        AND phpca_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpca_matchs.id_journee=phpca_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");

  //mise en forme tableau oppositions
  echo "<br />";
  echo "<table align=\"center\" class=\"tablephpca2\"  width=\"90%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
  $x=1;
  $minute = 0;  $heure = 0;  $jour = 0;  $mois = 0;  $annee = 0;

  while ($row=$result->fetch())
	{
     $clubs_nom = $row[0];
     $clubs_nom1 = $row[1];
     $domproba= $row[2];
     $extproba= $row[3];
      
     if ($x==1)
     {
      echo "<tr class=\"trphpca3\">\n<th colspan=\"3\"><b>".$legende." ". $numero."</b></th>\n</tr>";
     }

	 $bgcolor="#FFFFFF";

     if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}


                //echo "<tr bgcolor=\"$bgcolor\" class=\"trphpca\">";

                //if (($minute==substr($row[7],14,2)) and ($heure==substr($row[7],11,2)) and ($jour==substr($row[7],8,2)) and ($mois==substr($row[7],5,2)) and ($annee==substr($row[7],0,4)))
     if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
     {
      $minute = substr($row[7],14,2); // on r�cup�re la minute
      $heure = substr($row[7],11,2); // on r�cup�re l'heure
      $jour = substr($row[7],8,2); // on r�cup�re le jour
      $mois = substr($row[7],5,2); // puis le mois
      $annee = substr($row[7],0,4); // et l'annee

      setlocale(LC_TIME, 'fr_FR.utf8','fra');
      $t= mktime($heure,$minute,0,$mois,$jour,$annee);

      echo "<tr class=\"date\"><td colspan=\"3\" align=\"left\" ><font color=\"#FFffff\" >";

      echo ucfirst(strftime("%A ",$t));
      echo strftime("%d %B ",$t);
      echo strftime("- %Hh%M",$t);
      echo "</font></td></tr>";

      $color_cell=$bgcolor;
     }

       echo "<tr class=\"$classe\">";
       $activ_prono=0;
					
	   if ($domproba > $extproba)	
		echo "<td class=\"domicile\">"."<b>".$clubs_nom."</b>"."</td>";
	   else
		echo "<td class=\"domicile\">".$clubs_nom."</td>";
			
		echo "<td class=\"tiret\">".$domproba.' - '.$extproba."</td>";
		   
		if ($domproba < $extproba)
		 echo "<td class=\"exterieur\">"."<b>".$clubs_nom1."<b>"."</td>";
		else
		 echo "<td class=\"exterieur\">".$clubs_nom1."</td>";	
		
?>
<!--   		<td><div align="right" width="40%"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo $DebMarqueur1.$clubs_nom.$FinMarqueur1;?></font></div></td>
			<td><div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo $domproba.' - '.$extproba;?></font></div></td>
		    <td><div align="left" width="40%"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2"><?php echo$DebMarqueur2.$clubs_nom1.$FinMarqueur2;?></font></div></td>		   
--->
<?php
         echo "</tr>\n";
         $x++;
         $color+=1;
	}
    echo "</table></td></tr></table>\n<br />\n";
	echo "<br />";
}
  
  
function aff_journeeSupp($champ, $bdd)
{

 // cellule d'affichage des derniers r�sultats
 $color=0;
 $legende="Prochaine journ&eacute;e N&deg;";
  if (isset ($journee)) $journee = $journee; else $journee =($champ*1000)+01;
 $res3=$bdd->query("SELECT phpca_matchs.id_journee
					FROM phpca_journees, phpca_matchs 
					WHERE phpca_journees.id = phpca_matchs.id_journee 
					AND phpca_matchs.buts_dom is not NULL 
					AND phpca_matchs.buts_ext is not NULL
					AND phpca_journees.id_champ='$champ'
					ORDER BY phpca_matchs.id_journee asc");
    
        while ($row=$res3->fetch())
        {
        $journee=$row[0];
        }
  //echo $journee; echo "</br>";
  $numero=substr($journee,-2);
  $journeeSupp = $numero+1;
  //echo $journeeSupp;

 $result=$bdd->query("SELECT cldom.nom as cldom, clext.nom as clext, phpca_matchs.buts_dom, phpca_matchs.buts_ext,
                        phpca_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpca_matchs.id as id_match
                FROM phpca_equipes as dom, phpca_equipes as ext, phpca_matchs, phpca_journees,
                     phpca_clubs as cldom, phpca_clubs as clext
                WHERE phpca_matchs.id_equipe_dom=dom.id
                        AND phpca_matchs.id_equipe_ext=ext.id
                        AND phpca_journees.id_champ='$champ'
                        AND phpca_journees.numero='$journeeSupp'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpca_matchs.id_journee=phpca_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");

//mise en forme tableau oppositions
echo "<br />";
echo "<table align=\"center\" class=\"tablephpca2\"  width=\"90%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
$x=1;
$minute = 0;$heure = 0;  $jour = 0; $mois = 0;$annee = 0;

    while ($row=$result->fetch())
    {
     $clubs_nom = $row[0];
     $clubs_nom1 = $row[1];
	 
       if ($x==1)
       {echo "<tr class=\"trphpca3\">\n<th colspan=\"5\"><b>".$legende." ". $journeeSupp."</b></th>\n</tr>";}

       //$bgcolor="#FF0000";

       if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}
          
	   if (!($annee==substr($row[7],0,4)) or !($mois==substr($row[7],5,2)) or !($jour==substr($row[7],8,2)) or !($minute==substr($row[7],14,2)) or !($heure==substr($row[7],11,2)))
       {
        $minute = substr($row[7],14,2); // on r�cup�re la minute
        $heure = substr($row[7],11,2); // on r�cup�re l'heure
        $jour = substr($row[7],8,2); // on r�cup�re le jour
        $mois = substr($row[7],5,2); // puis le mois
        $annee = substr($row[7],0,4); // et l'annee

        setlocale(LC_TIME, 'fr_FR.utf8','fra');
        $t= mktime($heure,$minute,0,$mois,$jour,$annee);

        echo "<tr bgcolor= \"#ff0000\" color=\"#ffffff\"><td colspan=\"5\" ><font color=\"#ffffff\">";

        echo ucfirst(strftime("%A ",$t));
        echo strftime("%d %B ",$t);
        echo strftime("- %Hh%M",$t);
        echo "</font></td></tr>";

       // $color_cell=$bgcolor;
       }
	
     echo "<tr class=\"$classe\">";       

	 echo "<td class=\"domicile\">".$clubs_nom."</td>";	
     echo "<td class=\"tiret\">"."-"."</td>";	 
	 echo "<td class=\"exterieur\">".$clubs_nom1."</td>";   
     echo "</tr>\n";
     $x++;
     $color+=1;
    }
  echo "</table></td></tr></table>\n<br />\n";
  echo "<br />";
}

// ***********************
function classementDetaille($champ, $bdd)
{
  $comite ="phpca";
  $lien="oui";
  $type= "GENERAL";
  $legende = "";
 
 //bar�mes du championnat
 $res=$bdd->query("SELECT accession, barrage, relegation 
				   FROM phpca_parametres 
				   WHERE ID_CHAMP='$champ' 
								");

 while ($row = $res->fetch())
	{
	$accession = $row[0];
	$barrage = $row[1];
	$relegation =  $row[2]; 
	}
	
	
  $res=$bdd->query("SELECT count(*) 
						 FROM phpca_equipes 
						 WHERE id_champ='$champ'");
		   
  $nb_equipes=$res->fetch();
  $legende="Classement g&eacute;n&eacute;ral";
  
  echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende."</th></tr>\n";
  echo "<tr class=\"trphpca3\">

  <th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>
<th align=\"left\">".CLMNT_JOUES."</th>
<th align=\"left\">"."V"."</th>
<th align=\"left\">"."N"."</th>
<th align=\"left\">"."P"."</th>
<th align=\"left\">"."PP"."</th>
<th align=\"left\">"."PC"."</th>
<th align=\"left\">"."GA"."</th>
<th align=\"left\">"."Bonus"."</th>
<th align=\"left\"></th></tr>\n";

 //  if (isset ($legende)) $legende =$legende;else $legende= "";
 // if ($debut=="1" and $fin==$nb_journees)
 // {
	$nom = array();
	$points= array();
	$joues = array();
	$id_equipe = array();

	$res=$bdd->query("SELECT NOM, POINTS, JOUES, G, N, P, BUTSPOUR, BUTSCONTRE, DIFF, PEN
								FROM phpca_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");

	//echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende."</th></tr>\n";
	//echo "<tr class=\"trphpca3\>";

	$pl=1;

	while ($row = $res->fetch())
	{
      if ($row['NOM']==EXEMPT){continue;}
      if ($pl<=$accession){echo "<tr class=\"accession\">";}
      elseif ($pl<=$barrage){echo "<tr class=\"barrage\">";}
	  elseif ($pl==$nb_equipes[0]-1){echo "<tr class=\"relegation\">";}
      elseif ($pl==$nb_equipes[0]){echo "<tr class=\"relegation\">";}
      elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
      else{echo "<tr class=\"ligne2\">";}
	
	  //colonne 1
      echo "<td><div align=\"center\"><font color=\"#000000\"> $pl</font> </div></td>";
      $pl++;
      $x=0;
		
	  while($x<10)
	  {
        //colonne 2/3 et 4
		echo "<td><div align=\"left\">";
			   
        if ($x==0)
		 {
		  // echo "<a href=/resultats/bilan/page_bilan.php?comite=$comite&amp;champ=$champ target=\"_top\">$row[$x]</a>";
		  echo "$row[$x]";
		 }
         else
		 {
		   print $row[$x];
		 }
       echo "</div></td>";
       $x++;
      }
		 echo "</div></tr>\n";
	}
 echo "</table>";
 echo "<br />";
}

function oppositionsDetaillees($champ, $id_equipe, $smart, $bdd)
{
 $resultat=$bdd->query("
		  SELECT phpca_clubs.nom FROM phpca_clubs, phpca_equipes 
		  WHERE phpca_equipes.id='$id_equipe' 
		  AND phpca_equipes.id_club=phpca_clubs.id");

while ($row=$resultat->fetch())
    {
    $club = stripslashes($row[0]);
    }
$color=0;
//echo "<div align=\"center\"><b>[ <font class=\"victoire\">".VICTOIRE."</font> | <font class=\"nul\">".NUL."</font> | <font class=\"defaite\">".DEFAITE."</font> ]</b></div><br />";

echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\"  width=\"90%\">";

$resultat=$bdd->query("
		SELECT phpca_journees.numero, cldom.nom, clext.nom, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_matchs.date_reelle, phpca_matchs.id
        FROM phpca_equipes as dom, phpca_equipes as ext, phpca_matchs, phpca_journees, phpca_clubs as cldom  , phpca_clubs as clext
        WHERE phpca_matchs.id_equipe_dom=dom.id
        AND phpca_matchs.id_equipe_ext=ext.id
        AND (phpca_matchs.id_equipe_ext='$id_equipe'
        OR phpca_matchs.id_equipe_dom='$id_equipe')
        AND phpca_journees.id_champ='$champ'
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phpca_matchs.id_journee=phpca_journees.id
        ORDER BY phpca_journees.numero");
echo "<br />";echo "<br />";
	if ($smart == false)
	echo "<tr class=\"trphpca3\"><td align=\"center\"><font color=\"#FFFF00\"><b>".JOURNEE."</b></font></td><td width=\"5% align=\"center\"></td><td width=\"30%\" ><font color=\"#FFFF00\"><b>".DATE."</b></font></td><td colspan=\"5\ align=\"center\"><font color=\"#FFFF00\"><b>Oppositions</b></font></td></tr>";
    else
	echo"<tr class=\"trphpca3\"><td align=\"center\"><font color=\"#FFFF00\"><b>".JOURNEE."</b></font></td><td width=\"5% align=\"center\"></td><td colspan=\"5\ align=\"center\"><font color=\"#FFFF00\"><b>Oppositions</b></font></td></tr>";
	 
	while  ($row=$resultat->fetch())
    {
       $row[1] = stripslashes($row[1]);
       $row[2] = stripslashes($row[2]);
	
	   if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}

	   $color+=1;
       echo "<tr class=\"$classe\">\n";
       echo "<td align=\"center\"><b>$row[0]</b></td>\n";
       echo "<td></td>";
       echo "<td class=\"nonGras\">";

    if ($smart == false)
	{
	  $minute = substr($row[5],14,2); // on r�cup�re la minute
       $heure = substr($row[5],11,2); // on r�cup�re l'heure
       $jour = substr($row[5],8,2); // on r�cup�re le jour
       $mois = substr($row[5],5,2); // puis le mois
       $annee = substr($row[5],0,4); // et l'annee

      setlocale(LC_TIME, 'fr_FR.utf8','fra');
      $t= mktime($heure,$minute,0,$mois,$jour,$annee);
      echo strftime("%A %d %B ",$t);
      //  echo strftime("- %Hh%M",$t);
    }                 
      echo "</td>";

      if ($row[1]=='exempte' or $row[2]=='exempte')
		{echo "<td align=\"right\">".ADMIN_RESULTS_1."</td><td colspan=\"5\"></td>";}
      else
        {
         echo "<td class=\"nonGras\">";
         if ($row[3]<>'' and $row[1]==$club)
            {
             if ($row[3]>$row[4]) echo "<font class=\"victoire\">";
             if ($row[3]<$row[4]) echo "<font class=\"defaite\">";
             if ($row[3]==$row[4]) echo "<font class=\"nul\">";
             echo "<b>"; 
            }
         if ($smart == false)
		 echo $row[1];
         else
		 echo substr($row[1],0,12);

        
         if ($row[3]<>'' and $row[1]==$club) {echo "</b></font>";}
                
         echo "</td>";
         // echo "<td align=\"center\"><a href=\"#\" onclick=\"window.open('match.php?id_match=$row[6]','Fichematch','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">$row[3] - $row[4]</a>";
         echo "<td class=\"nonGras\">$row[3] - $row[4]";    
		 echo "</td ><td class=\"nonGras\">";
            if ($row[4]<>'' and $row[2]==$club)
            {
             if ($row[3]<$row[4]) echo "<font class=\"victoire\">";
             if ($row[3]>$row[4]) echo "<font class=\"defaite\">";
             if ($row[3]==$row[4]) echo "<font class=\"nul\">";
             echo "<b>"; 
            }
		if ($smart == false)	
         echo $row[2];
		 else
		 echo substr($row[2],0,12);
		 
         if ($row[4]<>'' and $row[2]==$club) {echo "</b></font>";}
         echo "</td></tr>";
        }
    }
 echo "</table><br />";		
}

function calendrier($champ, $smart, $bdd)
{	
 //nbre d'equipes
 $result=$bdd->query("SELECT COUNT(*) 
					  FROM phpca_equipes 
					  WHERE id_champ='$champ'");
       
 $tabNb_equipe=$result->fetch();
 $nb_equipe=$tabNb_equipe[0];

 $result=$bdd->query("SELECT COUNT(*) 
					  FROM phpca_journees 
					  WHERE id_champ='$champ'");
 //nbre de journees      
 $tabNbre_journees=$result->fetch();
 $journee_milieu = $tabNbre_journees[0]/2 ;  

 $color=0;

 $resultats2=$bdd->query("SELECT phpca_clubs.nom, CLEXT.nom, phpca_matchs.buts_dom, phpca_matchs.buts_ext, phpca_matchs.id, phpca_matchs.date_reelle
             FROM phpca_clubs, phpca_clubs as CLEXT, phpca_matchs, phpca_journees, phpca_equipes, phpca_equipes as EXT 
             WHERE phpca_clubs.id=phpca_equipes.id_club 
             AND CLEXT.id=EXT.id_club
             AND phpca_equipes.id=phpca_matchs.id_equipe_dom 
             AND EXT.id=phpca_matchs.id_equipe_ext 
             AND phpca_matchs.id_journee=phpca_journees.id
             AND phpca_journees.id_champ='$champ'
             AND (CLEXT.nom='exempte' or phpca_clubs.nom='exempte')
             ORDER by phpca_journees.numero");
 
 $i=0;
 while ($row2=$resultats2->fetch())
  {
   $row2[0] = stripslashes($row2[0]);
   $row2[1] = stripslashes($row2[1]);
   $resultats_0[$i] = $row2[0];  $resultats_1[$i] = $row2[1];
   $i++;
  }

 $result=$bdd->query("SELECT phpca_journees.numero, phpca_journees.date_prevue, cldom.nom, clext.nom, phpca_matchs.buts_dom, phpca_matchs.buts_ext, dom.id, ext.id
        FROM phpca_journees, phpca_equipes as dom, phpca_equipes as ext, phpca_matchs, phpca_clubs as cldom, phpca_clubs as clext
        WHERE phpca_journees.id_champ='$champ'
        AND phpca_matchs.id_equipe_dom=dom.id
        AND phpca_matchs.id_equipe_ext=ext.id
        AND dom.id_club=cldom.id
        AND ext.id_club=clext.id
        AND phpca_matchs.id_journee=phpca_journees.id
        AND cldom.nom!='exempte'
        AND clext.nom!='exempte'
        ORDER BY phpca_journees.numero");
        

if ($smart == false)
 echo "<table width=\"50%\" align=\"center\"><tr><td>";

 $journee=0;
 $x=2;
 $i=0;

 while ($row=$result->fetch())
 {
  $row[2] = stripslashes($row[2]);
  $row[3] = stripslashes($row[3]);

  if (($journee=="0"))
  { 
   $date = str_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
   ?>
   <br>
   <table class="tablephpca2" cellspacing="0" width="290" align="center">
	 <tr class="trphpca3">
	   <td colspan="3" align="center"><b><font color="#FFFF00">            
		 <?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></font>
				 </td>
			   </tr>";
   }
   elseif (!($journee==$row[0]))
   {   
    echo "</table><br>";
    if ($journee==$journee_milieu) 
	{echo "</td><td align=\"center\">";}
    $date = str_replace('^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$','\\3/\\2/\\1', $row[1]);
    ?>    
	<table class="tablephpca2" cellspacing="0" width="290" align="center">
	  <tr class="trphpca3"><td colspan="3" align="center"><b><font color="#FFFF00">
	   <?php echo ADMIN_COHERENCE_MSG2." ".$row[0].CONSULT_MATCHS_MSG2.$date."</b></font></td></TR>";
       $x=2;
   }

  $classe="ligne2";
  if (($color%2)==0) $classe="ligne1";
        
 echo "<tr class=\"$classe\">";  ?>
  <td class="cld1 nonGras" >	<?php if ($row[4]>$row[5]) echo "<b>".$row[2]."</b>"; else echo $row[2];	?> </td>
  <td align="center"><?php echo $row[4]." - ".$row[5]."</td>";?> </td> 	
  <td class="cld2 nonGras"> <?php if ($row[5]>$row[4]) echo "<b>".$row[3]."</b>"; else echo $row[3]; ?> </td>
 </tr>
 <?php 
    if ($x==($nb_equipe/2))
      {
      if (($color%2)==0) {$classe="ligne2";} else {$classe="ligne1";}
      if (isset($resultats_0[$i]) and $resultats_0[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_1[$i]</td></tr>";}
      if (isset($resultats_1[$i]) and $resultats_1[$i]=='exempte') {echo "<tr class=$classe><td colspan=3>".ADMIN_RESULTS_1." : $resultats_0[$i]</td></tr>";}
      $i++;
     }     
   $color++;
   $journee=$row[0];
   $x++;
  }     
 echo "</table></td></tr></table>";	
}



//************************
// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache, $idconnect)
{
	 
  $nb_requete=0;

  if($cache=="1"){ 
  mysqli_query("DELETE FROM phpca_clmnt_cache WHERE ID_CHAMP='$champ'") or die (mysqli_error());
  }
  else{ 
  mysqli_query("DELETE FROM phpca_clmnt") or die (mysqli_error());}
          $nb_requete++;

          if (!$fin){$fin=(nb_equipes($champ)*2)-2;}
          if (!$debut){$debut=1;}

// SELECTION DES PARAMETRES
$resultats=$idconnect->query=("SELECT pts_victoire, pts_nul, pts_defaite FROM phpca_parametres WHERE id_champ='$champ'");
$nb_requete++;
//$result=(mysql_query($query)) or die (mysql_error()) ;
      while ($row=mysqli_fetch_array($resultats) )
      {
      $pts_victoire=$row['pts_victoire'];
      $pts_nul=$row['pts_nul'];
      $pts_defaite=$row['pts_defaite'];
      }

// victoires domicile
$resultats=$idconnect->query("SELECT dom.id, count(dom.id), phpca_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpca_equipes as dom, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpca_clubs.id
      AND dom.id=phpca_matchs.id_equipe_dom
      AND buts_dom > buts_ext
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");
      $nb_requete++;
//$dom = mysqli_query($query) or die (mysqli_error());
     while($row= mysqli_fetch_array($resultats))
     {
     $clmnt[$row[2]]['GDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }

// Defaites domicile
$dom=$idconnect->query("SELECT dom.id, count(dom.id), phpca_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpca_equipes as dom, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpca_clubs.id
      AND dom.id=phpca_matchs.id_equipe_dom
      AND buts_dom < buts_ext
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");

       //$dom = mysql_query($query) or die (mysql_error());

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['PDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Nuls domicile
$dom=$idconnect->query("SELECT dom.id, count(dom.id), phpca_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpca_equipes as dom, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE dom.id_champ='$champ'
      AND dom.id_club=phpca_clubs.id
      AND dom.id=phpca_matchs.id_equipe_dom
      AND buts_dom = buts_ext
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");

//$dom = mysqli_query($query) or die (mysqli_error());

     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['NDOM']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSDOMPOUR'])) {$clmnt[$row[2]]['BUTSDOMPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSDOMPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSDOMCONTRE'])) {$clmnt[$row[2]]['BUTSDOMCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSDOMCONTRE']+=$row[4];}
     }
// Resultats � domicile
$result=$idconnect->query("SELECT phpca_clubs.nom FROM phpca_clubs, phpca_equipes, phpca_championnats
WHERE phpca_equipes.id_champ=phpca_championnats.id
      AND phpca_championnats.id='$champ'
      AND phpca_equipes.id_club=phpca_clubs.id");

$result=mysqli_query($query) or die (mysqli_error());

        
// RESULTATS EXTERIEURS :
// victoires exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpca_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpca_equipes as ext, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpca_clubs.id
      AND ext.id=phpca_matchs.id_equipe_ext
      AND buts_ext > buts_dom
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");

//$dom = mysql_query($query) or die (mysql_error());;


     while($row= mysqli_fetch_array($dom))
     {
     $clmnt[$row[2]]['GEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}

     }
// Defaites exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpca_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpca_equipes as ext, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpca_clubs.id
      AND ext.id=phpca_matchs.id_equipe_ext
      AND buts_ext < buts_dom
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");

//$dom=mysql_query($query) or die (mysql_error());
                    
      While($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['PEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }

// Nuls exterieur
$dom=$idconnect->query("SELECT ext.id, count(ext.id), phpca_clubs.nom, sum(buts_ext), sum(buts_dom) FROM phpca_equipes as ext, phpca_clubs, phpca_matchs, phpca_journees, phpca_championnats
WHERE ext.id_champ='$champ'
      AND ext.id_club=phpca_clubs.id
      AND ext.id=phpca_matchs.id_equipe_ext
      AND buts_ext = buts_dom
      AND buts_dom is not null
      AND buts_ext is not null
      AND phpca_championnats.id=phpca_journees.id_champ
      AND phpca_journees.id=phpca_matchs.id_journee
      AND phpca_journees.numero>='$debut'
      AND phpca_journees.numero<='$fin'
      GROUP by phpca_clubs.nom ");


//$dom=mysql_query($query) or die (mysql_error());;

      while($row= mysqli_fetch_array($dom))
      {
      $clmnt[$row[2]]['NEXT']=$row[1];
      if (!isset($clmnt[$row[2]]['BUTSEXTPOUR'])) {$clmnt[$row[2]]['BUTSEXTPOUR']=$row[3];}
      else{$clmnt[$row[2]]['BUTSEXTPOUR']+=$row[3];}
      if (!isset($clmnt[$row[2]]['BUTSEXTCONTRE'])) {$clmnt[$row[2]]['BUTSEXTCONTRE']=$row[4];}
      else{$clmnt[$row[2]]['BUTSEXTCONTRE']+=$row[4];}
      }
                 
// TABLEAU DE CLASSEMENT
$result=$idconnect->query("SELECT phpca_clubs.nom, phpca_equipes.penalite, phpca_equipes.id
        FROM phpca_clubs, phpca_equipes, phpca_championnats
        WHERE phpca_equipes.id_champ=phpca_championnats.id
        AND phpca_championnats.id='$champ'
        AND phpca_equipes.id_club=phpca_clubs.id");

//$result=mysqli_query($query) or die (mysqli_error());

//mysql_query("LOCK TABLE phpca_clmnt WRITE, phpca_equipes WRITE, phpca_clubs WRITE") or die (mysql_error());

    if (mysqli_num_rows($result)==0)
    {
    $result="SELECT phpca_clubs.nom, phpca_equipes.id 
            FROM phpca_clubs, phpca_equipes, phpca_championnats
            WHERE phpca_equipes.id_champ=phpca_championnats.id
            AND phpca_championnats.id='$champ'
            AND phpca_equipes.id_club=phpca_clubs.id";

   //$result=mysqli_query($query) or die (mysqli_error());
    }

    while($row = mysqli_fetch_array($result))
    {
    $NOM=$row['nom'];
    $DOMJOUES=$clmnt[$NOM]['GDOM']+$clmnt[$NOM]['NDOM'] + $clmnt[$NOM]['PDOM'];
    $EXTJOUES=$clmnt[$NOM]['GEXT']+$clmnt[$NOM]['NEXT'] + $clmnt[$NOM]['PEXT'];
    $JOUES=$EXTJOUES + $DOMJOUES;
    $DOMPOINTS=(($clmnt[$NOM]['GDOM'])*$pts_victoire) + (($clmnt[$NOM]['NDOM'])*$pts_nul) + (($clmnt[$NOM]['PDOM'])*$pts_defaite);
    $EXTPOINTS=(($clmnt[$NOM]['GEXT'])*$pts_victoire) + (($clmnt[$NOM]['NEXT'])*$pts_nul) + (($clmnt[$NOM]['PEXT'])*$pts_defaite);
    $POINTS= $DOMPOINTS+ $EXTPOINTS + $row['penalite'];
    $G=($clmnt[$NOM]['GEXT'])+($clmnt[$NOM]['GDOM']);
    $N=($clmnt[$NOM]['NEXT'])+($clmnt[$NOM]['NDOM']);
    $P=$clmnt[$NOM]['PEXT'] + $clmnt[$NOM]['PDOM'];
    $DOMG=($clmnt[$NOM]['GDOM']);
    $DOMN=($clmnt[$NOM]['NDOM']);
    $DOMP=$clmnt[$NOM]['PDOM'];
    $EXTG=($clmnt[$NOM]['GEXT']);
    $EXTN=($clmnt[$NOM]['NEXT']);
    $EXTP=$clmnt[$NOM]['PEXT'];
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

    $question="INSERT INTO ";

    if($cache=="1"){$question.="phpca_clmnt_cache ";}
    else{$question.="phpca_clmnt ";}
            
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
          $result2=mysqli_query($question) or die(mysqli_error());

    }
    
if($cache=="1")
	{
	mysqli_query($idconnect, ("DELETE FROM phpca_clmnt_cache WHERE nom='exempte'"));
	}
else
	{
	mysqli_query($idconnect, ("DELETE FROM phpca_clmnt WHERE nom='exempte'"));
	}

//$resultat=mysqli_query($requete) or die (mysqli_error());
//mysql_query("UNLOCK TABLES") or die (mysql_error());
}

function clmnt($champ,$smart, $bdd)
{
  $comite ="phpca";
  $lien="oui";
  $type= "GENERAL";
  $legende = "";
 
 //bar�mes du championnat
 $res=$bdd->query("SELECT accession, barrage, relegation 
				   FROM phpca_parametres 
				   WHERE ID_CHAMP='$champ' 
					");

 while ($row = $res->fetch())
	{
	$accession = $row[0];
	$barrage = $row[1];
	$relegation =  $row[2]; 
	}
	
  $res=$bdd->query("SELECT count(*) 
						 FROM phpca_equipes 
						 WHERE id_champ='$champ'");
		   
  $nb_equipes=$res->fetch();
  
  
  echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende."</th></tr>\n";
  echo "<tr class=\"trphpca3\">

  <th align=\"center\">".CLMNT_POSITION."</th>
  <th align=\"left\">".CLMNT_EQUIPE."</th>
  <th align=\"left\">".CLMNT_POINTS."</th>
  <th align=\"left\">".CLMNT_JOUES."</th>
  <th align=\"left\"></th></tr>\n";

 //  if (isset ($legende)) $legende =$legende;else $legende= "";
 // if ($debut=="1" and $fin==$nb_journees)
 // {
	$nom = array();
	$points= array();
	$joues = array();
	$id_equipe = array();

	$res=$bdd->query("SELECT NOM, POINTS, JOUES, ID_EQUIPE 
								FROM phpca_clmnt_cache 
								WHERE ID_CHAMP='$champ' 
								ORDER BY POINTS DESC, PEN DESC, DIFF DESC, BUTSPOUR DESC , BUTSCONTRE 
								ASC, NOM");

	//echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende."</th></tr>\n";
	//echo "<tr class=\"trphpca3\>";

	$pl=1;

	while ($row = $res->fetch())
	{
      if ($row['NOM']==EXEMPT){continue;}
      if ($pl<=$accession){echo "<tr class=\"accession\">";}
      elseif ($pl<=$barrage){echo "<tr class=\"barrage\">";}
	  elseif ($pl==$nb_equipes[0]-1 and $relegation > 1){echo "<tr class=\"relegation\">";}
      elseif ($pl==$nb_equipes[0] and $relegation > 0){echo "<tr class=\"relegation\">";}
      elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
      else{echo "<tr class=\"ligne2\">";}
		
	  //colonne 1
      echo "<td><div align=\"center\"><font color=\"#000000\"> $pl</font> </div></td>";
      $pl++;
      $x=0;
		
	  while($x<3)
	  {
         //colonne 2/3 et 4
		 echo "<td><div align=\"left\">";
			   
         if ($x==0)
		 {
		   if ($smart== true)
		   echo "<a href=/smart/bilan/pagebilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";
		 else
			echo "<a href=/resultats/bilan/page_bilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";
		 
		 }
         else
		 {
		   echo $row[$x];
		 }
       echo "</div></td>";
       $x++;
      }
		 echo "</div></tr>\n";
	}
 echo "</table>";
 echo "<br />";
}		



function Buteur($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{
echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\" bgcolor=\"#FFFFFF\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende."<br /></th></tr>\n";
echo "<tr class=\"trphpca3\"><th>".CLMNT_POSITION."</th><th align=\"left\">".MENU_NOM."</th><th align=\"left\">".TEAM."</th><th align=\"left\">".ADMIN_JOUEURS_2."</th></tr>\n";
$resultats=mysql_query($requete) or die (mysql_error());
$pl=1;
$total="-1";
      while ($row=mysql_fetch_array($resultats))
      {
        
        $joueurs_nom=stripslashes($row["NomJoueur"]);
        $joueurs_prenom=stripslashes($row["PrenomJoueur"]);
        $row["nom"]=stripslashes($row["nom"]);
      echo "<tr class=\"trphpca2\">";
      echo "<td align=\"center\">";
      if ($total>$row["Total"] or ($pl=="1")){ print $pl;} else {echo "-";}
      $pl++;
      echo "</td>";
      $Test="NON";
      $array = explode(",",$EquipeFetiche);

      if (sizeof($array)==1)
      {
      if ($row['idClub']==$array[0]){$Test="OUI";}
      }

      else
      {
              for ($i="0"; $i < sizeof($array); $i++)
              {
              if ("'$row[idClub]'"==$array[$i]){$Test="OUI";}
              }
       }

       if ($Test=="OUI")
       {
       echo "<td><b><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></b></td>" ;
       echo "<td><b>".$row["nom"]."</b></td>" ;
       echo "<td><b>".$row["Total"]."</b></td></tr>\n" ;
       }

       else
       {
       echo "<td><a href=\"#\" onclick=\"window.open('joueurs.php?id_joueur=$row[id_joueur]','Fichejoueur','toolbar=0,location=0,directories=0,status=0,scrollbars=1,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\">".$joueurs_nom." ".$joueurs_prenom."</a></td>";
       echo "<td>".$row["nom"]."</td>";
       echo "<td>".$row["Total"]."</td></tr>\n";
       }
       $total=$row["Total"];
}
if (!isset($complet)) {echo "<tr><td align=\"right\" colspan=\"4\"><a href=\"buteur.php?champ=$champ&amp;complet=1&amp;type=$type&amp;equipe=$equipe&amp;debut=$debut&amp;fin=$fin\">".PRONO_CLASSEMENT_COMPLET."</a></td></tr>";}
echo "</table>";
}


/////////////////////////////////////////////////////////////////////////////////////////////////
// Titre       : Add-on Gestion des clubs (fiches clubs), mini-classement,                     //
//               statistiques, am�lioration de la gestion des buteurs pour phpcaeague.          //
// Auteur      : Alexis MANGIN                                                                 //
// Email       : Alexis@univert.org                                                            //
// Url         : http://www.univert.org                                                        //
// D�mo        : http://phpcaeague.univert.org/demo.php                                         //
// Description : Edition, gestion, fiches phpca_clubs, statistiques, mini-classement...         //
// Version     : 0.71 (29/03/2003)                                                             //
//                                                                                             //
//                                                                                             //
// L'Univert   : Retrouvez quotidiennement l'actualit� des Verts ainsi que de                  //
//               nombreuses autres rubriques consacr�es � l'AS Saint-Etienne. Mais             //
//               L'Univert c'est avant tout la pr�sentation d'un club devenu l�gende.          //
//                                                                                             //
/////////////////////////////////////////////////////////////////////////////////////////////////


// Affichage renseignements utilis�e dans consult/club.php
//function aff_rens ($id_classe, $id_clubs)
//{
//$query="SELECT phpca_donnee.id, phpca_donnee.nom, id_rens, id_clubs, phpca_rens.id, phpca_rens.nom, phpca_rens.id_classe, phpca_clubs.id, etat, phpca_donnee.url, phpca_rens.url
//FROM phpca_donnee, phpca_rens, phpca_clubs
//WHERE id_clubs='$id_clubs'
//      AND id_clubs=phpca_clubs.id
//      AND id_rens=phpca_rens.id
//      AND id_classe='$id_classe'
//      AND etat='1' order by rang";
//$result = mysql_query ($query) or die(mysql_error());
//$nb_rens=mysql_num_rows($result);

 //        if ($nb_rens=="0"){echo "<center>".ADMIN_EQUIPE_8."</center>";}

//         while($row = mysql_fetch_array($result))
//         {

//                    if (empty ($row[9]) and empty ($row[10])){$donnee_nom=stripslashes($row[1]);echo "<b>$row[5] :</b> $donnee_nom <br />";}
//                    elseif (empty ($row[9])){echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> $row[1]<br />";}
//                    elseif (empty ($row[10])){echo "<b>$row[5] :</b> <a href=\"$row[9]\">$row[1]</a><br />";}
//                    else {echo "<b><a href=\"$row[10]\">$row[5]</a> :</b> <a href=\"$row[9]\">$row[1]</a><br />";}          
//        }
//        }


function clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpcaEAGUE_RACINE, $id_equipe_fetiche)
{

echo "<table class=tablephpca2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpca3><th colspan=10>".$legendemini;
echo "<tr class=trphpca3>";
echo "<th align=\"center\">".CLMNT_POSITION."";
echo "<th align=\"left\">".CLMNT_EQUIPE."";
echo "<th align=\"left\">".CLMNT_POINTS."";
echo "<th align=\"center\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;
$pl2=1;

       while ($row=mysqli_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {
       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;
        }
       $pl2++;
       }


$result=mysqli_query($requetemini) or die (mysqli_error());
      while ($row=mysqli_fetch_array($result))
      {

if ($pl<=$ap and $pl>=$av)
{          
                        if ($row['NOM']==EXEMPT){continue;}
                        elseif ($pl<=$accessionmini and $typemini==GENERAL){echo "<TR class=accession>";}  //accession
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><TR class=barrage>";}  //barrage
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><TR class=relegation>";} //relegation
                        elseif (($pl%2)==0){echo "<TR class=ligne1>";}
                        else {echo "<TR class=ligne2>";}


        echo "<TD align=center>";
        print $pl;
        $pl++;
        $x=0;

               while($x<3)   // nb de colones
               {
               echo "<td align=\"left\">";

                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$phpcaEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;

                     }
     
            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
    }
echo "</table>";
}

function clmnt_barre($legende, $type, $accession, $barrage, $relegation,  $champ, $requete, $lien, $id_equipe_fetiche)
{
echo "<table class=\"tablephpca2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpca3\"><th colspan=\"11\">".$legende;
echo "</th></tr>\n<tr class=\"trphpca3\">
<th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>\n";
echo "<th align=\"left\">".CLMNT_JOUES."</th>
<th align=\"left\">".CLMNT_VICTOIRES."</th>
<th align=\"left\">".CLMNT_NULS."</th>
<th align=\"left\">".CLMNT_DEFAITES."</th>
<th align=\"left\">".CLMNT_BUTSPOUR."</th>
<th align=\"left\">".CLMNT_BUTSCONTRE."</th>
<th align=\"left\">".CLMNT_DIFF."</th>
<th align=\"left\">".CLMNT_PEN."</th>
<th align=\"left\"></th></tr>\n";

$result=mysqli_query($requete) or die (mysqli_error());
$pl=1;
$action=0;
      while ($row=mysqli_fetch_array($result))
      {      
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accession and $type==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=\"ligne1\">";
                }
                else
                {
                     echo "<tr class=\"ligne2\">";
                }
                if ($pl==$relegation and $type==GENERAL){$action=1;}
                if ($pl==$barrage and $type==GENERAL){$action=1;}

        echo "<td align=\"center\">";
        print $pl;
        echo "</td>";
        $pl++;
        $x=0;

               while($x<10)
               {
               echo "<td>";

                    //if ($row[$x]==$equipe_fetiche){echo "<b>";}
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}

                     if ($lien=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"detaileq.php?champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']."\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}

                     }


                     else print $row[$x];
                     $x++;

                     echo "</td>";
                     }
          echo "<td align=\"right\">";
          $leg=CONSULT_CLUB_4;
          if ($type==GENERAL){echo "<a href=\"#\" onclick=\"window.open('graph.php?equipe=".$row['ID_EQUIPE']."','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\"><img src=\"graph.gif\" border=\"0\" alt=\"$leg\"></a>";}
             echo "</td></tr>";
             echo"";
          if ($action==0){echo "<tr><td bgcolor=\"#000000\" colspan=\"11\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
            echo "";
        }
        echo "</table>\n";
   }

function clmntmini_barre($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpca2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpca3><th colspan=10>".$legendemini;
echo "<tr class=trphpca3>";
echo "<th align=center>".CLMNT_POSITION."";
echo "<th align=left>".CLMNT_EQUIPE."";
echo "<th align=center>".CLMNT_POINTS."";
echo "<th align=\"left\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;


$pl2=1;

        while ($row=mysqli_fetch_array($result))
      {
        if ($row['ID_EQUIPE']==$id_equipe_fetiche)
        {

       $av=$pl2-$nb_dessusmini;
       $ap=$pl2+$nb_dessousmini;

        }
$pl2++;
}


$result=mysqli_query($requetemini) or die (mysqli_error());
      while ($row=mysqli_fetch_array($result))
      {




if ($pl<=$ap and $pl>=$av)
{
        if ($row['NOM']==EXEMPT){continue; $action=0;}
        if ($pl==$accessionmini){$action=1;}
        if (($pl%2)==0)
        {
             echo "<tr class=ligne1>";
             $action=0;
        }
        else
        {
             echo "<tr class=ligne2>";
             $action=0;
        }
        if ($pl==$relegationmini){$action=1;}
        if ($pl==$barragemini){$action=1;}
        
        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
                        
               while($x<3) // nb de colone
               {
               echo "<td>";
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";} 
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else {echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                    }
                     else print $row[$x];
                     $x++;
             }
     if ($action==1  and $typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}
     elseif ($typemini==GENERAL){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}

            }
elseif ($pl>$ap){$pl++;}
elseif ($pl<$av){$pl++;}
}


echo "</table>";
}

function clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpca2 align=\"center\" cellspacing=\"0\"  width=\"200\"><tr class=trphpca3><th colspan=10>".$legendemini;
echo "<tr class=trphpca3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini);
$pl=1;
      
      while ($row=mysqli_fetch_array($result))
      {
                        if ($row['NOM']==EXEMPT){continue;}
                        if ($pl<=$accessionmini and $typemini==GENERAL){echo "<tr class=accession>";}
                        elseif ($pl<=$barragemini and $typemini==GENERAL){echo "</tr><tr class=barrage>";}
                        elseif ($pl>$relegationmini and $typemini==GENERAL){echo "</tr><tr class=relegation>";}
                        elseif (($pl%2)==0){echo "<tr class=ligne1>";}
                      	else{echo "<tr class=ligne2>";}

                      	

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;
        
              while($x<3)
               {
               echo "<td>";

      
                    
                    if ($x==0)
                    {
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                     else 
                      {
                        echo "<a href=\"".$PHPLEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";
                      }
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";} 
                     }
                     
                     else print $row[$x];
                     $x++;
                     }
            }

        echo "</table>";
}

function clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $PHPLEAGUE_RACINE, $id_equipe_fetiche)
{
//mise en forme du mini classement
echo "<table class=tablephpca2 align=\"center\"  cellspacing=\"0\" width=\"95%\"><tr class=trphpca3><th colspan=10>".$legendemini;
echo "<tr class=trphpca3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";

$result=mysqli_query($requetemini) or die (mysqli_error());
$pl=1;
$action=0;
      while ($row=mysqli_fetch_array($result))
      {
                if ($row['NOM']==EXEMPT){continue;}
                if ($pl==$accessionmini and $typemini==GENERAL){$action=1;}
                if (($pl%2)==0)
                {
                     echo "<tr class=ligne1>";
                }
                else
                {
                     echo "<tr class=ligne2>";
                }
                //if ($pl==($accession+1) and $type==GENERAL){$action=1;} // Si vous souhaitez encadrer le premier non promu
                if ($pl==$relegationmini and $typemini==GENERAL){$action=1;}
                if ($pl==$barragemini and $typemini==GENERAL){$action=1;}

        echo "<td align=center>";
        print $pl;
        $pl++;
        $x=0;



              while($x<3)
               {
               echo "<td>";
                    

                    
                    if ($x==0)
                    {
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}
                     if ($lienmini=='non'){echo "$row[$x]";}
                   //  else {echo "<a href=\"".$phpcaEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }

                     else print $row[$x];
                     $x++;
          
                 }
          if ($action==0){echo"<tr><td bgcolor=\"#000000\" colspan=\"10\" height=\"1\"></td></tr>";$action=0;}
          if ($action==1){echo"<tr><td bgcolor=\"#000000\" colspan=\"11\"><img height=\"2\" src=\"pix.gif\" width=\"1\" border=\"0\" alt=\"\"></td></tr>";$action=0;}


        }
        echo "</table>";
   }

function demande_champ ()
{
// pour quel championnat ?
  ?>
<form method="get" action=""><div align="center">
       <h4>
       
  <?php print ADMIN_TAPVERT_MSG2; ?>
  
       </h4>
       <select name="champ">
       <option value="0"> </option>
  
  <?php       
       $query = "SELECT phpca_divisions.nom, phpca_saisons.annee, phpca_championnats.id
                 FROM phpca_championnats, phpca_divisions, phpca_saisons
                 WHERE phpca_championnats.id_division=phpca_divisions.id
                 AND phpca_championnats.id_saison=phpca_saisons.id
                 ORDER BY phpca_saisons.annee DESC, phpca_championnats.id";

       $result = mysqli_query($query) or die (mysqli_error());

           while ($row = mysqli_fetch_array($result))
           {
               echo ("<option value=\"$row[2]\">$row[0]\n $row[1]/". ($row[1]+1)."\n");
               echo ("</option>\n");
           }
       $button=ENVOI;
  ?>
        </select>

        <?php
        if (isset($value)){ echo "value=$value";echo "<input type=\"hidden\" name=\"type\" value=\"$value\">";}
        ?>

        <input type="submit" value="<?php print $button; ?>"></div></form>
  <?php
}

function demande_equipe($champ)
{
  
  
  
  $requete = "SELECT phpca_clubs.nom, id_champ, phpca_equipes.id
              FROM phpca_clubs, phpca_equipes
              WHERE phpca_equipes.id_champ='$champ' and phpca_clubs.id=phpca_equipes.id_club
              ORDER BY nom";
$resultat = mysqli_query($requete) or die (mysqli_error());

echo "<form method=\"get\" action=\"\">";

echo "<select name=\"id_equipe\">";
echo "option value=\"0\"> </option>";

      while($row = mysqli_fetch_array($resultat))
      {
      $row[0] = stripslashes($row[0]);
      $a=$row[1]+1;
      echo (" <option value=\"$row[2]\">$row[0]");
      echo ("</option>\n");
      }
echo "</select>";
$button=ENVOI;
echo "<input type=\"hidden\" name=\"champ\" value=\"$champ\">";
echo "<input type=\"submit\" value=\"$button\">";
echo "</form>";
}
?>