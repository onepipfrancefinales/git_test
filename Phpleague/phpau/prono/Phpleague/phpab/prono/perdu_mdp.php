

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
//require '../config1.php';
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db2');	
 
if(empty($mail)){include ("perdu_mdp.htm");;}
elseif (!empty($mail))
{
$taille = 8;
        $lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
	srand(time());
	for ($i=0;$i<$taille;$i++)
	{
	$new_mot_de_passe.=substr($lettres,(rand()%(strlen($lettres))),1);
	}
$new_mot_de_passe_crypt=md5($new_mot_de_passe);
mysqli_query ($idconnect,("UPDATE phpab_membres 
			SET mot_de_passe='$new_mot_de_passe_crypt' 
			WHERE mail='$mail'"));

$query = $idconnect->query("	SELECT pseudo, mail 
						FROM phpab_membres 
						WHERE mail='$mail'");


$result =$idconnect->query("	SELECT pseudo, mail, nom_site, url_site 
						FROM phpab_membres 
						WHERE admin='1'");
//  $result=mysql_query($requete) or die ("probleme " .mysql_error());
  $row=mysqli_fetch_array($result);
  $pseudo_admin=$row[0];
  $mail_admin=$row[1];
  $nom_site_admin=$row[2];
  $url_site_admin=$row[3];
if (list($pseudo, $mail) = mysqli_fetch_array($query))
{                                                                                            
$to="france";
$sujet="Votre mot de passe pour la mise à jour des résulats des compétitions $nom_site_admin";
$message="<html>
<head>
<title>phpabeague</title>
</head>
<body>
<p><font face=\"Verdana\" size=\"2\">Bonjour,</font></p>
<p><font face=\"Verdana\" size=\"2\">Vous avez demand&eacute; &agrave; recevoir un nouveau mot
de passe pour acc&eacute;der &agrave; la mise &agrave; jour des r&eacute;sultats de votre poule <a href=\"$url_site_admin\">$nom_site_admin</a>.</font></p>
<p><font face=\"Verdana\" size=\"2\">Votre pseudo : $pseudo</font></p>
<p><font face=\"Verdana\" size=\"2\">Voici votre nouveau mot de passe : $new_mot_de_passe</font></p>
<p><font face=\"Verdana\" size=\"2\">--------------------------------------------------------------------</font></p>
<p><font face=\"Verdana\" size=\"2\">FranceFinalesRugby <a href=\"http://francefinalesrugby.franceserv.com/smart/sommaire.php\">phpabeague</a> : Gestionnaire de comp&eacute;titions Fran&ccedil;aises de Rugby </font></p>
</body>
</html>";
 // $from="Content-Type: text/html; charset=\"UTF-8\"\nFrom: $mail_admin\n";
   $from="from: onepip@free.fr "."\r\n". 'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

$email=mail($to,$sujet,$message,$from);
if($email)echo"<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_2." :<br /><br /><b>$mail</b><br /><br />Vous allez le recevoir dans un instant.</font></div>";
else echo"<div align=\"center\"><font face=\"Verdana\" size=\"1\">".PRONO_OUBLIE_TEXTE_3."</font></div><br />";
}
}
?>
