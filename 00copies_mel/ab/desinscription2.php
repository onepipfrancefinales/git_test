<html>
<head>
<title>Untitled Document</title>
<meta charset="utf-8" >
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$adresse = $_POST['champion'];

?>
<?php
// To
$to = 'onepip-france@franceserv.com';

// Message
$msg = ' '; 

// Subject
$subject = $_POST['champion'].$msg;
 



// Function mail()
mail($to, $subject, $msg);


 if (mail($to, $subject, $msg)) {  
    echo "Désincription réussie  ";
    //.$objet.  
   // " pour //$sto."; 
	echo $adresse.$msg;
  } 
  else { 
    echo "Echec de l'envoi du mail".$objet."."; 
  } 


?>

<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="https://francefinalesrugby.fr/resultats/page_resultats.php"><font size="4">Retour 
        aux résutats et aux classements </font></a> </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="3"> 
      <?php
    // On inclut le haut de la page
    include("../../pub6.php");
    ?>
    </td>
    <td width="240"> 
      <?php
    // On inclut le haut de la page
    include("../../pub4.php");
    ?>
      <div align="center"></div>
    </td>
    <td rowspan="3"> 
      <?php
    // On inclut le haut de la page
    include("../../pub6.php");
    ?>
    </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    include("../../pub_carre.php");
    ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="240"> 
      <?php
    // On inclut le haut de la page
    include("../../pub4.php");
    ?>
      <div align="center"></div>
    </td>
  </tr>
</table>
<p>&nbsp; </p>


</body>
</html>
