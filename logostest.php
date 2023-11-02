<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center"><b> <font size="7"> 
  <?php $sigle = $_GET['variable_1'];?>
 </br></br>
  Clubs du comit&eacute; 
  </br>
  
  <?php 
	 if ($sigle == '(AP)')
 	 	{
  		$code = 10800;
  		echo "des Alpes";
		
		}
	elseif ($sigle == '(AL)')
		{
		$code = 11800;
		echo "Alsace Lorraine"; 
	
  		}
 
 elseif ($sigle == '(AB)')
		{
		$code = 12800;
		echo "Armaganc Bigorre"; 
		}
 elseif ($sigle == '(AU)')
		{
		$code = 13800;
		echo "Armagnac Bigorre"; 
 		}
 
 elseif ($sigle == '(BE)')
		{
		$code = 14800;
		echo "Béarn"; 
 		}
		
elseif ($sigle == '(BG)')
		{
		$code = 15800;
		echo "Bourgogne"; 
 		}		
		
		
		
elseif ($sigle == '(BR)')
		{
		$code = 16800;
		echo "Bretagne"; 
 		}		
		
		
elseif ($sigle == '(CE)')
		{
		$code = 17800;
		echo "Centre"; 
 		}		
		
elseif ($sigle == '(C)')
		{
		$code = 18800;
		echo "Corse"; 
 		}
		
elseif ($sigle == '(CBL)')
		{
		$code = 19800;
		echo "Cote Basque Landes"; 
 		}		
		
elseif ($sigle == '(CA)')
		{
		$code = 20800;
		echo "Cote d Argent"; 
 		}		
		
		
elseif ($sigle == '(CAZ)')
		{
		$code = 21800;
		echo "Cote d Azur"; 
 		}		
		
elseif ($sigle == '(DA)')
		{
		$code = 22800;
		echo "Drome Ardeche"; 
 		}		
		
elseif ($sigle == '(FL)')
		{
		$code = 23800;
		echo "Flandres"; 
 		}
		
		
elseif ($sigle == '(FC)')
		{
		$code = 24800;
		echo "Franche Comte"; 
 		}			
		
elseif ($sigle == '(IDF)')
		{
		$code = 25800;
		echo "Ile de France"; 
 		}			
		
		
elseif ($sigle == '(LD)')
		{
		$code = 26800;
		echo "Languedoc"; 
 		}			
		
		
elseif ($sigle == '(LM)')
		{
		$code = 27800;
		echo "Limousin"; 
 		}			
				
elseif ($sigle == '(LY)')
		{
		$code = 28800;
		echo "Lyonnais"; 
 		}	
				
elseif ($sigle == '(MPY)')
		{
		$code = 29800;
		echo "des Pyrenees"; 
 		}					
 
 elseif ($sigle == '(N)')
		{
		$code = 30800;
		echo "de Normandie"; 
 		}
elseif ($sigle == '(PL)')
		{
		$code = 31800;
		echo "Pays de Loire"; 
 		}
		
elseif ($sigle == '(PA)')
		{
		$code = 32800;
		echo "Perigord Agenais"; 
 		}

elseif ($sigle == '(PCH)')
		{
		$code = 33800;
		echo "Poitou Charente"; 
 		}
elseif ($sigle == '(PR)')
		{
		$code = 34800;
		echo "Provence"; 
 		}
elseif ($sigle == '(PC)')
		{
		$code = 35800;
		echo "Pays Catalan"; 
 		}		
				
 
 else 
		{
		
		echo "Erreur de saisie"; 
		
  		}
 
 
 ?> 
  
  
  </font></b><font size="6"></font> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="519" border="0" align="center">
  <tr valign="top" align="center"> 
    <td width="135"> 
      <div align="center"> <font size="2"> 
    
        </font></div>
    </td>
  </tr>
</table>
<div align="center"></div>



<?php
// connexion a la BD
// Paramètres persos
//$host 	= "localhost"; 	// voir hébergeur
//$user 	= "login"; 	// identifiant de votre BD (vide ou "root" en local)
//$pass 	= "password"; 	// mot de passe de votre BD (vide en local)
//$bdd 	= "MABASE"; 	// nom de la BD
// --------------------------------
// connexion
//@mysql_connect($host,$user,$pass) or die("Impossible de se connecter");
//@mysql_select_db("$bdd") or die("Impossible de se connecter");
// --------------------------------
//?>
<?php
require ("connection.php") ;
?>

<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// --------------------------------
// (exemple)
$NbrCol = 4;
// La requete (exemple) : toutes les "CHOSE" commençant par un "b", classées par ordre alphabétique.

$query = "SELECT * FROM bdclubs WHERE nom_1 LIKE '%' and siglecomite='$sigle' and id > '$code' ORDER BY  nom_1 ASC;";
$result = mysql_query($query);
// --------------------------------
// nombre de cellules a remplir
$NbreData = mysql_num_rows($result);
// --------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
	$j = 1;
?>
	</p>
<p align="center"><b><font size="6">Equipes f&eacute;minines</font></b></p>
<p>&nbsp;</p>

<div align="center">
  <table border="1">
    <tbody> 
    <?php
	while ($val = mysql_fetch_array($result)) 
	{
		if ($j%$NbrCol == 1) {
			$NbrLigne++;
			$fintr = 0;
?>
    <tr> 
      <?php		}
?>
      <td> 
        <div align="center"> 
          <?php			// -------------------------
			// DONNEES A AFFICHER dans la cellule
			 echo "<img src=\"$val[url100_100]\">";
			 echo '<br/>';
        	 echo "  </b> <a href=\"$val[logo]\">$val[1]</a>";
			
			
			//echo  "  </b> <a href=\$val['nom_1']\">$row[1]</a>";
			
			
			echo '<br/>';
			
		
			echo '<i>'.$val['GENRE'].'</i>';
			// -------------------------
?>
        </div>
      </td>
      <?php		if ($j%$NbrCol == 0) {
			$fintr = 1;
?>
    </tr>
    <?php		}
		$j++;
	} // fin while
	// fermeture derniere balise /tr
	if ($fintr!=1) {
?></tr>
    <?php	} ?>
    </tbody> 
  </table>
  <?php
} else { ?>
  pas de données à afficher 
  <?php
}
?>
  <?php mysql_close(); // deconnexion de la base ?>




















<?php
require ("connection.php") ;
?>




<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// --------------------------------
// (exemple)
$NbrCol = 4;
// La requete (exemple) : toutes les "CHOSE" commençant par un "b", classées par ordre alphabétique.

$query = "SELECT * FROM bdclubs WHERE nom_1 LIKE '%' and siglecomite='$sigle' and id < '$code' ORDER BY  nom_1 ASC;";
$result = mysql_query($query);
// --------------------------------
// nombre de cellules a remplir
$NbreData = mysql_num_rows($result);
// --------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
	$j = 1;
?>
	</p>

<p>&nbsp;</p>
<p align="center"><font size="6"><b>Equipes masculines</b></font></p></br>
<div align="center">
 </br>
  <table border="1">
    <tbody> 
    <?php
	while ($val = mysql_fetch_array($result)) 
	{
		if ($j%$NbrCol == 1) {
			$NbrLigne++;
			$fintr = 0;
?>
    <tr> 
      <?php		}
?>
      <td> 
        <div align="center"> 
          <?php			// -------------------------
			// DONNEES A AFFICHER dans la cellule
			 echo "<img src=\"$val[url100_100]\">";
			 echo '<br/>';
        	 echo "  </b> <a href=\"$val[logo]\">$val[1]</a>";
			
			
			//echo  "  </b> <a href=\$val['nom_1']\">$row[1]</a>";
			
			
			echo '<br/>';
			
		
			echo '<i>'.$val['GENRE'].'</i>';
			// -------------------------
?>
        </div>
      </td>
      <?php		if ($j%$NbrCol == 0) {
			$fintr = 1;
?>
    </tr>
    <?php		}
		$j++;
	} // fin while
	// fermeture derniere balise /tr
	if ($fintr!=1) {
?></tr>
    <?php	} ?>
    </tbody> 
  </table>
  <?php
} else { ?>
  pas de données à afficher 
  <?php
}
?>
  <?php mysql_close(); // deconnexion de la base ?>
</div>
</body>
</html>

 
