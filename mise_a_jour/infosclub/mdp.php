<br><br><br><br><br><br><br>
<p align="center"> 
<?php 
$idClub = $_GET['idClub']; 
//echo $idClub;


echo "Pour valider que vous n'êtes pas un robot,
saississez \"pasUnRobot\" et validez ";
?>
</p>
<form
 action="modif2.php?idClub=<?php echo $idClub; ?>" method="post">
  <p align="center"> 
    <input name="mot_de_passe" type="text"> <input value="Valider" type="submit">
  </p>
</form>




<br>
<?php

//include("modif2.php");
?>
</body>