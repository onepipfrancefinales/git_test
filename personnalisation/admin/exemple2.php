<?php
if (isset($_POST['login'])) $login=$_POST['login'];else $login="mm";
if (isset($_POST['pwd'])) $pwd=$_POST['pwd']; else $pwd= "mmm";

require ("../../connect1/connection5.php");

$reponse = $bdd->query("SELECT nom ,mdp, id
						FROM personnel
						WHERE nom='$login' and mdp='$pwd' "); 
							while ($donnees = $reponse->fetch() )
								{ 
								$login_valide= $donnees['nom'];	
								$pwd_valide= $donnees['mdp'];
								$id_valide= $donnees['id'];
								}
								
								
//mysql_close();
 ?>
<?php
// On d�finit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez tr�s bien interroger votre base de donn�es afin de savoir si le visiteur qui se connecte est bien membre de votre site
//$login_valide = $loginA;
//$pwd_valide = $pwdA;


//$login_valide = "moi";
//$pwd_valide = "lemien";

// on teste si nos variables sont d�finies
if (isset($_POST["login"]) && isset($_POST["pwd"])) {

	// on v�rifie les informations du formulaire, � savoir si le pseudo saisi est bien un pseudo autoris�, de m�me pour le mot de passe
	if ($login_valide == $_POST["login"] && $pwd_valide == $_POST["pwd"])
	 {
		// dans ce cas, tout est ok, on peut d�marrer notre session

		// on la d�marre :)
		session_start ();
		
	/*	
		// on enregistre les param�tres de notre visiteur comme variables de session ($login et $pwd) (notez bien que lon utilise pas le $ pour enregistrer ces variables)
	*/

	$_SESSION["login"] = $_POST["login"];
		$_SESSION["pwd"] = $_POST["pwd"];
		$_SESSION["id"] = $id_valide ;
		// on redirige notre visiteur vers une page de notre section membre
		header ("location: ../affichage/pagePerso.php");
	}
	else {
		// Le visiteur na pas �t� reconnu comme �tant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\"Pseudo ou mot de passe non reconnu, r�-essayez\")">';
		// puis on le redirige vers la page daccueil
		echo '<meta http-equiv="refresh" content="0;URL=pageConnection.php">';
	}
}
else {
	echo "Les variables du formulaire ne sont pas d�clar�es.";
}
?>

