<?php
###################################################
#          PHProg : Publication d'albums photos sur Internet
#          ---------------------------------------------------------------------------
#                     /fonction/date_fr.func.php
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
function date_fr() {
	$date_jour=date('w');
	$date_mois=date('n');
	switch ($date_jour) {
		case 0:
			$jour= "Dimanche";
			break;
		case 1:
			$jour= "Lundi";
			break;
		case 2:
			$jour= "Mardi";
			break;
		case 3:
			$jour= "Mercredi";
			break;
		case 4:
			$jour= "Jeudi";
			break;
		case 5:
			$jour= "Vendredi";
			break;
		case 6:
			$jour= "Samedi";
			break;
		}
	switch ($date_mois) {
		case 1:
			$mois= "Janvier";
			break;
		case 2:
			$mois= "F�vrier";
			break;
		case 3:
			$mois= "Mars";
			break;
		case 4:
			$mois= "Avril";
			break;
		case 5:
			$mois= "Mai";
			break;
		case 6:
			$mois= "Juin";
			break;
		case 7:
			$mois= "Juillet";
			break;
		case 8:
			$mois= "Ao�t";
			break;
		case 9:
			$mois= "Septembre";
			break;
		case 10:
			$mois= "Octobre";
			break;
		case 11:
			$mois= "Novembre";
			break;
		case 12:
			$mois= "D�cembre";
			break;
		}
	return ($jour." ".date('d')." ".$mois." ".date('Y'));
	}
?>