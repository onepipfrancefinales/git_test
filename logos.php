<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>

<body bgcolor="#FFFFFF" text="#000000">
<div align="center"><b> <font size="6"> 
  <?php $sigle = $_GET['variable_1'];?>
  Clubs du comit&eacute; 
  <?php echo $sigle ;?>
  </font></b><font size="6"></font> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="519" border="0" align="center">
  <tr valign="top" align="center"> 
    <td width="135"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 0,10 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="124"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 10,10 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
       
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="120"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 20,10 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="122"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id  limit 30,10 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td width="135"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 40,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="124"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 45,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="120"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 50,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="122"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 55,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td width="135"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 60,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="124"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 65,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="120"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 70,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="122"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 75,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr valign="top" align="center"> 
    <td width="135">&nbsp;</td>
    <td width="124">&nbsp;</td>
    <td width="120">&nbsp;</td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr valign="top" align="center"> 
    <td width="135"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 80,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="124"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 85,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="120"> 
      <div align="center"> <font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 90,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td width="122"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 95,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td height="14" width="135">&nbsp;</td>
    <td height="14" width="124">&nbsp;</td>
    <td height="14" width="120">&nbsp;</td>
    <td height="14" width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td height="60" width="135"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 100,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="124" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 105,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="120" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 110,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="122" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 115,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td height="60" width="135"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 120,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="124" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 125,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="120" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 130,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="122" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 135,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td height="60" width="135"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 140,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="124" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 145,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="120" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 150,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="60" width="122" valign="top"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 155,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
  <tr> 
    <td height="16" width="135">&nbsp;</td>
    <td height="16" width="124">&nbsp;</td>
    <td height="16" width="120">&nbsp;</td>
    <td height="16" width="122">&nbsp;</td>
  </tr>
  <tr> 
    <td height="62" width="135"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 160,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="62" width="124"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 165,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="62" width="120"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 170,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
    <td height="62" width="122"> 
      <div align="center"><font size="2"> 
        <?php
require ("connection.php") ;
 ?>
        <?php

$query = "SELECT bdsaisons.id, bdclubs.nom_1, bdclubs.url100_100, bdclubs.logo, bdclubs.url100_100 FROM bdsaisons, bdclubs WHERE bdsaisons.code_bdsaison=bdclubs.code and bdsaisons.siglecomite='$sigle'order by bdsaisons.id limit 175,5 ";
$result = mysql_query($query);
         while($row = mysql_fetch_array($result))
         {                 
                   
             ?>
        <?php  echo "<img src=\"$row[4]\">";?>
        <br>
        <?php echo "  </b> <a href=\"$row[3]\">$row[1]</a>";?>
        <br>
        <br>
        <br>
        <?php
 
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></div>
    </td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
