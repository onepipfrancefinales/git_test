<?php
//récupération des valeurs des champs:
if (isset($_GET['bddComite']))$bddComite = $_GET['bddComite']; 
if (isset($_GET['comite']))$comite = $_GET['comite'];  
if (isset($_GET['equipe1'])) $equipe1 = $_GET['equipe1'];
if (isset($_GET['equipe2'])) $equipe2 = $_GET['equipe2'];
if (isset($_GET['codeEquipe'])) $codeEquipe = $_GET['codeEquipe'];
if (isset($_GET['codeEquipe1'])) $codeEquipe1 = $_GET['codeEquipe1'];
if (isset($_GET['codeEquipe2']))$codeEquipe2 = $_GET['codeEquipe2'];
if (isset($_GET['journee']))$journee = $_GET['journee'];
if (isset($_GET['score1']))$score1 = $_GET['score1'];
if (isset($_GET['score2']))$score2 = $_GET['score2'];
if (isset($_GET['bonusDefEquipe1'])) $bonusDefEquipe1 = $_GET['bonusDefEquipe1']; else $bonusDefEquipe1 =0;
if (isset($_GET['bonusDefEquipe2'])) $bonusDefEquipe2 = $_GET['bonusDefEquipe2']; else $bonusDefEquipe2 =0;
if (isset($_GET['bonusOffEquipe1'])) $bonusOffEquipe1 = $_GET['bonusOffEquipe1']; else $bonusOffEquipe1 =0;
if (isset($_GET['bonusOffEquipe2'])) $bonusOffEquipe2 = $_GET['bonusOffEquipe2']; else $bonusOffEquipe2 =0;


$phpcomite= "php".''.$bddComite;
$phpcomite_equipes = "php".''.$bddComite.''."_equipes";
$phpcomite_matchs  = "php".''.$bddComite.''."_matchs";
$phpcomite_equipesResultat = "php".''.$bddComite.''."_equipesResultat"; 


$championnat = substr("$journee",0 ,6);
$champ = substr("$journee",0 ,6);

// *******    Calcul et envois des bonus à la base de données    *********

require ("../../connect/connexion6.php"); 

echo "bonusDefEquipe1 :".$bonusDefEquipe1;echo "<br />";
echo "bonusDefEquipe2 :".$bonusDefEquipe2;echo "<br />";
echo "bonusOffEquipe1 :".$bonusOffEquipe1;echo "<br />";
echo "bonusOffEquipe2 :".$bonusOffEquipe2;echo "<br />"; 
echo "score1 :".$score1;echo "<br />";
echo "score2 :".$score2;echo "<br />";

echo "equipes :".$phpcomite_equipes;echo "<br />";
//recuperation des bonus précédents
if (isset ($bonusEquipe1BDD)) $bonusEquipe1BDD = $bonusEquipe1BDD; else $bonusEquipe1BDD =0;
if (isset ($bonusEquipe2BDD)) $bonusEquipe2BDD = $bonusEquipe2BDD; else $bonusEquipe2BDD =0;


$reponse = $bdd->query("SELECT penalite
			FROM $phpcomite_equipes
			WHERE id = $codeEquipe1 "); 				
	while ($row = $reponse->fetch())
		{ 
		$bonusEquipe1BDD = $row[0];					
		}

$reponse = $bdd->query( "SELECT penalite
			FROM $phpcomite_equipes
			WHERE id = $codeEquipe2 "); 		
	while ($row = $reponse->fetch())
		{ 
		$bonusEquipe2BDD = $row[0];					
		}

echo "bonus1BDD : ".$bonusEquipe1BDD;echo "<br />";
echo "bonus2BDD : ".$bonusEquipe2BDD;echo "<br />";


// ****** Enregistrement des scores 1 et 2 ********** 
  $sql =$bdd->exec( "UPDATE $phpcomite_matchs
          SET buts_dom='$score1', buts_ext='$score2'
          WHERE id_journee='$journee'and id_equipe_dom='$codeEquipe1' ") ;

// ****** Modification du bonus de l'équipe 1 **********

  $sql2 =$bdd->exec("UPDATE $phpcomite_equipesResultat
          SET penaliteOff='$bonusOffEquipe1'
          WHERE id='$codeEquipe1' ") ;
 
  //$requete = mysql_query( $sql2 )   ;
  
  
  $sql3=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef='$bonusDefEquipe1'
				WHERE id='$codeEquipe1' ") ;
 
 // $requete = mysql_query( $sql3 )   ;
  if (is_numeric($bonusOffEquipe1) and is_numeric($bonusDefEquipe1))
  $sommeBonusEquipe1=$bonusOffEquipe1 + $bonusDefEquipe1;
  else
  $sommeBonusEquipe1=0;
  
 // conservation de bonus off et def equipe1
  //NON ENCORE TESTE
 $jour = substr("$journee",-2);
 $J="J".''.$jour;
 
   $sql23=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J='$sommeBonusEquipe1'
				WHERE id='$codeEquipe1' ") ;
 
 // $requete = mysql_query( $sql23)   ;
  
 
  // ****** Modification du bonus de l'équipe 2 **********

  $sql4 = $bdd->exec("UPDATE $phpcomite_equipesResultat
          SET penaliteOff='$bonusOffEquipe2'
          WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql4 )   ;
  
  
  $sql5=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET penaliteDef='$bonusDefEquipe2'
				WHERE id='$codeEquipe2' ") ;
 
  //$requete = mysql_query( $sql5 )   ;
  if( is_numeric($bonusOffEquipe2) and is_numeric($bonusDefEquipe2))
   $sommeBonusEquipe2=$bonusOffEquipe2 + $bonusDefEquipe2;
  else
	$sommeBonusEquipe2=0;  
 // conservation de bonus off et def  equipe2
 //NON ENCORE TESTE
 $jour = substr("$journee",-2);
 $J="J".''.$jour;
 
   $sql45=$bdd->exec("UPDATE $phpcomite_equipesResultat
				SET $J=$sommeBonusEquipe2
				WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql45)   ;
  

  
  //lecture de la table parallele
  $reponse = $bdd->query( "SELECT penaliteOff, penaliteDef
				FROM $phpcomite_equipesResultat
				WHERE id = $codeEquipe1"); 
					// $result = mysql_query($reponse) ;
					// while ($row = mysql_fetch_array($result) )
					while ($row = $reponse->fetch())
							{ 
							$bonusOff1 = $row[0];
							$bonusDef1 = $row[1];
							}
							
	$reponse =$bdd->query( "SELECT penaliteOff, penaliteDef
				FROM $phpcomite_equipesResultat
				WHERE id = $codeEquipe2"); 
					//$result = mysql_query($reponse) ;
					// while ($row = mysql_fetch_array($result) )
					while ($row = $reponse->fetch())	
							{ 
							$bonusOff2 = $row[0];
							$bonusDef2 = $row[1];
							}						
							
							
	if ($bonusOff1 > 0)
		$bonusOffequipe1 = 1;
	else
		$bonusOffequipe1 = 0;
	
	if ($bonusOff2 > 0)
		$bonusOffequipe2 = 1;
	else
		$bonusOffequipe2 = 0;
 
 
 
 $bonusTotalEquipe1 = $bonusOffEquipe1 + $bonusDef1 + $bonusEquipe1BDD;
 $bonusTotalEquipe2 = $bonusOffEquipe2 + $bonusDef2 + $bonusEquipe2BDD;
 
 
  $sql7=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$bonusTotalEquipe1'
				WHERE id='$codeEquipe1' " );
 
  //$requete = mysql_query( $sql7 )   ;
  
   $sql8=$bdd->exec("UPDATE $phpcomite_equipes
				SET penalite='$bonusTotalEquipe2'
				WHERE id='$codeEquipe2' ") ;
 
 // $requete = mysql_query( $sql8 )   ;
 


echo $champ;

?>
 

 <meta http-equiv="refresh" content="0; URL=/Phpleague/<?php echo "php".$bddComite; ?>/admin/index5.php?page=championnat&action=generer&champ=<?php echo $champ; ?>&bddComite=<?php echo $bddComite; ?>&comite=<?php echo $comite; ?>">


 

 
 
