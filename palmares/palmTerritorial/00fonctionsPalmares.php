
<?php 
//***********************************************************************/
//                         Palmares  Honneur                            */
//***********************************************************************/

function palmares($comite, $rang)
 {
	global $i;
	if (isset ($i)) $i = $i ; else $i = "i inconnu";
	$nbre = 0;
	
	
	// Recherche de la derniere année enregistrée
	
	
	$requete = "SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'";
				$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $maxAnnee = $row[0];
								}
	
	
	//echo $maxAnnee;

	

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i=$maxAnnee; $i>2000; $i--)
	{
	
	global ${"honneur".($i)};
	

// requete permettant de récupérer les champions du comité demandé
  	 $requete = "SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabPalmaresHonneur[] = $row[0];
								 }
// affectation  des variables  
		//echo $i; //echo "<br />";
			
			//echo $nbre; echo "<br />";
			
			if (isset ($tabPalmaresHonneur[$nbre])) ${"honneur".($i)} = $tabPalmaresHonneur[$nbre]; else ${"honneur".($i)}='-'; 
			echo ${"honneur".($i)};echo "<br /><hr />";
		$nbre = $nbre + 1;
		}

}


function saison($rang, $comite)
 {
	
	if (isset ($comite)) $comite = $comite ; else $comite= "comite inconnu";
	if (isset ($rang)) $rang = $rang ; else $rang= "rang inconnu";
//	GLOBAL $maxAnnee;
	$nbre = 0;
	
	
	// Recherche de la derniere année enregistrée
	
	
	$requete = "SELECT MAX(saison)
				FROM bdequipe1
				WHERE rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'";
				$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $maxAnnee = $row[0];
								}
	
	
	//echo $maxAnnee;

	

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i=$maxAnnee; $i>2000; $i--)
	{
	
	global ${"honneur".($i)};
	

// requete permettant de récupérer les champions du comité demandé
  	 $requete = "SELECT  champion
				 FROM bdequipe1
				 WHERE  saison=$i and rang='$rang' and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabPalmaresHonneur[] = $row[0];
								 }
// affectation  des variables  
		//echo $i; //echo "<br />";
			
			//echo $nbre; echo "<br />";
			
			if (isset ($tabPalmaresHonneur[$nbre])) ${"honneur".($i)} = $tabPalmaresHonneur[$nbre]; else ${"honneur".($i)}='-'; 
			echo $i;echo "<br /><hr />";
			
		$nbre = $nbre + 1;
		}

}



function palmares2($comite, $rang)
 {
	global $i;
	if (isset ($i)) $i = $i ; else $i = "i inconnu";
	$nbre = 0;
	
	
	// Recherche de la derniere année enregistrée
	
	
	$requete = "SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang + 9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'";
				$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $maxAnnee = $row[0];
								}
	
	
	//echo $maxAnnee;

	

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i=$maxAnnee; $i>2000; $i--)
	{
	
	global ${"honneur".($i)};
	

// requete permettant de récupérer les champions du comité demandé
  	 $requete = "SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang + 9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabPalmaresHonneur[] = $row[0];
								 }
// affectation  des variables  
		//echo $i; //echo "<br />";
			
			//echo $nbre; echo "<br />";
			
			if (isset ($tabPalmaresHonneur[$nbre])) ${"honneur".($i)} = $tabPalmaresHonneur[$nbre]; else ${"honneur".($i)}='-'; 
			echo ${"honneur".($i)};echo "<br /><hr />";
		$nbre = $nbre + 1;
		}

}


function saison2($rang, $comite)
 {
	
	if (isset ($comite)) $comite = $comite ; else $comite= "comite inconnu";
	if (isset ($rang)) $rang = $rang ; else $rang= "rang inconnu";
//	GLOBAL $maxAnnee;
	$nbre = 0;
	
	
	// Recherche de la derniere année enregistrée
	
	
	$requete = "SELECT MAX(saison)
				FROM bdequipe2
				WHERE (rang='$rang' or rang='$rang+9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'";
				$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $maxAnnee = $row[0];
								}
	
	
	//echo $maxAnnee;

	

	// déclaration des toutes les variables en variables globales soit( $honneur2018, $honneur2017, $honneur2016,....)
	for ($i=$maxAnnee; $i>2000; $i--)
	{
	
	global ${"honneur".($i)};
	

// requete permettant de récupérer les champions du comité demandé
  	 $requete = "SELECT  champion
				 FROM bdequipe2
				 WHERE  saison=$i and (rang='$rang' or rang='$rang+9000') and comite1 ='$comite' and championnat != 'de France' and titre='Champion'
				 order by saison"; 
							$result = mysql_query($requete) ;
							while ($row = mysql_fetch_array($result) )
								{ 
								 $tabPalmaresHonneur[] = $row[0];
								 }
// affectation  des variables  
		//echo $i; //echo "<br />";
			
			//echo $nbre; echo "<br />";
			
			if (isset ($tabPalmaresHonneur[$nbre])) ${"honneur".($i)} = $tabPalmaresHonneur[$nbre]; else ${"honneur".($i)}='-'; 
			echo $i;echo "<br /><hr />";
			
		$nbre = $nbre + 1;
		}

}




?> 