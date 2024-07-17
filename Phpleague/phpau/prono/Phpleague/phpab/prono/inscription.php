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

//if (!$go=="1"){include ("inscription obligatoire.htm");}
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db2');	
// require '../config1.php';  

if (!$go=="1"){include ("inscription.htm");}

elseif ($go=="1")
{
      $pseudo=addslashes($pseudo);

       // On v�rifie que le pseudo n'est pas utilis�
       $resultat =$idconnect->query( "	SELECT * 
										FROM phpab_membres 
										WHERE pseudo='$pseudo'");
      // $resultat=mysql_query($requete);
       $nb_pseudo=mysqli_num_rows($resultat);
       if ($nb_pseudo>=1){$message.=PRONO_INSCRIPTION_PSEUDO_UTILISE."<br />";}
       elseif (strlen($pseudo)<4 or strlen($pseudo)>20) {$message.=PRONO_INSCRIPTION_PSEUDO_TAILLE."<br />";}
       else {$pseudo_verif="ok";}
       
       // On v�rifie que le mail n'est pas utilis�
       $resultat =$idconnect->query( "	SELECT * 
										FROM phpab_membres 
										WHERE mail='$mail'");
       //$resultat=mysql_query($requete);
       $nb_mail=mysqli_num_rows($resultat);
       if ($nb_mail>=1){$message.=PRONO_INSCRIPTION_MAIL_UTILISE."<br />";}
       else {$mail_verif="ok";}

       if (empty($mail)){$message.= PRONO_INSCRIPTION_MAIL_VIDE."\n<br />\n";}
       else //l'email a ete entree, on la verifie
	{
		//verification de la syntaxe
		
		//$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
		//$mail_ok = preg_match('[_\.0-9a-z-]@([0-9a-z-]+\.)+[a-z]{2,4}$',$mail);
 

	$pattern = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
    if(preg_match($pattern, $mail))  
		{
      echo "L'adresse email '$mail' est valide.";
		$email_verif="ok";
		} 
		
		else 
		{
        echo "L'adresse email '$mail' est invalide.";
		$message .= PRONO_INSCRIPTION_MAIL_INVALIDE_1." \"$mail\ ".PRONO_INSCRIPTION_MAIL_INVALIDE_2."\n<br />\n";
		
		}

	}

/*	
	if (!$mail_ok)
	{
		$message .= PRONO_INSCRIPTION_MAIL_INVALIDE_1." \"$mail\ ".PRONO_INSCRIPTION_MAIL_INVALIDE_2."\n<br />\n";
	}
	else {$email_verif="ok";}
	}
*/
	if (empty($mdp) or empty($mdp2)){$message.= PRONO_INSCRIPTION_JS_MDP."\n<br />\n";}
	elseif ($mdp!==$mdp2) {$message.= PRONO_INSCRIPTION_JS_DIFF."\n<br />\n";}
	elseif (strlen($mdp)<4 or strlen($mdp)>20) {$message.=PRONO_INSCRIPTION_PSEUDO_TAILLE."<br />";}
	else {$mdp_verif="ok";}
	


if ($email_verif=="ok" and $pseudo_verif=="ok" and $mdp_verif=="ok" and $mail_verif=="ok")
{
  $taille = 19;
  $lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
  srand(time());
    for ($i=0;$i<$taille;$i++)
    {
     $id_prono.=substr($lettres,(rand()%(strlen($lettres))),1);
    }
        
  $mdpcrypt=md5($mdp);


  $date_naissance=$annee."-".$mois."-".$jour;
  $adresse=$adresse1." ".$adresse2;
    if (!empty($mobile1) and !empty($mobile2) and !empty($mobile3) and !empty($mobile4) and !empty($mobile5))
    {
     $mobile=$mobile1."-".$mobile2."-".$mobile3."-".$mobile4."-".$mobile5;
    }
$ip='213.44.199.148';
$last_connect='1441122149';
echo "pseudo : ".$pseudo; echo "<br />";
echo "mdp : ".$mdpcrypt;echo "<br />";
echo "mail : ".$mail;echo "<br />";

 // $bdd->exec("INSERT INTO phpab_membres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile, ip, last_connect, admin )
  //             VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$site', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$mdp', '$date_naissance', '$profession', '$mobile','$ip','$last_connect','1' )") ;
//$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db2;charset=utf8', 'root', '');
 echo "test";
//  $bdd->exec("INSERT INTO phpab_membres (pseudo, id_prono,mot_de_passe, mail)
//               VALUES ('$pseudo','$id_prono','$mdpcrypt', '$mail')") ;
   mysqli_query ($idconnect,("INSERT INTO phpab_membres (pseudo, id_prono,mot_de_passe, mail)
               VALUES ('$pseudo','$id_prono','$mdpcrypt', '$mail')")) ;

//$idconnect->exec("INSERT INTO phpab_membres (pseudo, id_prono,mot_de_passe, mail)
//               VALUES ('$pseudo','$id_prono','$mdpcrypt', '$mail')") ;

  echo "test2";
  
  $result=$idconnect->query("SELECT id FROM phpab_membres WHERE id_prono='$id_prono'");
  //$result=mysql_query($requete) or die ("probleme " .mysql_error());
  $row=mysqli_fetch_array($result);
  $id_membre=$row[0];

   mysqli_query ($idconnect,("INSERT INTO phpab_pronostics (id_membre, id_champ) 
				VALUES ('$id_membre', '$gr_champ')")) ;

  $result =$idconnect->query( "	SELECT pseudo, mail, nom_site, url_site 
								FROM phpab_membres 
								WHERE admin='1'");
  //$result=mysql_query($requete) or die ("probleme " .mysql_error());
  $row=mysqli_fetch_array($result);
  $pseudo_admin=$row[0];
  $mail_admin=$row[1];
  $nom_site_admin=$row[2];
  $url_site_admin=$row[3];  


$to="$pseudo <$mail>";

$sujet="France Finales Rugby App";

$message="<html><head><title>phpabeague</title></head><body>
<p><font size=\"2\" face=\"Verdana\">Bonjour et bienvenue sur France Finales Rugby, </font></p>
<p><font size=\"2\" face=\"Verdana\">Vous venez de vous inscrire sur France Finales Rugby App. Vous pouvez d�sormais proc�der � la mise � jours des r�sultats des rencontres de votre comit�.</font></p>
<p><font size=\"2\" face=\"Verdana\">Voici les informations qui vous
permettront d'acc�der � la mise � jours des r�sultats :</font></p>
<p><font face=\"Verdana\" size=\"2\">Login :&nbsp;  $pseudo 
<br />
Mot de passe :  $mdp </font></p>

<p><font face=\"Verdana\" size=\"2\">Vous pouvez �galement consulter stats, classements complets, calendriers, les diff�rents palmar�s, etc...en consultant
<a href=\"http://francefinalesrugby.franceserv.com\">France Finales Rugby</a> 
</font></p>
<br />
Sportivement</font></p>
<br />
<p><font face=\"Verdana\" size=\"2\">France Finales Rugby</font></p>
<p><font face=\"Verdana\" size=\"2\">DELPECH Thibault</font></p>
<p><font face=\"Verdana\" size=\"2\">74 Route de Toulouse</font></p>
<p><font face=\"Verdana\" size=\"2\">31230 L'Isle en Dodon</font></p>
<br />
<p><font face=\"Verdana\" size=\"2\">Pour tous contatcts</font></p>
<p><font face=\"Verdana\" size=\"2\"><a href=\"mailto:mailto:francefinalesrugby@free.fr\">Administrateur France Finales Rugby App</a></font></p>
</body></html>";


  $from="Content-Type: text/html; charset=\"iso-8859-15\"\nFrom: $mail_admin\n";
  $email=@mail($to,$sujet,$message,$from);
  if ($email)
  {
    echo "<table align=\"center\">";
    echo "<tr><td colspan=\"2\" align=\"center\">".PRONO_INSCRIPTION_SUCCES."<br /><a href=\"127.0.0.1/pronos/pagePronos.php\">".PRONO_INSCRIPTION_CONNEXION."</a></td></tr>";
    echo "</table>";
  }
  else 
  {
    echo "<table align=\"center\">";
    echo "<tr><td colspan=\"2\" align=\"center\">".PRONO_INSCRIPTION_ECHOUE."<br /><a href=\"127.0.0.1/Phpleague/phpab/prono/index.php?page=pronos\">Connexion !</a></td></tr>";
    echo "</table>";
  }

}


else
{
  echo "<table align=\"center\">";
  echo "<tr><td colspan=\"2\" align=\"center\">$message<br /><a href=\"http://127.0.0.1/Phpleague/phpab/prono/index.php?page=inscription&gr_champ=5\">Réessayer</a></td></tr>";
  echo "</table>";
}

}
?>
