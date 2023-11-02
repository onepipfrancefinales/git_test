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

<?php echo $com;?></br>
<?php echo $comite;?></br>
<?php echo $champ; ?></br>
<?php echo $id_journee;?></br>
<?php echo $numero;?></br>

  <div align="center"><object data="http://francefinalesrugby.franceserv.com/Phpleague/phpn/admin2/indexSMS.php?page=championnat&action=resultats&champ=171&id_journee=17114&numero=14 "
frameborder="no" 
height="700" width="100%"" type="text/html" align="top"   />
        </object></div>

</body>
</html>
