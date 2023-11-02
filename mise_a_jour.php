<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<?php
$com = $_GET['com'];
$champ = $_GET['ch'];
$journee = $_GET['journee']; 
$numero=$journee;
$id_journee=($champ*100)+$journee;
$comite = ("php".''.$com);
?>

<?php// echo $com;?>
<?php// echo $comite;?>
<?php// echo $champ; ?>
<?php// echo $id_journee;?>
<?php// echo $numero;?>

  <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/<?php echo $comite; ?>/admin2/indexSMS.php?page=championnat&action=resultats&champ=<?php echo $champ; ?>&id_journee=<?php echo $id_journee; ?>&numero=<?php echo $numero; ?> "
frameborder="no" 
height="700" width="100%"" type="text/html" align="top"   />
        </object></div>

</body>
</html>
