<?php
//***********************************************************************/
// phpaleague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpaleague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpaleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>

  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
    <tr>
      <td width="100%">
      <?php

      $requete="SELECT pts_prono_exact, pts_prono_participation, tps_avant_prono FROM phpal_gr_championnats
                WHERE id='$gr_champ'";
      $resultats=mysql_query($requete) or die ("probleme " .mysql_error());
      $row=mysql_fetch_array($resultats);
      
       include ("baremes.htm");
      ?>
</td></tr></table>

<?
