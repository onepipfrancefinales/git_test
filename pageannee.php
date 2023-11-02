<?php
$annee = $_POST['saison'];

?>
<html>
<head>
<meta name="description"
content="Tous les Champions de France <?php echo $annee; ?> de rugby à XV. Compétitions pro; compétitions fédérales; compétitions territoriales; Compétitions féminines; compétitions juniors et cadets">
<meta name="keywords"
content="Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">


<title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
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


<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
<div align="center">
  <table width="1100" height="639" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="148"> <img src="images/stade3.jpg" width="1100" height="150"></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
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
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p>&nbsp;</p>
          <p>
          <font color="#000000" link="#000000"> 
       <?  $annee = $_POST['saison'];?>
		 
         
<h2><p> <strong> Champions de France  <?php	  echo  $annee;?></strong></p></h2>
          </font> 
          <table width="119" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td bgcolor="#CCCCCC"> 
                <div align="center"><font color="#000000" link="#000000">
                  <?php
		  echo "<a href=pagefinaleannee.php?variable_1=$annee>Voir les finales</a> ";
		  ?>
                  </font></div>
              </td>
            </tr>
          </table>
          <p><font color="#000000" link="#000000"> 
            <?php
    // On inclut le haut de la page
    include("annee.php");
    ?>
            </font></p>
          <p>&nbsp; </p>
          <p><font color="#000000" link="#000000"> </font></p>
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
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("comitebas.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td>
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("pub1.php");
    ?>
                  </font></div>
              </td>
            </tr>
            <tr> 
              <td> 
                <div align="center"><font color="#000000"> 
                  <?php
    // On inclut le haut de la page
    include("bas.php");
    ?>
                  </font></div>
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
