<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php $sigle = $_GET['variable_1'];?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="899" border="0" align="center">
  <tr> 
    <td rowspan="5" width="560"> 
      <div align="center"> 
        <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("statspays"); // Sélection de la base onepip
?>
        <?php

$reponse = mysql_query("SELECT * FROM statpays WHERE miniequipe='$sigle' "); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
      </div>
      <h1 align="center"><strong> 
        <?php echo $donnees['equipe'];?>
        </strong></h1>
    </td>
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="408">&nbsp; </td>
  </tr>
  <tr> 
    <td width="560">Population :</td>
    <td width="408">&nbsp; </td>
  </tr>
  <tr> 
    <td width="560">Devise :</td>
    <td width="408">
      <?php 

{print("<img src=\"http://coupedumondexv.free.fr/Drapeaux/Grand_format/$sigle.png\" border=\"0\" target=_top>");}
?>
    </td>
  </tr>
  <tr> 
    <td width="560">Secteur de qualification :</td>
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="560">hymme :</td>
    <td width="408">&nbsp; </td>
  </tr>
  <tr> 
    <td width="560">Nombre de licenci&eacute;s :</td>
    <td width="408">&nbsp; </td>
  </tr>
  <tr> 
    <td width="560">Nombre de clubs :</td>
    <td width="408">
      <?php 

{print("<img src=\"http://coupedumondexv.free.fr/sigle/$sigle.gif\" border=\"0\" target=_top>");}
?>
    </td>
  </tr>
  <tr> 
    <td width="560">Nombre d'arbitre :</td>
    <td width="408">&nbsp;</td>
  </tr>
  <tr> 
    <td width="560">Embl&eacute;me :</td>
    <td width="408">&nbsp; </td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp; </p>
<h1>&nbsp;</h1>


<br/>
<br/>
<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
<?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("bilancdm"); // Sélection de la base onepip
?>
<?php 


 $reponse = mysql_query("SELECT * FROM bilancdm WHERE miniequipe='$sigle' "); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<br/>
<table width="368" border="0" align="center">
  <tr>
    <td width="162">Coupe du monde 1987 :</td>
    <td width="196">
      <?php echo $donnees['cdm1987']; ?>
    </td>
  </tr>
  <tr bgcolor="#FFFFCC"> 
    <td width="162">Coupe du monde 1991 :</td>
    <td width="196">
      <?php echo $donnees['cdm1991']; ?>
    </td>
  </tr>
  <tr>
    <td width="162">Coupe du monde 1995 :</td>
    <td width="196">
      <?php echo $donnees['cdm1995']; ?>
    </td>
  </tr>
  <tr bordercolor="#FFFFFF" bgcolor="#FFFFCC"> 
    <td width="162">Coupe du monde 1999 :</td>
    <td width="196">
      <?php echo $donnees['cdm1999']; ?>
    </td>
  </tr>
  <tr>
    <td width="162">Coupe du monde 2003 :</td>
    <td width="196">
      <?php echo $donnees['cdm2003']; ?>
    </td>
  </tr>
  <tr bgcolor="#FFFFCC"> 
    <td width="162">Coupe du monde 2007 :</td>
    <td width="196">
      <?php echo $donnees['cdm2007']; ?>
    </td>
  </tr>
  <tr>
    <td width="162">Coupe du monde 2011 :</td>
    <td width="196">
      <?php echo $donnees['cdm2011']; ?>
    </td>
  </tr>
  <tr bgcolor="#FFFFCC"> 
    <td width="162">Coupe du monde 2015 :</td>
    <td width="196">
      <?php echo $donnees['cdm2015']; ?>
    </td>
  </tr>
</table>
<p align="center"><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p align="center"><font size="5"><b>Nombre de rencontres en Coupe du Monde </b></font>: 
</p>
<p align="center"><br>
  <font size="5"><b>Victoires :<br>
  </b></font> 
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencontresbdcm2"); // Sélection de la base onepip
?>
  <?php 


 $reponse = mysql_query("SELECT * FROM rencontresbdcdm2 WHERE VND='V' and mini_equipe1 ='$sigle'"); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['annee']; ?>
  contre <b> 
  <?php echo $donnees['equipe2'] ; ?>
  </b> sur le score de 
  <?php echo $donnees['score1'] ; ?>
  à 
  <?php echo $donnees['score2'] ; ?>
  en 
  <?php echo $donnees['position'] ; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p align="center"><br/>
  <b><font size="5">Nul : </font></b><br/>
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencpntresbdcm2"); // Sélection de la base onepip
?>
  <?php 


 $reponse = mysql_query("SELECT * FROM rencontresbdcdm2 WHERE VND='N' and mini_equipe1 ='$sigle'"); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['annee']; ?>
  Nul contre <b> 
  <?php echo $donnees['equipe2'] ; ?>
  </b> sur le score de 
  <?php echo $donnees['score1'] ; ?>
  à 
  <?php echo $donnees['score2'] ; ?>
  en 
  <?php echo $donnees['position'] ; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
  <br/>
</p>
<p align="center"><font size="5"><b>D&eacute;faites :</b></font><br/>
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencpntresbdcm2"); // Sélection de la base onepip
?>
  <?php 


 $reponse = mysql_query("SELECT * FROM rencontresbdcdm2 WHERE VND='D' and mini_equipe1 ='$sigle'"); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['annee']; ?>
  Défaite contre <b> 
  <?php echo $donnees['equipe2'] ; ?>
  </b> sur le score de 
  <?php echo $donnees['score1'] ; ?>
  à 
  <?php echo $donnees['score2'] ; ?>
  en 
  <?php echo $donnees['position'] ; ?>
  <br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p align="center">&nbsp;</p>


</body>
</html>
