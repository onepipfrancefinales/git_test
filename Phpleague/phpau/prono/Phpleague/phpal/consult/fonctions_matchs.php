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
        
$result=$idconnect->query("SELECT id FROM phpal_equipes WHERE id_champ='$id_champ'");
         //$result=mysql_query($query);
         $nb_equipes=mysqli_num_rows( $result );
         $nb_journees=((($nb_equipes)*2)-2) ;
         return("$nb_journees");
         }

// Nombres d equipes dans un championnat
function nb_equipes($id_champ, $idconnect)
         {
		 
 $res=$idconnect->query("SELECT id 
						 FROM phpal_equipes 
						 WHERE id_champ='$id_champ'");
		 
		
         
		 $nb_equipes=mysqli_num_rows($res);
         return("$nb_equipes");	
		// echo "nombre d'equipes : ".$nb_equipes;		 
        // $query="SELECT id FROM phpal_equipes WHERE id_champ='$id_champ'";
        // $result=mysql_query($query);
        // $nb_equipes=mysql_num_rows( $result );
        // return("$nb_equipes");



		}

function aff_journee($champ, $numero, $legende, $proba, $fiches_clubs, $id_equipe_fetiche, $idconnect)
         {

    // cellule d'affichage des derniers r�sultats
      // cellule d'affichage des derniers r�sultats
  $color=0;

$result=$idconnect->query("SELECT cldom.nom as cldom, clext.nom as clext, phpal_matchs.buts_dom, phpal_matchs.buts_ext,
                        phpal_journees.date_prevue, cldom.id as cliddom, clext.id as clidext, date_reelle,
                        dom.id as eqdom, ext.id as eqext, phpal_matchs.id as id_match
                FROM phpal_equipes as dom, phpal_equipes as ext, phpal_matchs, phpal_journees,
                     phpal_clubs as cldom, phpal_clubs as clext
                WHERE phpal_matchs.id_equipe_dom=dom.id
                        AND phpal_matchs.id_equipe_ext=ext.id
                        AND phpal_journees.id_champ='$champ'
                        AND phpal_journees.numero='$numero'
                        AND dom.id_club=cldom.id
                        AND ext.id_club=clext.id
                        AND phpal_matchs.id_journee=phpal_journees.id
                        AND cldom.nom!='exempte'
                        AND clext.nom!='exempte'
                        ORDER BY date_reelle asc");
       // $result=mysqli_query($query1) or die (mysqli_error());



//mise en forme tableau oppositions
        echo "<table align=\"center\" class=\"tablephpal2\"  width=\"100%\" cellspacing=\"1\" cellpadding=\"1\"><tr><td><table cellspacing=\"0\" align=\"center\" width=\"100%\" cellpadding=\"1\">\n";
        $x=1;
        $minute = 0;
        $heure = 0;
        $jour = 0;
        $mois = 0;
        $annee = 0;

             while ($row=mysqli_fetch_array($result))
             {
             $clubs_nom = stripslashes($row[0]);
             $clubs_nom1 = stripslashes($row[1]);
             $domproba= $row[2];
             $extproba= $row[3];
                if ($row['buts_dom']=='' and $row['buts_ext']=='' and $proba==1 and $numero>=4)
                {
               $result2=$idconnect->query("SELECT DOMBUTSPOUR, DOMG, DOMN, DOMP, DOMBUTSCONTRE FROM phpal_clmnt_cache WHERE ID_EQUIPE='$row[eqdom]'");
               // $result2=mysqli_query($query2);
                      while ($row2=mysqli_fetch_array($result2))
                      { 
                      $dom_buts=($row2['DOMBUTSPOUR']);
                      $dom_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
                      $ext_buts=($row2['DOMBUTSCONTRE']);
                      $ext_joues=($row2['DOMG']+$row2['DOMN']+$row2['DOMP']);
                      }

                $result2=$idconnect->query("SELECT EXTG, EXTN, EXTP, EXTBUTSCONTRE, EXTBUTSPOUR FROM phpal_clmnt_cache WHERE ID_EQUIPE='$row[eqext]'");
               // $result2=mysqli_query($query2);
                      while ($row2=mysqli_fetch_array($result2))
                      {
                      $dom_joues+=($row2['EXTG']+$row2['EXTN']+$row2['EXTP']);
                      $ext_joues+=$row2['EXTG']+$row2['EXTN']+$row2['EXTP'];
                      $dom_buts+=($row2['EXTBUTSCONTRE']);
                      $ext_buts+=($row2['EXTBUTSPOUR']);
                      $dom_buts=intval((($dom_buts)/$dom_joues));
                      $ext_buts=intval((($ext_buts)/$ext_joues));
                      }

                $domproba="<i><font size=\"1\">".$dom_buts."</font></i>";
                $extproba="<i><font size=\"1\">".$ext_buts."</font></i>";
                }

                if ($x==1)
                {
                echo "<tr class=\"trphpal3\">\n<th colspan=\"5\"><b>".$legende." ". $numero."</b></th>\n</tr>";
                }



                if ($row['eqdom']==$id_equipe_fetiche )
                {
                $DebMarqueur1 = "<b>";
                $FinMarqueur1 = "</b>";
                }

                else
                {
                $DebMarqueur1 = "";
                $FinMarqueur1 = "";
                }

                if ($row['eqext']==$id_equipe_fetiche )
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

                if (($color%2)==0) {$classe="ligne1";} else {$classe="ligne2";}


                //echo "<tr bgcolor=\"$bgcolor\" class=\"trphpal\">";

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




                echo "<tr class=\"date\"><td colspan=\"5\" align=\"center\">";

                echo ucfirst(strftime("%A ",$t));
                echo strftime("%d %B ",$t);
                echo strftime("- %Hh%M",$t);
                echo "</td></tr>";

                $color_cell=$bgcolor;
                }

                echo "<tr class=\"$classe\">";


                $activ_prono=0;
//suppression des liens sur les scores

                if ($fiches_clubs=="1" and $activ_prono=="1")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</a></td><td align=\"center\">".$domproba." - ".$extproba."</td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</a></td>";
                }

                if ($fiches_clubs=="1" and $activ_prono=="0")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</a></td><td align=\"center\">".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</a></td>";
                }

                elseif (!$fiches_clubs=="1" and $activ_prono=="1")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</td><td align=\"center\">>".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</td>";
                }

                elseif (!$fiches_clubs=="1" and $activ_prono=="0")
                {
                echo "<td align=\"right\" width=\"40%\">".$DebMarqueur1.$clubs_nom.$FinMarqueur1."</td><td align=\"center\">".$domproba." - ".$extproba."</a></td><td align=\"left\" width=\"40%\">".$DebMarqueur2.$clubs_nom1.$FinMarqueur2."</td>";
                }

                echo "</tr>\n";
                $x++;
                $color+=1;

              }
/************* mise en commentaire suite passage php7 ******************

$resultats=$idconnect->query("SELECT phpal_clubs.nom, CLEXT.nom, phpal_matchs.buts_dom, phpal_matchs.buts_ext,
            phpal_matchs.id, phpal_matchs.date_reelle
            FROM phpal_clubs, phpal_clubs as CLEXT, phpal_matchs, phpal_journees, phpal_equipes, phpal_equipes as EXT
            WHERE phpal_clubs.id=phpal_equipes.id_club
            AND CLEXT.id=EXT.id_club
            AND phpal_equipes.id=phpal_matchs.id_equipe_dom
            AND EXT.id=phpal_matchs.id_equipe_ext
            AND phpal_matchs.id_journee=phpal_journees.id
            AND phpal_journees.numero='$numero'
            AND phpal_journees.id_champ='$champ'
            AND (CLEXT.nom='exempte' or phpal_clubs.nom='exempte'");
  //$resultats=mysql_query($requete) or die (mysql_error());
	//while ($row = $resultats->fetch() )
while ($row=mysqli_fetch_array($resultats))
  {   
   $row[0] = stripslashes($row[0]);
   $row[1]= stripslashes($row[1]);
    if (($color%2)==0) {$bgcolor1="#e5e5e5";} else {$bgcolor1="#FFFFFF";}
    if ($row[0]=='exempte') {echo "<tr bgcolor=\"$bgcolor1\" class=\"trphpal\"><td colspan=\"7\">".ADMIN_RESULTS_1." : $row[1]</td></tr>";}
    if ($row[1]=='exempte') {echo "<tr bgcolor=\"$bgcolor1\" class=\"trphpal\"><td colspan=\"7\" >".ADMIN_RESULTS_1." : $row[0]</td></tr>";}
  }
*/    

    echo "</table></td></tr></table>\n<br />\n";
        }


// *** REMPLI LA TABLE CLMNT
function db_clmnt($champ, $debut, $fin, $cache, $idconnect)
{
	 
  $nb_requete=0;

  if($cache=="1"){ 
  mysqli_query("DELETE FROM phpal_clmnt_cache WHERE ID_CHAMP='$champ'") or die (mysqli_error());
  }
  else{ 
  mysqli_query("DELETE FROM phpal_clmnt") or die (mysqli_error());}
          $nb_requete++;

          if (!$fin){$fin=(nb_equipes($champ)*2)-2;}
          if (!$debut){$debut=1;}

// SELECTION DES PARAMETRES
$resultats=$idconnect->query=("SELECT pts_victoire, pts_nul, pts_defaite FROM phpal_parametres WHERE id_champ='$champ'");
$nb_requete++;
//$result=(mysql_query($query)) or die (mysql_error()) ;
      while ($row=mysqli_fetch_array($resultats) )
      {
      $pts_victoire=$row['pts_victoire'];
      $pts_nul=$row['pts_nul'];
      $pts_defaite=$row['pts_defaite'];
      }

// victoires domicile
$resultats=$idconnect->query("SELECT dom.id, count(dom.id), phpal_clubs.nom, sum(buts_dom), sum(buts_ext) FROM phpal_equipes as dom, phpal_clubs, phpal_matchs, phpal_journees, phpal_championnats
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
$result=$idconnect->query("SELECT phpal_clubs.nom FROM phpal_clubs, phpal_equipes, phpal_championnats
WHERE phpal_equipes.id_champ=phpal_championnats.id
      AND phpal_championnats.id='$champ'
      AND phpal_equipes.id_club=phpal_clubs.id");

$result=mysqli_query($query) or die (mysqli_error());

        
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
$result=$idconnect->query("SELECT phpal_clubs.nom, phpal_equipes.penalite, phpal_equipes.id
        FROM phpal_clubs, phpal_equipes, phpal_championnats
        WHERE phpal_equipes.id_champ=phpal_championnats.id
        AND phpal_championnats.id='$champ'
        AND phpal_equipes.id_club=phpal_clubs.id");

//$result=mysqli_query($query) or die (mysqli_error());

//mysql_query("LOCK TABLE phpal_clmnt WRITE, phpal_equipes WRITE, phpal_clubs WRITE") or die (mysql_error());

    if (mysqli_num_rows($result)==0)
    {
    $result="SELECT phpal_clubs.nom, phpal_equipes.id 
            FROM phpal_clubs, phpal_equipes, phpal_championnats
            WHERE phpal_equipes.id_champ=phpal_championnats.id
            AND phpal_championnats.id='$champ'
            AND phpal_equipes.id_club=phpal_clubs.id";

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
          $result2=mysqli_query($question) or die(mysqli_error());

    }
    
if($cache=="1"){$requete="DELETE FROM phpal_clmnt_cache WHERE nom='exempte'" or die (mysqli_error());}
else{$requete="DELETE FROM phpal_clmnt WHERE nom='exempte'" or die (mysqli_error());}

$resultat=mysqli_query($requete) or die (mysqli_error());
//mysql_query("UNLOCK TABLES") or die (mysql_error());
}
function clmnt($legende, $type, $accession, $barrage, $relegation, $champ, $requete, $lien, $id_equipe_fetiche, $idconnect)

{

 
echo "<table class=\"tablephpal2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpal3\"><th colspan=\"11\">".$legende."</th></tr>\n";
echo "<tr class=\"trphpal3\">


<th align=\"center\">".CLMNT_POSITION."</th>
<th align=\"left\">".CLMNT_EQUIPE."</th>
<th align=\"left\">".CLMNT_POINTS."</th>\n";
echo "<th align=\"left\">".CLMNT_JOUES."</th>

<th align=\"left\"></th></tr>\n";

//$result= mysqli_query($requete) or die (mysqli_error());
$pl=1;

      while ($row=mysqli_fetch_array($requete))
      {
                        if ($row['NOM']==EXEMPT){continue;}
                        if ($pl<=$accession and $type==GENERAL){echo "<tr class=\"accession\">";}
                        elseif ($pl<=$barrage and $type==GENERAL){echo "<tr class=\"barrage\">";}
                        elseif ($pl>$relegation and $type==GENERAL){echo "<tr class=\"relegation\">";}
                        elseif (($pl%2)==0){echo "<tr class=\"ligne1\">";}
                      	else{echo "<tr class=\"ligne2\">";}

        echo "<td align=\"center\">$pl</td>";
        $pl++;
        $x=0;


              while($x<3)
               {
               echo "<td>";
$comite="phpal";
                   if ($x==0)
                    {
                   //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "<b>";}

                     if ($lien=='non'){echo "$row[$x]";}
                  //   else {echo "<a href=\"detaileq.php?champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']."\">$row[$x]</a>";
                   //  else {echo "<a href=/resultats/page_bilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";
		   else {echo "<a href=/resultats/bilan/page_bilan.php?comite=$comite&amp;champ=$champ&amp;id_equipe=".$row['ID_EQUIPE']." target=\"_top\">$row[$x]</a>";
		  
				  //  if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";}
                     }
                     }

                     else print $row[$x];
               //      echo "</td>";
                     $x++;
                     }
             //echo "<td align=\"right\">";
            // $leg=CONSULT_CLUB_4;
            // if ($type==GENERAL){echo "<a href=\"#\" onclick=\"window.open('graph.php?equipe=".$row['ID_EQUIPE']."','Stats','toolbar=0,location=0,directories=0,status=0,scrollbars=0,resizable=0,copyhistory=0,menuBar=0,width=560,height=320');return false;\"><img src=\"graph.gif\" border=\"0\" alt=\"$leg\"></a>";}
            // echo "</td></tr>\n";
            }
        echo "</table>";
}



function Buteur($legende, $requete, $type, $EquipeFetiche, $champ, $debut, $fin, $equipe, $complet)
{
echo "<table class=\"tablephpal2\" align=\"center\" cellspacing=\"0\" width=\"80%\" bgcolor=\"#FFFFFF\"><tr class=\"trphpal3\"><th colspan=\"11\">".$legende."<br /></th></tr>\n";
echo "<tr class=\"trphpal3\"><th>".CLMNT_POSITION."</th><th align=\"left\">".MENU_NOM."</th><th align=\"left\">".TEAM."</th><th align=\"left\">".ADMIN_JOUEURS_2."</th></tr>\n";
$resultats=mysql_query($requete) or die (mysql_error());
$pl=1;
$total="-1";
      while ($row=mysql_fetch_array($resultats))
      {
        
        $joueurs_nom=stripslashes($row["NomJoueur"]);
        $joueurs_prenom=stripslashes($row["PrenomJoueur"]);
        $row["nom"]=stripslashes($row["nom"]);
      echo "<tr class=\"trphpal2\">";
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
//               statistiques, am�lioration de la gestion des buteurs pour phpaleague.          //
// Auteur      : Alexis MANGIN                                                                 //
// Email       : Alexis@univert.org                                                            //
// Url         : http://www.univert.org                                                        //
// D�mo        : http://phpaleague.univert.org/demo.php                                         //
// Description : Edition, gestion, fiches phpal_clubs, statistiques, mini-classement...         //
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
//$query="SELECT phpal_donnee.id, phpal_donnee.nom, id_rens, id_clubs, phpal_rens.id, phpal_rens.nom, phpal_rens.id_classe, phpal_clubs.id, etat, phpal_donnee.url, phpal_rens.url
//FROM phpal_donnee, phpal_rens, phpal_clubs
//WHERE id_clubs='$id_clubs'
//      AND id_clubs=phpal_clubs.id
//      AND id_rens=phpal_rens.id
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


function clmntmini($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpalEAGUE_RACINE, $id_equipe_fetiche)
{

echo "<table class=tablephpal2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpal3><th colspan=10>".$legendemini;
echo "<tr class=trphpal3>";
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
                     else {echo "<a href=\"".$phpalEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
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
echo "<table class=\"tablephpal2\" align=\"center\" cellspacing=\"0\" width=\"80%\"><tr class=\"trphpal3\"><th colspan=\"11\">".$legende;
echo "</th></tr>\n<tr class=\"trphpal3\">
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

function clmntmini_barre($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $nb_dessusmini, $nb_dessousmini, $lienmini, $phpalEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpal2 align=\"center\" cellspacing=\"0\" width=\"200\"><tr class=trphpal3><th colspan=10>".$legendemini;
echo "<tr class=trphpal3>";
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
                     else {echo "<a href=\"".$phpalEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
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

function clmntred($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini, $champmini, $requetemini, $lienmini, $phpalEAGUE_RACINE, $id_equipe_fetiche)
{
echo "<table class=tablephpal2 align=\"center\" cellspacing=\"0\"  width=\"200\"><tr class=trphpal3><th colspan=10>".$legendemini;
echo "<tr class=trphpal3>
<th align=\"center\">".CLMNT_POSITION."
<th align=\"center\">".CLMNT_EQUIPE."
<th align=\"left\">".CLMNT_POINTS."
<th align=\"center\">".CLMNT_JOUES."";
$result=mysqli_query($requetemini) or die (mysqli_error());
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
                        echo "<a href=\"".$phpalEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";
                      }
                     if ($row['ID_EQUIPE']==$id_equipe_fetiche){echo "</b>";} 
                     }
                     
                     else print $row[$x];
                     $x++;
                     }
            }

        echo "</table>";
}

function clmnt_barrered($legendemini, $typemini, $accessionmini, $barragemini, $relegationmini,  $champmini, $requetemini, $lienmini, $phpalEAGUE_RACINE, $id_equipe_fetiche)
{
//mise en forme du mini classement
echo "<table class=tablephpal2 align=\"center\"  cellspacing=\"0\" width=\"95%\"><tr class=trphpal3><th colspan=10>".$legendemini;
echo "<tr class=trphpal3>
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
                   //  else {echo "<a href=\"".$phpalEAGUE_RACINE."consult/detaileq.php?champ=$champmini&amp;id_equipe=".$row['ID_EQUIPE']."\" target=\"_parent\">$row[$x]</a>";}
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
       $query = "SELECT phpal_divisions.nom, phpal_saisons.annee, phpal_championnats.id
                 FROM phpal_championnats, phpal_divisions, phpal_saisons
                 WHERE phpal_championnats.id_division=phpal_divisions.id
                 AND phpal_championnats.id_saison=phpal_saisons.id
                 ORDER BY phpal_saisons.annee DESC, phpal_championnats.id";

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
  
  
  
  $requete = "SELECT phpal_clubs.nom, id_champ, phpal_equipes.id
              FROM phpal_clubs, phpal_equipes
              WHERE phpal_equipes.id_champ='$champ' and phpal_clubs.id=phpal_equipes.id_club
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
