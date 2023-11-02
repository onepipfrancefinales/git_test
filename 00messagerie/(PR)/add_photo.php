<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /add_photo.php
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
		<td class=tablo-titre><span class=texte-titre>Ajouter une photo</span></td>
	</tr>
	<tr>
		<td align="center">
		<form enctype="multipart/form-data" action="?id=13&album=<?php echo $album; ?>" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
			<ul style="list-style-type:none;margin-left:0;">
			<li>Envoyez ce fichier : <input name="photo" type="file" /> 2M maximum </li>
			<li><input type="submit" value="Envoyer le fichier" /></li>
			</ul>
		</form>
		</td>
	</tr>
</table>