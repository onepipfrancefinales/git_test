<?php $rang = $_GET['rang']; 
require '../../saison.php';
require '../../connect/connexion1.php';
require '../../palmares/fonctionsPalmares.php';
//require 'fonctions.php';
//nomDivision($rang, $bdd);
nomDivisionMax($rang, $bdd);
$smart = true;
?>

<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta name="description" content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
  <meta name="keywords" content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
  <meta name="classification" content="Sport,Rugby">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Comite Midi Pyrenees de Rugby">
  <meta name="author" content="Equipe Onepip">
  <meta name="robots" content="All">
  <title> <?php echo "Champions de France " .$division;?></title>
  <link type="text/css" rel="stylesheet" href="../10.css"> 
  <link rel="stylesheet" type="text/css" href="../menu_smart2.css"> 
  <link type="text/css" rel="stylesheet" href="paramTiroir.css"> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../../ligne1.css"> 
  <meta name=viewport content="width=device-width, initial-scale=1">
 </head>
<body >

<div class="fixed-header">
		<div class="container">
			<table class="width98PC borderColorBlack borderWidth1">
				<tr class="borderColorBlack borderWidth1">
	<td class="h22 width98PC"> France Finales Rugby </td>
  </tr>
  <tr> 
    <td colspan="2" class="h12"><?php echo "Champions de France " ."<br />".$division;?></td>
  </tr>
</table>
</div>
</div>
 <div class="container">
<div class="fixed-header">
<br /><br /><br /><br /><br /><br /><br />
    <?php include("menuPalmares.php"); ?>
    <br>
  
 </div> 
 </div> 
<div class="container">
 
<div style ="margin-top : 225px">
  <p>.</p>
</div> 

    <?php	  
    if ($rang < 300){
    palmaresFrance($rang, $finSaison, $bdd);	?>
	 <p class="palmNoir" >
    <?php
    
		for($i=0; $i< $intervalleAnneeChampion-1; $i++)
		{
		echo "<p class=\"palmNoir\" style=\"padding-bottom : 6px\">";
		echo $tabSaison[$i].' : '.$tabChampion[$i].' '.$tabComite[$i]."<br />";
		echo "</p>";
		}
    
  }
  else
  {
    ?>
   </p>
  
   <?php
$division = $rang;

				if ($division < 230) {
				$tabDivisions = array('110', '120', '130', '135', '140', '150', '160', '170','180','190','200','210','220','222');
				$table ="bdequipe1";
				}
				// equipe 2
				else if ($division > 220 and $division < 280) {
          
				$tabDivisions = array('230', '240', '250', '260', '270');
				$table ="bdequipe2";
				}
				// féminines
				else if ($division > 270 and $division < 300) {
					$tabDivisions = array( '280', '285', '290', '295');
					$table ="bdfem";
					}
				// equipe jeunes
				else if ($division > 300 and $division < 380) {
					$tabDivisions = array( '310', '320', '325', '330','340','350','360','365','370','375');
					$table ="bdjeunesligne";
					}
				//challenges
				else if ($division > 370) {
					$tabDivisions = array( '380','390','400','405','410','420','430','440','450','500');
					$table ="bdchallenges";
					}
          ?>        
<div class="center styleArial noBold size4">
<?php
				foreach ($tabDivisions as $div) {
					if ($division == $div) {
						chgmntNomDivisionligne($rang, $table, $bdd, true);
					}
				}
      }
      ?>    
   </div>     
  	<?php require ("../bas.php");?>
  
 </div>
 </body>
</html>
<style>
	.infobulle {
		position: relative;
		/* les .infobulle deviennent référents */
		cursor: help;
	}

	/* on génère un élément :after lors du survol et du focus :*/

	.infobulle:hover::after,
	.infobulle:focus::after {
		content: attr(aria-label);
		/* on affiche aria-label */
		position: absolute;
		/*top: -3.4em;*/
		left: 70%;
		transform: translate(0px, 0px);
		/* on centre horizontalement  */
		z-index: 0;
		/* pour s'afficher au dessus des éléments en position relative */
		/* white-space: nowrap;  /* on interdit le retour à la ligne */
		border-color: black;
		border-style: solid;
		border-width: 1px;
		background: #5ec1ff;
		text-align: left;
	}
</style>
