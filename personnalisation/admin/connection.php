

 <?php
$nom=isset ($_POST['nom']) ? $_POST['nom'] : NULL;
$mdp=isset ($_POST['mdp']) ? $_POST['mdp'] : NULL;
 echo $nom;
  echo $mdp;



try
	{
	$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france_db5;charset=utf8', 'onepip-france', 'lavelan09');
	}
catch(Exception $e)
	{
     die('Erreur : '.$e->getMessage());
	}
?>

<?php 
// Hachage du mot de passe
//$pass_hache = sha1($_POST['pass']);

// V�rification des identifiants
$req = $bdd->prepare('	SELECT id
 						FROM personnel 
						WHERE nom = :nom
						AND mdp = :mdp');
			
			
$req->execute(array(
   				 'nom' => $nom,
   				 'mdp' => $mdp));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
echo $nom; echo $mdp;
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['nom'] = $nom;
   echo 'Vous �tes connect� !';
}
?>