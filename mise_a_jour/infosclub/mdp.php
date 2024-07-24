
<!DOCTYPE html PUBLIC>       
<html lang="fr">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>modification de données du club</title>
 <link type="text/css" rel="stylesheet" href="../../ligne1.css">
 <meta name=viewport content="width=device-width, initial-scale=1">
  <!--
 <script language="JavaScript">

 function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
 }
 MM_reloadPage(true);
 
 </script>
  -->
</head>

<body>


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
<footer>
  
</footer>
</html>