<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
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
if (isset($_REQUEST['t']) and $_REQUEST['t'] == "1")
{
  echo "<table><tr><td class=\"bleu bold colorWhite center size3\">Identifiants erronés</td></tr></table>";
}
else
{
  echo "<table><tr><td class=\"bleu bold colorWhite center size3\">Veuillez renseigner tous les champs</td></tr></table>";
}
echo "<br />";
?>
