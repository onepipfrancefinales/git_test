 <?php $annee=$_GET['variable_1'];?>
<head>

<link rel="stylesheet" type="text/css" href="../style2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comitès territoriaux, Tous les championnats de rugby, fèdèrale 2, fèdèrale 3, fèdèrale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,
championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re Sèrie</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>


<body bgcolor="#EAECEB">
<?php// $annee=2017;?>
<?php $comite="mpy";?>
<?php $id=9180;?>

<?php $bdcomite="php".''.$comite;?>
<?php $phpcomite="php".''.$comite;?>
<?php $bdcomiteAnnee= ($bdcomite.''."_pf".''.$annee);  ?>
<?php $bdcomiteClubs= ($bdcomite.''."_clubs");  ?>
<?php $phpcomite_clubs=$bdcomiteClubs;  ?>
<?php $phpcomite_annee=$bdcomiteAnnee;  ?>

<p>&nbsp;</p>
<div id="Layer1" style="position:absolute; width:381px; height:65px; z-index:14; left: 1010px; top: 1px"><a href="http://forumda.forumsactifs.net/index.htm" target="_blank"><font color="#000000"> 
  <?php
    // On inclut le haut de la page
    include("../../pub2.php");
    ?>
  </font></a></div>
<p><br>
</p>
<p><br>
</p>
<div id="Layer7" style="position:absolute; width:1000px; height:88px; z-index:13; left: -2px; top: 70px"> 
  <table width="100%" border="0" height="30">
    <tr valign="top" align="center"> 
      <td bgcolor="#EAECEB" height="29" align="left" width="375" valign="middle"> 
        <p align="center"> 
          <?php
    // On inclut le haut de la page
    
	include("../../pub7.php"); ?>
        </p>
      </td>
      <td valign="middle" bgcolor="#EAECEB" height="29" align="left">
        <div align="center"><font size="5"><b><font size="5"><b><font size="5"><b><font size="5"><b><font color="#FF0000" size="2"> 
          <?php $anneemoins = $annee-1;?>
          <?php $anneeplus = $annee+1;?>
          </font></b></font></b><font color="#000000" size="2"><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservepromotion.php?variable_1=<?php echo $anneemoins;?>" target="_top"><font size="6" color="#FF0000">&lt;&lt;</font></a></font></font></b></font><font color="#000000" size="2"><font size="5" color="#EAECEB">nnnne</font><font size="5"> 
          </font></font></b><a href="http://francefinalesrugby.franceserv.com/phasesfinalesterr/mpy/pagereservepromotion.php?variable_1=<?php echo $anneeplus;?>"target="_top"><font color="#FF0000" size="6"><b>&gt;&gt;</b></font></a></font></div>
        </td>
      <td width="375" bgcolor="#EAECEB" height="29" align="left" valign="middle"> 
        <div align="center">
          <?php
    // On inclut le haut de la page
    
	include("../../pub8.php"); ?>
        </div>
      </td>
    </tr>
    <tr valign="top" align="center"> 
      <td colspan="3" bgcolor="#006699" height="31"><font size="5"><b><font color="#FFCC00"> 
        </font><font size="5"><b><font color="#FFCC00">
        <? echo "Championnat des Pyrénées $annee : Reserve Promotion Honneur";?>
        </font></b></font></b></font></td>
    </tr>
  </table>
</div>
<br>
<br>
<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td height="17" bgcolor="#FFCC66" colspan="12"> 
      <div align="center"><i><b>Réserve Promotion Réserve Promotion 
        Réserve Promotion Réserve Promotion Réserve Promotion 
        Réserve Promotion Réserve Promotion </b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="13"> 
      <div id="titre2" >Barrages</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Quarts de finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="160" align="left" height="13"> 
      <div id="titre2" >Demi finale</div>
    </td>
    <td width="30" align="left" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div id="titre2" >Finale</div>
    </td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="26"> 
      <?php require ("../fonctions_phases_finalesMPY.php"); ?>
    </td>
    <td width="30" height="26"> </td>
    <td width="32" height="26">&nbsp;</td>
    <td width="160" height="26">&nbsp; </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
    <td width="160" align="left" height="26">&nbsp; </td>
    <td width="30" height="26">&nbsp;</td>
    <td width="22" height="26">&nbsp;</td>
    <td width="160" height="26">&nbsp;</td>
    <td width="30" height="26">&nbsp;</td>
    <td width="21" height="26">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php
	 echo $barrage;
 
 ?>
      </strong></i></b></font><font color="#FFFFFF" face="Geneva, Arial, Helvetica, san-serif"size="2"><b> 
      </b></font> </td>
    <td width="30" height="18"> </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $quart1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php echo $nom8001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php  echo $A8001;?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $nom4001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="15"> 
      <div id="barrage" > 
        <?php	 echo $nom8002; ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="barrage" > 
        <?php echo $A8002;  ?>
      </div>
    </td>
    <td width="32" height="15">&nbsp;</td>
    <td width="160" height="15"> 
      <div id="quarts" > 
        <?php echo $nom4002; ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div id="quarts" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="21" height="15">&nbsp;</td>
    <td width="160" align="left" height="15"> <font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $demi1; ?>
      </strong></i></b></font> </td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $nom2001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php	 echo $A2001; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $quart2; ?>
      </strong></i></b></font></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $nom2002; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="24"> 
      <div id="barrage" > 
        <?php echo $nom8003; ?>
      </div>
    </td>
    <td width="30" height="24"> 
      <div id="barrage" > 
        <?php echo $A8003;  ?>
      </div>
    </td>
    <td width="32" height="24">&nbsp;</td>
    <td width="160" height="24"> 
      <div id="quarts" > 
        <?php echo $nom4003;?>
      </div>
    </td>
    <td width="30" height="24"> 
      <div id="quarts" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="21" height="24">&nbsp;</td>
    <td width="160" align="left" height="24">&nbsp;</td>
    <td width="30" height="24">&nbsp;</td>
    <td width="22" height="24">&nbsp;</td>
    <td colspan="3" height="24"><font size="2" face="Arial, Helvetica, sans-serif"><b><i> 
      <strong> 
      <?php	 echo $finale; ?>
      </strong></i></b></font></td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php echo $nom8004; ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php echo $A8004;  ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php echo $nom4004;?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php 	echo $nom1001; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> </td>
    <td width="30" height="11"> </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="22" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div id="quarts" > 
        <?php 

	echo $nom1002;
  ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="quarts" > 
        <?php

 
	 echo $A1002;
 
 ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td colspan="4" rowspan="4"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6">
        <?php 	if ($A1001+$A1002==0) echo "-"; else echo $nom1000; ?>
        </font></b></font></b></font></div>
      <div align="center"></div>
    </td>
  </tr>
  <tr valign="top"> 
    <td width="160" height="6"></td>
    <td width="30" height="6"> </td>
    <td width="32" height="6">&nbsp; </td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $quart3; ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php

	 echo $nom8005;
 
 ?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php 
		echo $A8005;  
       
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php
	 echo $nom4005;
 
 ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 
		echo $A4005;  
       
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="20"> 
      <div id="barrage" > 
        <?php

	 echo $nom8006;
 
 ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="barrage" > 
        <?php 
		echo $A8006;  
        
        ?>
      </div>
    </td>
    <td width="32" height="20">&nbsp;</td>
    <td width="160" height="20"> 
      <div id="quarts" > 
        <?php

 
	 echo $nom4006;
 
 ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div id="quarts" > 
        <?php 
		echo $A4006;  
      
        ?>
      </div>
    </td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php	 echo $demi2; ?>
      </strong></i></b><strong> </strong></font></td>
    <td width="30" height="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $nom2003; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php

 
	echo $A2003;

 ?>
      </div>
    </td>
    <td rowspan="5" colspan="4"> 
      <div align="center"> 
        <?php 

	
	//echo "<img src=\"$logo1000\">";
	
	
	

  ?>
      </div>
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="160"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $quart4; ?>
      </strong></i></b></font> </strong></td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left"> 
      <div id="quarts" > 
        <?php echo $nom2004; ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php

 
	 echo $A2004;
 
 ?>
      </div>
    </td>
  </tr>
  <tr> 
    <td width="160"> 
      <div id="barrage" > 
        <?php

	 echo $nom8007;
 
 ?>
      </div>
    </td>
    <td width="30"> 
      <div id="barrage" > 
        <?php 
		
		echo $A8007;  
       
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php
	 echo $nom4007;
 
 ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 
		echo $A4007;  
        
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" height="11"> 
      <div id="barrage" > 
        <?php

	 echo $nom8008;
 
 ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div id="barrage" > 
        <?php 
		echo $A8008;  
        
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="160"> 
      <div id="quarts" > 
        <?php

 	
       
	 echo $nom4008;
 
 ?>
      </div>
    </td>
    <td width="30"> 
      <div id="quarts" > 
        <?php 
		echo $A4008;  
        
        ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160"> </td>
    <td width="30"> </td>
    <td width="32">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="12">____________________________________________________________________________________________________________________________</td>
  </tr>
  <tr> 
    <td colspan="12" height="22"> 
      <div align="center"> 
        <?php
    // On inclut le haut de la page
    
	include("../../pub1.php"); ?>
      </div>
    </td>
  </tr>
</table>
