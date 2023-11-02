

<?php
$titre = $_POST['champion'];
?>
<head>
<meta name="description"
content=" <?php// echo $titre;?> : Présentation du club (Bureau; Siège; Stade; Contacts); les grandes du dates du club; les palmarès; les résultats du clubs au cours des dernières saisons et un album photos dédié au club. ">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="All">
<title> <?php echo $titre;?>  </title>
</head>

<?php $champion=$titre;?> 




<body text="#000000" link="#000000" vlink="#000000" alink="#000000" bgcolor="#000000">
<div align="center">
  <table width="1100" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="1100" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td height="151"> 
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
      <td bgcolor="#FFFFFF" height="505" valign="top" width="650"> 
        <div align="center"> 
          <p><font color="#000000"> 
            <?php


$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);

?>
 
	



		   
<?php  	
 //if ($code >0 ) 
	//{
 	 include("01clubs.php");
	//}
	//else
	//{
	//include("02clubs.php");
	//}
 ?>
            </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#006699" width="225" valign="top"> 
        <p> 
     <?php
    
    include("00droite.php");
    ?>
        </p>
      </td>
    </tr>
  </table>
  <table width="1100" bordercolor="#FFFFFF" align="center">
    <tr valign="top" align="center"> 
      <td bgcolor="#006699" bordercolor="#006699" valign="middle" align="center" height="15"> 
        <b><font color="#FFFFFF" size="+2"> 
     
        </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center"><?php echo $id;?><?php// echo $siglecomite;?></p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <div align="center"> 
          <p><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
          </div>
         
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php
    // On inclut le haut de la page
    include("bas2.php");
    ?>
          </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
 