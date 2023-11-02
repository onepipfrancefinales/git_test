<!DOCTYPE html>
<html>
	<head>
<meta name="description"
content=" <?php echo $titre;?> : Présentation du club (Bureau; Siège; Stade; Contacts); les grandes du dates du club; les palmarès; les résultats du clubs au cours des dernières saisons et un album photos dédié au club..">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="ligne1.css"/>
<link type="text/css" rel="stylesheet" href="pgclub00.css"/>
<title> <?php echo $titre;?>  </title>

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

	</head>



<?php require ("connection.php") ; ?>        
<?php $champion = $_GET['champion']; 

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

?>
<?php
$reponse = mysql_query("SELECT nom_1 FROM bdclubs 
						WHERE code='$chaine'or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); 
							While ($donnees = mysql_fetch_array($reponse) )
								{ 
								$coordonnees = array ("$chaine" => $donnees['nom_1']);
								
									foreach($coordonnees as $cle => $element)
											{
											 '' . $cle . ' vaut ' . $element . '<br />';
											}
								
								$coordonnees = array ( "$chaine" => $donnees['code']);

									foreach($coordonnees as $cle1 => $element1)
											{
											'' . $cle1 . ' vaut ' . $element1 . '<br />';
}


 $id= $element1;
  
        




 }




<?php
$reponse = mysql_query("SELECT * 
						FROM bdclubs 
						WHERE code='$chaine' or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
 $titre = $donnees['sigle'];




 }

mysql_close(); // Déconnexion de MySQL
?>




<body bgcolor="#000000" >

<div align="center">
  <table width="1100" >
    <tr > 
      <td colspan="3" >
        <?php   include("page_image_al.php");    ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3"> 
        <?php    include("01ligne.php");    ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="505" bgcolor="#006699" align="center" valign="top" width="225"> 
            <?php    include("01gauche.php");    ?>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650">        
            <?php    include("00clubs.php");   ?> 
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
          <?php    include("00droite.php");  ?> 
      </td>
    </tr>
  </table>
  <table width="1100" bordercolor="#FFFFFF" align="center">
    <tr valign="top" align="center"> 
      <td bgcolor="#006699" bordercolor="#006699" valign="middle" align="center" height="15"> 
        <b><font color="#FFFFFF" size="+2"> 
       <?php require ("connection.php") ; ?>
	   
	    <?php



$champion = $_GET['champion']; 

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

echo "<br/>";
?>
        <?php
$reponse = mysql_query("SELECT * 
						FROM bdclubs 
						WHERE code='$chaine'or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); 
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
 }

mysql_close(); // Déconnexion de MySQL

echo $siglecomite;
?>
        



      
        </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center">
          <?php echo $id;?>
        </p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <div align="center"> 
          <p><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
          <br>
          <iframe src="http://francefinalesrugby.franceserv.com/00messagerie/<?php echo $siglecomite;?>/?id=1&album=<?php echo $id;?>" width="1000" height="400" scrolling="no" frameborder="0"></iframe></div>
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php    include("bas2.php");   ?>
          </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
	</body>
</html>