<!DOCTYPE html> 
<?php 
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='+';
if (isset ($nomDivision)) ; else $nomDivision='*';
if (isset ($base)) ; else $base='-';

?>

<html lang="fr"> 
<head>
<meta name="description" content="">
<meta name="keywords" content="Presentation de la competititon et de tous les champions de France 1re Serie. Palmares complet de la 1re Serie.">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Champions de FRANCE </title>

<link type="text/css" rel="stylesheet" href="palmares.css"/> 
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
</head>

<body >

<table align="center">
  <tr> 
    <td colspan="3" > 
            <?php  
			if($division==110){	?>
            <img src="../../images/brennusGrand.jpg" width="1250" height="150"> 
            <?php }
			else{include("../../images/page_image_al.php");}?>
    </td>
  </tr>
  <tr>
    <td colspan="3"><?php include("../../01ligne.php");  ?></td>
  </tr>
  
  <tr  bgcolor="#FFFFFF"> 
     <td colspan="3"><?php //   include("../../pub/pub12.php"); ?></td>
  </tr>
  
  <tr > 
	  <td width="225" bgcolor="#006699"  valign="top"  ><?php  include("../../01gauche.php"); ?></td> 	
	  
	  <td bgcolor="#FFFFFF"  width="650" valign="top"> 
		<?php 

		if ($division==110)
			require ("top14.php");
		elseif ($division == 330){
			require("palmaresLigues.php");
			echo "<hr />";
			echo "<i>"."Saison 2018-2019 : Réformes Territoriales"; 
			echo "<br />";
			echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
			identiques aux nouvelles régions administratives françaises."."</i>";
			echo "<br />"."<hr />";
			require("palmares.php");
			
		}		
		else{
			if ($division == '170' or $division == '180' or $division == '190' or $division == '2070') {
				require("palmaresLigues2023.php");
				//require("palmares2023.php");
			}
			require("palmaresLigues.php");
			echo "<hr />";
			echo "<i>"."Saison 2018-2019 : Réformes Territoriales"; 
			echo "<br />";
			echo "Les 27 comités territoriaux métropolitains sont transformés en 13 ligues régionales,
			identiques aux nouvelles régions administratives françaises.			"."</i>";
			echo "<br />"."<hr />";
			require("palmares.php");
		}
			?>
	  </td>
      
	  
	  <td bgcolor="#006699" width="225" valign="top"><?php include("../../00droite.php"); ?> </td>
    
	
	</tr>
    <tr >  
         <table border="1" bgcolor="#FFFFFF" colspan="3">
            <tr> 
              <td><?php  include("../../comitebas.php");?></td>
            </tr>
            <tr> 
              <td> <?php  //include("../../pub/pub1.php");?></td>
            </tr>
            <tr>
			  <td><?php  include("../../bas.php");?></td>
			</tr>
         </table>
	</tr> 
  </table>

	
 </body>
</html>