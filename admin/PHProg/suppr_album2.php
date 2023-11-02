<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /suppr_album2.php
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
		<?php
		function rmdirr($dossier,$album) {
		   $dir=$dossier."/".$album;
		   if($objs = glob($dir."/*")){
			   foreach($objs as $obj) {
				   is_dir($obj)? rmdirr($obj,'') : unlink($obj);
			   }
		   }
		   if(rmdir($dir)) {
			return 1;
			}
		   elseif (substr($_SERVER['HTTP_HOST'], -7, 7)=="free.fr") {
			if (rename($dir,"$dossier/-9fv-".time())) {
				return 2;
			}
		   }
		   else {return FALSE;}
		} 
		
		if (isset($_GET['album'])) {
			$rmdi=rmdirr($dossier,$album);
			if($rmdi==1)
				{echo "L'album \"$album\" � �t� supprim�.";}
			elseif ($rmdi==2) {
				echo "Votre h�bergeur est free.fr, il n'autorise pas la suppression de dossier.
				<br>L'album � �t� renom� et commence par \"-9fv-\".
				<br>Il n'appara�tra plus dans la liste des albums.
				<br>Vous pouvez �ventuellement le supprimer depuis votre acc�s FTP.";
			}
			else {echo "Erreur";}
			}
		echo "<br><a class=lien href=\"?id=0\">Retour</a>";
		?>
		</td>
	</tr>
</table>