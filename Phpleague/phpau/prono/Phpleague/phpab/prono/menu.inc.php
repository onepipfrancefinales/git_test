<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.81                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db2');	


if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}
//echo "id : ".$user_pseudo;
//echo "Mdp : ".$user_mdp;
if (VerifSession ($user_pseudo,$user_mdp, $idconnect)=="1")
                {
$result=$idconnect->query("SELECT pseudo, id_prono 
							FROM phpab_membres 
							WHERE pseudo='$user_pseudo'");
               // $result = mysql_query($requete);
                $row = mysqli_fetch_array($result);
                $user_pseudo=$row[0];
                $user_id=$row[1];
                $connecte="oui";
                $include="menu.identifie.htm";
                include ($include);
                }
else
	{ 
   $include="menu.non-identifie.htm";
   include ($include);
   $connecte="non";
	}

?>
