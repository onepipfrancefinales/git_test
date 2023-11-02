<?php 
if (isset($_GET['sommaire'])) $sommaire = $_GET['sommaire'];
if (isset($_GET['lettre'])) $lettre = $_GET['lettre'];
?>
<html>
<head>
<meta name="description"content="Tout sur le comité territorial <?php echo $titre;?> : Présentation du comité (Bureau; adresse; contact mel; contact site officiel du comité); les effectifs; les palmarès nationaux; les palmarés territoriaux et l'ensemble des clubs composant le comité avec un lien pour accéder aux différents clubs.">
<meta name="keywords"content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>Dictionnaire du rugby    </title>
<link type="text/css" rel="stylesheet" href="../../ligne1.css"/>
<link type="text/css" rel="stylesheet" href="../../lienNoir.css"/>
<link type="text/css" rel="stylesheet" href="../../formulaireDG.css">
<link type="text/css" rel="stylesheet" href="../dossiers.css">
<link type="text/css" rel="stylesheet" href="../menu_smart2.css.css">
</head>

<body>
  <table width="1100" height="639" align="center">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
	  <td colspan="3" height="74"><font color="#FFFFFF">
        <?php include("../../images/page_image_al.php");  ?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="26" colspan="3"> 
        <?php include("../../01ligne.php"); ?>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#006699" align="center" valign="top"> 
            <?php include("../../01gauche.php"); ?>
            <b><font size="5" color="#000000"> </font></b>  
      </td>
      <td bgcolor="#ffffff" text="#000000"  height="505" valign="top" width="650" align="center"> 
	  <p><font color="#000000" size="7"><b><i><font face="Times New Roman, Times, serif"><br>
            Mots et beaux mots</font></i></b></font>. <br>
            <br>
            </p>    
<?php require 'sommaire.php'; 
	if ($sommaire == 1)
	{
	echo "<br/>";
    include "tabDesLettres.php";
	include "appelLettre.php";
	}
	elseif ($sommaire == 2)
	include("phrases_celebres.htm");
	elseif ($sommaire == 3)
	include "citation.htm";
	elseif ($sommaire == 4)
	include "expr_mediatiques.htm";
	?>
          
      
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
          <?php include("../../00droite.php"); ?>
        </p>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <th bgcolor="#FFFFFF" colspan="3" valign="top" height="71"> 
          <table width="1250" border="1" bordercolor="#006699">
            <tr> 
              <td> 
                <?php  include("../../comitebas.php"); ?>
              </td>
            </tr>
            <tr> 
              <td> 
			   <?php include("../../pub/pub_displayHorizontal.php");?>  
              </td>
            </tr>
            <tr> 
              <td> 
               <?php include("../../bas.php"); ?>
              </td>
            </tr>
          </table>
      </th>
    </tr>
  </table>
 </body>
</html>
