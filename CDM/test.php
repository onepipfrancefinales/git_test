<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php $sigle = $_GET['variable_1'];?>
<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp; </p>


<?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("bilancdm"); // Sélection de la base onepip
?>

<?php 


 $reponse = mysql_query("SELECT * FROM bilancdm WHERE miniequipe='NZ' "); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
<br/>
<table width="368" border="0">
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
<p><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>

 
 
  
</p>
<p align="left"><font size="5"><b>Nombre de rencontres en Coupe du Monde</b></font>:</p>
<p align="left"><br>
  <font size="5"><b>Victoires :<br>
  </b></font> 
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencpntresbdcm2"); // Sélection de la base onepip
?>
  <?php 


 $reponse = mysql_query("SELECT * FROM rencontresbdcdm2 WHERE VND='V' and mini_equipe1 ='NZ'"); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['cpte']; ?>
  contre 
  <b> <?php echo $donnees['equipe2'] ; ?> </b> 
  sur le score de 
  <?php echo $donnees['score1'] ; ?>
  à 
  <?php echo $donnees['score2'] ; ?>
  en 
  <?php echo $donnees['position'] ; ?>
  <?php echo $donnees['cpte']+$donnees['cpte']; ?><br/>
  <?php
 }
mysql_close(); // Déconnexion de MySQL
?>


</p>
<p align="left"><br/>
  <b><font size="5">Nul : </font></b><br/>
   <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencontresbdcdm2"); // Sélection de la base onepip
?>





  
  
  
  
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencontresbdcm2"); // Sélection de la base onepip
?>
 
 
  
  <br/>
  <?php

mysql_close(); // Déconnexion de MySQL
?>
  <br/>
</p>
<p align="left"><font size="5"><b>D&eacute;faites :</b></font><br/>
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencontresbdcdm2"); // Sélection de la base onepip
?>
  <?php 

 $sql = "SELECT SUM(cpte) AS prix_total FROM rencontresbdcdm2 WHERE mini_equipe1=\'NZ\'\n"
    . "";
echo $donnees['prix_total'];
 ?>
  
  
  <?php 


 $reponse = mysql_query("SELECT * FROM rencontresbdcdm2 WHERE VND='D' and mini_equipe1 ='NZ'"); // Requête SQL
 

while ($donnees = mysql_fetch_array($reponse) )
{ 
?>
  <?php echo $donnees['annee']; ?>
  Défaite contre 
  <b> <?php echo $donnees['equipe2'] ; ?> </b> 
  sur le score de 
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
<p align="left">Rencontres</p>
  
  <?php
mysql_connect("coupedumondexv.free.fr", "coupedumondexv", "lavelan09"); // Connexion à MySQL
mysql_select_db("rencontresbdcdm2"); // Sélection de la base onepip
?> 
  <?php
$sql = 'SELECT count(*) FROM rencontresbdcdm2';
	
	
?>
 <?php
 
mysql_close(); // Déconnexion de MySQL
?>
	
</body>
</html>
