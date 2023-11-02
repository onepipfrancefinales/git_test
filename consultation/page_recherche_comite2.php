<html>
<head>
<title>Tous les clubs du comit&eacute; <?php echo $sigle;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description"
content=" <?php echo $titre;?> : Présentation du club (Bureau; Siège; Stade; Contacts); les grandes du dates du club; les palmarès; les résultats du clubs au cours des dernières saisons et un album photos dédié au club. ">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">

 <link type="text/css" rel="stylesheet" href="../ligne1.css">

</head>


<?php 
require ("../connect1/connection1.php") ;


//if (isset ($chaine)) $chaine=$chaine; else $chaine ="";
$chaine= $_GET['variable_1'];

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); 
While ($donnees = $reponse->fetch() )
{ 

$coordonnees = array (
        "$chaine" => $donnees['nom_1']);

foreach($coordonnees as $cle => $element)
{
     '' . $cle . ' vaut ' . $element . '<br />';
}



$coordonnees = array (
        "$chaine" => $donnees['code']);

foreach($coordonnees as $cle1 => $element1)
{
     '' . $cle1 . ' vaut ' . $element1 . '<br />';
}


 $id= $element1;

 }



require ("../connect1/connection1.php") ;

$reponse = $bdd->query("SELECT * 
						FROM bdclubs 
						WHERE nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requête SQL 
While ($donnees = $reponse->fetch() )
{ 
 $titre = $donnees['sigle'];
 }
?>







<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21215219-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<body text="#000000" link="#000000" vlink="#000000" alink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1000" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="1250" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td height="151"> 
              <div align="center"><font color="#FFFFFF"> 
                <?php  include("../images/page_image_al.php");  ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
        <?php include("../01ligne.php");  ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php include("../01gauche.php"); ?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php include("logoclubs2.php");  ?>
            </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php include("../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td colspan="3" height="81" align="center" valign="top"> 
        <table width="100%" border="1" bordercolor="#006699">
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php  include("../comitebas.php");  ?>
                </font></div>
            </td>
          </tr>
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php include("../pub/pub1.php");  ?>
                </font></div>
            </td>
          </tr>
          <tr> 
            <td> 
              <div align="center"><font color="#000000"> 
                <?php
    include("../bas.php");
    ?>
                </font></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
 </html>