<?php require ("connection.php") ; ?>

<?php $champion = $_GET['champion']; //

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);
echo "<br/>";

?>

<?php
$reponse = mysql_query("SELECT * FROM bdclubs WHERE code='$chaine'or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requ�te SQL
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>

<?php 
$coordonnees = array (
        "$chaine" => $donnees['nom_1']);

foreach($coordonnees as $cle => $element)
{
     '' . $cle . ' vaut ' . $element . '<br />';
}


?>


<?php
$coordonnees = array (
        "$chaine" => $donnees['code']);

foreach($coordonnees as $cle1 => $element1)
{
     '' . $cle1 . ' vaut ' . $element1 . '<br />';
}


?>
<?php $id= $element1;?>


<?php
 }

mysql_close(); // D�connexion de MySQL
?>
<?php require ("connection.php") ; ?>
<?php
$champion == $_post['champion']; //
// On fait une boucle pour lister tout ce que contient la table :
?>

<?php
$reponse = mysql_query("SELECT * FROM bdclubs WHERE code='$chaine' or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requ�te SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



 <h1><strong><?php echo $donnees['sigle'];?></strong></h1>
  
 <br/>
<h2><strong>
  <?php echo $donnees['comite'];?>
  </strong></h2>



<?php 
{print("<img src=\"http://francefinalesrugby.franceserv.com/images/blasons200_200/$element1.gif\" >");}
?>
<strong>
<?php
 }

mysql_close(); // D�connexion de MySQL
?>
</strong><br>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="2" width="500" bordercolor="#99CCFF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#000000">Cr&eacute;ation du club : </font></td>
    <td width="360"> <strong> <b><font color="#000000"><font color="#000000" size="4"> 
      <?php
require ("connection.php") ;
 ?>
      </font><font size="4"> 
      <?php
$reponse = mysql_query("SELECT * FROM infosclub WHERE id='$id'"); // Requ�te SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </font></font></b><font color="#000000"> 
      <?php echo $donnees['A1624'];?>
      </font><b><font color="#000000"><font size="4"> </font></font></b> </strong></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><b><font color="#FF0000" size="3">Bureau</font></b></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Pr&eacute;sident :</font> </b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1601'];?>
      </font> </strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Secretaire : </font></b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1602'];?>
      </font> </strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Tr&eacute;sorier :</font></b></div>
    </td>
    <td width="384">&nbsp;</td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="110"> 
      <div align="right"><b><font color="#000000">Contact : </font></b></div>
    </td>
    <td width="384"><strong><font color="#000000"> 
      <?php echo $donnees['A1603'];?>
      </font> </strong></td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#FF0000"><b>Siège</b></font></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"> 
      <div align="center"><strong><font color="#000000"> 
        <?php echo $donnees['A1604'];?>
        </font> </strong></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"><font color="#000000"> 
      <?php echo $donnees['A1605'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="23" valign="top"><font color="#000000"> 
      <?php echo $donnees['A1606'];?>
      <?php echo $donnees['A1607'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="69"> 
      <div align="right"><font color="#000000">Tèl :</font></div>
    </td>
    <td><font color="#000000"> 
      <?php echo $donnees['A1608'];?>
      </font> </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="23"><b><font color="#FF0000">Stade</font></b></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="41"><strong><font color="#000000"> 
      <?php echo $donnees['A1609'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2"> <font color="#000000"> 
      <?php echo $donnees['A1610'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="2" height="14" valign="top"><font color="#000000"> 
      <?php echo $donnees['A1611'];?>
      <?php echo $donnees['A1612'];?>
      </font> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="117" height="24"> 
      <div align="right"><font color="#000000">Tèl : </font></div>
    </td>
    <td height="24"> 
      <div align="center"><b><font color="#000000"> 
        <?php echo $donnees['A1613'];?>
        </font></b> </div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="117"> 
      <div align="right"><font color="#000000">capacit&eacute; :</font></div>
    </td>
    <td> 
      <div align="center"><font color="#000000"> 
        <?php echo $donnees['A1614'];?>
        </font> </div>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3" height="25"> 
      <div align="center"><b><font color="#FF0000">Contact</font></b> </div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Site Internet :</font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <p>
      <p align="center"><a href=" <?php echo $donnees['A1620'];?>" target="_blank"><font color="#000000" size="3"> 
        <?php echo $donnees['A1620'];?>
        </font></a></p>
      </font></strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Courriel :</font> </div>
    </td>
    <td colspan="2"><strong> <a href="mailto:<?php echo $donnees['A1616'];?>" oldref=""> 
      <font color="#000000" size="3"> 
      <?php echo $donnees['A1616'];?>
      </font></a></strong></td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Correspondant : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1617'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3" height="20"> 
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">Sigle : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1618'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td width="121"> 
      <div align="right"><font color="#000000">couleurs : </font></div>
    </td>
    <td colspan="2"><strong><font color="#000000"> 
      <?php echo $donnees['A1619'];?>
      </font> </strong> </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="3">&nbsp; </td>
  </tr>
</table>
<br>
<table width="500" border="1" align="center" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
   <tr align="center" bordercolor="#FFFFFF">  
    <td width="197"> 
      <div align="center"><font color="#000000">Section masculine :</font></div>
    </td>
    <td width="297"> 
      <div align="center"><font color="#000000"><b> 
        <?php echo $donnees['equipe_fem'];?>
        </b></font></div>
    </td>
  </tr>
</table>
<br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="500" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td height="25"> 
      <div align="center"><b><font color="#FF0000">Dates importantes</font></b></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1621'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1622'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1623'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF">
    <td>
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1626'];?>
        </font></div>
    </td>
  </tr>
  <tr align="center" bordercolor="#FFFFFF"> 
    <td> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['A1627'];?>
        </font></div>
    </td>
  </tr>
</table>
<strong><b> 
<?php
 }

mysql_close(); // D�connexion de MySQL
?>
</b></strong><br>
<table border="1" align="center" cellspacing="0" cellpadding="0" width="540" bordercolor="#0000FF">
  <tr align="center" bordercolor="#FFFFFF"> 
    <td colspan="6" height="25" bordercolor="#FF0000" bgcolor="#000000"> 
      <div align="center"><b><font color="#000000" link="#000000"> 
        <?php
		  echo "<a href=http://francefinalesrugby.franceserv.com/feminine/mise_a_jour/modif2_16me.php?idPersonne=$id target=_blank>Modifier la fiche du club</a> ";
		  ?>
        </font></b></div>
    </td>
  </tr>
</table>
<p><font color="#FF0000">_______________________________________________________</font></p>
<p align="center"><b><font color="#FF0000"size="+2">Palmar�s</font></b></p>

 


<?php
require ("connection.php") ;//Affichage  de la categorie A
 ?>
<?php  
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE entente='$element' and categorie='F'  LIMIT 0,1");
while ($donnees = mysql_fetch_array($reponse) )
{ 
 if ($element == $donnees['entente'] )
{
 echo "<p><h3><strong> Equipe Une </strong></h3>";
}
?>
<?php //Palmares F
$reponse = mysql_query("SELECT * FROM bdequipe1 WHERE entente='$element' and categorie='F'  order by saison desc");

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<?php echo $donnees['saison']; ?>
<?php echo $donnees['titre']; ?>
<?php echo $donnees['championnat'];?>
<?php echo $donnees['division'];?>
<?php echo $donnees['champion_entente'];?>
<br/>
<?php
}
?>
<?php
}
mysql_close(); // D�connexion de MySQL
?>
<p><font color="#FF0000">_______________________________________________________</font></p>
<p align="center">&nbsp;</p>
<p align="center">
  <?php
require ("connection.php") ;
 ?>
  <?php    
 

 
$reponse = mysql_query("SELECT * FROM bdsaisons WHERE code_bdsaison='$element1'");
while ($donnees = mysql_fetch_array($reponse) )
{
?>
  <?php echo "<p><h3><strong>Saison 2014/2015 : </p></h3></strong>";?>
  <?php echo $donnees['terr_2015']; ?>
  <?php echo "<br/>";?>

</p>
<p align="center"><b><font color="#FF0000"size="+2">Saisons pr�c�dentes</font></b></p>
<p>&nbsp; 
<table width="450" bordercolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#000000">Saison 2013/2014</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2014']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2014']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#000000">Saison 2012/2013 :</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2013']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2013']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#000000">Saison 2011/2012 : </font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2012']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2012']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%">&nbsp;</td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#000000">Saison 2010/2011 :</font></td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['terr_2011']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"><font color="#CCCCCC">--</font></td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2011']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#CCCCCC"> 
    <td width="29%"> 
      <div align="center"><font color="#CCCCCC">--</font></div>
    </td>
    <td width="71%" bgcolor="#CCCCCC" bordercolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#000000">Saison 2009/2010 : </font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC"> 
      <div align="left"><font color="#000000"> 
        <?php echo $donnees['terr_2010']; ?>
        </font></div>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"><font color="#FFFFFF">--</font></td>
    <td width="71%" bordercolor="#CCCCCC"><font color="#000000"> 
      <?php echo $donnees['france_2010']; ?>
      </font></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="29%"> 
      <div align="center"><font color="#FFFFFF">--</font></div>
    </td>
    <td width="71%" bordercolor="#CCCCCC">&nbsp; </td>
  </tr>
</table>
<p>&nbsp; </p>
<p align="center"> 
  <script type="text/javascript" charset="utf-8" src="http://www.gambling-affiliation.com/cpm/v=Kd8K7J3bIjGZNu1zZ6EQfNtwi21uX.DDesMAfrQXOF8_&s="></script>
</p>
<p> 
  <?php
 }
 ?>
  <?php
mysql_close(); // D�connexion de MySQL
?>
</p>
</html>

