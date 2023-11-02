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
<?php 

$champion = $_GET['champion']; 
$chaine = $champion; 
$chaine = strtoupper(substr($chaine, 0, 1)).strtolower(substr($chaine,1));
echo  "chaine : ".''.$chaine;

if ($chaine>0)

	{
echo " numerique";
	require ("connect1/connection1.php") ;
	$requete =$bdd->query( "SELECT  id, type, code
				FROM bdclubs  
				WHERE  id='$chaine' OR code='$chaine'  OR idffr='$chaine'  ");  
					 	//$reponse=mysql_query ($requete);
							While ($row =$requete->fetch() )
									{ 
									//$sigle=$row[0];
									//$comite=$row[1];
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];
									//	$champion=$row[3];
									// 	$sigleComite=$row[4];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";
	//echo $comite;
	//echo $sigle;
	//echo $champion;
	//echo $sigleComite;
	}
	else
	{
	echo "non numerique";
	require ("connect1/connection1.php") ;
	$requete =$bdd->query( "SELECT  id, type, code,siglecomite
				FROM bdclubs  
				WHERE  nom_1='$chaine' OR nom_2='$chaine' OR sigle='$chaine' OR nom_3='$chaine' OR nom_4='$chaine' OR idffr='$chaine' OR id='$chaine'");  
					 		$reponse=mysql_query ($requete);
							While ($row = $requete->fetch() )
									{ 
									//$sigle=$row[0];
									//$comite=$row[1];
									  	$code=$row[0];
										$id=$row[0];
										$ligue=$row[1];
									//	$champion=$row[3];
									 	$sigleComite=$row[3];	 
									}	
	echo $code;
	echo "<br />";
	echo $ligue;
	echo "FIN";
	//echo $comite;
	//echo $sigle;
	//echo $champion;
	//echo $sigleComite;
	
	}
	
	
	
	
?>


<?php  	
 if ($code > 0 ) 
	{
 	include("00clubs.php");
	}
else
	{
	include("02clubs.php");
	}
 ?>
			 
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
 
	   <?php echo $sigleComite; ?>
 
      
        </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center">
          <?php echo $id; echo "test".$sigleComite;?>
        </p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <div align="center"> 
          <p><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
          <br>
		  <?php $sigleComite ="(MPY)";$id =29076;?>
          <iframe //src="/00messagerie/<?php echo $sigleComite;?>/?id=1&album=<?php echo $id;?>" width="1000" height="400" scrolling="no" frameborder="0"></iframe></div>
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php include("bas2.php");   ?>
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