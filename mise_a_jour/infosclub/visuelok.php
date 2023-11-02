<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
<b> <font size="4"> 

 
  
<?php
require ("connect.php") ;
 ?> 
  <?php
  
  $id  = 10001 ;
 echo $id;
  //requête SQL:
  
 
  

?>
 
</font></b> 

  
<table border="0" align="center" cellspacing="2" cellpadding="2" width="616">
  <tr align="center"> 
    <td width="127">&nbsp;</td>
    <td width="71">id</td>
    <td width="75"> 
      <?php
   
 echo $id
 ?>
    </td>
    <td width="50"><b><font size="4"> </font></b></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="127" height="32">&nbsp;</td>
    <td width="71" height="32">club</td>
    <td width="75" height="32"> <b><font size="4"> 
      <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
	  
	  
	  <?php
require ("connect.php") ;
 ?>
      </font></b> 
      <?php
$reponse = mysql_query("SELECT * FROM bdpf WHERE id='$id'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <h1><strong> 
        <?php echo $donnees['club'];?>
        </strong></h1>
    </td>
    <td width="50" height="32">&nbsp;</td>
    <td width="33" height="32">&nbsp;</td>
    <td width="47" height="32">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp; </td>
    <td width="50"><b><font size="4"> </font></b></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="127">&nbsp;</td>
    <td width="71">creaiton du club</td>
    <td width="75"> <strong> <b><font size="4"> </font></b> 
      <?php echo $donnees['A1632'];?>
      </strong></td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="616" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td colspan="3"><b><font color="#FF0000" size="3">Bureau</font></b></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right"><b>Pr&eacute;sident : </b></div>
    </td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1601'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right">Secretaire : </div>
    </td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1602'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right"><b>Contact : </b></div>
    </td>
    <td width="75"><strong> 
      <?php echo $donnees['A1603'];?>
      </strong></td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="616" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td colspan="3">
      <div align="center"><font color="#FF0000"><b>Si&egrave;ge</b></font></div>
    </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td colspan="3"><strong> 
      <?php echo $donnees['A1604'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td colspan="3"> 
      <?php echo $donnees['A1605'];?>
    </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127" height="23">&nbsp;</td>
    <td colspan="3" height="23" valign="top"> 
      <?php echo $donnees['A1606'];?>
      <?php echo $donnees['A1607'];?>
      </td>
    <td width="33" height="23"><strong> <b><font size="4"> </font></b></strong> 
    </td>
    <td width="47" height="23">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71"> 
      <div align="right">T&egrave;l :</div>
    </td>
    <td width="75"><strong> 
      <?php echo $donnees['A1608'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="616" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146">&nbsp;</td>
    <td colspan="3">
      <div align="center"><b><font color="#FF0000">Stade</font></b> </div>
    </td>
    <td width="8">&nbsp;</td>
    <td width="54">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146" height="41">&nbsp;</td>
    <td colspan="3" height="41"><strong> 
      <?php echo $donnees['A1609'];?>
      </strong> </td>
    <td width="8" height="41">&nbsp;</td>
    <td width="54" height="41">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146">&nbsp;</td>
    <td colspan="3"><strong> 
      <?php echo $donnees['A1610'];?>
      <b><font size="4"> </font></b></strong> </td>
    <td width="8">&nbsp;</td>
    <td width="54">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146" height="14">&nbsp;</td>
    <td colspan="3" height="14" valign="top"> 
      <?php echo $donnees['A1611'];?>
      <?php echo $donnees['A1612'];?>
    </td>
    <td width="8" height="14"><strong> </strong> </td>
    <td width="54" height="14">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146" height="24">&nbsp;</td>
    <td width="82" height="24"> 
      <div align="right">tel : </div>
    </td>
    <td width="86" height="24"><strong><b><font size="4"> </font></b> 
      <?php echo $donnees['A1613'];?>
      </strong> </td>
    <td width="93" height="24">&nbsp;</td>
    <td width="8" height="24">&nbsp;</td>
    <td width="54" height="24">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="146">&nbsp;</td>
    <td width="82"> 
      <div align="right"><b>capacit&eacute; : </b></div>
    </td>
    <td width="86"><strong> 
      <?php echo $donnees['A1614'];?>
      </strong> </td>
    <td width="93">&nbsp; </td>
    <td width="8">&nbsp;</td>
    <td width="54">&nbsp;</td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="616" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127" height="25">&nbsp;</td>
    <td colspan="3" height="25">
      <div align="center"><b><font color="#FF0000">Contact</font></b> </div>
    </td>
    <td width="33" height="25">&nbsp;</td>
    <td width="47" height="25">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">Adresse URL</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1620'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right"><b>Mel</b></div>
    </td>
    <td width="75"><strong> 
      <?php echo $donnees['A1616'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right">tel : </div>
    </td>
    <td width="75"><strong> 
      <?php echo $donnees['A1617'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right">abreviation : </div>
    </td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1618'];?>
      </strong> </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">
      <div align="right"><b>couleurs : </b></div>
    </td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1619'];?>
      </strong> </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1615'];?>
      <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
      </strong> </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75"><strong> </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p><table border="0" align="center" cellspacing="2" cellpadding="2" width="616">
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">id</td>
    <td width="71">id</td>
    <td width="75"> 
      <?php
   
 echo $id
 ?>
    </td>
    <td width="50"><b><font size="4"> </font></b></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57" height="32">&nbsp;</td>
    <td width="127" height="32">club</td>
    <td width="71" height="32">club</td>
    <td width="75" height="32"> <b><font size="4"> 
      <?php
require ("connect.php") ;
 ?>
      </font></b> 
      <?php
$reponse = mysql_query("SELECT * FROM bdpf WHERE id='$id'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      <h1><strong> 
        <?php echo $donnees['club'];?>
        </strong></h1>
    </td>
    <td width="50" height="32">&nbsp;</td>
    <td width="33" height="32">&nbsp;</td>
    <td width="47" height="32">&nbsp;</td>
    <td width="56" height="32">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp; </td>
    <td width="50"><b><font size="4"> </font></b></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">creaiton du club</td>
    <td width="75"> <strong> <b><font size="4"> </font></b> 
      <?php echo $donnees['A1632'];?>
      </strong></td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1632</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71"><b><font color="#FF0000" size="3">Bureau</font></b></td>
    <td width="75">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>Pr&eacute;sident</b></td>
    <td width="71"><b>Pr&eacute;sident</b></td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1601'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1601 </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">Secretaire</td>
    <td width="71">Secretaire</td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1602'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1602</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>Contact</b></td>
    <td width="71"><b>Contact</b></td>
    <td width="75"><strong> 
      <?php echo $donnees['A1603'];?>
      </strong></td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1603 </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71"><font color="#FF0000"><b>Si&egrave;ge</b></font></td>
    <td width="75">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>Siege 1</b></td>
    <td width="71"><b>Siege</b></td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1604'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1604</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">rue</td>
    <td width="71">&nbsp;</td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1605'];?>
      </strong></td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1605</td>
  </tr>
  <tr align="center"> 
    <td width="57">1606</td>
    <td width="127">CP</td>
    <td width="71">&nbsp;</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1606'];?>
      <b><font size="4"> </font></b></strong> </td>
    <td width="50"><strong> 
      <?php echo $donnees['A1607'];?>
      </strong></td>
    <td width="33"><strong> <b><font size="4"> </font></b></strong> </td>
    <td width="47">ville</td>
    <td width="56">1607</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">contact</td>
    <td width="71">contact</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1608'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1608</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71"><b><font color="#FF0000">Stade</font></b></td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp; </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57" height="73">&nbsp;</td>
    <td width="127" height="73">nom du stade</td>
    <td width="71" height="73">Stade</td>
    <td width="75" height="73"><strong> 
      <?php echo $donnees['A1609'];?>
      </strong> </td>
    <td width="50" height="73">&nbsp;</td>
    <td width="33" height="73">&nbsp;</td>
    <td width="47" height="73">&nbsp;</td>
    <td width="56" height="73">1609</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>adresse du stade</b></td>
    <td width="71">&nbsp;</td>
    <td colspan="2"><strong> 
      <?php echo $donnees['A1610'];?>
      <b><font size="4"> </font></b></strong> </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1610</td>
  </tr>
  <tr align="center"> 
    <td width="57">1611 </td>
    <td width="127">CP</td>
    <td width="71">&nbsp;</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1611'];?>
      <b><font size="4"> </font></b></strong> </td>
    <td width="50"><strong> 
      <?php echo $donnees['A1612'];?>
      </strong></td>
    <td width="33"><strong> </strong> </td>
    <td width="47">Ville</td>
    <td width="56">1612</td>
  </tr>
  <tr align="center"> 
    <td width="57" height="24">&nbsp;</td>
    <td width="127" height="24">tel</td>
    <td width="71" height="24">tel</td>
    <td width="75" height="24"><strong><b><font size="4"> </font></b> 
      <?php echo $donnees['A1613'];?>
      </strong> </td>
    <td width="50" height="24">&nbsp;</td>
    <td width="33" height="24">&nbsp;</td>
    <td width="47" height="24">&nbsp;</td>
    <td width="56" height="24">1613</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>capacite</b></td>
    <td width="71"><b>capacite</b></td>
    <td width="75"><strong> 
      <?php echo $donnees['A1614'];?>
      </strong> </td>
    <td width="50">&nbsp; </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1614</td>
  </tr>
  <tr align="center"> 
    <td width="57" height="25">&nbsp;</td>
    <td width="127" height="25">&nbsp;</td>
    <td width="71" height="25"><b><font color="#FF0000">Contact</font></b></td>
    <td width="75" height="25">&nbsp; </td>
    <td width="50" height="25">&nbsp;</td>
    <td width="33" height="25">&nbsp;</td>
    <td width="47" height="25">&nbsp;</td>
    <td width="56" height="25">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">Adresse URL</td>
    <td width="71">Adresse URL</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1620'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1620</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>Mel</b></td>
    <td width="71"><b>Mel</b></td>
    <td width="75"><strong> 
      <?php echo $donnees['A1616'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1616</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">tel</td>
    <td width="71">tel</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1617'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1617</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">abreviation</td>
    <td width="71">abreviation</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1618'];?>
      </strong> </td>
    <td width="50">&nbsp; </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1618</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>couleurs</b></td>
    <td width="71"><b>couleurs</b></td>
    <td width="75"><strong> 
      <?php echo $donnees['A1619'];?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1619</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">comite</td>
    <td width="71">comite</td>
    <td width="75"><strong> 
      <?php echo $donnees['A1615'];?>
      <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
      </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">1615</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75"><strong> </strong> </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>9</b>-A8001-A8002</td>
    <td width="71"><b>9</b>-A8001-A8002</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp; </td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>10</b>-A8003-A1004</td>
    <td width="71"><b>10</b>-A8003-A1004</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>11</b>-A8005-A8006</td>
    <td width="71"><b>11</b>-A8005-A8006</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>12</b>-A8007-A8008</td>
    <td width="71"><b>12</b>-A8007-A8008</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>13</b>-A8009-A8010</td>
    <td width="71"><b>13</b>-A8009-A8010</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>14</b>-A1011-A1012</td>
    <td width="71"><b>14</b>-A1011-A1012</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>15</b>-A1013-A1014</td>
    <td width="71"><b>15</b>-A1013-A1014</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"><b>16</b>-A1015-A1016</td>
    <td width="71"><b>16</b>-A1015-A1016</td>
    <td width="75">&nbsp; </td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp; </td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="75">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td width="57">&nbsp;</td>
    <td width="127"> 
      <p>&nbsp; </p>
    </td>
    <td width="71"> 
      <p>&nbsp; </p>
    </td>
    <td width="75">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="47">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
