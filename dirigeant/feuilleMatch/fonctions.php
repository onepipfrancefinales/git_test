<?php
//calculEffectif ($bdcomite, $equipe);

//---   ZONE 1 -----------
//AffichageEquipeA($equipeA);
//AffichageEquipeB($equipeB);

//------ZONE 2---------
//infosEntraineur($comite, $equipe, $entraineur);	
//infosEntraineur2($comite, $equipe, $entraineur2);	  
//infosSoigneur($comite, $equipe, $soigneur);
//infosAdjoint($comite, $equipe, $adjoint);
//infosMedecin($comite, $equipe, $medecin);
//infosPrepa($comite, $equipe, $prepa);
//-------ZONE 3-------------------
//-------ZONE 4-------------------
//-------ZONE 5-------------------
//infosResponsable($comite, $equipe, $responsable);
?>
<?php
function feuilleMatch($code_match, $comite, $bdd)
{
	Global $entraineur ,$entraineur2 ,$adjoint ,$medecin ,$soigneur ,$responsable ,$dopage ,$prepa, $capitaine, $numeroJuge ;

	$feuille="php".$comite."_feuilleA";

$reponse = $bdd->query("SELECT *
						FROM $feuille
						WHERE id = $code_match");
							while ($donnees = $reponse->fetch() )
								{ 
							/*
								$N1= $donnees['N1'];
								$N2= $donnees['N2'];
								$N3= $donnees['N3'];
								$N4= $donnees['N4'];
								$N5= $donnees['N5'];
								$N6= $donnees['N6'];
						        $N7= $donnees['N7'];
								$N8= $donnees['N8'];
								$N9= $donnees['N9'];
							    $N10= $donnees['N10'];
							    $N11= $donnees['N11'];
							    $N12= $donnees['N12'];
							 	$N13= $donnees['N13'];
							  	$N14= $donnees['N14'];
							   	$N15= $donnees['N15'];
								$N16= $donnees['N16'];
								$N17= $donnees['N17'];
								$N18= $donnees['N18'];
								$N19= $donnees['N19'];
								$N20= $donnees['N20'];
								$N21= $donnees['N21'];
								$N22= $donnees['N22'];
								$N23= $donnees['N23'];
							*/
							
							
								$entraineur = $donnees['entraineur'];
								$entraineur2 = $donnees['entraineur2'];
								$adjoint = $donnees['adjoint'];
								$medecin = $donnees['medecin'];
								$soigneur = $donnees['soigneur'];
								$responsable = $donnees['responsable'];
								$dopage = $donnees['dopage'];
								$prepa = $donnees['prepa'];
								$capitaine = $donnees['capitaine'];
								$numeroJuge = $donnees['juge'];
								}
								
							
								
//*********************************************								
								
Global $entraineurB ,$entraineur2B ,$adjointB ,$medecinB ,$soigneurB ,$responsableB ,$prepaB, $capitaineB, $numeroJugeB ;

	$feuille="php".$comite."_feuilleB";

$reponse = $bdd->query("SELECT *
						FROM $feuille
						WHERE id = $code_match");
							while ($donnees = $reponse->fetch() )
								{ 
							/*
								$N1= $donnees['N1'];
								$N2= $donnees['N2'];
								$N3= $donnees['N3'];
								$N4= $donnees['N4'];
								$N5= $donnees['N5'];
								$N6= $donnees['N6'];
						        $N7= $donnees['N7'];
								$N8= $donnees['N8'];
								$N9= $donnees['N9'];
							    $N10= $donnees['N10'];
							    $N11= $donnees['N11'];
							    $N12= $donnees['N12'];
							 	$N13= $donnees['N13'];
							  	$N14= $donnees['N14'];
							   	$N15= $donnees['N15'];
								$N16= $donnees['N16'];
								$N17= $donnees['N17'];
								$N18= $donnees['N18'];
								$N19= $donnees['N19'];
								$N20= $donnees['N20'];
								$N21= $donnees['N21'];
								$N22= $donnees['N22'];
								$N23= $donnees['N23'];
							*/
							
							
								$entraineurB = $donnees['entraineur'];
								$entraineur2B = $donnees['entraineur2'];
								$adjointB = $donnees['adjoint'];
								
								$medecinB = $donnees['medecin'];
								$soigneurB = $donnees['soigneur'];
								
								$responsableB = $donnees['responsable'];
								
								$numeroJugeB = $donnees['juge'];
								$capitaineB = $donnees['capitaine'];
								
								
								$prepaB = $donnees['prepa'];
								
								}
										
}

								
//*****************************************************


function calculEffectif ($comite, $equipe, $bdd)
	{
		
	$bdcomite = "php".$comite."_joueurs";
	Global $effectifJoueurs, $effectifReel, $nbreSupprime, $idJoueurMax;
/*	
	$reponse = $bdd->query("SELECT count(id) 
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='1'  and comite='1'"); 

								while ($row = $reponse->fetch())
									{
									$idJoueurMax= $row[0]; 
									}
*/
	
	$reponse = $bdd->query("SELECT count(nom) 
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='1' and comite='1'"); 

								while ($row = $reponse->fetch())
									{
									$effectifJoueurs= $row[0]; 
									}

	//$effectifJoueurs=$nbre;	
	

	$reponse = $bdd->query("SELECT count(nom_cache) 
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='1' and comite='0'"); 

								while ($row = $reponse->fetch())
									{
									$nbreSupprime= $row[0]; 
									}

	$effectifReel=$nbreSupprime + $effectifJoueurs;	

	}
	
	
	
function calculEffectifDirigeant ($comite, $equipe, $bdd)
	{
		
	$bdcomite = "php".$comite."_joueurs";
	Global $effectifDirigeant , $id_persoMax;
	
	$reponse = $bdd->query("SELECT count(id) , id_perso
						FROM $bdcomite 
						WHERE club=$equipe AND fonction='5' and comite='1'"); 

								while ($row = $reponse->fetch())
									{
									$effectifDirigeant= $row[0]; 
									$id_persoMax = $row[1];
									}	
	
	
	
	}
	
	
//*********************************************************************

function AffichageEquipeA($equipeA, $bdd)
	{
	if (isset ($clubA)) $clubA=$clubA; else $clubA ="";
	if (isset ($bdd)) $bdd=$bdd; else $bdd ="";
	Global $clubA;
	
$reponse = $bdd->query("SELECT sigle 
						FROM bdclubs 
						WHERE id='$equipeA' OR id=$equipeA - 90000000"); 
								while ($donnees = $reponse->fetch() )
										{ 
										 $clubA = $donnees['sigle'];
										}	
	}

//*********************************************************************

function AffichageEquipeB($equipeB, $bdd)
	{
	if (isset ($clubB)) $clubB=$clubB; else $clubB ="";
	Global $clubB;
	
	$reponse = $bdd->query("SELECT sigle 
							FROM bdclubs 
						WHERE id='$equipeB' OR id=$equipeB - 90000000"); 
								while ($donnees = $reponse->fetch() )
										{ 
										 $clubB = $donnees['sigle'];
										}	
	}


//******************************************************************


function nom_joueur ($comite, $equipe, $bdd, $effectifJoueurs)
{
	
	if (isset ($effectifJoueurs)) $effectifJoueurs=$effectifJoueurs;else $effectifJoueurs='1';
	
	
	$tabNom= array();
	$tabPrenom = array();
	$tabLicence = array();
	$tabId_perso = array();
	
	$bdcomite ="php".$comite."_joueurs";
	
	for ($i=0; $i<= $effectifJoueurs	; $i++)
	{
	global ${"tabNom".$i}, ${"tabPrenom".$i}, ${"tabId_perso".$i}, ${"tabLicence".$i};
		
		$reponse = $bdd->query("SELECT nom, prenom,  licence, type_licence ,id_perso
								FROM $bdcomite 
								WHERE fonction='1' and club='$equipe' 
								ORDER BY nom_cache "); 
										while ($donnees = $reponse->fetch() )
											{ 
											$tabNom[]= $donnees['nom'];
											$tabPrenom[] = $donnees['prenom'];
											$tabLicence[]= $donnees['licence']; 
											$tabId_perso[]= $donnees['id_perso'];   
											}
											
	if (isset ($tabNom[$i])) ${"tabNom".$i}= $tabNom[$i]; else  ${"tabNom".$i}= "**";										
	if (isset ($tabPrenom[$i])) ${"tabPrenom".$i}= $tabPrenom[$i]; else  ${"tabPrenom".$i}= "**";
	if (isset ($tabId_perso[$i])) ${"tabId_perso".$i}= $tabId_perso[$i]; else  ${"tabId_perso".$i}= "**";
	if (isset ($tabLicence[$i])) ${"tabLicence".$i}= $tabLicence[$i]; else  ${"tabLicence".$i}= "**";
	}										
							
}
?>
<?php
//***************              Entraineurs    *******************************************


function infosEntraineur($comite, $equipe, $entraineur, $bdd )
{

if (isset ($nomEntraineur)) $nomEntraineur=$nomEntraineur; else $nomEntraineur ="";	
if (isset ($prenomEntraineur)) $prenomEntraineur=$prenomEntraineur; else $prenomEntraineur ="";	
if (isset ($nomEntraineur)) $nomEntraineur=$nomEntraineur; else $nomEntraineur ="";	

	
global $nomEntraineur, $prenomEntraineur, $licenceEntraineur;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$entraineur' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomEntraineur=$row[0];
					  $prenomEntraineur=$row[1];
					  $licenceEntraineur=$row[2];
					}
				
}



function infosEntraineurB($comite, $equipe, $entraineurB,  $bdd )
{

if (isset ($nomEntraineurB)) $nomEntraineurB = $nomEntraineurB; else $nomEntraineurB ="";	
if (isset ($prenomEntraineurB)) $prenomEntraineurB = $prenomEntraineurB; else $prenomEntraineurB ="";	
if (isset ($nomEntraineurB)) $nomEntraineurB = $nomEntraineurB; else $nomEntraineurB ="";	

		
global $nomEntraineurB, $prenomEntraineurB, $licenceEntraineurB;


$bdcomite="php".$comite."_joueurs";



		$reponse = $bdd->query("	SELECT nom, prenom, licence 
									FROM $bdcomite 
									WHERE nom='$entraineurB' and club='$equipe' and fonction='5' ");
										while ($row = $reponse->fetch() )
											{
											  $nomEntraineurB=$row[0];
											  $prenomEntraineurB=$row[1];
											  $licenceEntraineurB=$row[2];
											}
				
}






?>
<?php
//***************              Entraineurs2    *******************************************

function infosEntraineur2($comite, $equipe, $entraineur2, $bdd)
{
if (isset ($nomEntraineur2)) $nomEntraineur2=$nomEntraineur2; else $nomEntraineur2 ="";	
if (isset ($prenomEntraineur2)) $prenomEntraineur2=$prenomEntraineur2; else $prenomEntraineur2 ="";	
if (isset ($nomEntraineur2)) $nomEntraineur2=$nomEntraineur2; else $nomEntraineur2 ="";	
	
global $nomEntraineur2, $prenomEntraineur2, $licenceEntraineur2;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$entraineur2' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomEntraineur2=$row[0];
					  $prenomEntraineur2=$row[1];
					  $licenceEntraineur2=$row[2];
					}
				
}


function infosEntraineur2B($comite, $equipe, $entraineur2B, $bdd)
{
if (isset ($nomEntraineur2B)) $nomEntraineur2B=$nomEntraineur2B; else $nomEntraineur2B ="";	
if (isset ($prenomEntraineur2B)) $prenomEntraineur2B=$prenomEntraineur2B; else $prenomEntraineur2B ="";	
if (isset ($nomEntraineur2B)) $nomEntraineur2B=$nomEntraineur2B; else $nomEntraineur2B ="";	
	
global $nomEntraineur2B, $prenomEntraineur2B, $licenceEntraineur2B;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$entraineur2B' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomEntraineur2B=$row[0];
					  $prenomEntraineur2B=$row[1];
					  $licenceEntraineur2B=$row[2];
					}
				
}


//***************              Adjoint    *******************************************


function infosAdjoint($comite, $equipe, $adjoint, $bdd)
{
if (isset ($nomAdjoint)) $nomAdjoint=$nomAdjoint; else $nomAdjoint ="";	
if (isset ($prenomAdjoint)) $prenomAdjoint=$prenomAdjoint; else $prenomAdjoint ="";	
if (isset ($nomAdjoint)) $nomAdjoint=$nomAdjoint; else $nomAdjoint ="";	
	
global $nomAdjoint, $prenomAdjoint, $licenceAdjoint;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$adjoint' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomAdjoint=$row[0];
					  $prenomAdjoint=$row[1];
					  $licenceAdjoint=$row[2];
					}
				
}



function infosAdjointB($comite, $equipe, $adjointB, $bdd)
{
if (isset ($nomAdjointB)) $nomAdjointB=$nomAdjointB; else $nomAdjointB ="";	
if (isset ($prenomAdjointB)) $prenomAdjointB=$prenomAdjointB; else $prenomAdjointB ="";	
if (isset ($nomAdjointB)) $nomAdjointB=$nomAdjointB; else $nomAdjointB ="";	
	
global $nomAdjointB, $prenomAdjointB, $licenceAdjointB;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$adjointB' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomAdjointB=$row[0];
					  $prenomAdjointB=$row[1];
					  $licenceAdjointB=$row[2];
					}
				
}
//***************             Soigneurs    *******************************************
function infosSoigneur($comite, $equipe, $soigneur, $bdd)
{
if (isset ($nomSoigneur)) $nomSoigneur=$nomSoigneur; else $nomSoigneur ="";	
if (isset ($prenomSoigneur)) $prenomSoigneur=$prenomSoigneur; else $prenomSoigneur ="";	
if (isset ($nomSoigneur)) $nomSoigneur=$nomSoigneur; else $nomSoigneur ="";	
	
global $nomSoigneur, $prenomSoigneur, $licenceSoigneur;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$soigneur' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomSoigneur=$row[0];
					  $prenomSoigneur=$row[1];
					  $licenceSoigneur=$row[2];
					}
				
}


function infosSoigneurB($comite, $equipe, $soigneurB, $bdd)
{
if (isset ($nomSoigneurB)) $nomSoigneurB=$nomSoigneurB; else $nomSoigneurB ="";	
if (isset ($prenomSoigneurB)) $prenomSoigneurB=$prenomSoigneurB; else $prenomSoigneurB ="";	
if (isset ($nomSoigneurB)) $nomSoigneurB=$nomSoigneurB; else $nomSoigneurB ="";	
	
global $nomSoigneurB, $prenomSoigneurB, $licenceSoigneurB;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$soigneurB' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomSoigneurB=$row[0];
					  $prenomSoigneurB=$row[1];
					  $licenceSoigneurB=$row[2];
					}
				
}
//***************              Medecin    *******************************************
function infosMedecin($comite, $equipe, $medecin, $bdd)
{
if (isset ($nomMedecin)) $nomMedecin=$nomMedecin; else $nomMedecin ="";	
if (isset ($prenomMedecin)) $prenomMedecin=$prenomMedecin; else $prenomMedecin ="";	
if (isset ($nomMedecin)) $nomMedecin=$nomMedecin; else $nomMedecin ="";	
	
global $nomMedecin, $prenomMedecin, $licenceMedecin;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$medecin' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomMedecin=$row[0];
					  $prenomMedecin=$row[1];
					  $licenceMedecin=$row[2];
					}
				
}


function infosMedecinB($comite, $equipe, $medecinB, $bdd)
{
if (isset ($nomMedecinB)) $nomMedecinB=$nomMedecinB; else $nomMedecinB ="";	
if (isset ($prenomMedecinB)) $prenomMedecinB=$prenomMedecinB; else $prenomMedecinB ="";	
if (isset ($nomMedecinB)) $nomMedecinB=$nomMedecinB; else $nomMedecinB ="";	
	
global $nomMedecinB, $prenomMedecinB, $licenceMedecinB;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$medecinB' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomMedecinB=$row[0];
					  $prenomMedecinB=$row[1];
					  $licenceMedecinB=$row[2];
					}
				
}
//***************              Prepa   *******************************************

function infosPrepa($comite, $equipe, $prepa, $bdd)
{
if (isset ($nomPrepa)) $nomPrepa=$nomPrepa; else $nomPrepa ="";	
if (isset ($prenomPrepa)) $prenomPrepa=$prenomPrepa; else $prenomPrepa ="";	
if (isset ($nomPrepa)) $nomPrepa=$nomPrepa; else $nomPrepa ="";	
	
global $nomPrepa, $prenomPrepa, $licencePrepa;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$prepa' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomPrepa=$row[0];
					  $prenomPrepa=$row[1];
					  $licencePrepa=$row[2];
					}
				
}

function infosPrepaB($comite, $equipe, $prepaB, $bdd)
{
if (isset ($nomPrepaB)) $nomPrepa=$nomPrepaB; else $nomPrepaB ="";	
if (isset ($prenomPrepaB)) $prenomPrepaB=$prenomPrepaB; else $prenomPrepaB ="";	
if (isset ($nomPrepaB)) $nomPrepaB=$nomPrepaB; else $nomPrepaB ="";	
	
global $nomPrepaB, $prenomPrepaB, $licencePrepaB;


$bdcomite="php".$comite."_joueurs";
$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$prepaB' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomPrepaB=$row[0];
					  $prenomPrepaB=$row[1];
					  $licencePrepaB=$row[2];
					}
				
}



//***************              Dopage    *******************************************
function infosDopage($comite, $equipe, $dopage, $bdd)
          
{

if (isset ($nomDopage)) $nomDopage=$nomDopage; else $nomDopage ="";	
if (isset ($prenomDopage)) $prenomDopage=$prenomDopage; else $prenomDopage ="";	
if (isset ($nomDopage)) $nomDopage=$nomDopage; else $nomDopage ="";	
	
global $nomDopage, $prenomDopage, $licenceDopage;

$bdcomite="php".$comite."_joueurs";

$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$dopage' and club='$equipe' and fonction='5' ");
				while ($row = $reponse->fetch() )
					{
					  $nomDopage=$row[0];
					  $prenomDopage=$row[1];
					  $licenceDopage=$row[2];
					}
				
}




//***************              Responsable    *******************************************

function infosResponsable($comite, $equipe, $responsable, $bdd)
{
if (isset ($nomResponsable)) $nomResponsable=$nomResponsable; else $nomResponsable ="";	
if (isset ($prenomResponsable)) $prenomResponsable=$prenomResponsable; else $prenomResponsable ="";	
if (isset ($nomResponsable)) $nomResponsable=$nomResponsable; else $nomResponsable ="";	
	
global $nomResponsable, $prenomResponsable, $licenceResponsable;


$bdcomite="php".$comite."_joueurs";

$reponse = $bdd->query("SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$responsable' and club='$equipe' and fonction='5'");
				while ($row = $reponse->fetch() )
						{
				  		$nomResponsable=$row[0];	
						$prenomResponsable=$row[1];
				   		$licenceResponsable=$row[2];
						 }
}


function infosResponsableB($comite, $equipe, $responsable, $bdd)
{
if (isset ($nomResponsableB)) $nomResponsableB=$nomResponsableB; else $nomResponsableB ="";	
if (isset ($prenomResponsableB)) $prenomResponsableB=$prenomResponsableB; else $prenomResponsableB ="";	
if (isset ($nomResponsableB)) $nomResponsableB=$nomResponsableB; else $nomResponsableB ="";	
	
global $nomResponsableB, $prenomResponsableB, $licenceResponsableB;


$bdcomite="php".$comite."_joueurs";
$responsableB = $responsable;
$reponse = $bdd->query("SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE nom='$responsableB' and club='$equipe' and fonction='5'");
				while ($row = $reponse->fetch() )
						{
				  		$nomResponsableB=$row[0];	
						$prenomResponsableB=$row[1];
				   		$licenceResponsableB=$row[2];
						 }
}

?>



<?php
//***************             Juge de touche   *******************************************

function infosJugeTouche($comite, $equipe, $numeroJuge, $code_match,  $bdd)
{						

if (isset ($nomJuge)) $nomJuge=$nomJuge; else $nomJuge ="";	
if (isset ($prenomJuge)) $prenomJuge=$prenomDopage; else $prenomJuge ="";	
if (isset ($licenceJuge)) $licenceJuge=$licenceJuge; else $licenceJuge ="";	
//if (isset (${"N".$numeroJuge})) "N".$numeroJuge=${"N".$numeroJuge};else "N".$numeroJuge="";	
if (empty($numeroJoueur)) $numeroJoueur;

global $idJuge, $nomJuge, $prenomJuge, $licenceJuge, $numeroJugeB, $numeroJoueur;



//**** Récupération de l'identifiant du joueur arbitre


$feuille="php".$comite."_feuilleA";
$numeroJoueur="N".$numeroJuge;

if ($numeroJuge > 0)
	{

	$reponse = $bdd->query("SELECT $numeroJoueur
							FROM $feuille
							WHERE id='$code_match'");
				while ($row = $reponse->fetch() )
						{    
						$idJuge=$row[0];
						}

	//**** Récupération des nom, prénom et licence du joueur arbitre

	$bdcomite="php".$comite."_joueurs";
	$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE id_perso='$idJuge' and club='$equipe' and fonction='1' ");
				while ($row = $reponse->fetch() )
					{
					  $nomJuge=$row[0];
					  $prenomJuge=$row[1];
					  $licenceJuge=$row[2];
					}
	}		
}


function infosJugeToucheB($comite, $equipe, $numeroJugeB, $code_match,  $bdd)
{
//echo $juge;
if (isset ($nomJugeB)) $nomJugeB=$nomJugeB; else $nomJugeB ="";	
if (isset ($prenomJugeB)) $prenomJugeB=$prenomDopageB; else $prenomJugeB="";	
if (isset ($licenceJugeB)) $licenceJugeB=$licenceJugeB; else $licenceJugeB ="";	
//if (isset (${"N".$numeroJugeB})) ${"N".$numeroJugeB}=${"N".$numeroJugeB};else ${"N".$numeroJugeB}="";	
if (isset ($idJugeB)) $idJugeB  =$idJugeB ; else $idJugeB ="";


global $nomJugeB, $prenomJugeB, $licenceJugeB, $numeroJoueur, $numeroJugeB;



//**** Récupération de l'identifiant du joueur arbitre


$feuille="php".$comite."_feuilleB";
$numeroJoueur="N".$numeroJugeB;


	if ($numeroJugeB > 0)
	{
	$reponse = $bdd->query("SELECT $numeroJoueur
						FROM $feuille
						WHERE id='$code_match'");
				while ($row = $reponse->fetch() )
						{    
						$idJugeB=$row[0];
						}


	//**** Récupération des nom, prénom et licence du joueur arbitre


	$bdcomite="php".$comite."_joueurs";
	$reponse = $bdd->query("	SELECT nom, prenom, licence 
			FROM $bdcomite 
			WHERE id_perso='$idJugeB' and club='$equipe' and fonction='1' ");
				while ($row = $reponse->fetch() )
					{
					  $nomJugeB=$row[0];
					  $prenomJugeB=$row[1];
					  $licenceJugeB=$row[2];
					}
	}		
}


?>


<?php
//*********************************************************************
//*********************************************************************
//
//								statistiques
//
//*********************************************************************


function nbreDeMatch($comite, $equipe, $idJoueur, $bdd)
{
$nbreMatch =0;




$feuilleA = "php".$comite."_feuillea";
global $nbreMatch;
global $numero1;
for ($idJoueur=1;$idJoueur<60; $idJoueur++)	
	{	
	${"joueur".$idJoueur}=0;
	
	
	if (isset ($numero1)) $numero1=$numero1;else $numero1="0";
	if (isset ( ${"nbreMatch".$idJoueur} )) ${"nbreMatch".$idJoueur}=${"nbreMatch".$idJoueur};else ${"nbreMatch".$idJoueur}="0";
	
	$reponse = $bdd->query("SELECT N1
							FROM $feuilleA
							WHERE  id =1301710202 and equipe_dom='$equipe' and N1=$idJoueur ");
				while ($row = $reponse->fetch() )
						{    
						$numero1=$row[0];
						}
						
/*
	$reponse = $bdd->query("SELECT N1
							FROM $feuilleA
							WHERE  id =1301710402 and equipe_dom='$equipe' and N1=$idJoueur ");
				while ($row = $reponse->fetch() )
						{    
						$numero12=$row[0];
						}
	
						}
*/		
	}
	
	
	
}





