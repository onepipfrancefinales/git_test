<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /suppr_album.php
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
		<td class=tablo-titre><span class=texte-titre>Supprimer album</span></td>
	</tr>
	<tr>
		<td align="center">
		Etes vous sure de vouloir supprimer l'album "<?php echo $album; ?>" ?<br>
		<table cellpadding=0 cellspacing=0 border=0>
			<tr>
				<td width=100 align=center>
				<form action="?id=8&album=<?php echo $album; ?>" method="post">
					<input name="" type="submit" value="Oui">
				</form>
				</td>
				<td width=100 align=center>
				<form action="javascript:history.go(-1)">
					<input name="" type="submit" value="Non">
				</form>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>