<?php
session_start();
if (isset($_GET['champ'])) $champ = $_GET['champ'];
else $champ = 0;

$tabTables = array('phpau', 'phpab', 'phpca', 'phppl', 'phpidf', 'phpfed3NE', 'phppro');

foreach ($tabTables as $table) {
  //phpab_pronostics

  $tableMembres = $table . "_membres";
  $tablePronostics = $table . "_pronostics";
}

if (!$go == "1") {
  include("inscription.htm");
} elseif ($go == "1") {
  $pseudo = addslashes($pseudo);

  // On vérifie que le pseudo n'est pas utilisé
  $resultat = $idconnect->query("SELECT * 
                                      FROM phpab_membres 
                                      WHERE pseudo='$pseudo'");
  //$resultat=mysql_query($requete);
  $nb_pseudo = mysqli_num_rows($resultat);
  if ($nb_pseudo >= 1) {
    $message .= PRONO_INSCRIPTION_PSEUDO_UTILISE . "<br />";
  } elseif (strlen($pseudo) < 4 or strlen($pseudo) > 20) {
    $message .= PRONO_INSCRIPTION_PSEUDO_TAILLE . "<br />";
  } else {
    $pseudo_verif = "ok";
  }

  // On vérifie que le mail
  $resultat = $idconnect->query("
					SELECT * 
					FROM phpab_membres 
					WHERE mail='$mail'");


  $nb_mail = mysqli_num_rows($resultat);
  if ($nb_mail >= 1) {
    $message .= PRONO_INSCRIPTION_MAIL_UTILISE . "<br />";
  } else {
    $mail_verif = "ok";
  }

  if (empty($mail)) {
    $message .= PRONO_INSCRIPTION_MAIL_VIDE . "\n<br />\n";
  } else //l'email a ete entree, on la verifie
  {
    //verification de la syntaxe
    $mail_ok = preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $mail);


    if (!$mail_ok) {
      $message .= PRONO_INSCRIPTION_MAIL_INVALIDE_1 . " \"$mail\ " . PRONO_INSCRIPTION_MAIL_INVALIDE_2 . "\n<br />\n";
    } else {
      $email_verif = "ok";
    }
  }

  if (empty($mdp) or empty($mdp2)) {
    $message .= PRONO_INSCRIPTION_JS_MDP . "\n<br />\n";
  } elseif ($mdp !== $mdp2) {
    $message .= PRONO_INSCRIPTION_JS_DIFF . "\n<br />\n";
  } elseif (strlen($mdp) < 4 or strlen($mdp) > 20) {
    $message .= PRONO_INSCRIPTION_PSEUDO_TAILLE . "<br />";
  } else {
    $mdp_verif = "ok";
  }



  if ($email_verif == "ok" and $pseudo_verif == "ok" and $mdp_verif == "ok" and $mail_verif == "ok") {
    $taille = 19;
    $lettres = "abcdefghijklmnopqrstuvwxyz0123456789";
    srand(time());
    for ($i = 0; $i < $taille; $i++) {
      $id_prono .= substr($lettres, (rand() % (strlen($lettres))), 1);
    }

    $mdpcrypt = md5($mdp);


    $date_naissance = $annee . "-" . $mois . "-" . $jour;
    $adresse = $adresse1 . " " . $adresse2;
    if (!empty($mobile1) and !empty($mobile2) and !empty($mobile3) and !empty($mobile4) and !empty($mobile5)) {
      $mobile = $mobile1 . "-" . $mobile2 . "-" . $mobile3 . "-" . $mobile4 . "-" . $mobile5;
    }

    //mysqli_query($idconnect, ("INSERT INTO phpab_membres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, code_postal, ville, pays, date_naissance, profession, mobile, ip, last_connect, admin )
    //             VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$site', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$mdp', '$date_naissance', '$profession', '$mobile','$ip','$last_connect','1' )"));


    mysqli_query($idconnect, ("INSERT INTO phpab_membres (pseudo, id_prono, mot_de_passe, mail, nom_site, nom, prenom, adresse, ville, pays, admin )
                             VALUES ('$pseudo', '$id_prono', '$mdpcrypt', '$mail', '$pseudo', '$pseudo', '$pseudo', '$pseudo',  '$pseudo', '$mdp','1' )"));


    $result = $idconnect->query("SELECT id 
                             FROM phpab_membres 
                             WHERE id_prono='$id_prono'");
    $row = mysqli_fetch_array($result);
    $id_membre = $row[0];

    mysqli_query($idconnect, ("INSERT INTO phpab_pronostics (id_membre, id_champ) 
							              VALUES ('$id_membre', '$gr_champ')"));

    $result = $idconnect->query("SELECT pseudo, mail, nom_site, url_site 
                               FROM phpab_membres 
                               WHERE pseudo='$pseudo' 
                               AND admin='1'");

    $row = mysqli_fetch_array($result);
    $pseudo_admin = $row[0];
    $mail_admin = $row[1];
    //  $nom_site_admin=$row[2];
    // $url_site_admin=$row[3];  



    $to = "$pseudo <$mail>";

    $sujet = "France Finales Rugby App";

    $message = "
    <html><head><title>Inscription à France Finales Prono</title></head><body>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Bonjour et bienvenue sur France Finales Rugby, </font></p>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Vous venez de vous inscrire sur France Finales Pronos. Vous pouvez désormais procéder &agrave; la mise &agrave; jours des résultats des rencontres de votre comité.</font></p>
<p><font size=\"3\" face=\"Verdana\" color=\"#000000\">Voici les informations qui vous
permettront d'accéder &agrave; la mise &agrave; jours des résultats :</font></p>
<p><font face=\"Verdana\" size=\"3\" color=\"#000000\">Login :&nbsp;  $pseudo 
<br />
Mot de passe :  $mdp </font></p>

<p><font face=\"Verdana\" size=\"2\" color=\"#000000\">Vous pouvez également consulter stats, classements complets, calendriers, les différents palmarès, etc...en consultant
<a href=\"http://francefinalesrugby.fr\">France Finales Rugby</a> 
</font></p>
<br />
Sportivement</font></p>
<br />
<p><font face=\"Verdana\" size=\"2\" color=\"#000000\">France Finales Rugby</font><br>
<font face=\"Verdana\" size=\"2\" color=\"#000000\">80 Avenue du 11 novembre</font><br>
<font face=\"Verdana\" size=\"2\" color=\"#000000\">31230 L'Isle en Dodon</font><br>
<br />
<table  border=\"1\" width=\"500\"align=\"center\">
	<tr class=\"size6 style\">
		<td colspan=\"2\"  align=\"center\"><font size=\"6\" face=\"Arial, Helvetica, sans-serif\"><b>Champions de France <br >2025</b></font></td>
	</tr>
	<tr bgcolor=\"#FF0000\">
		<td colspan=\"2\"  align=\"center\" > <font size=\"5\"><b>Séniors I<b></font></td>
	</tr>
	<tr align=\"center\">
		<td width=\"35%\" ><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Top 14 :</td>
		<td width=\"51%\" ><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Stade Toulousain (OCC)</b></font></td>	
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Pro D2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>US Montauban (OCC)</b></font></font></td>
	</tr>
	<tr align=\"center\"\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Nationale :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Carcassonne (OCC)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Nationale 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Rennes (BRE)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Tyrosse (NAQ)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td ><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale 2 :</td>
		<td  align=\"center\"><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Cahors (OCC)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale 3 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Saint Claude (BFC)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Régionale 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Valréas (PCA)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Régionale 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Fleury Salles Coursan (OCC)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Régionale 3 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Hyeres Carqueiranne 83 (PCA)</b></font></td>
	</tr>
    <tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Promotion Régionale 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Villeneuve de Marsan (NAQ)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"> Promotion Régionale 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Caraman (OCC)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Promotion Régionale 3 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Parentis en Born (NAQ)</b></font></td>
	</tr>

	<tr bgcolor=\"#FF0000\">
		<td colspan=\"2\" align=\"center\" > <font size=\"5\"><b>Séniors II<b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Espoirs Elite :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Bégles Bordeaux (NAQ)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Espoirs Nationaux : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Nimes (OCC)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Espoirs Fédéraux : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Tyrosse (NAQ)</b></font></td>
	</tr>
    
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale B :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Gennevilliers (IDF)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Excellence B :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>A.C.L.R (NAQ)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Réserve Régionale 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Vallée de Girou (OCC)</td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Réserve Régionale 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Clermont la Plaine (ARA)</b></font></td>
	</tr>
	<tr bgcolor=\"#FF0000\">
		<td colspan=\"2\"  align=\"center\" > <font size=\"5\"><b>Féminines<b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Elite 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Stade Bordelais (NAQ)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Elite 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>RC Toulon (PCA)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale 1 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>RC de France (IDF)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Fédérale 2 :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Toulouse UC (OCC)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Cadettes Elite :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Stade Toulousain (OCC)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Cadettes :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Ent Dijon Saint Apollinaire (BFC)</b></font></td>
	</tr>

	<tr bgcolor=\"#FF0000\">
		<td colspan=\"2\"  align=\"center\" > <font size=\"5\"><b>Jeunes<b></font></td>
	</tr>
	<tr bgcolor=\"#808080\">
		<td colspan=\"2\" ><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Juniors (-18ans)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Crabos :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>AS Montferrand (ARA)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">National U18 : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Issoire (ARA)</b></font></td>
	</tR >
<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Régional 1 - U18 : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>XV de la Dombes (ARA)</b></font></td>
	</tr>
<tr bgcolor=\"#808080\">
	<td colspan=\"2\" ><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Cadets (-16ans)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Alamercery :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Montpellier RC (OCC)</b></font></td>
	</tr>
	<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Gaudermen :</td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Lyon OU (ARA)</b></font></td>
	</tr>
	<tr align=\"center\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">National U16 : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Villefranche sur Saone (ARA)</b></font></td>
	</tr>
		<tr align=\"center\" bgcolor=\"#DCDCDC\">
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\">Régional 1 - U16 : </td>
		<td><font size=\"3\" face=\"Arial, Helvetica, sans-serif\"><b>Bizanos (NAQ)</b></font></td>
	</tr>
</table>

<p><font face=\"Verdana\" size=\"2\" color=\"#000000\">Pour tous contatcts</font><br>
<font face=\"Verdana\" size=\"2\" color=\"#000000\"><a href=\"mailto:mailto:francefinalesrugby@free.fr\">Administrateur France Finales Rugby App</a></font>
</body></html>";


    $from = "Content-Type: text/html; charset=\"utf-8\"\nFrom: $mail_admin\n";






    $email = @mail($to, $sujet, $message, $from);
    if ($email) {
      echo "<table align=\"center\">";
      echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">" . PRONO_INSCRIPTION_SUCCES . "</font><br /><a class=\"colorWhite\" href=\"index.php?user=$pseudo&mot_de_passe=$mdpcrypt\">" . PRONO_INSCRIPTION_CONNEXION . "</font></a></td></tr>";
      echo "</table>";
    } else {
      echo "<table align=\"center\">";
      echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">" . PRONO_INSCRIPTION_ECHOUE . "</font><br /><a href=\"/Phpleague/phpab/prono/index.php?page=inscription\"><font color=\"#FFFFFF\">Connexion !</font></a></td></tr>";
      echo "</table>";
    }
  } else {
    echo "<table align=\"center\">";
    echo "<tr><td colspan=\"2\" align=\"center\"> <font color=\"#ffffff\">$message<br /><a href=\"/Phpleague/phpab/prono/index.php?page=inscription&champ=$champ\"></font></font>" . "Réessayer" . "</a></td></tr>";
    echo "</table>";
  }
}
