<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/rotate.func.php
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
function rotate($file_url,$angle) {
	
	//type
	list($width, $height, $type) = getimagesize($file_url);
	
	if ($type==1) {
		//header ("Content-type: image/gif");
		$img=imagecreatefromgif($file_url);
	}
	
	if ($type==2) {
		//header ("Content-type: image/jpeg");
		$img=imagecreatefromjpeg($file_url);
	}
	
	if ($type==3) {
		//header ("Content-type: image/png");
		$img=imagecreatefrompng($file_url);
	}

	// Rotation
	$img2 = imagerotate($img, $angle, 0);
	
	switch ($type) {
		case 1:
		   $img_ok=ImageGif ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 2:
		   $img_ok=ImageJPEG ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		case 3:
		   $img_ok=ImagePNG ($img2,$file_url);
		   if ($img_ok) {return TRUE;}
		   else {return FALSE;}
		   break;
		
	}
	
}
?> 