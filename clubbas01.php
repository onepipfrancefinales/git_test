<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="550" cellspacing="0" cellpadding="0" height="21" align="center" bordercolor="#FFFFFF">
  <tr bordercolor="#000000"> 
    <td height="22" valign="top"> 
      <div align="center"><b><font color="#FFFFFF" size="+2"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france3", "lavelan309"); // Connexion à MySQL
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
        <?php
if ($siglecomite=='(AB)')
{
$forum='http://forumab.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(AL)')
{
$forum='http://forumal.forumsactifs.net/index.htm target=_blank';
}

elseif ($siglecomite=='(AP)')
{
$forum='http://forumap.forumsactifs.net/index.htm target=_blank';
}


elseif ($siglecomite=='(AU)')
{
$forum='http://forumau.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(BE)')
{
$forum='http://forumbe.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(BG)')
{
$forum='http://forumbg.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(BR)')
{
$forum='http://forumbr.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(CE)')
{
$forum='http://forumce.forums-actifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(C)')
{
$forum='http://forumcaz.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(CBL)')
{
$forum='http://forumcbl.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(CA)')
{
$forum='http://forumca.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(CAZ)')
{
$forum='http://forumcaz.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(DA)')
{
$forum='http://forumda.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(FL)')
{
$forum='http://forumfl.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(FC)')
{
$forum='http://forumfc.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(IDF)')
{
$forum='http://forumidf.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(LD)')
{
$forum='http://forumld.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(LM)')
{
$forum='http://forumlm.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(LY)')
{
$forum='http://forumly.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(MPY)')
{
$forum='http://onelolo.vosforums.com target=_blank';
}
elseif ($siglecomite=='(N)')
{
$forum='http://forumn.forumsactifs.com/index.htm target=_blank';
}
elseif ($siglecomite=='(PL)')
{
$forum='http://forumpl.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(PA)')
{
$forum='http://forumpa.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(PCH)')
{
$forum='http://forumpch.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(PR)')
{
$forum='http://forumpr.forumsactifs.net/index.htm target=_blank';
}
elseif ($siglecomite=='(R)')
{
$forum='http://forumr.forumsactifs.net/index.htm target=_blank';

}
else
{
echo $siglecomite;
}
?>
        <?php

echo "<a href=$forum> Forum du comité</a> ";
?>
        <?php echo $siglecomite;?>
        <?php
 }

mysql_close(); // Déconnexion de MySQL
?>
        </font></b></div>
    </td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
