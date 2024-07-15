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

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
//$idconnect=@mysqli_connect('sql.franceserv.fr','onepip-france','lavelan09','onepip-france-db3');	  
  
//echo "numero :".$numero;echo "<br />";
if (empty ($numero))
{   

  $resultats=$idconnect->query("  SELECT max(phpca_journees.numero) 
								  from phpca_journees, phpca_matchs 
								  where phpca_journees.id=phpca_matchs.id_journee 
								  and buts_dom is not NULL 
								  and phpca_journees.id_champ='$champ'");
   
     while ($row=mysqli_fetch_array($resultats))
       {
         $numero=$row[0];
       }
       if ($numero=="") {$numero="1";}
  }
if (empty ($numero)){$numero=1;}
//echo "action : ".$action;echo "<br />";
//echo "action2 :".$action2;echo "<br />";
//echo $val_matchs_id;
//echo "testtest";
echo "----------------    ";
echo "voir admin/resultats-> pronostic";
//$resultats2=$idconnect->query("SELECT pronostic, id_membre, buts_dom, buts_ext 
//								 FROM phpca_pronostics WHERE id_match='$val_matchs_id'");
          
 //          while ($row2=mysqli_fetch_array($resultats2))
 //          {
            //  if ($buts_dom >$buts_ext and $row2[0]=="1"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
             // elseif ($buts_dom ==$buts_ext and $row2[0]=="N"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
            //  elseif ($buts_dom <$buts_ext and $row2[0]=="2"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
             // else 
			 // {
			 //  mysqli_query ($idconnect, ("UPDATE phpca_pronostics 
			//			SET points='$pts_prono_participation', participation='1' 
			//			WHERE id_membre='$row2[1]' 	AND id_match='$val_matchs_id'"));
		     // }
             
 //          }

echo "--------------------";
if ($action2=="1")
  {
     reset ($date_reelle);
     reset ($butd);
     reset ($butv);
     reset ($matchs_id);
     
	 while ( list ($cle, $val_date_reelle)= each ($date_reelle) and list ($cle, $val_butd)= each ($butd) and list ($cle, $val_butv)= each ($butv) and list ($cle, $val_matchs_id)= each ($matchs_id))
         {
           
    $date_us=format_date_us($val_date_reelle);
	//	echo "<br />";
	//	echo "id match : ".$val_matchs_id;  echo "<br />";
	//	echo "but domicile : ".$val_butd; echo "<br />";
	//	echo "but visiteur : ".$val_butv; echo "<br />";
	//	echo "&&&&&&";
	//	echo "<br />";	
			
    if ( !(($val_butd=='') or ($val_butv=='')))
       {
        //Insertion des données dans la table matchs
		$requete="UPDATE phpca_matchs SET phpca_matchs.buts_dom='$val_butd', phpca_matchs.buts_ext='$val_butv', phpca_matchs.date_reelle='$date_us'
                     WHERE phpca_matchs.id='$val_matchs_id'";
					 
			
		//Insertion des données dans la table pronostics	
		$requetePronos="UPDATE phpca_pronostics SET buts_dom='$val_butd', buts_ext='$val_butv'
                     WHERE id_match='$val_matchs_id'";		 

       
		// Paramétres des pronostics
		$resultats4=$idconnect->query("SELECT pts_prono_exact, pts_prono_participation 
								 FROM phpca_gr_championnats 
								 WHERE id_champ='$champ'");

           while ($row4=mysqli_fetch_array($resultats4))
           {
              $pts_prono_exact=$row4[0];
              $pts_prono_participation=$row4[1];
              $points_prono_exact=$pts_prono_exact + $pts_prono_participation ;
           }
   


		// Contrôle des pronosctics et affectation des points
		$resultats2=$idconnect->query("SELECT pronostic, id_membre 
										FROM phpca_pronostics 
										WHERE id_match='$val_matchs_id'");
          
           while ($row2=mysqli_fetch_array($resultats2))
           {
              if ($val_butd>$val_butv and $row2[0]=="1"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd==$val_butv and $row2[0]=="N"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              elseif ($val_butd<$val_butv and $row2[0]=="2"){$query3="UPDATE phpca_pronostics SET points='$points_prono_exact', participation='1' WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'";}
              else 
			  {
			 mysqli_query ($idconnect, ("UPDATE phpca_pronostics 
						SET points='$pts_prono_participation', participation='1' 
						WHERE id_membre='$row2[1]' 	
						AND id_match='$val_matchs_id'"));
		      }
		//  mysqli_query($idconnect, $query3);
		  }
          	 
         }
    
       elseif (($val_butv=='') or ($val_butd==''))
       {
         

 mysqli_query ($idconnect, ("UPDATE phpca_matchs 
					SET phpca_matchs.buts_dom=NULL, phpca_matchs.buts_ext=NULL, phpca_matchs.date_reelle='$date_us'
                    WHERE phpca_matchs.id='$val_matchs_id' ")) ;	
  
         $resultats2=$idconnect->query("SELECT pronostic, id_membre 
										FROM phpca_pronostics 
										WHERE id_match='$val_matchs_id'");
         
         while ($row2=mysqli_fetch_array($resultats2))
         { 
            mysqli_query ($idconnect, ("UPDATE phpca_pronostics 
			SET points = '0', participation='0' 
			WHERE id_membre='$row2[1]' AND id_match='$val_matchs_id'") or die (mysqli_error()));
         } 
       }
	   
      if ( !empty($requete))
		{			
		mysqli_query($idconnect, $requete);
		mysqli_query($idconnect, $requetePronos);
		}
     }     
  }
?>

<table class=phpca width="80%">
  <tr>
    <td class=phpca2 align="center" colspan="3"><?php echo ADMIN_RESULTS_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
  </tr>
  <tr>
    <td align="center"><?php journees ($champ, $numero, $action, $idconnect);?><br /><br /></td>
  </tr>
  <tr>
    <td>			  
	 <table align=center cellspacing="0" width="100%">
	   <form method="post" action="">         
         <?php resultats ($champ, $numero, $idconnect); ?>  
       </form>
   </td>
  </tr>
</table>
<br /><br />
