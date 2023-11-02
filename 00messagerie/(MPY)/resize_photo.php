<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /resize_photo.php
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
if (!test_admin()) {
	exit();
}
?>
<table cellpadding=0 cellspacing=0 class=tablo width=100%>
	<tr>
		<td class=tablo-titre><span class=texte-titre>Redimensionner photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<?php
		include('fonction/liste_photos.func.php');
		$photo=liste_photos($dossier,$album);
		$i=$_GET['i'];
		$photo_name=explode('.',$photo[$i]);
		list($width, $height, $type) = getimagesize("$dossier/$album/$photo[$i]");
		echo "<img border=0 src=\"".rawurlencode($dossier)."/".rawurlencode($album)."/miniatures/".rawurlencode($photo[$i])."\" />
			<br />$photo_name[0]
			<br />$width * $height pixels";
		?> 
		<form action="?id=19&album=<?php echo $album; ?>&i=<?php echo $i; ?>" method="post">
			Redimensionner en : <input name="new_width" type="text" size="3" value="<?php echo $width; ?>"> * <input name="new_height" type="text" size="3" value="<?php echo $height; ?>"><br>
			<input name="" type="submit" value="Redimensionner">
		</form>
		</td>
	</tr>
</table>