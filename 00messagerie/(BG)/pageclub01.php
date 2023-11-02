<html>
<head>
<meta name="description"
content="France Finales Rugby: Histoire, clubs, Top 14, Pro D2, Clubs de Fédérale, championnats territoriaux, résultats, la Coupe du Monde de rugby, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Tous les Champions de FRANCE</title>


<body bgcolor="#000000">
<div align="center">
  <table width="1000" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="820" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td height="151"> 
              <div align="left"><img src="images/stade3.jpg" width="1000" height="150"></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
        <?php
    // On inclut le haut de la page
    include("01ligne.php");
    ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("01gauche.php");
    ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="550"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php
    // On inclut le haut de la page
    include("01clubs.php");
    ?>
            </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("00droite.php");
    ?>
        </p>
      </td>
    </tr>
  </table>
  <table width="1400" bordercolor="#FFFFFF" align="center">
    <tr valign="top" align="center"> 
      <td bgcolor="#006699" bordercolor="#006699" valign="middle" align="center" height="15"> 
        <b><font color="#FFFFFF" size="+2"> 
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
        </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center"><?php echo $id;?></p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <div align="center"> 
          <p><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
          <br>
          <iframe src="http://francefinalesrugby.franceserv.com/00messagerie/(MPY)/?id=1&album=<?php echo $id;?>" width="1300" height="1200" scrolling="no" frameborder="0"></iframe></div>
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php
    // On inclut le haut de la page
    include("bas.php");
    ?>
          </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
