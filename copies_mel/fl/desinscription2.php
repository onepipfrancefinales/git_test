<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php

$adresse = $_POST['champion'];

?>
<?php
// To
$to = 'onepip-france@franceserv.com';
 
// Subject
$subject = $_POST['champion'];
 
// Message
$msg = ' comite FL';


// Function mail()
mail($to, $subject, $msg);


  
    
?>
<b><font size="5">D&eacute;sinscription r&eacute;ussie</font></b><br>
<br>
<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="http://francefinalesrugby.franceserv.com/page_resultats.php"><font size="6">Retour 
        aux r�sutats et aux classements </font></a> </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td rowspan="3">&nbsp; </td>
    <td width="240"> 
      <?php
    // On inclut le haut de la page
    include("../../pub4.php");
    ?>
      <div align="center"></div>
    </td>
    <td rowspan="3">&nbsp; </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"> </div>
    </td>
  </tr>
  <tr> 
    <td width="240"> 
      <div align="center"></div>
    </td>
  </tr>
</table>
<p>&nbsp; </p>


</body>
</html>
