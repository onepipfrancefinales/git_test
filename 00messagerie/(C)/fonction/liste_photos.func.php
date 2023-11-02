<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/liste_photos.func.php
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
function is_img($img) {
	$ext=explode('.',$img);
	$type=$ext[1];
	if ($type=="gif" or $type=="jpeg" or $type=="jpg" or $type=="png" or
		$type=="GIF" or $type=="JPEG" or $type=="JPG" or $type=="PNG") {
		return TRUE;
		}
	else {
		return FALSE;
		}
}

function liste_photos($dossier,$album) {
	$handle = opendir("$dossier/$album");
	
	while (false !== ($file = readdir($handle))) {
	  if ($file != "." && $file != "..") {
	  	$file_url="$dossier/$album/$file";
		if (is_file($file_url) and is_img($file_url)) {
			$liste_photo[] = $file;
			
			}
	  }
	}
	
	closedir($handle);
	
	if (isset($liste_photo)) {
		sort($liste_photo);
		return($liste_photo);
		}
	else {
		return FALSE;
		}
	
	
	}
?>