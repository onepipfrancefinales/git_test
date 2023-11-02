<?php $annee = $_POST['saison'];
//echo $annee;
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
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Equipe Onepip">
		<meta name="robots" content="All">
		<title>Tous les Champions de FRANCE <?php echo $annee; ?></title>
		<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
		<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
		
		
<link type="text/css" rel="stylesheet" href="palmares.css"/> 
	</head>
<body >
<div>
  <table width="1250" height="400" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="148"> <?php  include("../../images/page_image_al.php");  ?> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000">
      <td height="26" colspan="3"><font color="#FFFFFF"> <?php    include("../../01ligne.php");   ?> </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#FFFFFF"> 
      <td height="26" colspan="3"> <?php    include("../../pub/pub1.php");  ?> </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="260" bgcolor="#006699" align="center" valign="top"> 
        <p> <?php    include("../../01gauche.php");  ?></p>     
      </td>
      <td bgcolor="#FFFFFF" height="260" valign="top" width="650"> <br />
        <br />
		<br>
        <div id="titre"> Champions de France <?php  echo  $annee;?></div>
           <br>
          <br>
        <table width="236" border="0" cellspacing="1" cellpadding="0" align="center">
          <tr> 
           <td > <div id="lienfinale" > <?php  echo "<a href=pagefinaleannee.php?variable_1=$annee>Consulter les finales (oppositions et scores)</a> "; ?></div> </td>
          </tr>
        </table>
		  <br /> <br /> <br />
          	<?php include("annee.php");  ?> </td>
      <td height="260" bgcolor="#006699" width="225" valign="top"> <?php include("../../00droite.php");    ?>
	  </td>
    </tr>
 </table>
<tr > 
      <th bgcolor="#FFFFFF" colspan="3"  > 
         <table width=100% border="1" bordercolor="#006699" >
            <tr> 
              <td>                
                <?php  include("../../comitebas.php");?>               
              </td>
            </tr>
            <tr> 
              <td bgcolor="#FFFFFF"> 
                <?php  include("../../pub/pub1.php");?>
              </td>
            </tr>
            <tr> 
              <td bgcolor="#FFFFFF"> 
                  <?php  include("../../bas.php");?>
              </td>
            </tr>
         </table>
  </table>

		<footer>
			<div id="9129-5"><script src="//ads.themoneytizer.com/s/gen.js?type=5">
			</script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=9129&formatId=5" >
			</script></div>
		</footer>
	</body>
</html>
