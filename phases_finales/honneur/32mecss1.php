<?php
$variable_1 = $_GET['variable_1']; 
$id = 170; 
?><head>
<link rel="stylesheet" type="text/css" href="../2.css">
<meta name="description"
content="tous les champions de france de rugby, ffr,FFR, presentation de tous les clubs de rugby francais, Champions des differents comit�s territoriaux, Tous les championnats de rugby, f�d�rale 2, f�d�rale 3, f�d�rale 1, top 14.">
<meta name="keywords"
content="Brennus,Comite Midi Pyrenees de Rugby,ffr,FFR,Comite territoriaux de rugby,Stade toulousain,Bourgogne,FanceFinalesRugby,Rugby,championnat de france de rugby,Fran�aise,honneur,promotion honneur,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">
<title>1re S�rie</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
</head>
<?php


require ("../fonctions_phases_finales.php");


?>

<body bgcolor="#EAECEB">
<p>&nbsp;</p>
<p><br>
  <br>
</p>
<table width="1740" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td colspan="18" height="13" bgcolor="#FFCC66"><i><b>Honneur Honneur Honneur 
      Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur 
      Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur Honneur 
      Honneur Honneur Honneur</b></i></td>
  </tr>
  <tr> 
    <td width="359" height="13">&nbsp;</td>
    <td width="61" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13">&nbsp;</td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="13"> 
      <div id="coin5" >32me de finale</div>
    </td>
    <td width="61" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin5" >16me de finale</div>
    </td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin5" >8me de finale</div>
    </td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13"> 
      <div id="coin5" >Quarts de finale</div>
    </td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13"> 
      <div id="coin5" >Demi finale</div>
    </td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin5" >Finale</div>
    </td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="13">&nbsp;</td>
    <td width="61" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="36" height="13">&nbsp;</td>
    <td width="32" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13">&nbsp;</td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="13"> 
      <div id="coin4" > 
        <?php	echo $clubA3201; ?>
        - 
        <?php	echo $clubA3202; ?>
      </div>
    </td>
    <td width="61" height="13"> 
      <div id="coin4" > 
        <?php if ($A3201+$A3202==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3201; echo " - ";echo $A3202; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="13" valign="middle" align="center">&nbsp;</td>
    <td width="198" height="13"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1601;
	 ?>
      </div>
    </td>
    <td width="36" height="13"> 
      <div id="coin4" > 
        <?php	echo $A1601; ?>
      </div>
    </td>
    <td rowspan="4" height="38"><img src="../../images/accolade.png" width="8" height="82"> 
    </td>
    <td width="198" height="13">&nbsp;</td>
    <td width="41" height="13">&nbsp;</td>
    <td width="22" height="13">&nbsp;</td>
    <td width="201" height="13">&nbsp;</td>
    <td width="31" height="13">&nbsp;</td>
    <td width="18" height="13">&nbsp;</td>
    <td width="201" align="left" height="13">&nbsp;</td>
    <td width="23" height="13">&nbsp;</td>
    <td width="11" height="13">&nbsp;</td>
    <td width="198" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3203; ?>
        - 
        <?php	echo $clubA3204; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3203+$A3204==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3203; echo " - ";echo $A3204; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1602;
	 ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1602; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8001;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8001; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA3205; ?>
        - 
        <?php	echo $clubA3206; ?>
      </div>
    </td>
    <td width="61" height="25"> 
      <div id="coin4" > 
        <?php if ($A3205+$A3206==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3205; echo " - ";echo $A3206; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="25">&nbsp;</td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA1603;
	?>
      </div>
    </td>
    <td width="36" height="25"> 
      <div id="coin4" > 
        <?php	echo $A1603; ?>
      </div>
    </td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8002;
	 ?>
      </div>
    </td>
    <td width="41" height="25"> 
      <div id="coin4" > 
        <?php	echo $A8002; ?>
      </div>
    </td>
    <td width="201" height="25">&nbsp;</td>
    <td width="31" height="25">&nbsp;</td>
    <td width="18" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="23" height="25">&nbsp;</td>
    <td width="11" height="25">&nbsp;</td>
    <td width="198" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="7"> 
      <div id="coin4"> 
        <?php	echo $clubA3207; ?>
        - 
        <?php	echo $clubA3208; ?>
      </div>
    </td>
    <td width="61" height="7"> 
      <div id="coin4" > 
        <?php if ($A3207+$A3208==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3207; echo " - ";echo $A3208; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="7">&nbsp;</td>
    <td width="198" height="7"> 
      <div id="coin4" > 
        <?php

	echo $clubA1604;
	?>
      </div>
    </td>
    <td width="36" height="7"> 
      <div id="coin4" > 
        <?php	echo $A1604; ?>
      </div>
    </td>
    <td width="198" height="7"> </td>
    <td width="41" height="7"> </td>
    <td width="201" height="7"> 
      <div id="coin4" > 
        <?php	echo $clubA4001; ?>
      </div>
    </td>
    <td width="31" height="7"> 
      <div id="coin4" > 
        <?php	echo $A4001; ?>
      </div>
    </td>
    <td rowspan="10" height="43"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="201" align="left" height="7">&nbsp;</td>
    <td width="23" height="7">&nbsp;</td>
    <td width="11" height="7">&nbsp;</td>
    <td width="198" height="7">&nbsp;</td>
    <td width="21" height="7">&nbsp;</td>
    <td width="21" height="7">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3209; ?>
        - 
        <?php	echo $clubA3210; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3209+$A3210==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3209; echo " - ";echo $A3210; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1605;
	?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1605; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"></td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4002; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4002; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3211; ?>
        - 
        <?php	echo $clubA3212; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3211+$A3212==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3211; echo " - ";echo $A3212; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1606;
	?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1606; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8003;
	 ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8003; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3213; ?>
        - 
        <?php	echo $clubA3214; ?>
      </div>
    </td>
    <td width="61" height="11"> 
      <div id="coin5" > 
        <?php if ($A3213+$A3214==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3213; echo " - ";echo $A3214; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1607;
	 ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1607; ?>
      </div>
    </td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php
	
	echo $clubA8004;
	 ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8004; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="11" height="11">&nbsp;</td>
    <td width="198" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3215; ?>
        - 
        <?php	echo $clubA3216; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5"> 
        <?php if ($A3215+$A3216==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3215; echo " - ";echo $A3216; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php
	
	echo $clubA1608;
	 ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1608; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="coin4" > 
        <?php	echo $clubA2001; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2001; ?>
      </div>
    </td>
    <td rowspan="18"><img src="../../images/accolade.png" width="10" height="383"></td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3217; ?>
        - 
        <?php	echo $clubA3218; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3217+$A3218==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3217; echo " - ";echo $A3218; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1609; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1609; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"> 
    </td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA2002; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2002; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3219; ?>
        - 
        <?php	echo $clubA3220; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3219+$A3220==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3219; echo " - ";echo $A3220; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1610; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1610; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8005; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8005; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA3221; ?>
        - 
        <?php	echo $clubA3222; ?>
      </div>
    </td>
    <td width="61" height="25"> 
      <div id="coin4" > 
        <?php if ($A3221+$A3222==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3221; echo " - ";echo $A3222; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="25">&nbsp;</td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA1611; ?>
      </div>
    </td>
    <td width="36" height="25"> 
      <div id="coin4" > 
        <?php	echo $A1611; ?>
      </div>
    </td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA8006; ?>
      </div>
    </td>
    <td width="41" height="25"> 
      <div id="coin4" > 
        <?php	echo $A8006; ?>
      </div>
    </td>
    <td width="201" height="25">&nbsp;</td>
    <td width="31" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="23" height="25">&nbsp;</td>
    <td width="198" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4"> 
        <?php	echo $clubA3223; ?>
        - 
        <?php	echo $clubA3224; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3223+$A3224==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3223; echo " - ";echo $A3224; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1612; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1612; ?>
      </div>
    </td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4003; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4003; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3225; ?>
        - 
        <?php	echo $clubA3226; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3225+$A3226==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3225; echo " - ";echo $A3226; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1613; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1613; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"></td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4004; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4004; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3227; ?>
        - 
        <?php	echo $clubA3228; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3227+$A3228==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3227; echo " - ";echo $A3228; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1614; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1614; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8007; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8007; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3229; ?>
        - 
        <?php	echo $clubA3230; ?>
      </div>
    </td>
    <td width="61" height="11"> 
      <div id="coin5" > 
        <?php if ($A3229+$A3230==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3229; echo " - ";echo $A3230; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA1615; ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1615; ?>
      </div>
    </td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA8008; ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8008; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="18" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA1001; ?>
      </div>
    </td>
    <td width="21" height="11"> 
      <div id="coin4" > 
        <?php	echo $A1001; ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="14"> 
      <div id="coin5" > 
        <?php	echo $clubA3231; ?>
        - 
        <?php	echo $clubA3232; ?>
      </div>
    </td>
    <td width="61" height="14"> 
      <div id="coin5"> 
        <?php if ($A3231+$A3232==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3231; echo " - ";echo $A3232; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="14">&nbsp;</td>
    <td width="198" height="14"> 
      <div id="coin5" > 
        <?php	echo $clubA1616; ?>
      </div>
    </td>
    <td width="36" height="14"> 
      <div id="coin5" > 
        <?php	echo $A1616; ?>
      </div>
    </td>
    <td width="198" height="14">&nbsp;</td>
    <td width="41" height="14">&nbsp;</td>
    <td width="22" height="14">&nbsp;</td>
    <td width="201" height="14">&nbsp;</td>
    <td width="31" height="14">&nbsp;</td>
    <td width="18" height="14">&nbsp;</td>
    <td width="201" align="left" height="14">&nbsp;</td>
    <td width="23" height="14">&nbsp;</td>
    <td width="198" height="14"> 
      <div id="coin4" > 
        <?php	echo $clubA1002; ?>
      </div>
    </td>
    <td width="21" height="14"> 
      <div id="coin4" > 
        <?php	echo $A1002; ?>
      </div>
    </td>
    <td width="21" height="14">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3233; ?>
        - 
        <?php	echo $clubA3234; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3233+$A3234==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3233; echo " - ";echo $A3234; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1617; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1617; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"> 
    </td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3235; ?>
        - 
        <?php	echo $clubA3236; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3235+$A3236==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3235; echo " - ";echo $A3236; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1618; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1618; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8009; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8009; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA3237; ?>
        - 
        <?php	echo $clubA3238; ?>
      </div>
    </td>
    <td width="61" height="25"> 
      <div id="coin4" > 
        <?php if ($A3237+$A3238==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3237; echo " - ";echo $A3238; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="25">&nbsp;</td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA1619; ?>
      </div>
    </td>
    <td width="36" height="25"> 
      <div id="coin4" > 
        <?php	echo $A1619; ?>
      </div>
    </td>
    <td width="198" height="25"> 
      <div id="coin4" > 
        <?php	echo $clubA8010; ?>
      </div>
    </td>
    <td width="41" height="25"> 
      <div id="coin4" > 
        <?php	echo $A8010; ?>
      </div>
    </td>
    <td width="201" height="25">&nbsp;</td>
    <td width="31" height="25">&nbsp;</td>
    <td width="18" height="25">&nbsp;</td>
    <td width="201" height="25" align="left">&nbsp;</td>
    <td width="23" height="25">&nbsp;</td>
    <td width="198" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
    <td width="21" height="25">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4"> 
        <?php	echo $clubA3239; ?>
        - 
        <?php	echo $clubA3240; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3239+$A3240==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3239; echo " - ";echo $A3240; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1620; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1620; ?>
      </div>
    </td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4005; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4005; ?>
      </div>
    </td>
    <td rowspan="10"><img src="../../images/accolade.png" width="10" height="207"></td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="17"> 
      <div id="coin5" > 
        <?php	echo $clubA3241; ?>
        - 
        <?php	echo $clubA3242; ?>
      </div>
    </td>
    <td width="61" height="17"> 
      <div id="coin5" > 
        <?php if ($A3241+$A3242==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3241; echo " - ";echo $A3242; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="17">&nbsp;</td>
    <td width="198" height="17"> 
      <div id="coin5" > 
        <?php	echo $clubA1621; ?>
      </div>
    </td>
    <td width="36" height="17"> 
      <div id="coin5" > 
        <?php	echo $A1621; ?>
      </div>
    </td>
    <td rowspan="4" height="28"><img src="../../images/accolade.png" width="8" height="82"></td>
    <td width="198" height="17">&nbsp;</td>
    <td width="41" height="17">&nbsp;</td>
    <td width="201" height="17"> 
      <div id="coin4" > 
        <?php	echo $clubA4006; ?>
      </div>
    </td>
    <td width="31" height="17"> 
      <div id="coin4" > 
        <?php	echo $A4006; ?>
      </div>
    </td>
    <td width="201" align="left" height="17">&nbsp;</td>
    <td width="23" height="17">&nbsp;</td>
    <td width="198" height="17" valign="middle"> 
      <div id="Layer11" style="position:absolute; width:306px; height:33px; z-index:7; left: 1427px; top: 717px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
        <div align="center"> <b><font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">
          <?php if ($A1001>$A1002)
		echo $clubA1001;
		else
		echo $clubA1002;
		
		
		?>
          </font></b></div>
      </div>
    </td>
    <td width="21" height="17">&nbsp;</td>
    <td width="21" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3243; ?>
        - 
        <?php	echo $clubA3244; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3243+$A3244==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3243; echo " - ";echo $A3244; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1622; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1622; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8011; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8011; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3245; ?>
        - 
        <?php	echo $clubA3246; ?>
      </div>
    </td>
    <td width="61" height="11"> 
      <div id="coin5" > 
        <?php if ($A3245+$A3246==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3245; echo " - ";echo $A346; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA1623; ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1623; ?>
      </div>
    </td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA8012; ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8012; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="198" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3247; ?>
        - 
        <?php	echo $clubA3248; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5"> 
        <?php if ($A3247+$A3248==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3247; echo " - ";echo $A3248; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1624; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1624; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left"> 
      <div id="coin4" > 
        <?php	echo $clubA2003; ?>
      </div>
    </td>
    <td width="23"> 
      <div id="coin4" > 
        <?php	echo $A2003; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="18"> 
      <div id="coin4" > 
        <?php	echo $clubA3249; ?>
        - 
        <?php	echo $clubA3250; ?>
      </div>
    </td>
    <td width="61" height="18"> 
      <div id="coin4" > 
        <?php if ($A3249+$A3250==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3249; echo " - ";echo $A3250; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="18">&nbsp;</td>
    <td width="198" height="18"> 
      <div id="coin4" > 
        <?php	echo $clubA1625; ?>
      </div>
    </td>
    <td width="36" height="18"> 
      <div id="coin4" > 
        <?php	echo $A1625; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"> 
    </td>
    <td width="198" height="18">&nbsp;</td>
    <td width="41" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="201" height="18">&nbsp;</td>
    <td width="31" height="18">&nbsp;</td>
    <td width="201" align="left" height="18"> 
      <div id="coin4" > 
        <?php	echo $clubA2004; ?>
      </div>
    </td>
    <td width="23" height="18"> 
      <div id="coin4" > 
        <?php	echo $A2004; ?>
      </div>
    </td>
    <td width="198" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4" > 
        <?php	echo $clubA3251; ?>
        - 
        <?php	echo $clubA3252; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3251+$A3252==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3251; echo " - ";echo $A3252; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1626; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1626; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8013; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8013; ?>
      </div>
    </td>
    <td rowspan="6"><img src="../../images/accolade.png" width="8" height="127"></td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="5"> 
      <div id="coin4" > 
        <?php	echo $clubA3253; ?>
        - 
        <?php	echo $clubA3254; ?>
      </div>
    </td>
    <td width="61" height="5"> 
      <div id="coin4" > 
        <?php if ($A3253+$A3254==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3253; echo " - ";echo $A3254; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="5">&nbsp;</td>
    <td width="198" height="5"> 
      <div id="coin4" > 
        <?php	echo $clubA1627; ?>
      </div>
    </td>
    <td width="36" height="5"> 
      <div id="coin4" > 
        <?php	echo $A1627; ?>
      </div>
    </td>
    <td width="198" height="5"> 
      <div id="coin4" > 
        <?php	echo $clubA8014; ?>
      </div>
    </td>
    <td width="41" height="5"> 
      <div id="coin4" > 
        <?php	echo $A8014; ?>
      </div>
    </td>
    <td width="201" height="5">&nbsp;</td>
    <td width="31" height="5">&nbsp;</td>
    <td width="201" height="5" align="left">&nbsp;</td>
    <td width="23" height="5">&nbsp;</td>
    <td width="11" height="5">&nbsp;</td>
    <td width="198" height="5">&nbsp;</td>
    <td width="21" height="5">&nbsp;</td>
    <td width="21" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin4"> 
        <?php	echo $clubA3255; ?>
        - 
        <?php	echo $clubA3256; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin4" > 
        <?php if ($A3255+$A3256==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3255; echo " - ";echo $A3256; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA1628; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin4" > 
        <?php	echo $A1628; ?>
      </div>
    </td>
    <td width="198"> </td>
    <td width="41"> </td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4007; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4007; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3257; ?>
        - 
        <?php	echo $clubA3258; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3257+$A3258==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3257; echo " - ";echo $A3258; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1629; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1629; ?>
      </div>
    </td>
    <td rowspan="4"><img src="../../images/accolade.png" width="8" height="82"></td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="201"> 
      <div id="coin4" > 
        <?php	echo $clubA4008; ?>
      </div>
    </td>
    <td width="31"> 
      <div id="coin4" > 
        <?php	echo $A4008; ?>
      </div>
    </td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3259; ?>
        - 
        <?php	echo $clubA3260; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5" > 
        <?php if ($A3259+$A3260==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3259; echo " - ";echo $A3260; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1630; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1630; ?>
      </div>
    </td>
    <td width="198"> 
      <div id="coin4" > 
        <?php	echo $clubA8015; ?>
      </div>
    </td>
    <td width="41"> 
      <div id="coin4" > 
        <?php	echo $A8015; ?>
      </div>
    </td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA3261; ?>
        - 
        <?php	echo $clubA3262; ?>
      </div>
    </td>
    <td width="61" height="11"> 
      <div id="coin5" > 
        <?php if ($A3261+$A3262==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3261; echo " - ";echo $A3262; 
        }
        ?>
      </div>
    </td>
    <td width="32" height="11">&nbsp;</td>
    <td width="198" height="11"> 
      <div id="coin5" > 
        <?php	echo $clubA1631; ?>
      </div>
    </td>
    <td width="36" height="11"> 
      <div id="coin5" > 
        <?php	echo $A1631; ?>
      </div>
    </td>
    <td width="198" height="11"> 
      <div id="coin4" > 
        <?php	echo $clubA8016; ?>
      </div>
    </td>
    <td width="41" height="11"> 
      <div id="coin4" > 
        <?php	echo $A8016; ?>
      </div>
    </td>
    <td width="201" height="11">&nbsp;</td>
    <td width="31" height="11">&nbsp;</td>
    <td width="18" height="11">&nbsp;</td>
    <td width="201" height="11" align="left">&nbsp;</td>
    <td width="23" height="11">&nbsp;</td>
    <td width="11" height="11">&nbsp;</td>
    <td width="198" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="359"> 
      <div id="coin5" > 
        <?php	echo $clubA3263; ?>
        - 
        <?php	echo $clubA3264; ?>
      </div>
    </td>
    <td width="61"> 
      <div id="coin5"> 
        <?php if ($A3263+$A3264==0)
		echo "-";
		else
		{
		?>
        <?php echo $A3263; echo " - ";echo $A3264; 
        }
        ?>
      </div>
    </td>
    <td width="32">&nbsp;</td>
    <td width="198"> 
      <div id="coin5" > 
        <?php	echo $clubA1632; ?>
      </div>
    </td>
    <td width="36"> 
      <div id="coin5" > 
        <?php	echo $A1632; ?>
      </div>
    </td>
    <td width="198">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="201">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="201" align="left">&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="16" bgcolor="#FFCC66">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="16"> 
      <div align="center">
        <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
</table>
<div id="Layer11" style="position:absolute; width:306px; height:59px; z-index:7; left: 1427px; top: 655px; background-color: #FFFF00; layer-background-color: #FFFF00; border: 1px none #000000"> 
  <div align="center"> <font size="5"><b>Champion de France Honneur 
    <?php echo $annee;?>
    </b></font></div>
</div>
