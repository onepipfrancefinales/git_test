<?php

	$reponse = $bdd->query("




while ($row = $reponse->fetch() )

//*******************************************

$bdd = new mysqli("localhost", "root","" , "onepip-france-db2");
 
  if ($bdd->connect_error)
  {
    die("Connection failed: " . $bdd->connect_error);
} 

$sql =" INSERT INTO phpab_joueurs (nom,    nom_cache, 	prenom,	date_naissance, position_terrain, 	type_licence, 	premiereLigne, comite,	club,	photo, 	id_perso) 
						VALUES    ('$nom','$nom','$prenom','0000-00-00','$licence','','0','1','$equipe','1','$idPerso')";


if ($bdd->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}
 
$bdd->close(); 



//***************************************
	$req = $bdd->prepare("UPDATE $bdfeuilleB
							 SET 
							 responsable =:responsable,

							WHERE  id =:code_match");
		   
			 $req->execute(array(
							'responsable' => $responsable,

							'code_match' => $code_match

						));	
						
?>