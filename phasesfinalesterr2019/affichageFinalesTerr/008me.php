<?php
$bdcomiteClub = $comite.''."_clubs";
require ("../../connect1/connection2.php") ;
require ("../../phasesfinalesterr2019/fonctionspfterrESDL2019.php");
//affichage2019($division);
//nomDivision($division);
huitieme2019($comite, $division, $annee, $bdd);
afficheLieux ($division, $annee, $comite, $bdd);
?><head>
<link rel="stylesheet" type="text/css" href="../../phasesfinalesterr2019/qualification/qualification.css">
<link rel="stylesheet" type="text/css" href="../champTerr.css">

</head>


<table width="1000" border="0" align="left" height="500" cellspacing="0">
  <tr> 
    <td width="101" height="13">&nbsp;</td>
    <td width="101" height="13">&nbsp;</td>
    <td width="26" height="18">&nbsp;</td>
    <td width="95" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td width="160" height="18" align="left">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
    <td rowspan="26" height="284" bgcolor="#000000" width="6">&nbsp;</td>
    <td rowspan="28" height="304" valign="top" width="278"> 
      <?php  
	    // if ($comite == "ab")
	    // 		{
	    // 		if ($division==210)
		//		include("../../phasesfinalesterr2019/qualification/Q3me.php"); 
		//	else
		//     include("../../phasesfinalesterr2019/qualification/Qph.php");  
		//   	}
		// else
		//   {
		    require("../../pub/pub6.php"); 
		//   	}
		    ?>
    </td>
  </tr>
  <tr> 
    <td height="13"> </td>
    <td height="13" colspan="2"> 
      <div class="affichageTitre" >8me de finale</div>
    </td>
    <td width="95" height="18">&nbsp;</td>
    <td colspan="2" height="18"> 
      <div class="affichageTitre" >Quarts de finale</div>
    </td>
    <td width="21" height="18">&nbsp;</td>
    <td colspan="2" height="18" align="left"> 
      <div class="affichageTitre" >Demi finale</div>
    </td>
    <td width="22" height="18">&nbsp;</td>
    <td width="160" height="18"> 
      <div class="affichageTitre" >Finale</div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="13">&nbsp;</td>
    <td width="101" height="13"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        <?php echo $D8000; ?>
        </strong></i></b></font></div>
    </td>
    <td width="26" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="95" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="160" height="18"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        <?php echo $D4000; ?>
        </strong></i></b></font></div>
    </td>
    <td width="30" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="21" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="160" height="18" align="left"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        <?php echo $D2000; ?>
        </strong></i></b></font></div>
    </td>
    <td width="30" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="22" height="18"> 
      <div align="center"><i></i></div>
    </td>
    <td width="160" height="18"> 
      <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
        <?php echo $D1000; ?>
        </strong></i></b></font></div>
    </td>
    <td width="30" height="18">&nbsp;</td>
    <td width="21" height="18">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="13">&nbsp;</td>
    <td width="101" height="13">&nbsp;</td>
    <td width="26" height="18">&nbsp;</td>
    <td rowspan="6" height="33"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td width="160" height="18">&nbsp;</td>
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
    <td width="101" height="13">&nbsp;</td>
    <td width="101" height="13"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8001; ?>
      </div>
    </td>
    <td width="26" height="18"> 
      <div class="affichageGA" > 
        <?php echo $A8001 ?>
      </div>
    </td>
    <td width="160" height="18"> <font size="2" face="Arial, Helvetica, sans-serif"><i> 
      <?php echo $L4001; ?>
      </i></font></td>
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
    <td width="101">&nbsp;</td>
    <td width="101"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8002; ?>
      </div>
    </td>
    <td width="26"> 
      <div class="affichageGA" > 
        <?php	 echo $A8002; ?>
      </div>
    </td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4001; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php 	echo $A4001; ?>
      </div>
    </td>
    <td rowspan="8"><img src="../../images/accolade.png" width="12" height="172"></td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="15"></td>
    <td width="101" height="15"></td>
    <td width="26" height="15"></td>
    <td width="160" height="15"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4002; ?>
      </div>
    </td>
    <td width="30" height="15"> 
      <div class="affichageGA" > 
        <?php echo $A4002;  ?>
      </div>
    </td>
    <td width="160" align="left" height="15"></td>
    <td width="30" height="15">&nbsp;</td>
    <td width="22" height="15">&nbsp;</td>
    <td width="160" height="15">&nbsp;</td>
    <td width="30" height="15">&nbsp;</td>
    <td width="21" height="15">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101">&nbsp;</td>
    <td width="101"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8003; ?>
      </div>
    </td>
    <td width="26"> 
      <div class="affichageGA" > 
        <?php echo $A8003; ?>
      </div>
    </td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="160" align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $L2001; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="13">&nbsp;</td>
    <td width="101" height="13"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8004; ?>
      </div>
    </td>
    <td width="26" height="13"> 
      <div class="affichageGA" > 
        <?php echo $A8004; ?>
      </div>
    </td>
    <td width="160" height="13"></td>
    <td width="30" height="13">&nbsp;</td>
    <td width="160" height="13"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2001; ?>
      </div>
    </td>
    <td width="30" height="13"> 
      <div class="affichageGA" > 
        <?php echo $A2001; ?>
      </div>
    </td>
    <td rowspan="15"> 
      <div align="left"><img src="../../images/accolade.png" width="9" height="326"></div>
    </td>
    <td width="160" height="13">&nbsp;</td>
    <td width="30" height="13">&nbsp;</td>
    <td width="21" height="13">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="22"></td>
    <td width="101" height="22"></td>
    <td width="26" height="22"></td>
    <td width="95" height="22">&nbsp;</td>
    <td width="160" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td width="160" align="left" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2002; ?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A2002; ?>
      </div>
    </td>
    <td height="22" width="160">&nbsp;</td>
    <td height="22" width="30">&nbsp;</td>
    <td height="22" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="22">&nbsp;</td>
    <td width="101" height="22"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8005; ?>
      </div>
    </td>
    <td width="26" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A8005; ?>
      </div>
    </td>
    <td rowspan="5" height="71"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td width="160" height="22"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php  echo $L4003; ?>
      </strong></i></b></font></td>
    <td width="30" height="22">&nbsp;</td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td height="22" width="160">&nbsp;</td>
    <td height="22" width="30">&nbsp;</td>
    <td height="22" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="22">&nbsp;</td>
    <td width="101" height="22"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8006; ?>
      </div>
    </td>
    <td width="26" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A8006; ?>
      </div>
    </td>
    <td width="160" height="22"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4003;?>
      </div>
    </td>
    <td width="30" height="22"> 
      <div class="affichageGA" > 
        <?php echo $A4003;  ?>
      </div>
    </td>
    <td width="160" align="left" height="22">&nbsp;</td>
    <td width="30" height="22">&nbsp;</td>
    <td height="22" width="160"></td>
    <td height="22" width="30"></td>
    <td height="22" width="21"></td>
  </tr>
  <tr> 
    <td width="101" height="11"></td>
    <td width="101" height="11"> </td>
    <td width="26" height="11"> </td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4004;?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php 	echo $A4004;  ?>
      </div>
    </td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="160"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $L1001; ?>
      </strong></i></b></font> </td>
    <td width="30"> </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="11">&nbsp;</td>
    <td width="101" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8007; ?>
      </div>
    </td>
    <td width="26" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A8007; ?>
      </div>
    </td>
    <td width="160" height="11">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="21" height="11">&nbsp;</td>
    <td width="160" height="11" align="left">&nbsp;</td>
    <td width="30" height="11">&nbsp;</td>
    <td width="160" height="11"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1001;  ?>
      </div>
    </td>
    <td width="30" height="11"> 
      <div class="affichageGA" > 
        <?php echo $A1001; ?>
      </div>
    </td>
    <td width="21" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="16">&nbsp;</td>
    <td width="101" height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8008; ?>
      </div>
    </td>
    <td width="26" height="16"> 
      <div class="affichageGA" > 
        <?php echo $A8008; ?>
      </div>
    </td>
    <td width="160" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="21" height="16">&nbsp;</td>
    <td width="160" align="left" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td height="16" width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA1002;  ?>
      </div>
    </td>
    <td height="16" width="30"> 
      <div class="affichageGA" > 
        <?php echo $A1002;  ?>
      </div>
    </td>
    <td height="16" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="27"></td>
    <td width="101" height="27"> </td>
    <td width="26" height="27">&nbsp; </td>
    <td width="95" height="27">&nbsp;</td>
    <td width="160" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td width="21" height="27">&nbsp;</td>
    <td width="160" align="left" height="27">&nbsp;</td>
    <td width="30" height="27">&nbsp;</td>
    <td height="27" width="160"></td>
    <td height="27" width="30"></td>
    <td height="27" width="21"></td>
  </tr>
  <tr valign="top"> 
    <td width="101" height="14">&nbsp;</td>
    <td width="101" height="14"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8009; ?>
      </div>
    </td>
    <td width="26" height="14"> 
      <div class="affichageGA" > 
        <?php echo $A8009; ?>
      </div>
    </td>
    <td rowspan="5" height="83"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td width="160" height="14">&nbsp;</td>
    <td width="30" height="14">&nbsp;</td>
    <td width="21" height="14">&nbsp;</td>
    <td width="160" height="14" align="left"></td>
    <td width="30" height="14">&nbsp;</td>
    <td height="14" colspan="2"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>Champion 
        <i><strong>
        <?php	 //echo $nomDivision.''.$annee; ?>
        </strong></i> <i><strong> </strong></i> <i><strong> </strong></i> <i><strong> 
        </strong><strong> </strong></i></b></font></div>
    </td>
    <td height="14" width="21">&nbsp;</td>
  </tr>
  <tr valign="top"> 
    <td width="101" height="6">&nbsp;</td>
    <td width="101" height="6"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8010; ?>
      </div>
    </td>
    <td width="26" height="6"> 
      <div class="affichageGA" > 
        <?php echo $A8010; ?>
      </div>
    </td>
    <td width="160" height="6"><font size="2" face="Arial, Helvetica, sans-serif"> 
      <b><i><strong> 
      <?php  echo $L4005;  ?>
      </strong></i></b><strong> </strong> </font></td>
    <td width="30" height="6">&nbsp;</td>
    <td width="21" height="6">&nbsp;</td>
    <td width="160" height="6" align="left"></td>
    <td width="30" height="6">&nbsp;</td>
    <td colspan="2"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b><i><strong>
        <?php	 echo $annee; ?>
        </strong></i></b></font></div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="25"></td>
    <td width="101" height="25"> </td>
    <td width="26" height="25"> </td>
    <td width="160" height="25"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4005;?>
      </div>
    </td>
    <td width="30" height="25"> 
      <div class="affichageGA" > 
        <?php echo $A4005;  ?>
      </div>
    </td>
    <td rowspan="8" height="83"><img src="../../images/accolade.png" width="12" height="172"></td>
    <td width="160" align="left" height="25">&nbsp;</td>
    <td width="30" height="25">&nbsp;</td>
    <td height="43" rowspan="4" valign="middle" colspan="2"> 
      <div align="center"><img src="<?php echo $champLogo;  ?>"> </div>
      <div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"> 
        </font></b></div>
      <div align="center"></div>
      <div align="center"></div>
    </td>
    <td height="25" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="20">&nbsp;</td>
    <td width="101" height="20"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA8011; ?>
      </div>
    </td>
    <td width="26" height="20"> 
      <div class="affichageGA" > 
        <?php	 echo $A8011; ?>
      </div>
    </td>
    <td width="160" height="20"> 
      <div class="affichageEquipe" > 
        <?php	 echo $clubA4006; ?>
      </div>
    </td>
    <td width="30" height="20"> 
      <div class="affichageGA" > 
        <?php 	echo $A4006; ?>
      </div>
    </td>
    <td width="160" align="left" height="20"></td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="18">&nbsp;</td>
    <td width="101" height="18"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8012; ?>
      </div>
    </td>
    <td width="26" height="18"> 
      <div class="affichageGA" > 
        <?php echo $A8012; ?>
      </div>
    </td>
    <td width="160" height="18">&nbsp;</td>
    <td width="30" height="18">&nbsp;</td>
    <td width="160" align="left" height="18"><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php	 echo $L2003; ?>
      </strong></i></b></font></td>
    <td width="30" height="18">&nbsp;</td>
    <td height="18" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101">&nbsp;</td>
    <td width="101">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="95">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="160" align="left"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2003; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A2003; ?>
      </div>
    </td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="16">&nbsp;</td>
    <td width="101" height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8013; ?>
      </div>
    </td>
    <td width="26" height="16"> 
      <div class="affichageGA" > 
        <?php echo $A8013; ?>
      </div>
    </td>
    <td rowspan="5" height="59"><img src="../../images/accolade.png" width="8" height="98"></td>
    <td width="160" height="16">&nbsp;</td>
    <td width="30" height="16">&nbsp;</td>
    <td width="160" align="left" height="16"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA2004; ?>
      </div>
    </td>
    <td width="30" height="16"> 
      <div class="affichageGA" > 
        <?php echo $A2004; ?>
      </div>
    </td>
    <td rowspan="2" height="16" valign="top" colspan="2"> 
      <div align="center"><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif"> 
        <?php  echo $champion;   ?>
        </font></b></div>
    </td>
    <td width="21" height="16">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101">&nbsp;</td>
    <td width="101"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8014; ?>
      </div>
    </td>
    <td width="26"> 
      <div class="affichageGA" > 
        <?php echo $A8014; ?>
      </div>
    </td>
    <td width="160"> <strong><font size="2" face="Arial, Helvetica, sans-serif"><b><i><strong> 
      <?php  echo $L4007 ?>
      </strong></i></b></font> </strong></td>
    <td width="30">&nbsp;</td>
    <td width="160" align="left"> </td>
    <td width="30"> </td>
    <td width="22">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101"></td>
    <td width="101"> </td>
    <td width="26">&nbsp; </td>
    <td width="160"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4007; ?>
      </div>
    </td>
    <td width="30"> 
      <div class="affichageGA" > 
        <?php echo $A4007;  ?>
      </div>
    </td>
    <td width="160" align="left">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="23">&nbsp;</td>
    <td width="101" height="23"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8015; ?>
      </div>
    </td>
    <td width="26" height="23"> 
      <div class="affichageGA" > 
        <?php echo $A8015; ?>
      </div>
    </td>
    <td width="160" height="23"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA4008; ?>
      </div>
    </td>
    <td width="30" height="23"> 
      <div class="affichageGA" > 
        <?php echo $A4008; ?>
      </div>
    </td>
    <td width="160" align="left" height="23">&nbsp;</td>
    <td width="30" height="23">&nbsp;</td>
    <td height="23" width="22">&nbsp;</td>
    <td height="23" width="160">&nbsp;</td>
    <td height="23" width="30">&nbsp;</td>
    <td height="23" width="21">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101" height="20">&nbsp;</td>
    <td width="101" height="20"> 
      <div class="affichageEquipe" > 
        <?php echo $clubA8016; ?>
      </div>
    </td>
    <td width="26" height="20"> 
      <div class="affichageGA" > 
        <?php echo $A8016; ?>
      </div>
    </td>
    <td width="160" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td width="21" height="20">&nbsp;</td>
    <td width="160" align="left" height="20">&nbsp;</td>
    <td width="30" height="20">&nbsp;</td>
    <td height="20" width="22">&nbsp;</td>
    <td height="20" width="160">&nbsp;</td>
    <td height="20" width="30">&nbsp;</td>
    <td height="20" width="21">&nbsp;</td>
    <td height="20" width="6">&nbsp;</td>
  </tr>
  <tr> 
    <td width="101">&nbsp;</td>
    <td width="101">&nbsp; </td>
    <td width="26">&nbsp;</td>
    <td width="95">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="22">&nbsp;</td>
    <td width="160">&nbsp;</td>
    <td width="30">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="6">&nbsp;</td>
  </tr>
  <tr> 
    <td height="22" colspan="15" bgcolor="#FFCC66">&nbsp;</td>
  </tr>
  <tr> 
    <td height="22" colspan="15"> 
      <div align="center"> 
        <?php require("../../pub/pub1.php"); ?>
        
      </div>
    </td>
  </tr>
</table>
 
<br>

<?php 

//if ($comite == "ab" and $division < '210')
//require 'tabQualifFrancePHS1S2.php';

?>
