<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/liste_albums.func.php
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
function liste_albums($dossier) {
	if (file_exists($dossier)) {
		$handle = opendir($dossier);
		
		while (false !== ($file = readdir($handle))) {
		  if (is_dir($dossier."/".$file) && $file != "." && $file != ".." && substr($file, 0, 5)!="-9fv-") {
			$liste_album[] = $file;
			}
		}
		
		closedir($handle);
		}
	
	if (isset($liste_album)) {
		sort($liste_album);
		return($liste_album);
		}
	else {
		return FALSE;
		}

	}
?>