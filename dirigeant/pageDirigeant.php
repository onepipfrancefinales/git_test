<?php// $sigle = $_GET['variable_1'];?>
 
      
<html>
<head>
<meta name="description"
content="Tout sur le comité territorial <?php echo $titre;?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmarés territoriaux et l'ensemble des clubs composant le comité avec un lien pour accéder aux différents clubs.">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<link type="text/css" rel="stylesheet" href="ligneNoir.css"/>
<link type="text/css" rel="stylesheet" href="../formulaireDG.css">
<link type="text/css" rel="stylesheet" href="../ligne1.css"/>
<title>Comité <?php echo $titre;?>   </title>
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
<body >
<div align="center">
  <table width="1100"  align="center">
    
	<tr > 
	  <td colspan="3" height="74"><?php include("../images/page_image_al.php");  ?></td>
    </tr>
    
	<tr > 
      <td height="26" colspan="3"><?php include("../01ligne.php");   ?></td>
    </tr>

	<tr bgcolor="#ffffff" valign="middle">
      <td colspan="3" height="26"><?php include("../pub/pub_displayHorizontal.php"); ?></td>
    </tr>
	
	<tr valign="middle" align="center" > 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <p align="center"><?php  include("../01gauche.php"); ?></p>
      </td>
      
	  <td bgcolor="#ffffff" text="#ffffff"  height="505" valign="top" width="550"> 
        <div align="center"> 
          <p><font color="#000000"><?php    include("dirigeant.php");   ?>
		 </div></td>
			
      <td height="505" bgcolor="#006699" width="225" valign="top"><?php include("../00droite.php"); ?></td>
    </tr>
    <tr> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30" align="center"> 
          <table width="100%" border="1" >
            <tr> 
              <td align="center"><?php    include("../comitebas.php");?></td>
            </tr>
            <tr> 
              <td align="center"><?php    include("../pub/pub1.php");?></td>
            </tr>
            <tr> 
              <td align="center"> <?php include("../bas.php");   ?></td>
            </tr>
          </table>
      </th>
    </tr>
  </table>
  </div>
 <footer> 
   <div id="9129-5">
    <script src="//ads.themoneytizer.com/s/gen.js?type=5">
    </script>
    <script
    src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5">
    </script>
   </div>
  </footer> 
 </body>
</html>
