<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="900" border="1" cellspacing="0" cellpadding="0" height="21" align="center">
  <tr bordercolor="#000000"> 
    <td height="32" width="112">&nbsp; 
      <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip


$champion = $_POST['champion']; //
// On fait une boucle pour lister tout ce que contient la table :

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

echo "<br/>";
?>
<?php
$reponse = mysql_query("SELECT * FROM bdclubs WHERE code='$chaine'or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requête SQL
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>

<?php 
$coordonnees = array (
        "$chaine" => $donnees['siglecomite']);

foreach($coordonnees as $cle => $element)
{
     '' . $cle . ' vaut ' . $element . '<br />';
}
?>
<?php $siglecomite=$element;?>


<?php echo $siglecomite;?>


<?php
 }

mysql_close(); // Déconnexion de MySQL
?>
    </td>
    <td height="32" width="120"> 
      <div align="center"> </div>
    </td>
    <td height="32" width="127">&nbsp; <?php
if ($siglecomite=='(AB)')
{
$forum='http://forumab.forums-actifs.net/index.htm';

}
elseif ($siglecomite=='(AU)')
{

$forum='http://forumau.forums-actifs.net/index.htm';

}
elseif ($siglecomite=='(AL)')
{

$forum='http://forumal.forums-actifs.net/index.htm';

}

else
{
echo $siglecomite;

}
?></td>
    <td height="32" width="230"> 
      <div align="center"> <?php

echo "<a href=$forum> Forum</a> ";
?></div>
    </td>
    <td height="32" width="160">&nbsp;</td>
    <td height="32" width="128">&nbsp;</td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
