<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
$to1 = $_POST['adresse1'];
$subject1 = ' Nouveau site : R�sultats et classements des toutes les �quipes B�arnaises1';
$msg1 = ' Bonjour <br>
Une de vos connaissance vous invite a consulter les r�sultats les classements et les stats des clubs du comit� du B�arn � partir de l adresse ci dessous <br>
http://francefinalesrugby.franceserv.com/resultats/page_be.php <br>
Sportivement <br>
France Finales Rugby ';

// Function mail()
mail($to1, $subject1, $msg1);
?>

<?php
$to2 = $_POST['adresse2'];
$subject2 = ' Nouveau site : R�sultats et classements des toutes les �quipes B�arnaises2';
$msg2 = ' Bonjour <br>
Une de vos connaissance vous invite a consulter les r�sultats les classements et les stats des clubs du comit� du B�arn � partir de l adresse ci dessous <br>
http://francefinalesrugby.franceserv.com/resultats/page_be.php <br>
Sportivement <br>
France Finales Rugby ';

// Function mail()
mail($to2, $subject2, $msg2);


?>
<?php
$to3 = $_POST['adresse3'];
$subject3 = ' Nouveau site : R�sultats et classements des toutes les �quipes B�arnaises';
$msg3 = ' Bonjour <br>
Une de vos connaissance vous invite a consulter les r�sultats les classements et les stats des clubs du comit� du B�arn � partir de l adresse ci dessous <br>
http://francefinalesrugby.franceserv.com/resultats/page_be.php <br>
Sportivement <br>
France Finales Rugby ';

// Function mail()
mail($to3, $subject3, $msg3);


?>
<?php
$to4 = 'onepip-france@franceserv.com';
$subject4 = ' Comit� du B�arn';
$msg4 = $_POST['adresse1'];
$msg5 = $_POST['adresse2'];
$msg6 = $_POST['adresse3'];
// Function mail()
mail($to4, $subject4, $msg4);
mail($to4, $subject4, $msg5);
mail($to4, $subject4, $msg6);
?>
<p><b><font size="5">Envoi r&eacute;ussi</font></b></p>
<table width="494" border="0">
  <tr> 
    <td colspan="3"> 
      <div align="center"><a href="http://francefinalesrugby.franceserv.com/page_resultats.php"><font size="6">Retour 
        aux r�sutats et aux classements </font></a> </div>
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