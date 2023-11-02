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

<body text="#000000" link="#000000" alink="#000000" vlink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
    
	
	  <td colspan="3" height="74"><font color="#FFFFFF">
        <?php    include("../images/page_image_al.php");
    ?>
        </font> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php    include("../01ligne.php");   ?>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php  include("../01gauche.php");    ?>
            <b><font size="5" color="#000000"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#ffffff" " height="505" valign="top" width="550"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php    include("dirigeant.php");   ?>
            </font> </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php    include("../00droite.php");   ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="30"> 
        <div align="center"> 
          <table width="100%" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php    include("../comitebas.php");    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000">
                  <?php    include("../pub/pub1.php");   ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php include("../bas.php");   ?>
                  </font></div>
              </td>
            </tr>
          </table>
          <font color="#000000"> </font></div>
      </th>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>

</body>

</html>
