<?php
require ("../../saison.php");
require ("../../fonctions.php");
require '../../consultation/fonctions.php';
$chaine = $_GET['champion'];
$nouveauClub = $_GET['nouveauClub'];

 if (is_int($chaine)) {

  //   echo " numerique"; echo "<br/>";
   $equipe = substr($chaine, 2, 5);
   $numLigue = substr($chaine, 0, 2);
   $id = substr($chaine, 2, 2);
  // echo $id;
 }
 
 
 //Evaluation de la variable chaine si textuelle
 else {
  // echo " non numerique";echo "<br/>";
   require '../../connect/connexion1.php';
   infosclub($chaine, $bdd);
   $id_equipe=$id;
   $equipe = $numLigue . $code;
   $id = substr($id, 2, 2);
  // echo $id;
 }

 
require '../../connect/connexion1.php'; 
nomComite (0,$id, $bdd);
infosclub($chaine, $bdd);
nomLiguePalm ($numLigue, $bdd);
affichageSaisonEnCours($equipe, $bdd);
bdInfosClub($chaine, $bdd);
saisons($code, $annee, $bdd);

consultationEvolutionClub ($equipe, $bdd);
fusionDeClubs ($equipe, $bdd) ;

?>

<html>
<head>
 <title>Fiche club <?php echo $nomChampion; ?></title>
<content="Présentation de club <?php echo $nomChampion; ?>">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <link rel="stylesheet" type="text/css" href="../menu_smart2.css">  
 <link type="text/css" rel="stylesheet" href="../10.css">
 <link type="text/css" rel="stylesheet" href="paramTiroir.css">
 <link type="text/css" rel="stylesheet" href="../../consultation/pgclub00.css"/>
 <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body text="#000000" bgcolor="#CCCCCC">
 <div class="fixed-header">
   <div class="container">
   
    <table width="98%" border="1">
     <tr> 
      <td width= "5%"class="h22" height="20"><a href="../sommaire.php"><img src="../../images/smart/flecheGauche.jpg" height="20"></a></td>
	  <td width= "95%"class="h22" height="20"> France Finales Rugby </td>
     </tr>
     <tr> 
      <td colspan="2" class="h12" width= "100%"><?php echo $nomLong;?> </td>
     </tr>
    </table>
	
   </div>
  </div>
 <div class="container">
   <?php
   $smart = true;
   require '../../consultation/00clubs.php';
   require '../bas2.php';
 //  include("../../pub/pub_displayCarre.php");
   ?>
 </div>
</body>
</html>