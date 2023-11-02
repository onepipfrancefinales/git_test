<?
class invite
{
var $site_nom;
var $site_adresse;
var $msg;

}
$invite = new invite;

if($page == "")
{
$page = $invite->site_adresse;
}
/*
******************************
Variables a configurer
******************************
*/
$invite->site_nom = "Php-Gratuit";
$invite->site_adresse = "http://phpgratuit.free.fr";
$invite->msg = "Bonjour,\nVotre amis ".$prenom."". $nom." vous invite a visiter le site ".$invite->site_nom." a l'adresse $page\nCommentaires de votre amis :$comment \n\n\n$prenom $nom";
$invite->subject = "Un amis vous invite a visiter le site ".$invite->site_nom."";
/*
******************************
Fin des variables a configurer
******************************
*/

echo "<html><head>
<meta http-equiv='Content-Language' content='fr'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
<title>Suggérer ce site a un amis</title>
</head>

<body>

<form method='POST'>
  <table border='0' width='50%' cellspacing='1' cellpadding='3'>
    <tr>
      <td colspan='2' bgcolor='#3399FF'>
        <p align='center'><font face='Verdana' color='white' size='3'><b>Inviter vos amis a
        visiter ce site</b></font></td>
    </tr>
    ";

 // destinataire 1
 if ($session == "activ")
 {
 if ($nom != "" && $prenom != "" && $email != "" && $comment != "" && $email1 != "" && $nom1 != "")
 {
 echo  "<tr>
      <td bgcolor='#3399FF' colspan='2'><br><font face='verdana' color='white' size='2'><b>Le message d'invitation a bien été envoyé à <b>$email1</b><BR><HR>";
   $entetedate  = date( "D, j M Y H:i:s -0600");
   $entetemail  =  "From: $email\n";
   $entetemail .=  "Cc: $email\n";
   $entetemail .=  "Bcc: \n";
   $entetemail .=  "Reply-To: $email\n";
   $entetemail .=  "X-Mailer: PHP/" . phpversion() .  "\n" ;
   $entetemail .=  "Date: $entetedate";
   mail("$email1","$invite->msg","$invite->msg",$entetemail);
   // pour nexen.net, commentez la ligne ci-dessus et décommentez les deux lignes ci-dessous
   //include("mail.inc");
   //email("$email1","$invite->msg","$invite->msg",$entetemail);
   }
 }

 // destinataire 2
 if ($session == "activ" && $nom2 != "" && $email2 != "")
 {
 if ($nom != "" && $prenom != "" && $email != "" && $comment != "" && $email1 != "" && $nom1 != "")
 {
 echo  "Le message d'invitation a bien été envoyé à <b>$email2</b><BR><HR>";
   $entetedate  = date( "D, j M Y H:i:s -0600");
   $entetemail  =  "From: $email \n";
   $entetemail .=  "Cc: \n";
   $entetemail .=  "Bcc: \n";
   $entetemail .=  "Reply-To: $email \n";
   $entetemail .=  "X-Mailer: PHP/" . phpversion() .  "\n" ;
   $entetemail .=  "Date: $entetedate";
   mail("$email2","$invite->msg","$invite->msg",$entetemail);
   // pour nexen.net, commentez la ligne ci-dessus et décommentez les deux lignes ci-dessous
   //include("mail.inc");
   //email("$email2","$invite->msg","$invite->msg",$entetemail);
   }
 }

 // destinataire 3
 if ($session == "activ" && $nom3 != "" && $email3 != "")
 {
 if ($nom != "" && $prenom != "" && $email != "" && $comment != "" && $email1 != "" && $nom1 != "")
 {
 echo  "Le message d'invitation a bien été envoyé à <b>$email3</b><BR><HR>";
   $entetedate  = date( "D, j M Y H:i:s -0600");
   $entetemail  =  "From: $email \n";
   $entetemail .=  "Cc:\n";
   $entetemail .=  "Bcc: \n";
   $entetemail .=  "Reply-To: $email \n";
   $entetemail .=  "X-Mailer: PHP/" . phpversion() .  "\n" ;
   $entetemail .=  "Date: $entetedate";
   mail("$email3","$invite->msg","$invite->msg",$entetemail);
   // pour nexen.net, commentez la ligne ci-dessus et décommentez les deux lignes ci-dessous
   //include("mail.inc");
   //email("$email3","$invite->msg","$invite->msg",$entetemail);
   }
 }


echo "</font>      </td>
    </tr>
     <tr>
      <td bgcolor='#3399FF'><font face='Verdana' color='#FFFFFF' size='2'>Votre nom</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='nom' style='background-color: #FFFFCC' value='";
      if (($nom != "") && ($session == "activ"))
      {
      echo  "$nom'";
      }
      else
      {
      echo "' ";
      }
      echo " size='20'>*</font>";
     echo "<font face='verdana' size='1'><b><br>"; if (($nom == "") && ($session == "activ"))
      {
      echo  " Veuillez entrer votre nom !";
      }
      echo "</td></tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Votre prénom</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' style='background-color: #FFFFCC' name='prenom' value='";
            if (($prenom != "") && ($session == "activ"))
      {
      echo  "$prenom'";
      }
            else
      {
      echo "' ";
      }
      echo " size='20'>*</font>";


       if (($prenom == "") && ($session == "activ"))
       {
       echo "<font face='verdana' size='1'><b><br>";echo  " Veuillez entrer votre prenom !";
       }
       echo "</td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Votre email</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' style='background-color: #FFFFCC' name='email' value='";
            if (($email != "") && ($session == "activ"))
      {
      echo  "$email'";
      }
            else
      {
      echo "' ";
      }
      echo " size='20'>*</font>";

        if (($email == "") && ($session == "activ"))
        {
        echo "<font face='verdana' size='1'><b><br>";echo  " Veuillez entrer votre email !";
        }
        echo "</td>
    </tr>
     <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Votre commentaire</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' style='background-color: #FFFFCC' name='comment' value='";
             if (($comment != "") && ($session == "activ"))
      {
      echo  "$comment'";
      }
            else
      {
      echo "' ";
      }
      echo " size='20'>*</font>";

      if (($comment == "") && ($session == "activ"))
      {
      echo "<font face='verdana' size='1'><b><br>";echo  " Veuillez entrer votre commentaire !";
      }
     echo "</td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>L'email de votre amis 1</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='email1' style='background-color: #FFFFCC' size='20'>*</font>";
        if (($email1 == "") && ($session == "activ"))
        {
        echo "<font face='verdana' size='1'><b><br>";echo  " Veuillez entrer l'email de votre amis !";
        }
        echo "</td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Le nom de votre amis 1</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' style='background-color: #FFFFCC' name='nom1' size='20'>*</font>";
      if (($nom1 == "") && ($session == "activ"))
      {
      echo "<font face='verdana' size='1'><b><br>";echo  " Veuillez entrer le nom de votre amis !";
      }
      echo "</td>
    </tr>


  <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>L'email de votre amis 2</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='email2' size='20' style='background-color: #FFFFCC'></font></td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Le nom de votre amis 2</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='nom2' size='20' style='background-color: #FFFFCC'></font></td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>L'email de votre amis 3</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='email3' size='20' style='background-color: #FFFFCC'></font></td>
    </tr>
    <tr>
      <td bgcolor='#3399FF'><font face='Verdana' size='2' color='#FFFFFF'>Le nom de votre amis 3</font></td>
      <td bgcolor='#FFFFCC'><font face='Verdana'><input type='text' name='nom3' size='20' style='background-color: #FFFFCC'></font></td>
    </tr>
    <tr>
      <td bgcolor='#3399FF' colspan='2'>
        <input type='hidden' value='activ' name='session'><p align='center'><font face='Verdana'><b><input type='submit' value='Envoyer' style='background-color: #008000; color: #FFFFFF; font-family: Verdana; font-size: 10 pt; font-weight: bold'>
        l <input type='reset' value='Effacer' style='background-color: #008000; color: #FFFFFF; font-family: Verdana; font-size: 10 pt; font-weight: bold'></b></font></td>
    </tr>
</table>
</form>
</body></html> ";
?>
