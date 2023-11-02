<?php
$codeFFR = $_GET['codeFFR'];
echo $codeFFR;
?>
<html>
<head>
<title>Resultats FFR</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>


<object data="https://ovale2.ffr.fr/Competitions/Resultats/View/<?php echo $codeFFR; ?>"
			 height="900" width="1200" >
  
</object>
</body>
</html>
