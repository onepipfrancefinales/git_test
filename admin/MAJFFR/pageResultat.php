 
<?php
$vueResultat=$_GET['vueResultat'];
echo $vueResultat;
GLOBAL $vueResultat;
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<frameset rows="*,214" border="0" framespacing="0" cols="*"> 
  <frame name="mainFrame" src="affichageResultat.php">
  <frame name="bottomFrame" scrolling="NO" noresize src="sommaire.php">
</frameset>
<noframes> 
<body bgcolor="#FFFFFF" text="#000000">
</body>
</noframes> 
</html>
