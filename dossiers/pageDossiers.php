<?php 
session_start ();
if (isset($_GET['comite'])) $comite = $_GET['comite'];
//echo "comite : ".$comite;
?>
 
      
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

<link type="text/css" rel="stylesheet" href="../ligneNoir.css"/>
 <link type="text/css" rel="stylesheet" href="../formulaireDG.css">
 <link type="text/css" rel="stylesheet" href="../resultats/resultat.css">
 <link type="text/css" rel="stylesheet" href="/Phpleague/phpab/league.css">
 <link type="text/css" rel="stylesheet" href="../ligne1.css">
<title>Page pronostics  </title>
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

<body>
  <table width="1250" height="639" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
    
	
	  <td colspan="3" height="74"><font color="#FFFFFF">
        <?php    include("../images/page_image_al.php"); ?>
        </font> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php    include("../01ligne.php");   ?>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
        <div align="center"> 
          <p align="center"> 
            <?php  include("../01gauche.php");    ?>
            <b><font size="5" color="#000000"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#ffffff" text="#ffffff" " height="505" valign="top" width="800"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php    include("accueil.php");   ?>
            </font> </p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php    include("../00droite.php");   ?>
        </p>
      </td>
    </tr>
 </table>
<?php include("../resultats/piedDePage.php"); ?>
   <footer> 
    <div id="9129-5">
     <script src="//ads.themoneytizer.com/s/gen.js?type=5"></script>
     <script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&amp;formatId=5"></script>
    </div>
   </footer>
 </body>
</html>
