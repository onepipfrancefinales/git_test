<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilleMatch.css"/>
</head>

<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat'];  else  $championnat ="Variable championnat non d&eacute;clar&eacute;e";


if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['date'])) $date = $_GET['date'];						else $date= "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA= "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB= "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";




?>





<?php// echo $code_match ;?>
 
<?php// echo $equipe ;?>

<?php// echo $equipeA ;?>

<?php// echo $equipeB ;?>

<?php// echo $connect ;?>
 

 
<?php// echo $comite ;?>

<table width="100%" border="0" height="100%">
  <tr> 
    <td rowspan="2" width="200" valign="top"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td width="84%" valign="top" height="52" bgcolor="#CCCCCC"> 
     <p><b><font size="5" face="Arial, Helvetica, sans-serif">Modification des informations 
  d'une licence</font></b></p>
<form action="../adminLicences/page_modifier2.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ; ?>" method="POST">
  <p> Saisir le num&eacute;ro devant le joueur &agrave; modifier 
    <input type="text" name="ID" maxlength="10" />
  </p>
  <p> 
    <input type="submit" value="Valider" name="submit322" />
  </p>
        
  </form>
    </td>
  </tr>
  <tr> 
    <td width="84%" valign="top"> 
      <?php include "consult_id.php"; ?>
    </td>
  </tr>
</table>
</body>
</html>
