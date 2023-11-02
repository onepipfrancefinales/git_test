<?php
$page = $_GET['page'];
?>

<html>
<head>
<title>Brennus : Les records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="brennus.css">
</head>

<body bgcolor="#000000" text="#000000">
<div align="center"></div>
<table width="1000" border="1" align="center">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><font color="#000000"> 
        <?php
    // On inclut le haut de la page
    include("haut.php");
    ?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2" valign="top" height="24"> 
      <div align="center"><font color="#000000"> 
        <?php
    // On inclut le haut de la page
    include("hautRecords.php");
    ?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="200" valign="top" height="81"> 
      <div align="center"><font color="#000000"> 
        <?php
    // On inclut le haut de la page
    include("gauche.php");
    ?>
        </font></div>
    </td>
    <td width="800" height="81" valign="top"> 
      <div align="center"> 
        <?php
		if ($page == "nbreEditions")
			require 'nbre_editions.php';
			elseif ($page == "champions")
			require 'champions.php';
			elseif ($page == "participations")
			require 'participations.php';
			elseif ($page == "queFinaliste")
			require 'queFinaliste.php';	
		elseif ($page == "series")
			require 'series.php';
		elseif ($page == "joueurs_titres")
			require 'joueurs_titres.php';
		elseif ($page == "nbre_titres")
			require 'nbre_titres.php';
			elseif ($page == "jamaisGagne")
			require 'jamaisGagne.php';
			
			elseif ($page == "entraineurs")
			require 'entraineurs.php';
			elseif ($page == "capitaines")
			require 'capitaines.php';
		
		?>
        <p><font color="#000000"> </font></p>
      </div>
    </td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
