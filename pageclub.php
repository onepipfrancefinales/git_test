<html>
<head>
<meta name="description"
content="France Finales Rugby: Histoire, clubs, Top 14, Pro D2, Clubs de F�d�rale, championnats territoriaux, r�sultats, la Coupe du Monde de rugby, jeux, les liens vers les sites officiels, news, interviews, French teams, competitions, history, organisations and institutions, Rugby world Cup in Toulouse, games and links to other official sites.">
<meta name="keywords"
content="comit� Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Fran�aise,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Tous les Champions de FRANCE</title>

<body bgcolor="#FFFFFF" link="#FFFFFF">
<div id="feminine3" align="center"></div>
<div align="center">
  <table width="820" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="1100" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td> 
              <div align="center"><font color="#FFFFFF"> 
                <?php
    // On inclut le haut de la page
    include("page_image_al.php");
    ?>
                </font></div>
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
      <td bgcolor="#FFFFFF" height="505" valign="top" width="500"> 
        <div align="center"> 
          <p> <font color="#000000">
            <?php
$champion = $_POST['champion'];
//echo $champion;
//echo $chaine;
//echo $donnees['code'];
 
 
require ("connection.php") ;
 ?>
            <?php
$reponse = mysql_query("SELECT nom_1, code FROM bdclubs WHERE   code='$chaine' or nom_1='$chaine' or nom_2='$chaine' or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine' "); // Requ�te SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
            <?php $XX = $donnees['nom_1'] ;?>
            <?php //echo $XX;?>
            <?php //echo $XX;?>
            <?php		
 }

mysql_close(); // D�connexion de MySQL
?>
            <?php  
  
	
   if ($champion = $XX ) 
	{
	include("01clubs.php");
	}
	else
	{
	include("02clubs.php");
	}
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
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"> 
                  <?php
    // On inclut le haut de la page
    include("bas.php");
    ?>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </th>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
