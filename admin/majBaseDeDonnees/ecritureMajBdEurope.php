<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="description" content="Palmarès des champions de france par divisions et pas années">
	<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
	<meta name="classification" content="Sport,Rugby">
	<meta name="resource-type" content="document">
	<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
	<meta name="author" content="Equipe Onepip">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="All">
	<title>Maj table bdeurope </title>
	<link type="text/css" rel="stylesheet" href="../admin.css">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body> 
<p class="size5 style">Mise à jour de la table bdeurope</p>
  <hr>

<?php

 $annee =  $_POST['annee'];
 $division =  $_POST['division'];
 $equipe1 =  $_POST['equipe1'];
 $pays1 =  $_POST['pays1'];
 $equipe2 =  $_POST['equipe2'];
 $pays2 =  $_POST['pays2'];
 $score1 =  $_POST['score1'];
 $score2 =  $_POST['score2'];
 $equipe1 =  $_POST['equipe1'];
 $lieu =  $_POST['lieu'];
 $public =  $_POST['public'];


 if ($division == "Champion Cup")
 $rang = 11;
else
$rang =21;


$id1 = $annee * 10000 + $rang *100 + 1;
$id2 = $annee * 10000 + $rang *100 + 2;

echo $id1;	echo "<br/>";
echo $id2;	echo "<br/>";
 

	echo "<br/>";
			echo " Enregistrement de la finale dans la table bdeurope ";
			echo "<br/>";

			echo "<br/>";
			echo $id1 . ';' . $annee . ';' . $ivision . ';' . "Vainqueur" . ';' . $equipe1 . ';' . $pays1 . ';' . $equipe2 . ';'.  $pays2  . ';'. $score1 . ';' . $score2 . ';' . $lieu . ';' . $public. ';' . $rang . ';'. "EU";
			echo "<br />";
			echo $id2 . ';' . $annee . ';' . $division . ';' . "Finaliste" . ';' . $equipe2 . ';' . $pays2 . ';' . " - " .   ';' . " - "   .' ;'. $score1 . ';' . $score2 . ';' . $lieu . ';' . $public. ';' . $rang . ';'. "EU";

	
			require ("../../connect/connexion1.php");
	
	$bdd->exec("INSERT INTO  bdeurope
			VALUES ( '$id1', '$annee', '$division', 'Vainqueur', '$equipe1', '$pays1', '$equipe2',
			'$pays2', '$score1', '$score2', '$lieu', '$public' ,'$rang', 'EU'),
			
			( '$id2', '$annee', '$division', 'Finaliste', '$equipe2', '$pays2', '-',
			'-', '$score1', '$score2', '$lieu', '$public' ,'$rang', 'EU')
			 ");
			

?>

<a href="/admin/majDebutSaison/pageAjouterJournee.php">Retour</a>
 
  
  </p>

</body>
</html>