<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php $championnat = $_POST['championnat'];?>
<?php $code_div = $_GET['code_div'];?>
<?php $code_match = $_GET['idF'];?>
<?php $bdfeuilleA = $_GET['bdfeuilleA'];?>

<?php// $date = $_GET['date'];?>
<?php $comite = $_GET['comite'];?>
<?php $equipe = $_GET['equipe'];?><?php// echo $equipe ;?>
<?php $equipeA = $_GET['equipeA'];?><?php// echo $equipeA ;?>
<?php $equipeB = $_GET['equipeB'];?><?php// echo $equipeB ;?>
<?php $terrain = $_GET['terrain'];?>
<?php $connect = $_GET['connect'];?>
<?php $bdcomite=("php".''.$comite.''."_joueurs");?>

<?php// require ("../feuilles/fonctions.php");?>
<?php// require ("../feuilles/fonctionsA.php");?>
<?php// require ("../feuilles/fonctionsB.php");?>


<?php// $jugedetouche = $_GET['jugedetouche'];?>
<?php// echo $comite;?>
<table width="780" border="0" align="left">
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      <?php 
	  include "zoneF.php"; 
	 ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      <?php 
	  include "zone1Consultation.php"; 
	  ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" height="21" align="left" colspan="2"> 
      <?php
	  include "zone2Consultation.php"; 
	   ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      <?php 
	  include "zone5ConsultationF.php"; 
	   ?>
    </td>
  </tr>
  <tr> 
    <td valign="top" align="left" colspan="2"> 
      <?php 
	  include "zoneR.php"; 
	 ?>
    </td>
  </tr>
</table>
<p><br>
  <br>
</p>
</body>
</html>
