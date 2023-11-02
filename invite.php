<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- Par Moosh Pour PhpFrance -->
<html>
<head>
    <title>Conseillez  notre site &agrave; un ami</title>
</head>
<body>
<? 
 if ($statut== "ok") {
 if ($VotreEmail <> "") 
 { echo  "envoi de l'invitation &agrave; $SonEmail<BR>de $nom<HR>";
   $entetedate  = date( "D, j M Y H:i:s -0600");  // Offset horaire 
   $entetemail  =  "From: $from_email \n";  // Adresse expéditeur 
   $entetemail .=  "Cc:$VotreEmail \n"; 
   $entetemail .=  "Bcc: \n";  // Copies cachées si vous le desirez 
   $entetemail .=  "Reply-To: $VotreEmail \n";  // Adresse de retour 
   $entetemail .=  "X-Mailer: PHP/" . phpversion() .  "\n" ;
   $entetemail .=  "Date: $entetedate";
   mail(
     "$SonEmail",
     "un site super sur le Php",
     "$nom t'invite a te rendre sur http://www.phpfrance.com\n c'est un super site ca\n$nom \n\n\n",
    $entetemail
  ); 
} 
 }
 ?>
Conseillez ce site &agrave; un pote....<BR>
<form action="invite.php3" method="post">
<table>


    <tr><td>Votre nom </td><TD>  <input type="Text" name="nom">
  <?  if (($nom == "")       and ($statut== "ok")) {echo  " Votre Nom S.V.P.";} ?>
       </td></tr>


    <tr><td>Votre Email </td><TD><input type="Text" name="VotreEmail">
  <?  if (($VotreEmail == "")and ($statut== "ok")) {echo  " Votre Email S.V.P.";} ?>
 </td></tr>


    <tr><td>Son EMail  </td><TD><input type="Text" name="SonEmail"></td></tr>
  <?  if (($SonEmail == "")  and ($statut== "ok")) {echo  " L'Email de votre ami S.V.P.";} ?>
 </td></tr>


    <tr><td></td></tr>
</table><input type="Hidden" name="statut" value="ok">
<input type="Submit" name="invite"></form>
</body>
</html>

