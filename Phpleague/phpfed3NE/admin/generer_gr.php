<?php
//***********************************************************************/
// phpfed3NEeague : gestionnaire de championnat                           */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpfed3NEeague.univert.org                                      */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpfed3NEeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
echo "AAAgenerer_gr.php :";
?>
<table class=phpfed3NE width="80%">
  <tr>
    <td class=phpfed3NE2 align="center" colspan="3">
	  <?php echo ADMIN_GRAPH_TITRE." DDD"; affich_gr_champ ($gr_champ, $idconnect); ?>
	</td>
  </tr>
  <tr>
    <td align="center">
	  <?php
		include ("tps1.php3");

		mysqli_query($idconnect,("DELETE FROM phpfed3NE_clmnt_pronos 
						  WHERE id_champ='$gr_champ'"));

		$result=$idconnect->query(" 
				SELECT id_membre, pseudo, 
				SUM(points) as total, 
				SUM(participation) as participations 
				FROM phpfed3NE_membres, phpfed3NE_pronostics
				WHERE id_champ='$gr_champ' 
				AND id_membre=phpfed3NE_membres.id
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phpfed3NE_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
				  VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'general')") or die (mysqli_error()));
		}

		$result=$idconnect->query("
				SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
				FROM phpfed3NE_membres, phpfed3NE_pronostics, phpfed3NE_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phpfed3NE_membres.id
				AND phpfed3NE_matchs.id=id_match
				AND MONTH (date_reelle) = MONTH (NOW())
				AND YEAR (date_reelle) = YEAR (NOW())
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phpfed3NE_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") or die (mysqli_error()));
		}

		$result = $idconnect->query("
					SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
					FROM phpfed3NE_membres, phpfed3NE_pronostics, phpfed3NE_matchs
					WHERE id_champ='$gr_champ'
					AND id_membre=phpfed3NE_membres.id
					AND phpfed3NE_matchs.id=id_match
					AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
					GROUP by pseudo
					ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phpfed3NE_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')") or die (mysqli_error()));
		}

		$result = $idconnect->query("
				SELECT id_membre, pseudo, sum(points) as total, sum(participation) as participations
				FROM phpfed3NE_membres, phpfed3NE_pronostics, phpfed3NE_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phpfed3NE_membres.id
				AND phpfed3NE_matchs.id=id_match
				AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phpfed3NE_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
							VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')") or die (mysqli_error()));
		}

		echo ADMIN_GRAPH_PRONO; include ("tps2.php3");
		?>
    </td>
  </tr>
</table>
