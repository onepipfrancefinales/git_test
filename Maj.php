<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>phplmeague - Administration</title>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
$comite2 = $_GET['c'];
$comite = ("php".''.$comite2);
$champ = $_GET['d'];
$journee = $_GET['j']; 
$numero=$journee;
$id_journee=($champ*100)+$journee;

?>

<?php
//echo $comite;
//echo $champ;
//echo $id_journee;
//echo $numero;?>

  <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/<?php echo $comite; ?>/admin2/indexSMS.php?page=championnat&action=resultats&champ=<?php echo $champ; ?>&id_journee=<?php echo $id_journee; ?>&numero=<?php echo $numero; ?> "
frameborder="no" 
height="500" width="100%"" type="text/html" align="top"   />
        </object></div>

</body>
</html>
