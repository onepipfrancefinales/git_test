 <?php 
 if (isset($_GET['chanson'])) $chanson= $_GET['chanson'];
 echo $chanson;
 ?> 
<!DOCTYPE html PUBLIC>
<html lang="fr">
<head><link rel= "canonical" href= "https://francefinalesrugby.fr/dossiers/lexique/page_chansons.php/" />
<meta charset="utf-8" />
<meta name="description"
content="Tout sur le comit� territorial <?php echo $titre;?> : Pr�sentation du comit� (Bureau; adresse; contact mel; contact site officiel du comit�); les effectifs; les palmar�s nationaux; les palmar�s territoriaux et l'ensemble des clubs composant le comit� avec un lien pour acc�der aux diff�rents clubs.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Dictionnaire du rugby    </title>
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../../lienNoir.css"/>
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<link type="text/css" rel="stylesheet" href="../formulaire.css">
<link type="text/css" rel="stylesheet" href="menu_smart2.css">
</head>

<body text="#000000" link="#000000" alink="#000000" vlink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" > 
    
	
	  <td colspan="3" height="74"><font color="#FFFFFF">
        <?php
    // On inclut le haut de la page
    include("../../images/page_image_al.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php
    
    include("../../01ligne.php");
    ?>
      
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        
        <div align="center"> 
          <p align="center"> 
            <?php   include("../../01gauche.php");  ?>
            <b><font size="5" color="#000000"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#000000" align="center" height="505" valign="top" width="650"> 
            <?php
			echo "<br/>"; 			
			include("introChansons.htm");
				echo "<br/>"; 
				echo "<hr />";echo "<hr />";
					echo "<br/>"; 
		
	switch ($chanson){
		case "51j" :  require 'titres/51JeTaime.htm';
		break;
		case "bal" : require 'titres/baliBalo.htm';
		break;
		case "cdl" : require "titres/chevaliersDeLaTableRonde.htm";
		break;
		case "fan" : require "titres/fanchon.htm";		
		break;	
		case "ieu" : require "titres/ilEstUnCoinDeFrance.htm";
		break;
		case "ldd" : require "titres/laDigueDuCul.htm";		
		break;		
		case "lar" : require "titres/larirette.htm";
		break;
		case "lsa" : require "titres/laSalope.htm";		
		break;	
		//------------------------------------------------------
		case "fdm" : require "titres/fetesDeMauleon.htm";
		break;
		case "lco" : require "titres/copainsDabord.htm";
		break;
		case "lch" : require "titres/leChasseur.htm";
		break;
		case "iws" : require "titres/iWillSurvive.htm";
		break;
		case "lld" : require "titres/lesLacsDuConnemara.htm";
		break;
			}
			
	
		?>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php include("../../00droite.php");?>
        </p>
      </td>
    </tr>
   
  </table>
</div>
</body>
<footer>
 <table width="1250" border="1">
            <tr> 
              <td><?php include("../../comitebas.php"); ?></td>
            </tr>
           
            <tr> 
              <td><?php include("../../bas.php"); ?></td>
            </tr>
          </table>

</footer>
</html>
