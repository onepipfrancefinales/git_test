<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /index.php
#          --------------------------------------
#          Copyright � 2005-2006 LECOINTRE Adrien
#          --------------------------------------
#          Site Internet : http://www.phprog.com/
#          e-mail : adrien.lecointre@phprog.com
#          ---------------------------------------------------------------------------
#          Ce fichier est une partie de PHProg.
#          PHProg est un programme libre, vous pouvez le redistribuer
#          et/ou le modifier selon les termes de la Licence Publique G�n�rale
#          GNU publi�e par la Free Software Foundation version 2.
#          PHProg est distribu� car potentiellement utile, mais
#          SANS AUCUNE GARANTIE, ni explicite ni implicite, y compris les
#          garanties de commercialisation ou d'adaptation dans un but sp�cifique.
#          Reportez-vous � la Licence Publique G�n�rale GNU version 2 pour plus de
#          d�tails.
#          Licence Publique G�n�rale GNU version 2 disponible sous /docs/licence/
###################################################
?>
<?php
#init var
$dossier=null;
$name=null;
$album=null;

session_start();
$titre_page="PHProg";

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
else {
	$id=0;
}
if (file_exists('option.php') && (file_exists('install.php') | file_exists('install2.php')) ){
	echo "Veuillez supprimer les fichiers install.php et install2.php";
	exit;
}
if (file_exists('option.php')){
	include('option.php');
}
elseif($id==4) {
	$dossier='';
}
else {
	$id=2;
	$dossier='';
}

function test_admin() {
	if (isset($_SESSION['name']) and $_SESSION['name']==nom_admin) {
		return TRUE;
	}
	else {return "0";}
}
	
include('fonction/page_url.func.php');
$page_url=page_url($id);

$lang='fr';
switch ($lang) {
	case "fr":
		include("lang/$lang.php");
		break;
}

$titre="<a href=\"index.php\" class=\"lien-titre\">".text_titre_liste_album."</a>";

include('fonction/liste_albums.func.php');
$liste_album=liste_albums($dossier);
if (isset($_GET['album'])) {
	foreach($liste_album as $value) {
		if($value==$_GET['album']) {
				$album=$_GET['album'];
				$titre=$titre." > ".$album;
		}
	}
}

if ($id==2) {
	$titre=titre_installation;
}

include('fonction/page_titre.func.php');
$titre=page_titre($id);
?>
<html>
<head>
<title><?php echo $titre_page; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
if (test_admin()) {
	echo "<meta http-equiv=\"Refresh\" content=\"1800;URL=./index.php?id=11\">\n";
}
?>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div align="center">
<?php include('menu_haut.php'); ?>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" valign="top" width="200">
			
			
			
		</td>
		<script>document.write("<td valign=top style='width:"+(screen.width-200)+";'>")</script>						
			<?php include("$page_url"); ?>
		</td>
	</tr>
</table>
<div align="center" height="15">
<span class="texte-pied">
Powered by <a class="pied" href="http://www.phprog.com/" title="PHProg : Album photo en PHP, publiez vos photos sur Internet">PHProg</a> Copyright � 2005-2006
</span>
</div>
</div>
</body>
</html>